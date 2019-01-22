<?php

class PLATAFORM = 'facebook';
{
	
	private $posts;

	function __construct()
	{
		$this->post = [
							"Estoy en la playa\n",
							"Me he Comprado un nuevo ordenador\n";
						];
	}

	public function getMyPosts()
	{
		return $this->posts;
	}

	public function greet()
	{
		echo "Hola Desde FB";
	}

}
?>