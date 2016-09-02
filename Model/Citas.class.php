<?php 

class Gestionar_citas{

	// Reservar las citas
	function Create($fecha,$hora,$servicio,$barbero,$minutos,$id_usuario,$cod_barberia){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="INSERT INTO citas (Fecha,Hora,Minutos,Servicio,Barbero,Id_usuario,Cod_barberia) VALUES (?,?,?,?,?,?,?)";		
		$query=$conexion->prepare($consulta);
		$query->execute(array($fecha,$hora,$minutos,$servicio,$barbero,$id_usuario,$cod_barberia));

		BarberGarage_BD::Disconect();			
	}

	// modificacion de las citas
	function Update($Cod_cita,$fecha,$hora,$minutos,$servicio,$barbero,$id_usuario,$cod_barberia){
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		

		$consulta="UPDATE citas SET Fecha=?,Hora=?,Minutos=?,Servicio=?,Barbero=?,Id_usuario=?,Cod_barberia=? WHERE Cod_cita=? ";		
		$query=$conexion->prepare($consulta);
		$query->execute(array($fecha,$hora,$minutos,$servicio,$barbero,$id_usuario,$cod_barberia,$Cod_cita));
		
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

	function ReadbyId($Cod_cita){//para el modificar de todos los usuarios
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="SELECT * FROM citas WHERE Cod_cita=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($Cod_cita));

		$resultado=$query->fetch(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}

	function Mi_Cita($id_usuario){//para el modificar de todos los usuarios
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="SELECT * FROM citas WHERE Id_usuario=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario));

		$resultado=$query->fetchAll(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}


	// metodo para que el barberro visualize las citas que tiene asignadas
	function Mis_citas_asignadas($barbero){//para el modificar de todos los usuarios
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="SELECT * FROM citas WHERE Barbero=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($barbero));

		$resultado=$query->fetchAll(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}



	function ReadAll(){//para el administrador y el barbero
		$conexion=BarberGarage_BD::Connect();
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$consulta="SELECT * FROM citas";
		$query=$conexion->prepare($consulta);
		$query->execute();

		$resultado=$query->fetchAll(PDO::FETCH_BOTH);

		BarberGarage_BD::Disconect();

		return $resultado;		
	}

	function ValidoCita($fecha, $hora, $barbero, $formato, $minutos){

		//Instanciamos y nos conectamos a la bd
		$Conexion = BarberGarage_BD::Connect();
		$Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

		//Crear el query que vamos a realizar
		$consulta = "SELECT * FROM citas WHERE Fecha =? AND Hora = ? AND Barbero =? AND Formato =? AND Minutos =? ";

		$query = $Conexion->prepare($consulta);
		$query->execute(array($fecha, $hora, $barbero, $formato, $minutos ));

		//Devolvemos el resultado en un arreglo
		//Fetch: es el resultado que arroja la consulta en forma de un vector o matriz segun sea el caso
		//Para consultar donde arroja mas de un dato el fatch debe ir acompañado con la palabra ALL

		$resultado = $query->fetch(PDO::FETCH_BOTH);
		return $resultado;

		BarberGarage_BD::Disconnect();
	}


	//seleccionar una hora segun el horario de la barberia

	
}


 ?>