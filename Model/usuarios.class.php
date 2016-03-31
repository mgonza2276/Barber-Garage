<?php
	class Gestion_Usuarios{

		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Id_rol){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO usuario (Id_usuario,Clave,Cedula,Nombre,Direccion,Telefono,Celular,Correo,Id_rol) VALUES (?,?,?,?,?,?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Id_rol));

			BarberGarage_BD::Disconect();
		}	
	}
?>