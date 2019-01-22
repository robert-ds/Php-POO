<?php

//La CLase Definida y su Constructor
class person
{
	public $age;
	public $name;
	public function run()
	{
		echo ' Estoy Corriendo';
	}

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

}

//La instanciación de los objetos

$person = new person('Robert', 24);
echo $person->name;
echo "\t";
echo $person->age;

$person->run();

echo "\n";

$person = new person('Vasquez', 30);
echo $person->name;
echo "\t";
echo $person->age;

?>