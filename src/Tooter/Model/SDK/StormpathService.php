<?php

namespace Tooter\Model\SDK;

interface StormpathService
{
	public function getClient();
	
	 /**
     * Gets the Rest URL of the Tooter application.
     *
     * @return the Rest URL of the Tooter application.
     */
	 public function getTooterApplicationURL();
	 
	 /**
     * Gets the Rest URL of the Administrator Group, which represents
     * the role of Administrator for an Account in the Tooter application.
     *
     * @return the Rest URL of the Administrator Group
     */
	 public function getAdministratorGroupURL();
	 
	 /**
     * Gets the DataStore from the Client object.
     *
     * @return the DataStore from the Client object.
     */
	 public function getDataStore();
	 
	 /**
     * Returns the Tenant that owns the Tooter application.
     *
     * @return the Tenant that owns the Tooter application.
     */
	 public function getTenant();
	 
	 /**
     * Gets the Directory, where the Tooter application is located, from the DataStore object.
     *
     * @return the Directory from the DataStore object.
     */
	 public function getDirectory();
	 
	 /**
     * Gets the Rest URL of the Directory where the Tooter application is located.
     *
     * @return the Rest URL of the Directory where the Tooter application is located.
     */
	 public function getDirectoryURL();
	 
	 /**
     * Gets the Tooter Application from the DataStore object.
     *
     * @return the Tooter Application from the DataStore object.
     */
	 public function getApplication();
}