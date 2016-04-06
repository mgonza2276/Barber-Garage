<?php
	class Gestion_Usuarios{
			
			function Create($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Perfil){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta ="INSERT INTO usuario (Id_usuario,Clave,Cedula,Nombre,Direccion,Telefono,Celular,Correo,Perfil) VALUES (?,?,?,?,?,?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Id_usuario,$Clave,$Cedula,$Nombre,$Direccion,$Telefono,$Celular,$Correo,$Perfil));

			BarberGarage_BD::Disconect();
		}	




		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Creamos el query de la consulta a la BD
			$consulta ="SELECT * FROM usuario ORDER BY Perfil";

			$query = $conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);

			return $results;

			BarberGarage_BD::Disconect();
		}	
	}
?>