<?php
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	BarberGarage_BD::Connect();
	
	//Llamamos las clases que necesitamos
	require_once("../Model/usuarios.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["acc"];
	switch ($accion) {
	case 'c':
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
	    $Id_usuario  =$_POST["id_usuario"];
		$Clave       =$_POST["clave"];
		$Cedula 	 =$_POST["cedula"];
		$Nombre      =$_POST["nombre"];  
		$Direccion   =$_POST["direccion"]; 
		$Telefono    =$_POST["telefono"];
		$Celular     =$_POST["celular"];
		$Correo      =$_POST["correo"];
		$Perfil      =$_POST["perfil"];


		try {
			Gestion_Usuarios::Create($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Perfil);
			$mensaje= "Registro exitoso!";
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
		
		 header("location: ../View/registro_usuario.php?msn=".$mensaje);
		 header("location: ../View/agregar_usuario.php?msn=".$mensaje);

		break;
			 
		}

?>
