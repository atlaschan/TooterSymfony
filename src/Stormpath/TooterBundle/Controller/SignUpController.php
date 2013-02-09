<?php

namespace Stormpath\TooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tooter\Service;
use Tooter\Model\Dao\DefaultCustomerDao;
use Tooter\Model\User;
use Tooter\Model\Status;
use Tooter\Model\Error; 
use Tooter\Form\SignUpForm;
use Tooter\Validator\SignUpValidator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
	Login Controller and Logout Controller
*/
class SignUpController extends Controller
{
	private $stormpath;
	
	/**
	 * @Route("/sign-up", name="_sign_up")
	 * @Template()
	 */
    public function signUpAction()
    {
		require "stormpathconfig/vars.php";
		
		$request = $this->get('request');
		if ('POST' == $request->getMethod()) 
		{
			$user = new User();
			
			$data = $request->request->all();
			$user->exchangeArray($data);
			
			$this->stormpath = $stormpath; //initializing the service
				
			$user->exchangeArray($data);
			
			$status = $this->processSubmit($user);
			
			if($status->getStatus() == Service::SUCCESS)
			{
				$obj = $status->getObj();
				$_SESSION["user"] = $obj["user"];
				return $this->redirect($this->generateUrl('_tooter'));
			}
			else
			{
				$error = $status->getError();
				return array('messages'=>$messages,	
							'base_directory'=>$base_directory,	
							'current_directory'=>$current_directory,	
							'application_property'=>$application_property,
							'error'=>$error);
			}
		}
		/*
		if($request->isPost())
		{	
			$user = new User();
			
			$form->setData($request->getPost());
			if ($form->isValid()) {
				
				$this->stormpath = $stormpath; //initializing the service
				
                $user->exchangeArray($form->getData());
				
				$status = $this->processSubmit($user);
				
				if($status->getStatus() == Service::SUCCESS)
				{

					return $this->redirect()->toRoute('tooter');
				}
				else
				{
					$error = $status->getError();
					return array('form' => $form, 'messages'=>$messages,	'base_directory'=>$base_directory,	
						'current_directory'=>$current_directory,	'application_property'=>$application_property,
						'error'=>$error);
				}
            }
		}
		*/
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property,
					'error'=>null);
    }

	
	private function processSubmit($user)
	{
		$signUpValidator = new SignUpValidator;
		$checked = $signUpValidator->validate($user);
		if(!empty($checked))
			return $checked;
		
		$status = new Status();
		
		//$returnStatus = array();
		try{
			$userName = strtolower($user->getFirstName()) + strtolower($user->getLastName());
			
			// Create the account in the Directory where the Tooter application belongs.
			$directory = $this->stormpath->getDataStore()->getResource($this->stormpath->getDirectoryURL(), \Services_Stormpath::DIRECTORY);
			
			$account = $this->stormpath->getDataStore()->instantiate(\Services_Stormpath::ACCOUNT);
			$account->setEmail($user->getEmail());
			$account->setGivenName($user->getFirstName());
			$account->setPassword($user->getPassword());
			$account->setSurname($user->getLastName());
			$account->setUsername($userName);
			
			$account = $directory->createAccount($account);
			
			$user->setUserName($userName);
			$this->customerDao->save($user);
			
			$status->setStatus(Service::SUCCESS);
			$status->setObj(array("user"=>$user));
		}
		catch (\Exception $e)
		{
			$status->setStatus(Service::FAILED);
			$status->setError(new Error("signup.errors", "errorblock", $e->getMessage()));
		}
		
		return $status;
	}
	
}

?>