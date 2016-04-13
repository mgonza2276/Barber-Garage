<?php
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	BarberGarage_BD::Connect();
	
	//Llamamos las clases que necesitamos
	require_once("../Model/rol.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["acc"];
	switch ($accion) {
	case 'c':
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
	    $Id_rol  	=$_POST["Id_rol"];
		$Nombre_rol =$_POST["Nombre_rol"];  
		
		

		try {
			Gestionar_rol::Create($Id_rol,$Nombre_rol);
			$mensaje= "Registro barberia exitoso!";
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
		
		echo "Registro de rol exitoso";
		header("location: ../View/Asignar_rol.php?msn=".$mensaje);

		break;
			 
		}

?>