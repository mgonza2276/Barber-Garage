<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");

  if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
?>


<!-- menu del admin -->



<?php
if($_SESSION["Perfil"] =="Administrador"){

 include_once("Dashboard_Admin.php"); 
}

//menu usuario
elseif($_SESSION["Perfil"] =="Usuario"){


include_once("sesion_iniciada.php");
}

elseif($_SESSION["Perfil"] =="Empleado"){


include_once("Dashboard_Barbero.php");
}

?>