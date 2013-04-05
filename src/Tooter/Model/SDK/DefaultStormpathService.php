<?php

namespace Tooter\Model\SDK;

use Tooter\Util\Connector;

class DefaultStormpathService implements StormpathService
{
	private $client;
	
	private $dataStore;
	
	private $direct;
	
	private $application;
	
	private $tenant;
	
	private $tooterApplicationURL;
	
	private $administratorGroupURL;
	
	private $premiumGroupURL;
	
	private $directoryURL;
	
	//used for mysql database connection
	private $connector;
	
	private function __construct()
	{
		
	}
	
	//factory method to get this class's object
	public static function make($application_property)
	{
		$obj = new DefaultStormpathService();
		
		$path = dirname( __FILE__)."\\".$application_property["stormpath.sdk.apiKey.fileLocation"];
		
		$builder = new \Services_Stormpath_Client_ClientBuilder;
		$obj->client = $builder->setApiKeyFileLocation($path)->build(); 
		
		$obj->tooterApplicationURL = $application_property["stormpath.sdk.tooter.rest.url"];
		$obj->directoryURL = $application_property["stormpath.sdk.tooter.directory.rest.url"];
		$obj->administratorGroupURL = $application_property["stormpath.sdk.administrator.rest.url"];
		$obj->premiumGroupURL = $application_property["stormpath.sdk.premium.rest.url"];
		
		$obj->connector = new Connector();
		
		return $obj;
	}
	
	public function getDirectoryURL() {
        return $this->directoryURL;
    }
	
	public function getAdministratorGroupURL()
	{
		return $this->administratorGroupURL;
	}
	
	public function getApplication()
	{
		if($this->application == null)
			$this->application = $this->getDataStore()->getResource($this->getTooterApplicationURL(), \Services_Stormpath::APPLICATION);
		return $this->application;
	}
	
	public function getClient()
	{	
		return $this->client;
	}
	
	public function getTooterApplicationURL()
	{
		return $this->tooterApplicationURL;
	}
	
	public function getDataStore()
	{
		if(empty($this->dataStore))
			$this->dataStore = $this->client->getDataStore();
		return $this->dataStore;
	}
	
	public function getTenant()
	{
		if(empty($this->tenant))
			$this->tenant = $this->client->getCurrentTenant();
		return $this->tenant;
	}
	
	public function getDirectory()
	{
		if(empty($this->direct))
			$this->direct = $this->dataStore->getResource($this->getDirectoryURL(), \Services_Stormpath::DIRECTORY);
		return $this->direct;
	}
	
	public function getConnector()
	{
		return $this->connector;
	}
	
}