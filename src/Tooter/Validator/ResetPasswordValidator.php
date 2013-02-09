<?php

namespace Tooter\Validator;

use Tooter\Model\Status;
use Tooter\Model\Error;
use Tooter\Service;

class ResetPasswordValidator
	implements Validator
{

	public function validate($obj)
	{
		$email = trim($obj);
		if(empty($email))
		{
			$status = new Status;
			$status->setStatus(Service::FAILED);
			$status->setError(new Error("password.errors", "errorblock", "reset.password.required.email"));
			return $status;
		}
		return null;
	}
}