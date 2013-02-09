<?php

namespace Tooter\Model;

class Toot 
{
	private $tootId;
	
	private $tootMessage;
	
	private $customer;
	
	public function getTootId()
	{
		return $this->tootId;
	}
	
	public function setTootId($id)
	{
		$this->tootId = $id;
	}
	
	public function getCustomer()
	{
		return $this->customer;
	}
	
	public function setCustomer($customer)
	{
		$this->customer = $customer;
	}
	
	public function getTootMessage()
	{
		return $this->tootMessage;
	}
	
	public function setTootMessage($tootMessage)
	{
		$this->tootMessage = $tootMessage;
	}
	
	public function exchangeArray($data)
    {
        $this->tootMessage     = (isset($data['tootMessage']))     ? $data['tootMessage']     : null;
    }
}