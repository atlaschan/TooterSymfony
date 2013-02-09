<?php

namespace Tooter\Model\Dao;

interface CustomerDao 
{
	public function getCustomerByUserName($userName);
	
	public function saveCustomer($customer);
	
	public function updateCustomer($customer);
}