<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregar_Servicio</title>
    <link  rel="stylesheet" type="text/css" href="estilos.css">
	 <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
    
    <!-- iconos -->
      <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

    <!-- plugins de las sweetalerts -->
    <script src="sweetalert-master/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

    <!-- mapas -->
    <script type="text/javascript" src="gmaps/gmaps.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
    
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
                        <h4>Agregar Servicio</h4>
                            
                            <input type="text" name="Id_servicio" placeholder="Número de servicio" required />
                                                        
                            <input type="text" name="Nombre" placeholder="Nombre del servicio" required />
                                                     
                            <input type="text" name="Precio" placeholder="Precio" required />

                            <input type="text" name="Duracion" placeholder="Duracion" />
                            
                            <button id="btnreg" type="submit"  class="waves-effect  btn-large green" style="width:100%" name="acc" value="c">Agregar
                            </button>
                            <button class="waves-effect  btn-large red" style="width:100%">Cancelar
                            </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <?php include_once("../Components/footer.php") ?> 		
	
</body>
</html>