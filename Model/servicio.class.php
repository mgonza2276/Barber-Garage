<?php
	class Gestionar_servicio{

		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($Id_servicio,$Descripcion,$Precio,$Duracion){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO servicio (Id_servicio,Descripcion,Precio,Duracion) VALUES (?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Id_servicio,$Descripcion,$Precio,$Duracion));

			BarberGarage_BD::Disconect();
		}	


		function ReadALL(){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="SELECT * FROM servicio ORDER BY Id_servicio";

			$query = $conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);

			return $results;

			BarberGarage_BD::Disconect();
		}	
	}
?>