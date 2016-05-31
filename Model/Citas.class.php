<?php 

class Gestionar_citas{

	// Reservar las citas
	function Create($fecha,$hora,$servicio,$barbero,$id_usuario){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="INSERT INTO citas (Fecha,Hora,Servicio,Barbero,Id_usuario) VALUES (?,?,?,?,?)";		
		$query=$conexion->prepare($consulta);
		$query->execute(array($fecha,$hora,$servicio,$barbero,$id_usuario));

		BarberGarage_BD::Disconect();			
	}

	// modificacion de las citas
	function Update($fecha,$hora,$servicio,$barbero,$id_usuario){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		

		$consulta="UPDATE citas SET Fecha=?,Hora=?,Servicio=?,Barbero=? WHERE Cod_cita=? ";		
		$query=$conexion->prepare($consulta);
		$query->execute(array($fecha,$hora,$servicio,$barbero,$id_usuario));
		
		BarberGarage_BD::Disconect();		

	}

	// eliminar cita

	function Delete($Cod_cita){ 
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$consulta="DELETE FROM citas WHERE Cod_cita=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($Cod_cita));

		BarberGarage_BD::Disconect();
	}

	// funcion ReadbyId

	function ReadbyId($Cod_cita){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="SELECT * FROM citas WHERE Cod_cita=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($Cod_cita));

		$resultado=$query->fetch(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}

	function ReadAll(){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$consulta="SELECT * FROM citas";
		$query=$conexion->prepare($consulta);
		$query->execute();

		$resultado=$query->fetchAll(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}
}


 ?>