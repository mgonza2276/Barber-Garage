<?php
 session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/servicio.class.php");

   if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: ../View/index.php?m=".$msn."&tm=".$tipo_msn);
  }

 $servicios =Gestionar_servicio::ReadbyID(base64_decode($_REQUEST["ui"]));
?>

    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>actualizacion de servicios</title>
	<link  rel="stylesheet" type="text/css" href="estilos.css">
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="mis-estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

	 <!-- iconos -->
  	  <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

    <!-- plugins de las sweetalerts -->
    <script src="sweetalert-master/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">


   <!-- para las alertas -->
  <?php 
      
if(isset($_GET["m"]) and isset($_GET["tm"])){
         if($_GET["m"] != ""){
           echo "<script>
                   $(document).ready(function(){
                      sweetAlert({
                           title: '...',   
                           text: '".$_GET["m"]."',   
                           type: '".$_GET["tm"]."',   
                           showCancelButton: false,
                           confirmButtonColor: '#4db6ac',   
                           confirmButtonText: 'Aceptar',   
                          cancelButtonText: 'No, cancel plx!',   
                           closeOnConfirm: false,   
                           closeOnCancel: false
                       });
                   });
                </script>";
           }
         }
?>
  

</head>

<body>
	
	<?php include_once("../Components/menu_admin.php") ?>

<div class="container">
        <div class="row">
            <div id="centro" class="col l4 offset-l4">
                <form action="../Controller/servicios.controller.php" method="POST">
                    <center>
                        <h4>Editar Servicio</h4>
                            
                		<input type="text" name="Id_servicio" placeholder="Número de servicio" required value="<?php echo $servicios[0]; ?>" />
                                                        
                		<input type="text" name="Nombre" placeholder="Nombre del servicio" required value="<?php echo $servicios[1] ?>"/>
                                                     
                		<input type="text" name="Precio" placeholder="Precio"  value="<?php echo $servicios[2] ?>"/>

                		<input type="text" name="Duracion" placeholder="Duracion" value="<?php echo $servicios[3] ?>"/>
                            
                		<button id="btnreg" type="submit"  class="waves-effect  btn-large green" style="width:100%" name="acc" value="u">Actualizar
                            </button>
                		<a  class="waves-effect  btn-large red" href="gestion_servicio.php" style="width:100%">Cancelar
                            </a>
                    </center>
                </form>
            </div>
        </div>
    </div>
   		
	<?php include_once("../Components/footer.php") ?>	

</body>
</html>        