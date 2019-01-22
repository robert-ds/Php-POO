<?php

class BaseProfile
{
	protected $connection_date = 'conexion BD';
	protected function connect2DB()
	{
		echo $this->connection_date;
	}

	/*public function __construct()
	{
		$this->connect2DB();
	}*/
}


class MyProfile extends BaseProfile
{
	private $email = "b@correo.com";

	public function __construct()
	{
		$this->connect2DB();

	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

}

$instBase = new MyProfile();

?>