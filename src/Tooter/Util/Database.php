<?php

namespace Tooter\Util;

class Database
{
	const dbname = 'tooter';
	
	
	public static function createDBTable()
	{	
		if(!class_exists('SQLite3'))
		   die("SQLite 3 NOT supported.");
		
		$base=new \SQLite3(self::dbname, 0666); 
		
		$result = $base->query("SELECT name FROM sqlite_master WHERE type='table'");
		$tootTableFlag = false;
		$accountTableFlag = false;
		if($result)
		{
			while($row = $result->fetchArray())
			{
				if($row["name"] === "T_ACCOUNT")
				{
					$accountTableFlag = true;
				}
				if($row["name"] === "T_TOOT")
				{
					$tootTableFlag = true;
				}
			}
		}
		
		if($tootTableFlag and $accountTableFlag)
			return;
		
		$query = "create table T_ACCOUNT(id INTEGER PRIMARY KEY, userName varchar(50))";
		$results = $base->exec($query);
		
		$query = "create table T_TOOT(tootId INTEGER PRIMARY KEY, tootMessage varchar(200), custId INTEGER, FOREIGN KEY(custId) REFERENCES T_ACCOUNT(id))";
		$results = $base->exec($query);
	}
	
}