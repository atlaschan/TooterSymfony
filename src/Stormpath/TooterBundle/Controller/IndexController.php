<?php

namespace Stormpath\TooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tooter\Service;
use Tooter\Model\Dao\DefaultCustomerDao;
use Tooter\Model\User;
use Tooter\Model\Status;
use Tooter\Model\Error; 
use Tooter\Form\LoginForm;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
	Login Controller and Logout Controller
*/
class IndexController extends Controller
{
	private $stormpath;
	
	/**
     * @Route("/login", name="_login")
     * @Template()
     */
    public function loginAction()
    {
		require "stormpathconfig/vars.php";
		
		$request = $this->get('request');
		if ('POST' == $request->getMethod()) 
		{
			$user = new User();
			
			$data = $request->request->all();
			$user->exchangeArray($data);
			
			$this->stormpath = $stormpath; //initializing the service
	
			$status = $this->submit($user);
			
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
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property,
					'error'=>null);
    }
	
	public function indexAction()
	{
		return $this->redirect($this->generateUrl('_login'));
	}
	
	/*
	* Handle the main logic of authentication
	*/
	private function submit($customer)
	{
		$customerDao = new DefaultCustomerDao($this->stormpath->getConnector());
		
		$status = new Status();
		
		try
		{
			$request = new \Services_Stormpath_Authc_UsernamePasswordRequest($customer->getUserName(), $customer->getPassword());
			
			$authcResult = $this->stormpath->getApplication()->authenticateAccount($request);
			
			$account = $authcResult->getAccount();
			
			$user = User::constructWithAccount($account);
			
			$dbCustomer = $customerDao->getCustomerByUserName($customer->getUserName());
			if(empty($dbCustomer))
				$customerDao->saveCustomer($user);
			if($dbCustomer != null)
				$user->setId($dbCustomer->getId());
			
			if(!empty($user))
			{
				$status = new Status();
				$status->setStatus(Service::SUCCESS);
				$status->setObj(array("user"=>$user));
			} 
		} 
		catch(\Exception $e)
		{
			$status = new Status();
			$status->setStatus(Service::FAILED);
			$status->setError(new Error("customer.errors", "help-block", $e->getMessage()));
		}
		
		return $status;
		
	}
	
	
	/**
     * @Route("/logout", name="_logout")
     * @Template()
     */
	public function logoutAction()
	{
		require "stormpathconfig/vars.php";
	
		if(isset($_SESSION["user"]))
			unset($_SESSION["user"]);
			
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property);
	}
}

?>