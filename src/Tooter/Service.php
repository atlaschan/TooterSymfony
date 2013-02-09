<?php

namespace Tooter;

use Tooter\Model\SDK\DefaultStormpathService;

class Service
{
	const SUCCESS = "Succeeded";
	const FAILED = "Failed";
	
	public static function getStormpath($application_property)
	{
		
		return DefaultStormpathService::make($application_property);
	}
	
	public static function parse_property_file($file)
	{
		$content = file_get_contents($file, true); // use set include path to search for the file
		
		$target = array();
		preg_match_all("/([0-9a-zA-Z\\.]+\\s*)=(.+)/", $content, $match);
		
		if(empty($match))
			return $target;
		for($index = 0; $index < count($match[1]); $index++)
		{
			$target[trim($match[1][$index])] = trim($match[2][$index]);
		}
		return $target;
	}
	
	public static function redirect($page)
	{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/$page");
	}
}