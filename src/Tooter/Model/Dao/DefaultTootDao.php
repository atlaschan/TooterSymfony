<?php

namespace Tooter\Model\Dao;

class DefaultTootDao
	extends BasicDao
	implements TootDao
{
	public function __construct($connector)
	{
		parent::__construct($connector);
	}

	public function getTootsByUserId($custId)
	{
		return $this->connector->get(parent::TTOOT, $custId);
	}
	
	public function saveToot($toot)
	{
		$this->connector->save($toot);
		return $toot;
	}
	
	public function removeTootById($tootId)
	{
		
	}
}