<?php

namespace Tooter\Validator;

use Tooter\Model\Status;
use Tooter\Model\Error;
use Tooter\Service;

class ProfileValidator
	implements Validator
{
	public function validate($obj)
	{
		$email = $obj->getEmail();
		$email = trim($email);
		if(empty($email))
			return $this->report("profile.errors", "errorblock", "profile.required.email");
			
		$firstName = $obj->getFirstName();
		$firstName = trim($firstName);
		if(empty($firstName))
			return $this->report("profile.errors", "errorblock", "profile.required.firstName");
		
		$lastName = $obj->getLastName();
		$lastName = trim($lastName);
		if(empty($lastName))
			return $this->report("profile.errors", "errorblock", "profile.required.lastName");
		
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