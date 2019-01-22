<?php

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
	public function makeSound()
	{
		echo "Guau\t";
	}
}

class Cat extends animal
{
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
	public function connect()
	{
		echo "Conectando con Mysql\n";
	}
}


class oracle
{
	public function connect()
	{
		echo "Conectando con Oracle\n";
	}
}

$instDog = new Dog;
$instDog->makeSound();
$instDog->run();

$instCat = new Cat;
$instCat->makeSound(); 	
$instCat->run(); 	

$instMySQL = new MySQL;
$instOracle = new oracle;

$instMySQL->connect();
$instOracle->connect();


?> 	