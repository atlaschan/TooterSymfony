<?php

namespace Tooter\Model;


class User
{
	private $id;
	
	private $userName;
	
	private $password;  //used during password set/reset only.  Do NOT store users' passwords - let Stormpath do that safely for you.
	
	private $confirmPassword;  //used during password set/reset only.
	
	private $sptoken;
	
	private $firstName;
	
	private $lastName;
	
	private $email;
	
	private $groupUrl;
	
	private $tootList;
	
	private $account;
	
	const NO_GROUP = "Basic";
	
	protected $inputFilter; 
	
	public function __construct()
	{
		
	}
	
	public static function constructWithUser($user)
	{
		$obj = new User();
		if(!empty($user))
		{
			$obj->setAccount($user->getAccount());
            $obj->setConfirmPassword($user->getConfirmPassword());
			$obj->setEmail($user->getEmail());
            $obj->setFirstName($user->getFirstName());
            $obj->setId($user->getId());
            $obj->setLastName($user->getLastName());
            $obj->setPassword($user->getPassword());
            $obj->setTootList($user->getTootList());
            $obj->setUserName($user->getUserName());
		}
		return $obj;
	}
	
	public static function constructWithAccount($account)
	{
		$obj = new User();
		if(!empty($account))
		{
			$obj->setEmail($account->getEmail());
            $obj->setFirstName($account->getGivenName());
            $obj->setLastName($account->getSurname());
            $obj->setUserName($account->getUsername());
            $obj->setAccount($account);
		}
		return $obj;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getTootList()
	{
		return $this->tootList;
	}
	
	public function setTootList($tootList)
	{
		$this->tootList = $tootList;
	}
	
	 /**
     * Return the email associated with this user. If available, use the Stormpath SDK Account value, otherwise return the
     * local property. We do this because the user class is a form backing bean for authentication, profile updates, etc.
     *
     * @return the email from the Stormpath SDK Account object if the account is not null, otherwise return the underlying property
     */
	 public function getEmail()
	 {
		return !empty($this->account) ? $this->account->getEmail() : $this->email;
	 }
	 
	 public function setEmail($email)
	 {
		$this->email = $email;
	 }
	 
	 public function getPassword()
	 {
		return $this->password;
	 }
	 
	 public function setPassword($password)
	 {
		$this->password = $password;
	 }
	 
	/**
     * Return the username associated with this user. If available, use the Stormpath SDK Account value, otherwise return the
     * local property. We do this because the user class is a form backing bean for authentication, profile updates, etc.
     */
	 public function getUserName()
	 {
		return !empty($this->account) ? $this->account->getUsername() : $this->userName;
	 }
	 
	 public function setUserName($userName)
	 {
		if(!empty($this->account))
			$this->account->setUsername($userName);
		else
			$this->userName = $userName;
	 }
	 
	 public function getConfirmPassword()
	 {
		return $this->confirmPassword;
	 }
	 
	 public function setConfirmPassword($confirmPassword)
	 {
		$this->confirmPassword = $confirmPassword;
	 }
	 
	 public function getSptoken()
	 {
		return $this->sptoken;
	 }
	 
	 public function setSptoken($sptoken)
	 {
		$this->sptoken = $sptoken;
	 }
	 
	 /**
     * Return the first name associated with this user. If available, use the Stormpath SDK Account value, otherwise return the
     * local property. We do this because the user class is a form backing bean for authentication, profile updates, etc.
     *
     * @return the first name from the Stormpath SDK Account object if the account is not null, otherwise return the underlying property
     */
	 
	 public function getFirstName()
	 {
		return !empty($this->account) ? $this->account->getGivenName() : $this->firstName;
	 }
	 
	 public function setFirstName($firstName)
	 {
		if(!empty($this->account))
			$this->account->setGivenName($firstName);
		else
			$this->firstName = $firstName;
	 }
	 
	 
	  /**
     * Return the last name associated with this user. If available, use the Stormpath SDK Account value, otherwise return the
     * local property. We do this because the user class is a form backing bean for authentication, profile updates, etc.
     *
     * @return the last name from the Stormpath SDK Account object if the account is not null, otherwise return the underlying property
     */
	 public function getLastName()
	 {
		return !empty($this->account) ? $this->account->getSurname() : $this->lastName;
	 }
	 
	 public function setLastName($lastName)
	 {
		if(!empty($this->account))
			$this->account->setSurname($lastName);
		else
			$this->lastName = $lastName;
	 }
	 
	 public function getAccount()
	 {
		return $this->account;
	 }
	 
	 public function setAccount($account)
	 {
		$this->account = $account;
	 }
	 
	 /**
     * Return the name of the group for this user.
     *
     * @return the name of the group associated with this user, or "Basic" if the user is not assigned to any groups in Stormpath
     */
	 public function getGroupName()
	 {
		$memberships = $this->account->getGroupMemberships();
		$groupName = self::NO_GROUP;
		foreach($memberships as $membership)
			$groupName = $membership->getGroup()->getName();
		return $groupName;
	 }
	 
	 public function getGroupUrl()
	 {
		return $this->groupUrl();
	 }
	 
	 
	 public function setGroupUrl($groupUrl)
	 {
		$this->groupUrl = $groupUrl;
	 }
	 
	public function exchangeArray($data)
    {
        $this->userName     = (isset($data['userName']))     ? $data['userName']     : null;
        $this->password = (isset($data['password'])) ? $data['password'] : null;
		$this->email	= (isset($data['email'])) ? $data['email'] : null;
		$this->firstName	= (isset($data['firstName'])) ? $data['firstName'] : null;
		$this->lastName	= (isset($data['lastName'])) ? $data['lastName'] : null;
		$this->confirmPassword	= (isset($data['confirmPassword'])) ? $data['confirmPassword'] : null;
    }
}