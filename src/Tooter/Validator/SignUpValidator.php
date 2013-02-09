<?php

namespace Tooter\Validator;

use Tooter\Model\Status;
use Tooter\Model\Error;
use Tooter\Service;

class SignUpValidator
	implements Validator
{
	public function validate($obj)
	{
		$email = $obj->getEmail();
		$email = trim($email);
		if(empty($email))
			return $this->report("signup.errors", "errorblock", "signUp.required.email");
			
		$firstName = $obj->getFirstName();
		$firstName = trim($firstName);
		if(empty($firstName))
			return $this->report("signup.errors", "errorblock", "signUp.required.firstName");
		
		$lastName = $obj->getLastName();
		$lastName = trim($lastName);
		if(empty($lastName))
			return $this->report("signup.errors", "errorblock", "signUp.required.lastName");
			
		$password = $obj->getPassword();
		$password = trim($password);
		if(empty($password))
			return $this->report("signup.errors", "errorblock", "singUp.required.password");
			
		$confirmPassword = $obj->getConfirmPassword();
		$confirmPassword = trim($confirmPassword);
		if(empty($password) or (!empty($password) and $password != $confirmPassword))
			return $this->report("signup.errors", "errorblock", "signUp.required.confirm.password");
		
		return null;
	}
	
	private function report($id, $styleClass, $message)
	{
		$status = new Status;
		$status->setStatus(Service::FAILED);
		$status->setError(new Error($id, $styleClass, $message));
		return $status;
	}
}