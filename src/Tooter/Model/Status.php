<?php

namespace Tooter\Model;

class Status
{
	private $status;
	
	private $error;
	
	private $obj;
	
	public function __construct()
	{
		
	}
	
	public function getStatus()
	{
		return $this->status;
	}
	
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
	public function getError()
	{
		return $this->error;
	}
	
	public function setError($error)
	{
		$this->error = $error;
	}
	
	public function getObj()
	{
		return $this->obj;
	}
	
	public function setObj($obj)
	{
		$this->obj = $obj;
	}
}