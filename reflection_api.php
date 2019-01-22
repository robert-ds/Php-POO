<?php
trait myUtilities 
{
	function sayMyName()
	{
		echo "Mi nombre es" . $this->name . "n";
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
	public $name = "Katino";

	public function makeSound()
	{
		echo "Guauu\n";
	}
}

class Cat extends animal
{
	use myUtilities;
	public $name = "Godofredo";

	public function makeSound()
	{
		echo "Miuu\n";
	}
}


$reflect_class = new ReflectionClass('Dog');
Reflection::export($reflect_class);

echo $reflect_class->getName() . "\n";


