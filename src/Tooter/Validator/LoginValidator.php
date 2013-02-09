<?php

namespace Tooter\Validator;

use Tooter\Model\Status;
use Tooter\Model\Error;
use Tooter\Service;

class LoginValidator
	implements Validator
{
	
	public function validate($obj)
	{
		$userName = $obj->getUserName();
		$password = $obj->getPassword();
		$userName = trim($userName);
		$password = trim($password);
		return empty($userName) or empty($password);
	}
}