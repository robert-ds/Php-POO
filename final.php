<?php
trait myUtilities
{
	function sayMyName()
	{
		echo "Mi nombre es: " . $this->name . "\n";
	}
}

abstract class animal
{
	abstract public function makeSound();
	
		public function run()
		{
			echo "Corriendo\n";
		}
	
}

class Dog extends animal
{
	use myUtilities;
	public $name = 'Gruu';
	public function makeSound()
	{
		echo "Guau\t";
	}
}

final class schnauzer extends Dog
{
	public function __construct()
	{
		print $this->breed = "schnauzer\n";
	}
}

$instSchnauzer = new schnauzer;

$instDog = new Dog;
$instDog->sayMyName();


?>