<?php

require_once('MyClass.php');
use MyNameSpace\MyClass;

class Main
{
	public $posts;

	public function __construct()
	{
		$this->posts = new MyClass;
	}
}

$app = new Main();

$app->posts->greet();

?>