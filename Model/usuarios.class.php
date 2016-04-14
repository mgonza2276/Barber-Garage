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
			BarberGarage_BD::Disconect();

			return $results;

			
		}

		  function ValidaUsuario($Id_usuario, $Clave){
		      $pdo=BarberGarage_BD::Connect();
		      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		      $sql = "SELECT * FROM usuario WHERE Id_usuario = ? AND Clave = ?";

		      $query = $pdo->prepare($sql);

		      $query->execute(array($Id_usuario, $Clave));
		      // fetch cuando voy a mostrar un solo registro
		      // fetchALL cuando voy a mostrar mas de un registro

		      $results = $query->fetch(PDO::FETCH_BOTH);
		      BarberGarage_BD::Disconnect();

		      return $results;
    	}	
	}
?>