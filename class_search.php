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
	const NATIONALITY = 'Univesal';
	public static = 2016;
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

class cat extends animal
{
	//use myUtilities;
	public $name = "Godofredo";

	public function makeSound()
	{
		echo "Miuu\n";
	}
}

//echo class_exists('');

$classes = ['Bein','Animal','Plant','Dog','Cat','Mouse','Cactus'];

foreach ( $classes as $class_ ) {
	echo $class_ . (class_exists($class_)? ' Si' : ' No' ) . "\n";
}
?>