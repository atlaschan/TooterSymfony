<?php

namespace Tooter\Util;

class PermissionUtil
{
	private $administratorGroupURL;
	
	private $premiumGroupURL;
	
	//private $stormpath;
	
	public function __construct($application_property)
	{	
		$this->administratorGroupURL = $application_property["stormpath.sdk.administrator.rest.url"];
		$this->premiumGroupURL = $application_property["stormpath.sdk.premium.rest.url"];
	}
	
	public function hasRole($user, $role)
	{
		$hasRole = false;
		$memberships = $user->getAccount()->getGroupMemberships();
		foreach($memberships as $membership)
		{
			$groupHref = $membership->getGroup()->getHref();
			if($role == "ADMINISTRATOR")
				$hasRole = ($groupHref == $this->administratorGroupURL);
			else if($role == "PREMIUM_USER")
				$hasRole = ($groupHref == $this->premiumGroupURL);
		}
		return $hasRole;
	}
}