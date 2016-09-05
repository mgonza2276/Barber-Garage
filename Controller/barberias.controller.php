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
		$GeoX			=$_POST["Geo_x"];
		$GeoY			=$_POST["Geo_y"];
		$entrada		=$_POST["entrada"];
		$salida			=$_POST["salida"];


		try {
			Gestion_barberias::Create($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad,$GeoX,$GeoY,$entrada,$salida);
			$mensaje= "Registro barberia exitoso!";
			$tipomensaje = "success";
			header("Location: ../View/gestion_barberias.php?m= ".$mensaje."&tm=".$tipomensaje);
			
			} catch (Exception $e) {
				$mensaje=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
				$tipomensaje = "error";
				header("Location: ../View/Registrar_barberia.php?m= ".$mensaje."&tm=".$tipomensaje);
			}

		break;
	case 'u':
			$Cod_barberia  	=$_POST["nit"];
			$Nombre      	=$_POST["nombre"];
			$Direccion   	=$_POST["direccion"];
			$Telefono    	=$_POST["telefono"];
			$Ciudad      	=$_POST["ciudad"];
			$GeoX			=$_POST["Geo_x"];
			$GeoY			=$_POST["Geo_y"];
			$entrada		=$_POST["entrada"];
			$salida			=$_POST["salida"];
            

			try{
				Gestion_barberias::Update($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad,$GeoX,$GeoY,$entrada,$salida);
				$mensaje = "Se actualizo correctamente";
				$tipomensaje = "success";
				header("Location: ../View/gestion_barberias.php?m= ".$mensaje."&tm=".$tipomensaje."&cb=".$Cod_barberia);
			}catch(Exception $e){
				$mensaje = "Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine();	
				$tipomensaje = "error";
				header("Location: ../View/editar_barberias.php?m= ".$mensaje."&tm=".$tipomensaje);		 
			}
			
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
