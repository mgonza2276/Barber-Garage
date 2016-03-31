<?php
	class Gestionar_rol{

		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($Id_rol,$Nombre_rol){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO rol (Id_rol,Nombre_rol) VALUES (?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Id_rol,$Nombre_rol));

			BarberGarage_BD::Disconect();
		}	


		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="SELECT * FROM rol ORDER BY Nombre_rol";

			$query = $conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);

			return $results;

			BarberGarage_BD::Disconect();
		}	
	}
?>