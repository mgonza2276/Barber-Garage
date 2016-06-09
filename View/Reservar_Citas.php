<?php 

session_start();

	require_once("../Model/conexion.php");
  require_once("../Model/servicio.class.php");
  require_once("../Model/usuarios.class.php");

  	if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reservar Citas</title>
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
  $(document).ready(function() {
    $('select').material_select();
    $('#fecha_cita').datepicker({
      
      showOn: "button",
      buttonImage:"calendario/images/calen.png",
      buttonImageOnly:true,
      showButtonPanel:true,
    
});

  $("#emple").change(function(){
          var hora = $("#hora").val();
          var fecha_cita = $("#fecha_cita").val();
          var empleado = $("#emple").val();
          var accion = "valida_citas";

          $.post("../Controller/Citas.controller.php", {hora: hora, acc: accion, emple: empleado, fecha_cita: fecha_cita}, function(result){

              
                 if(result.ue == true){ 
                    swal(result.msn);
                    $("#btnreg").prop("disabled",true);
                 }else{
                    $("#btnreg").prop("disabled",false);
                }
          },"json");
      });
  })
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
                        <h4>Citas</h4>

                   		
                        	
                        	<!-- provisional de la fecha con calendario -->
                        	<input type="text" name="Fecha" placeholder="clic en el calendario" id="fecha_cita"/>


                        	<!-- textbox provisional del horario -->
                        	<div class="input-field col s12">
    						<select name="Hora" id="hora">
      						<option value="" disabled selected>Seleccione la hora de su cita</option>
      						<option value="8:00 am">8:00 am</option>
      						<option value="8:30 am">8:30 am</option>
      						<option value="9:00 am">9:00 am</option>
    						</select>
                
  							</div>
               

                            
                        	<!-- combobox de servicios -->
                            <div class="input-field col l12">
							<?php 
							$services=Gestionar_servicio::ReadAll();
 							?>
    						<select name="Servicio">
    						<option disabled selected>Seleccione un servicio</option><?php 
							foreach ($services as $row) {
 							?>
 								
     							<option value="<?php echo $row["Nombre"] ?>" ><?php echo $row["Nombre"] ?></option>
      							<?php } ?>
    						</select>
  							</div>
                            
                            <!-- combobox de los barberos -->

                            <div class="input-field col s12">
                            <?php $barberos=Gestion_Usuarios::Barbero() ?>
    						<select name="Barbero" id="emple">
    						<option value="" disabled selected>Seleccione un Barbero</option>
    						<?php foreach ($barberos as $row) {
    							?>
    							<option value="<?php echo $row["Nombre"] ?>"><?php echo $row["Nombre"] ?></option>
    						<?php } ?> 
      						
    						</select>
  
  							</div>

  							

  							<input type="hidden" name="Id_usuario" value="<?php echo $_SESSION["Id_usuario"]; ?>"/>



 <span id="resultadobusqueda" class="red-text accent-3 left" style="margin-left: 50px;"> </span>

                            <button id="btnreg" type="submit"  class="waves-effect  btn-large green" style="width:100%" name="acc" value="R" >Reservar cita
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