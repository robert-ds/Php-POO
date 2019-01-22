<?php

class pet
{
	public $name = 'Firulais';
}

class person
{
	public $age;
	public $name;
	private $money_in_wallet;
	private $todos;
	private $married;

	public function run()
	{
		echo ' Estoy Corriendo';
	}

	public function walk()
	{
		echo ' Estoy caminando';
	}

	public function greet( person $other_person )
	{
		echo "hola,"  . $other_person->name;
	}

	public function __construc( $name )
	{
		$this->name = $name;
	}

	public function adopt( pet $instance_pet )
	{
		echo 'Hey, adopté a ' . $instance_pet->name;
	}
}

	$person1 = new person('Robert');
	$person2 = new person('Andres');
	$pet = new pet();

	$person1->greet($person2);
	$person1->adopt($pet);

?>