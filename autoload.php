<?php

function autoload($className)
{
	$className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
	require $className . '.php';
}

spl_autoload_register('autoload');