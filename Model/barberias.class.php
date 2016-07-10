<?php
	class Gestion_barberias{

		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad,$GeoX,$GeoY){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO barberia (Cod_barberia,Nombre,Direccion,Telefono,Ciudad,GeoX,GeoY) VALUES (?,?,?,?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad,$GeoX,$GeoY));

			BarberGarage_BD::Disconect();
		}


		//Metodo ReadAll()
		//El metodo trae todos los datos de la tabla barberia
		function ReadAll(){
			//Instanciamos y nos conectamos a la BD
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//Creamos la consulta necesaria
			$consulta="SELECT * FROM barberia";

			$query=$conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);

			BarberGarage_BD::Disconect();
			return $results;
		}



		function ReadbyID($Cod_barberia){

		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM barberia WHERE Cod_barberia=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Cod_barberia));

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetch(PDO::FETCH_BOTH);
		
		BarberGarage_BD::Disconect();
		return $resultado;

        
        }	


        function Update($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad){
		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "UPDATE barberia SET Nombre=?,Direccion=?,Telefono=?,Ciudad=? WHERE Cod_barberia = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Nombre,$Direccion,$Telefono,$Ciudad,$Cod_barberia));		

		BarberGarage_BD::Disconect();
		}


		function Delete($Cod_barberia){
		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "DELETE FROM barberia WHERE Cod_barberia = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Cod_barberia));		

		BarberGarage_BD::Disconect();
	}

		// validacion de las barberias para las variables de session

	function ValidaBarberia($Cod_barberia){
		      $conexion=BarberGarage_BD::Connect();
		      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		      $consulta = "SELECT * FROM barberia WHERE Cod_barberia = ?";

		      $query = $conexion->prepare($consulta);

		      $query->execute(array($Cod_barberia));

		      $resultado = $query->fetch(PDO::FETCH_BOTH);
		      BarberGarage_BD::Disconect();

		      return $resultado;
    	}
	}
?>