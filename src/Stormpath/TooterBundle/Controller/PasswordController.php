<?php

namespace Stormpath\TooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tooter\Service;
use Tooter\Model\Dao\DefaultCustomerDao;
use Tooter\Model\User;
use Tooter\Model\Status;
use Tooter\Model\Error; 
use Tooter\Form\ResetPasswordForm;
use Tooter\Validator\ResetPasswordValidator;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class PasswordController extends Controller
{
	private $stormpath;
	
	/**
	 * @Route("/reset-password", name="_reset_password")
	 * @Template()
	 */
    public function resetPasswordAction()
    {
		require "stormpathconfig/vars.php";
		
		$request = $this->get('request');
		if ('POST' == $request->getMethod()) 
		{
			$user = new User();
			$data = $request->request->all();
			
			//bind the data
			$user->exchangeArray($data);
			
			$this->stormpath = $stormpath; //initializing the service
			
			
			$user->exchangeArray($data);
			
			$status = $this->processResetPassword($user, $user->getEmail());
			if($status->getStatus() == Service::SUCCESS)
			{
				return $this->redirect($this->generateUrl('_reset_password_msg'));
				return $this->redirect()->toRoute('reset-password-msg');
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
	
	
	private function processResetPassword($customer, $email)
	{
		$resetPasswordValidator = new ResetPasswordValidator;
		$checked = $resetPasswordValidator->validate($email);
		if(!empty($checked))
			return $checked;
		
		$status = new Status();
		
		try
		{
			$this->stormpath->getApplication()->sendPasswordResetEmail($email);
			$status->setStatus(Service::SUCCESS);
		}
		catch(\Exception $e)
		{
			$status->setStatus(Service::FAILED);
			$status->setError(new Error("password.errors", "errorblock", $e->getMessage()));
		}
		
		return $status;
	}
	
	
	/**
	 * @Route("/reset-password-msg", name="_reset_password_msg")
	 * @Template()
	 */
	public function resetPasswordMsgAction()
	{
		require "stormpathconfig/vars.php";
		
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property,
					'error'=>null);
	}
	
	public function changePasswordAction()
	{
		require "stormpathconfig/vars.php";
		
		return array('messages'=>$messages,	
					'base_directory'=>$base_directory,	
					'current_directory'=>$current_directory,	
					'application_property'=>$application_property);
	}

}

?>