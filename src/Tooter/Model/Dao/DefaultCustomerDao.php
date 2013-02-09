<?php

namespace Tooter\Model\Dao;

class DefaultCustomerDao
	extends BasicDao
	implements CustomerDao
{
	
	public function __construct($connector)
	{
		parent::__construct($connector);
	}	
	
	public function getCustomerByUserName($userName)
	{
		$list = $this->connector->get(parent::CUSTOM, $userName);
		$customer = null;
		if(!empty($list))
		{
			foreach($list as $key=>$value)
			{
				$customer = $value;
				break;
			}
		}
		return $customer;
	}
	
	public function saveCustomer($customer)
	{
		$this->save($customer);
		return $customer;
	}
	
	public function updateCustomer($customer)
	{
		
	}
	
}