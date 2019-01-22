<?php

class animal
{
	public $sound_type = 'hago un sonido';
	public function run()
	{
		echo ' Yo Corro';
	}

	public function walk()
	{
		echo ' Yo Camino';
	}

	public function __construct()
	{
		echo ' Ha nacido un animal';
	}

	public function getSound()
	{
		echo ' Yo' . $this->sound_type;
	}

}

class dog extends animal
{
	public $sound_type = ' Ladro';

	public function __construct()
	{
		parent::__construct();
		echo ' Ha Nacido un Perro ';
	}
}

class cat extends animal
{
	public $sound_type = ' Maullo';

	Public function __construct()
	{
		parent::__construct();
		echo ' Ha nacido un gato ';
	}
}

$dog = new dog();
$dog->run();
$dog->getSound();

if( $dog instanceof dog )
{
	echo "\n";
	echo ' Es un Perro ';
}

if( $dog instanceof animal )
{
	echo "\n";
	echo ' Es un Animal ';
}

echo "\n";
$cat = new cat();
$cat->walk();
$cat->getSound();

if( $cat instanceof cat )
{
	echo "\n";
	echo ' Es un Gato ';
}

if( $cat instanceof animal )
{
	echo "\n";
	echo ' Es un Animal ';
}

?>