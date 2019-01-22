<?php
trait myUtilities 
{
	function sayMyName()
	{
		if( !( $this->name ) )
		{
			Logger::log(
					'error. Debe tener nombre. Error en el archivo '
					//. __FILE__
					/*. ', en la Linea ' . __LINE__
					. ', en la Clase' . __CLASS__
					. ', en el metodo' . __METHOD__ 
					. ', en el trit ' . __TRAIT__*/
			);

			throw new Exception('No tiene Nombre');
		}
		echo "Mi nombre es " . $this->name . "\n";
	}
}

class Logger
{
	public static function log($text)
	{
		$prefix = data('d-m-Y- h:i:s ::: ');
		file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
	}

}


abstract class animal
{
	const NATIONALITY = 'Universal';
	public static $year_born = 2016;

	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}

	public static function panic()
	{

	}
}

class Dog extends animal
{
	use myUtilities;
	//public $name = "Katino";

	public function makeSound()
	{
		echo "Guauu\n";
	}
}

class Cat extends animal
{
	use myUtilities;
	//public $name = "Godofredo";

	public function makeSound()
	{
		echo "Miuu\n";
	}
}

$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
$instCat->run();
$instDog->makeSound();

?>
