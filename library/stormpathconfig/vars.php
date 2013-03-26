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
	function checkDatabase($username, $password, $database)
	{
		// if the database has been set
		if(isset($_SESSION["database_set"]) and $_SESSION["database_set"] == true)
			return;
		
		$mysqli = new mysqli("localhost", $username, $password);
		
		// check whether database exists
		$result = $mysqli->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'");
		if($result->num_rows == 0)
			$mysqli->query("create database $database");
		
		//select the target database
		$mysqli = new mysqli("localhost", $username, $password, $database);
		
		// remove procedure tooter if it existed
		$mysqli->query("drop procedure if exists tooter");
		
		// create procedure tooter
		$procedure_content = file_get_contents("tooter.sql", true);
		$result = $mysqli->query($procedure_content);
		
		// call procedure to refactor the tables
		$result = $mysqli->query("call tooter");
		if($result)
		{
			echo $mysqli->error;
		}
		
		$_SESSION["database_set"] = true;
	}

$messages = Tooter\Service::parse_property_file("stormpathconfig/message.properties");

$base_directory = "..";

$current_directory = ".";

$application_property = Tooter\Service::parse_property_file("stormpathconfig/application.properties");

checkDatabase($application_property["stormpath.sdk.tooter.username"], $application_property["stormpath.sdk.tooter.password"], $application_property["stormpath.sdk.tooter.database"]);

//used for initializing the stormpath service
$stormpath = Tooter\Service::getStormpath($application_property);



