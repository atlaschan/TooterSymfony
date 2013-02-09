<?php
namespace Tooter\Util;

use Tooter\Model\User;
use Tooter\Model\Toot;

class Connector
{
	private $dbName;
	
	private $username;
	
	private $password;
	
	private $mysql;
	
	public function __construct($username, $password, $dbName)
	{
		$this->dbName = $dbName;
		$this->username = $username;
		$this->password = $password;
		
		if(!empty($this->username) and !empty($this->password) and !empty($this->dbName))
		{
			try{
				$this->mysql = new \mysqli("localhost", $this->username, $this->password, $dbName);
			} 
			catch(\Exception $e)
			{
				
			}
		}
	}
	
	private function query($query)
	{
		return $this->mysql->query($query);
	}
	
	public function save($obj)
	{
		if($obj instanceof User)
		{
			$query = "insert into T_ACCOUNT(userName) values('".$obj->getUserName()."')";
			$this->query($query);
			
			$customers = $this->get("T_ACCOUNT", $obj->getUserName());
			if(!empty($customers))
			{
				$customer = $customers[0];
				$obj->setId($customer->getId());
			}
		} 
		else if ($obj instanceof Toot)
		{
			$query = "insert into T_TOOT(tootMessage, custId) values('".$obj->getTootMessage()."', ".$obj->getCustomer()->getId().")";
			$this->query($query);
			
			$list = $this->get("T_TOOT", $obj->getCustomer()->getId());
			if(!empty($list))
			{
				foreach($list as $key=>$value)
				{
					if($value->getTootMessage() == $obj->getTootMessage())
						$obj->setTootId($value->getTootId()); //duplicate message is possible, so map it to the last one, no break needed
				}
			}
		}
	}
	
	public function get($table, $value)
	{
		$list = array();
		if($table == "T_ACCOUNT")
		{
			$query = "select * from T_ACCOUNT where userName='$value'";
			$result = $this->query($query);
			if($result)
			{
				while($row = $result->fetch_row())
				{
					$user = new User();
					$user->setId($row[0]);
					$user->setUserName($row[1]);
					$list[] = $user;
				}
			}
		}
		else if ($table == "T_TOOT")
		{
			$query = "select * from T_TOOT where custId=$value";
			$result = $this->query($query);
			if($result)
			{
				while($row = $result->fetch_row())
				{
					$toot = new Toot();
					$toot->setTootId($row[0]);
					$toot->setTootMessage($row[1]);
					
					$customers = $this->get("T_ACCOUNT", $row[2]);
					if(!empty($customers))
						$toot->setCustomer($customers[0]);
					else
						$toot->setCustomer(null);
					
					$list[$row[0]] = $toot; //use id as key so we can sort the array via the key
				}
			}
		}
		return $list;
	}
}
