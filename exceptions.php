<?php

/*try{

throw new Exception('No hay archivos de configuracion');
	
}
catch(Exception $e)
{
	echo "Hubo un error\t" . $e->getMessage() . "\n";
}
finally
{
	echo "Cerrando Base de Datos";
}*/


class DBException extends Exception{}

class Main
{
	public function __construct()
	{
		try
		{
			throw new DBException("No hay Conections");
			//throw new Exception("No hay Espacio en Memoria");
		}
		catch(Exception $e)
		{
			echo "Error Generico: " . $e->getMessage() . "\n";
		}
		catch(DBException $e)
		{
			echo "Error Especifico: " . $e->getMessage() . "\n";

		}
	}
}

$Main = new Main;
?>