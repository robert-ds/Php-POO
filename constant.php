<?php

class config
{
	/*const DB_USER_NAME = 'bpineda';
	const DB_USER_PASSWORD = 123456789;
	const DB_NAME = 'DB';*/
	const ENVIROMENT = 'productions';
}

class BaseProfile extends config
{
	protected $connection_date = 'conexion BD';
	protected function connect2DB()
	{
		if ('productions' == self::ENVIROMENT)
		{
			echo 'Conectando a Ambiente de Producción';
		}
		if ('development' == self::ENVIROMENT)
		{
			echo 'Conectando a Ambiente de Desarrollo';
		}

		if ('staging' == self::ENVIROMENT)
		{
			echo 'Conectando a Ambiente de staging';
		}

	}

	public function __construct()
	{
		$this->connect2DB();
		
	}
}


class MyProfile extends BaseProfile
{
	const DOMAIN_NAME = 'bernardoredsocial.com';
	private $email = "b@correo.com";
	public $name;
	public $last_name;

	public function __construct()
	{
		//echo "Conectando" . self::DB_NAME;
		$this->connect2DB();
		//echo self::DOMAIN_NAME;
		
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function message()
	{
		echo 'Mensaje';
	}

}

$instMyProfile = new MyProfile;
//echo MyProfile::DOMAIN_NAME;

?>