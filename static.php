<?php 
error_reporting(-1);

	class DBstatic
	{
		public static $db_user = 'Vasquez';
		public static $db_password = '12345678';
		public static $db_database_name = 'PHP_OO_DB';

		public static function connect()
		{
			echo "Connectando con: " . self::$db_user . ": " . self::$db_password . ": " . self::$db_database_name;
		}
	}

	class BaseProfile extends DBstatic
{
	protected $connection_date = 'conexion BD';
	protected function connect2DB()
	{
		echo $this->connection_date;
	}

	public function __construct()
	{
		//$this->connect2DB();
		self::connect();
	}
}


class MyProfile extends BaseProfile
{
	private $email = "b@correo.com";
	public $name;
	public $last_name;

	/*public function __construct()
	{
		//$this->connect2DB();
		
	}*/

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

//Llamada a metodos no Estaticos "No recomendable"
MyProfile::message();

/*echo DBstatic::$db_user; echo "\n";
echo DBstatic::$db_password; echo "\n";
echo DBstatic::$db_database_name; echo "\n";
DBstatic::connect();
*/

//$instMyProfile = new MyProfile;
?>