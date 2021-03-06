<?php
 session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/Citas.class.php");
  require_once("../Model/servicio.class.php");
  require_once("../Model/empleados.class.php");
  require_once("../Model/barberias.class.php");

   if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: ../View/index.php?m=".$msn."&tm=".$tipo_msn);
  }

 $citas =Gestionar_citas::ReadbyID(base64_decode($_REQUEST["ct"]));
?>

    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>modificar citas</title>
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


     <script src="sweetalert-master/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">


    <!-- calendario de citas -->

    <link rel="stylesheet" href="calendario\calendario.css">
    <script type="text/javascript" src="calendario\calendario.js"></script>

	<!-- inicializacion del calendario y los selects -->

    <script>
  $(function() {
    $('select').material_select();
    $('#fecha_cita').datepicker({

      showOn: "button",
      buttonImage:"calendario/images/calen.png",
      buttonImageOnly:true,
      showButtonPanel:true,
      minDate: "-0D"
    });

  });
  </script>





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

	<?php include_once("../Components/menu_barberias.php") ?>

<div class="container">
        <div class="row">
            <div id="centro" class="col l6 offset-l3">
                <form action="../Controller/Citas.controller.php" method="POST">
                    <center>
                        <h4>Modificar Cita</h4>
                    </center>


                          <!-- codigo de la cita -->
                          <label id="label_cita">Numero de cita :</label>
                          <input type="text" name="Cod_cita"  value="<?php echo $citas[0] ?> " readonly/>


                        	<!--fecha con calendario -->
                          <label>Fecha :</label>
                        	<input type="text" name="Fecha" placeholder="clic en el calendario" id="fecha_cita" value="<?php echo $citas[1] ?>"/>



                        	<!-- combobox del horario -->

              <!-- hora -->



              <div class="input-field col s12">



                <div class="input-field col s5">
                  <?php 
                      $horario=Gestion_barberias::ValidaBarberia($_SESSION["nit"]);
                          //Capturamos la hora de atencion en la barberia
                           $fin=$horario["Hora_fin"];
                            $inicio=$horario["Hora_inicio"];
                   ?>
                  <label id="label_hora">Hora: </label>
    						  <input type="time" name="Hora" max="<?php echo $fin ?>" min="<?php echo $inicio ?>" value="<?php echo $citas[2]?>"></input>
  							</div>






              </div>


                        	<!-- combobox de servicios -->

                            <div class="input-field col l12">
                            <label id="label_servicio">Servicio :</label>
							<?php
							$services=Gestionar_servicio::ReadAll();
 							?>

                <select name="Servicio">
    						<?php foreach ($services as $row) {
                  echo '<option  value = "'.$row[1].'"';
                  if ($row["Nombre"]==$citas[4]) {
                      echo "selected";
                    }


                  echo '>'.$row["Nombre"].'</option>';
                  ?>

                <?php } ?>
    						</select>
  							</div>

                            <!-- combobox de los barberos -->

                            <div class="input-field col s12">
                            <label id="label_barbero">Barbero :</label>
                            <?php $barberos=Gestion_empleados::ReadByBarberia($citas[7])

                            ?>

    						<select name="Barbero" id="emple">

    						<?php foreach ($barberos as $row) {
                  echo '<option  value = "'.$row[2].'"';
              		if ($row["Nombre"]==$citas[6]) {
              				echo "selected";
              			}


              		echo '>'.$row["Nombre"].'</option>';
    							?>

    						<?php } ?>

    						</select>

  							</div>



  							<input type="hidden" name="Id_usuario" value="<?php echo $_SESSION["Id_usuario"]; ?>"/>


                <input type="hidden" name="Cod_barberia" value="<?php echo $_SESSION["nit"]; ?>"/>



                            <button id="btnreg" type="submit"  class="waves-effect  btn-large green" style="width:100%" name="acc" value="U">Modificar Cita
                            </button>
                            <a class="waves-effect  btn-large red" href="Mi_Cita.php?ja=<?php echo $_SESSION["Id_usuario"] ?>" style="width:100%">Cancelar
                            </a>

                </form>
            </div>
        </div>
    </div>


<?php include_once("../Components/footer.php") ?>

<?php echo $citas[4]; ?>
</body>
</html>
