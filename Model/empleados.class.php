<?php
  class Gestion_empleados {
  function ReadALL(){
    //Instanciamos y nos conectamos a la bd
    $conexion=BarberGarage_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    //Creamos el query de la consulta a la BD
    $consulta ="SELECT * FROM empleados WHERE Cod_barberia=".$_SESSION["nit"]."  ORDER BY Nombre";

    $query = $conexion->prepare($consulta);
    $query->execute();

    $results = $query->fetchALL(PDO::FETCH_BOTH);
    BarberGarage_BD::Disconect();

    return $results;


  }

  function ReadByBarberia($Cod_barberia){
    //Instanciamos y nos conectamos a la bd
    $conexion=BarberGarage_BD::Connect();
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    //Creamos el query de la consulta a la BD
    $consulta ="SELECT * FROM empleados WHERE Cod_barberia=?  ORDER BY Nombre";

    $query = $conexion->prepare($consulta);
    $query->execute(array($Cod_barberia));

    $results = $query->fetchALL(PDO::FETCH_BOTH);
    BarberGarage_BD::Disconect();

    return $results;


  }



  }

 ?>
