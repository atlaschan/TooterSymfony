<?php

namespace Tooter\Model\Dao;

interface TootDao
{
	public function getTootsByUserId($custId);
	
	public function saveToot($toot);
	
	public function removeTootById($tootId);
}