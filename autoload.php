<?php

function app_autoloader($class)
{
	include 'classes/' . $class . '.php';
}

//spl_autoload_register('app_autoloader');

spl_autoload_register(function($class){
	include $class . '.php';

});



?>