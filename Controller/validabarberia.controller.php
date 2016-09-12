<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/barberias.class.php");


  $Cod_barberia = $_POST["nit"];


  try {
    $barberia = Gestion_barberias::ValidaBarberia($Cod_barberia);
    // El metodo count nos sirve para contar el numero de registros que retorno de la consulta
    $barberia_existe = count($barberia[0]);
    if($barberia_existe == 0){
    // Header("Location: destino.php") redireccionar en php
    // Encriptacion a traves de base64_encode, base64_decode

       $msn = "la barberia no existe!";
       $tipo_msn = base64_encode("advertencia");       
       header("Location:../View/sesion_iniciada.php?m=".$msn."&tm=".$tipo_msn);
    }else{
      // Creamos variables de SESSION
      $_SESSION["nit"]     = $barberia[0];
      $_SESSION["nombre"]         = $barberia[1];
      header("Location:../View/Dashboard_Cliente.php");

    }
  } catch (Exception $e) {

    $msn = base64_encode("A ocurrido un error ".$e->getMessage());
    $tipo_msn = base64_encode("error");

   header("Location: ../View/sesion_iniciada.php?m=".$msn."&tm=".$tipo_msn);
  }



?>
