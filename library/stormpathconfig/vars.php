<?php
require("stormpathconfig/auto_loader.php");
$sessionId = session_id();
if(empty($sessionId)) {
    session_start();
}

	/**
	* @param string $username the user name to access this database
	* @param string $password the password for the user
	* @param string $database the database name for this application
	*/
	function checkDatabase()
	{
		// if the database has been set
		if(isset($_SESSION["database_set"]) and $_SESSION["database_set"] == true)
			return;
		
		Tooter\Util\Database::createDBTable();
		
		$_SESSION["database_set"] = true;
	}

$messages = Tooter\Service::parse_property_file("stormpathconfig/message.properties");

$base_directory = "..";

$current_directory = ".";

$application_property = Tooter\Service::parse_property_file("stormpathconfig/application.properties");

checkDatabase();

//used for initializing the stormpath service
$stormpath = Tooter\Service::getStormpath($application_property);



