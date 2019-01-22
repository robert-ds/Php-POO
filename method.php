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
	cons NATIONALITY = 'Universal';
	public static $year_born = 2016;
	
	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}

}

class Dog extends animal
{
	//use myUtilities;
	public $name = "Katino";

	public function makeSound()
	{
		echo "Guauu\n";
	}
}

class Cat extends animal
{
	//use myUtilities;
	public $name = "Godofredo";

	public function makeSound()
	{
		echo "Miuu\n";
	}
}

$inst = new Cat();

//var_dump(get_class_methods($inst));

var_dump(get_class_methods(new Dog));
?>