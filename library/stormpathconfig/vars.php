<?php

$sessionId = session_id();
if(empty($sessionId)) {
    session_start();
}

$messages = Tooter\Service::parse_property_file("stormpathconfig/message.properties");

$base_directory = "..";

$current_directory = ".";

$application_property = Tooter\Service::parse_property_file("stormpathconfig/application.properties");

//used for initializing the stormpath service
$stormpath = Tooter\Service::getStormpath($application_property);



