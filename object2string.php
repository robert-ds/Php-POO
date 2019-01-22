<?php

class person
{
	private $name;
	public $last_name;

	public function __construct($name, $last_name)
	{
		$this->name = $name;
		$this->last_name = $last_name;
	}

	public function __toString()
	{
		return $this->name . $this->last_name;
	}

}

$bernardo = new person('Robert', ' Vasquez');
echo $bernardo;

?>