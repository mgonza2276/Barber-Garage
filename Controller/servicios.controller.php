<?php
	session_start();
	require_once("../Model/conexion.php");
	BarberGarage_BD::Connect();
	
	
	require_once("../Model/servicio.class.php");


	$accion=$_REQUEST["acc"];
	switch ($accion) {
	case 'c':
		
	    $Id_servicio=$_POST["Id_servicio"];
		$Nombre =$_POST["Nombre"];  
		$Precio =$_POST["Precio"];
		$Duracion =$_POST["Duracion"];
		
		
		

		try {
			Gestionar_servicio::Create($Id_servicio,$Nombre,$Precio,$Duracion);
			$mensaje= "Registro de servicio exitoso!";
			$tipomensaje = "success";
			 header("Location: ../View/gestion_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);
			
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
				$tipomensaje = "error";
				header("Location: ../View/agregar_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);	
			}
		
		break;
		
		

		case 'u':

		$Id_servicio=$_POST["Id_servicio"];
		$Nombre =$_POST["Nombre"];  
		$Precio =$_POST["Precio"];
		$Duracion =$_POST["Duracion"];
		
		
		

		try {
			Gestionar_servicio::Update($Id_servicio,$Nombre,$Precio,$Duracion);
			$mensaje= " el Registro se actualizo exitosamente!";
			$tipomensaje = "success";
			 
			 if ($_SESSION["Perfil"] =="Administrador" ) {

			 header("Location: ../View/gestion_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);
			}
			elseif($_SESSION["Perfil"]=="Empleado"){

			header("Location: ../View/gestionar_servicios.php?m= ".$mensaje."&tm=".$tipomensaje);
			}	
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
				$tipomensaje = "error";
				header("Location: ../View/editar_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);	
			}
		
		break;
		
		case 'd':

		try{
			Gestionar_servicio::Delete(base64_decode($_REQUEST["ui"]));
			$mensaje= " el Registro se elimino exitosamente!";
			$tipomensaje = "success";
			 header("Location: ../View/gestion_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);
			
			if ($_SESSION["Perfil"] =="Administrador" ) {

			 header("Location: ../View/gestion_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);
			}
			elseif($_SESSION["Perfil"]=="Empleado"){

			header("Location: ../View/gestionar_servicios.php?m= ".$mensaje."&tm=".$tipomensaje);
			}


		}catch(Exception $e){
			$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
				$tipomensaje = "error";
				header("Location: ../View/editar_servicio.php?m= ".$mensaje."&tm=".$tipomensaje);
			}
			
			
 			break;
		}


?>