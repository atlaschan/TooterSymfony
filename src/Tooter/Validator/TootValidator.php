<?php

namespace Tooter\Validator;

use Tooter\Model\Status;
use Tooter\Model\Error;
use Tooter\Service;


class TootValidator
	implements Validator
{
	/**
	* Only return a status when one error is detected.
	*/
	public function validate($obj)
	{
		$message = $obj->getTootMessage();
		$message = trim($message);
		if(empty($message))
		{
			$status = new Status;
			$status->setStatus(Service::FAILED);
			//the last parameter being the error message key and its linked value is stored in message.properties file
			$status->setError(new Error("toot.errors", "errorblock", "tooter.required")); 

			return $status;
		}
		
		if(strlen($message) > 200)
		{
			$status = new Status;
			$status->setStatus(Service::FAILED);
			$status->setError(new Error("toot.errors", "errorblock", "tooter.too.many.chars"));
			return $status;
		}
		
		return null;
	}
}