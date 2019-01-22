<?php

class indestructible
{
	public function __construct()
	{
		print "Clase Creada\n";
		$this->name = "Indestructible";
	}

	public function __destruct()
	{
		print "Destruyendo a " . $this->name . "\n";
	}
}

$instIndestruc = new indestructible();
unset($instIndestruc);

for($i = 0; $i < 50; $i++)
{
	echo "$i\n";

	/*if($i > 25)
	{
		exit();
	}*/
}





?>