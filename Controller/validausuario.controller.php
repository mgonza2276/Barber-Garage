<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");
  

  $Id_usuario = $_POST["Id_usuario"];
  $Clave      = $_POST["Clave"];

  try {
    $usuario = Gestion_Usuarios::ValidaUsuario($Id_usuario, $Clave);

    // El metodo count nos sirve para contar el numero de registros que retorno de la consulta
    $usuario_existe = count($usuario[0]);
    $clave_existe= count($usuario[1]);


    if($usuario_existe == 0||$clave_existe==0){
    // Header("Location: destino.php") redireccionar en php
    // Encriptacion a traves de base64_encode, base64_decode

       $msn = "Usuario o clave invalidos!";
       $tipo_msn = base64_encode("advertencia");

       header("Location:../View/index.php?m=".$msn."&tm=".$tipo_msn);
    }else{

      // Creamos variables de SESSION

            
            

      $_SESSION["Id_usuario"]     = $usuario[0];
      $_SESSION["Cedula"]         = $usuario[2];
      $_SESSION["Nombre"]         = $usuario[3];
      $_SESSION["Direcion"]       = $usuario[4];
      $_SESSION["Telefono"]       = $usuario[5];
      $_SESSION["Celular"]        = $usuario[6];
      $_SESSION["Correo"]         = $usuario[7];
      $_SESSION["Perfil"]         = $usuario[8];

     header("Location:../View/comp_menu.php");

    }
  } catch (Exception $e) {

   $msn = base64_encode("A ocurrido un error ".$e->getMessage());
   $tipo_msn = base64_encode("error");

   header("Location: ../View/index.php?m=".$msn."&tm=".$tipo_msn);
  }



?>