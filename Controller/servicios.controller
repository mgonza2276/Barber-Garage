<?php
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	BarberGarage_BD::Connect();
	
	//Llamamos las clases que necesitamos
	require_once("../Model/servicio.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["acc"];
	switch ($accion) {
	case 'c':
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
	    $Id_servicio  	=$_POST["Id_servicio"];
		$Descripcion =$_POST["Descripcion"];  
		$Precio =$_POST["Precio"];
		$Duracion =$_POST["Duracion"];
		
		
		

		try {
			Gestionar_servicio::Create($Id_servicio,$Descripcion,$Precio,$Duracion);
			$mensaje= "Registro de servico exitoso!";
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
		
		echo "Registro de rol exitoso";
		header("location: ../View/agregar_servicio.php?msn=".$mensaje);

		break;
			 
		}

?>