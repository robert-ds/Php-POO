<?php
require_once('Post1.php');

class Main
{
	public $posts;

	public function __construct()
	{
		$this->posts = new Posts1;
	}
}

$app = new Main();

$app->posts->greet();

?>