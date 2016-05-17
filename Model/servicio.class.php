<?php
	class Gestionar_servicio{

		
		function Create($Id_servicio,$Nombre,$Precio,$Duracion){
			
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			
			$consulta ="INSERT INTO servicio (Id_servicio,Nombre,Precio,Duracion) VALUES (?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Id_servicio,$Nombre,$Precio,$Duracion));

			BarberGarage_BD::Disconect();
		}	


		function Update($Id_servicio,$Nombre,$Precio,$Duracion){
	
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		
		$consulta = "UPDATE servicio SET Nombre=?,Precio=?,Duracion=? WHERE Id_servicio = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Nombre,$Precio,$Duracion,$Id_servicio));		

		BarberGarage_BD::Disconect();
		}


		function Delete($Id_servicio){
		
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		
		$consulta = "DELETE FROM servicio WHERE Id_servicio = ?" ;

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Id_servicio));		

		BarberGarage_BD::Disconect();
	}



			function ReadbyID($Id_servicio){

		
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$consulta = "SELECT * FROM servicio WHERE Id_servicio=?";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($Id_servicio));

		
		$resultado = $query->fetch(PDO::FETCH_BOTH);
		
		BarberGarage_BD::Disconect();
		return $resultado;

        
        }	

        function ReadAll(){
			
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			$consulta="SELECT * FROM servicio";

			$query=$conexion->prepare($consulta);
			$query->execute();

			$results = $query->fetchALL(PDO::FETCH_BOTH);

			BarberGarage_BD::Disconect();
			return $results;
		}


			
	}
?>