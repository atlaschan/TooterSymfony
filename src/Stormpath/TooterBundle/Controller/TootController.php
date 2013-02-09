<?php

namespace Stormpath\TooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tooter\Service;
use Tooter\Model\Dao\DefaultTootDao;
use Tooter\Model\Toot;
use Tooter\Model\Status;
use Tooter\Model\Error; 
use Tooter\Model\User;
use Tooter\Form\TootForm;
use Tooter\Validator\TootValidator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
	Login Controller and Logout Controller
*/
class TootController extends Controller
{
	private $stormpath;
	
		
	/**
	 * @Route("/tooter", name="_tooter")
	 * @Template()
	 */
    public function tooterAction()
    {
		require "stormpathconfig/vars.php";
		
		if(!isset($_SESSION["user"]))
		{
			return $this->redirect($this->generateUrl('_login'));
		} 
		
		$request = $this->get('request');
		if ('POST' == $request->getMethod()) 
		{
			$toot = new Toot();
			
			$data = $request->request->all();
			$toot->exchangeArray($data);
			
			$this->stormpath = $stormpath; //initializing the service
			
			$status = $this->submit($toot);
			
			if($status->getStatus() == Service::SUCCESS)
			{

				return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property,
					'user'=>$_SESSION["user"]);
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
		$form = new TootForm();
		$request = $this->getRequest();
		
		if($request->isPost())
		{
			$toot = new Toot();
			
			$form->setData($request->getPost());
			if ($form->isValid()) {
				
				$this->stormpath = $stormpath; //initializing the service
				
                $toot->exchangeArray($form->getData());
				
				$status = $this->submit($toot);
				
				if($status->getStatus() == Service::SUCCESS)
				{

					return array('messages'=>$messages,	
						'base_directory'=>$base_directory,	
						'current_directory'=>$current_directory,	
						'application_property'=>$application_property,
						'user'=>$_SESSION["user"]);
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
		}
		*/
		$user = (isset($_SESSION["user"])) ? $_SESSION["user"] : null;
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property,
					'user'=> $user,
					'error'=>null);
    }
	
	private function submit($toot)
	{
		$tootValidator = new TootValidator;
		$status = new Status();
	
		$checked = $tootValidator->validate($toot);
		if(!empty($checked))
			return $checked;
		
		//act on the user stored in the session directly and so no reutrn value is needed for representing user
		$user = $_SESSION["user"];
		$persistCustomer = User::constructWithUser($user);
		
		$tootList;
		$persistToot = new Toot;
		$persistToot->setTootMessage($toot->getTootMessage());
        $persistToot->setCustomer($persistCustomer);
		
		$tootDao = new DefaultTootDao($this->stormpath->getConnector());
		
		try
		{
			$tootDao->saveToot($persistToot);
			$toot->setTootId($persistToot->getTootId());
			
			
			$tootList = $tootDao->getTootsByUserId($persistCustomer->getId());

			foreach ($tootList as $key=>$itemToot) {
				$itemToot->setCustomer($user);
			}

			krsort($tootList, \SORT_NUMERIC);
			$user->setTootList($tootList);
			
			$status->setStatus(Service::SUCCESS);
			
		}
		catch(\Exception $e)
		{
			$status->setStatus(Service::FAILED);
		}
		
		return $status;
	}

}

?>