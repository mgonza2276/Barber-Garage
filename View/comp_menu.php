<!-- menu del admin -->
<?php
if($_SESSION["perfil"]=="Administrador"){

 include_once("sesion_iniciada.php"); 
}

//menu usuario
elseif($_SESSION["perfil"]=="Usuario"){


include_once("Dashboard_Admin");
}
?>