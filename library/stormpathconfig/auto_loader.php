<?php

/**
* This is added just in case some HTTP classes are not loaded
* @param string $className the class yet to be loaded
* @return mixed include the target class file
*/
function http_autoload($className)
{
	if (substr($className, 0, 4) != 'HTTP') {
        return false;
    }
    $file = str_replace('_', '/', $className);
    return include "$file.php";
}

spl_autoload_register("http_autoload");