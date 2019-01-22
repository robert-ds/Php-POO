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

class Cat extends animal
{
	use myUtilities;
	public $name = 'Caspian';
	public function makeSound()
	{
		echo "Miauu\t";
	}
}

interface iDB
{
	public function connect();
}

class MySQL implements iDB
{
	use myUtilities;
	public $name = "Mysql";
	public function connect()
	{
		echo "Conectando con Mysql\n";
	}
}


class oracle
{
	use myUtilities;
	public $name = "ORACLE";
	public function connect()
	{
		echo "Conectando con Oracle\n";
	}
}

$instDog = new Dog;
$instCat = new Cat;

$instMySQL = new MySQL;
$instOracle = new oracle;

$instDog->sayMyName();
$instMySQL->sayMyName();
$instCat->sayMyName();
$instOracle->sayMyName();
?>