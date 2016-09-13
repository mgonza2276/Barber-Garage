<?php
 session_start();

include_once("../Model/conexion.php");
include_once("../Model/Citas.class.php");


	$accion=$_REQUEST["acc"];
	switch ($accion) {

	case 'R':

	$fecha=$_POST["Fecha"];
	$hora=$_POST["Hora"];
	// $minutos = $_POST["Min"];
	$servicio=$_POST["Servicio"];
	$barbero=$_POST["Barbero"];
	$id_usuario=$_POST["Id_usuario"];
	$cod_barberia=$_POST["Cod_barberia"];


	try{

		Gestionar_citas::Create($fecha,$hora,$servicio,$barbero,$id_usuario,$cod_barberia);
		$mensaje="Su cita fue reservada con exito";
		$tipomensaje = "success";
		header("Location: ../View/Reservar_Citas.php?m=".$mensaje."&tm=".$tipomensaje);
	}catch(Exception $e){
		$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
		$tipomensaje="error";
		header("Location: ../View/Dashboard_Cliente.php?m=".$mensaje."&tm=".$tipomensaje);

	}

	break;

	case 'U':

	$Cod_cita=$_POST["Cod_cita"];
	$fecha=$_POST["Fecha"];
	$hora=$_POST["Hora"];
	$servicio=$_POST["Servicio"];
	$barbero=$_POST["Barbero"];
	$id_usuario=$_POST["Id_usuario"];
	$cod_barberia=$_POST["Cod_barberia"];

	try{
		Gestionar_citas::Update($Cod_cita,$fecha,$hora,$servicio,$barbero,$id_usuario,$cod_barberia);
		$mensaje="la cita se modifico correctamente";
		$tipomensaje="success";
		if ($_SESSION["Perfil"] =="Administrador" ) {

		header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);
		}
		elseif ($_SESSION["Perfil"] =="Usuario") {

			header("Location: ../View/Mi_Cita.php?ja=".$_SESSION["Id_usuario"]."&m= ".$mensaje."&tm=".$tipomensaje);
			// header("Location: ../View/Mi_Cita.php?m=".$mensaje."&tm=".$tipomensaje);
		}
		elseif($_SESSION["Perfil"]=="Empleado"){

			header("Location: ../View/Mis_Citas_Asignadas.php?mca=".$_SESSION["Nombre"]."&m= ".$mensaje."&tm=".$tipomensaje);
			// header("Location: ../View/Mis_Citas_Asignadas.php?m=".$mensaje."&tm=".$tipomensaje);
		}

		}




		catch(Exception $e){
			$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
			$tipomensaje="error";
			header("Location: ../View/Modificar_Cita.php?m=".$mensaje."&tm=".$tipomensaje);

		}


		break;

	case 'D':

	try{
		Gestionar_citas::Delete(base64_decode($_REQUEST["ct"]));
		$mensaje="La cita se elimino correctamente";
		$tipomensaje="success";

		if ($_SESSION["Perfil"] =="Administrador") {

		header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);

		}
		elseif ($_SESSION["Perfil"] =="Usuario") {

			//aqui estamos enviando la variable ja nuevamente para que vuelva a mostrar los datos de la citas segunn el id del usuario.
			header("Location: ../View/Mi_Cita.php?ja=".$_SESSION["Id_usuario"]."&m=".$mensaje."&tm=".$tipomensaje);
		}

		elseif($_SESSION["Perfil"]=="Empleado"){
		header("Location: ../View/Mis_Citas_Asignadas.php?.mca=".$_SESSION["Nombre"]."&m=".$mensaje."&tm=".$tipomensaje);

		}


	}catch(Exception $e){
		$mensaje="ha ocurrido un error, el error fue:".$e->getMessage()."en el archivo:".$e->getFile()."en la linea:".$e->getLine();
		$tipomensaje="error";
		header("Location: ../View/Gestion_Citas.php?m=".$mensaje."&tm=".$tipomensaje);

	}

	break;


    // citas validacion con ajax
	case 'valida_citas':
	  	$fecha = $_POST["fecha_cita"];
	  	$hora = $_POST["hora"];
	  	$Id_Usuario  = $_POST["usuario"];
	  	$barbero = $_POST["barbero"]; 
	  	$barberia = $_POST["barberia"];

	  	try{
	  		$cita = Gestionar_Citas::ValidoCita($fecha, $hora, $Id_Usuario, $barbero, $barberia);

	  		if($cita[0] != ""){
	  			$existe = true;
	  			$message = "Este Horario o Barbero ya se encuentra ocupado.";
	  		}else{
	  			$existe = false;
	  			$message = "";
	  		}
	  	}catch(Exception $e){
	  		echo $e->getMessage();
	  	}


	    echo json_encode(array('ue' => $existe, 'msn' => $message));
	  
	  break;

}


 ?>
