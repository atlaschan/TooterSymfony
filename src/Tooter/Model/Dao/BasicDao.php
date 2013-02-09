<?php

namespace Tooter\Model\Dao;

class BasicDao
{
	protected $connector;
	
	const CUSTOM = "T_ACCOUNT";
	
	const TTOOT = "T_TOOT";
	
	public function __construct($connector)
	{
		$this->connector = $connector;
	}
	
	public function deleteById($class, $id)
	{
		
	}
	
	public function delete($obj)
	{
		
	}
	
	public function load($class, $id)
	{
		
	}
	
	public function update($obj)
	{
		
	}
	
	public function save($obj)
	{
		$this->connector->save($obj);
	}
}