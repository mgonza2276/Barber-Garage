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

        function ReadbyID($Id_usuario){

		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM usuario WHERE Id_usuario=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Id_usuario));

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetch(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();
		return $resultado;


        }


        function Update($Id_usuario,$Cedula,$Nombre,$Direccion, $Telefono, $Celular, $Correo, $Perfil){
	//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "UPDATE usuario SET Cedula=?, Nombre=?, Direccion=?, Telefono=?, Celular=?, Correo=?, Perfil=? WHERE Id_usuario = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array( $Cedula, $Nombre, $Direccion, $Telefono, $Celular, $Correo, $Perfil, $Id_usuario));

		BarberGarage_BD::Disconect();

	}
        function Delete($Id_usuario){
	//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM usuario WHERE Id_usuario = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Id_usuario));

		BarberGarage_BD::Disconect();
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
		      BarberGarage_BD::Disconect();

		      return $results;
    	}

    	function ReadbyNICK($Id_usuario){

		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM usuario WHERE Id_usuario=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Id_usuario));

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		BarberGarage_BD::Disconnect();
	}


	// metodo para seleccionar el nombre del barbero en el formulario de Reservar Citas
	function Barbero(){
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$consulta ="SELECT * FROM usuario WHERE Perfil='Empleado'";

			$query = $conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);
			BarberGarage_BD::Disconect();

			return $results;


		}

	}
?>
