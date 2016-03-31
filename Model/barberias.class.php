<?php
	class Gestion_barberias{

		// Metodo Create()
		// El metodo guarda los datos en la tabla contactos, captura todos los parametros desde el formulario.
		function Create($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad){
			//Instanciamos y nos conectamos a la bd
			$conexion=BarberGarage_BD::Connect();
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			//Crear el query que vamos a realizar.
			$consulta ="INSERT INTO barberia (Cod_barberia,Nombre,Direccion,Telefono,Ciudad) VALUES (?,?,?,?,?)";

			$query = $conexion->prepare($consulta);
			$query->execute(array($Cod_barberia,$Nombre,$Direccion,$Telefono,$Ciudad));

			BarberGarage_BD::Disconect();
		}	
	}
?>