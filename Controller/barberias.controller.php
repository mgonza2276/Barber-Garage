<?php
	//Llamamos la conexion a la base de datos
	require_once("../Model/conexion.php");
	BarberGarage_BD::Connect();

	//Llamamos las clases que necesitamos
	require_once("../Model/barberias.class.php");

	// la variable accion nos indica que parte del crud crearemos
	$accion=$_REQUEST["acc"];
	switch ($accion) {
	case 'c':
		# crear
		#iniciamos las variables   que se envian desde el  formulario  y las  que necesito  para  almacenar la tabla.
	  	$Cod_barberia  	=$_POST["nit"];
		$Nombre      	=$_POST["nombre"];
		$Direccion   	=$_POST["direccion"];
		$Telefono    	=$_POST["telefono"];
		$Ciudad      	=$_POST["ciudad"];


		try {
			Gestion_barberias::Create($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad);
			$mensaje= "Registro barberia exitoso!";
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}

		echo "Registro barberia exitoso";
		header("location: ../View/Registrar_barberia.php?msn=".$mensaje);

		break;
	case 'u':
			$Cod_barberia  	=$_POST["nit"];
			$Nombre      	=$_POST["nombre"];
			$Direccion   	=$_POST["direccion"];
			$Telefono    	=$_POST["telefono"];
			$Ciudad      	=$_POST["ciudad"];

            

			try{
				Gestion_barberias::Update($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad);
				$mensaje = "Se actualizo correctamente";
			}catch(Exception $e){
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();			 
			}
			header("Location: ../View/gestion_barberias.php?m= ".$mensaje."&ui=".$Cod_barberia );
			break;

	case 'd':
        	try {
          		$barberias = Gestion_barberias::Delete(base64_decode($_REQUEST["ui"]));
          		$msn = "se elimino correctamente";
        	} catch (Exception $e) {
          		$msn = "error";
        		}
			header("Location: ../View/gestion_barberias.php?msn=".$msn);
 			break;
		}

?>
