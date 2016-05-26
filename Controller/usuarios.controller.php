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
		@$origen_pagina = $_REQUEST["pag"];

		try {
			Gestion_Usuarios::Create($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Perfil);
			$mensaje= "Registro exitoso!";
			
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			}
		
		if ($origen_pagina =="registro_usuario") {
			header("location: ../View/registro_usuario.php?msn=".$mensaje);
		}elseif ($origen_pagina == "agregar_usuario") {
			header("location: ../View/agregar_usuario.php?msn=".$mensaje);
		}
		break;
        
        case 'u':
			$Id_usuario 		= $_POST["id_usuario"];	
			$Cedula		        =$_POST["cedula"];
			$Nombre             =$_POST["nombre"];	
			$Direccion	    	=$_POST["direccion"];
			$Telefono           =$_POST["telefono"];
			$Celular            =$_POST["celular"];	
			$Correo			    =$_POST["correo"];
			$Perfil             =$_POST["perfil"];
            

			try{
				Gestion_Usuarios::Update($Id_usuario,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Perfil);
				$mensaje = "Se actualizo correctamente";
			}catch(Exception $e){
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();			 
			}
			header("Location: ../View/gestion_usuarios.php?m= ".$mensaje."&ui=".$Id_usuario );
			break;
			 
		
	case 'd':
        try {
          $usuario = Gestion_Usuarios::Delete(base64_decode($_REQUEST["ui"]));
          $msn = "se elimino correctamente";
        } catch (Exception $e) {
          $msn = "error";
        }
		header("Location: ../View/gestion_usuarios.php?msn=".$msn);
 		break;

 	case 'existe_usuario':
	  	$Id_usuario = $_POST["id_usuario"]; 
	  	try{
	  		$usuario = Gestion_Usuarios::ReadbyId($Id_usuario);

	  		if(count($usuario[0]) > 0){
	  			$existe = true;	
	  			$message = "El usuario ya existe en nuestra aplicación";
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