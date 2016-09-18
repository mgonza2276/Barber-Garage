<?php
session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/servicio.class.php");
  require_once("../Model/empleados.class.php");
  require_once("../Model/barberias.class.php");
    if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");
    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
  date_default_timezone_set("America/Bogota" ) ;
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
    <!-- <script type="text/javascript" src="calendario\calendario.js"></script> -->
    <!-- inicializacion del calendario y los selects -->
    <script>
    $(document).ready(function()
    {
      var horaactual = "<?php echo date("H:i");?>";
      var fechaval = $("fechaval").val();
      var horadesde  = $("#hora").val();
     <?php
      if(isset($_GET["msn"]))
      {
        echo "swal( '".$_GET["msn"]."','', 'success');";
      }
    ?>
    $('select').material_select();
    // $('#fecha_cita').datepicker(
    // {
    //   showOn: "button",
    //   buttonImage:"calendario/images/calen.png",
    //   buttonImageOnly:true,
    //   showButtonPanel:true,
    //   minDate: "-0D"
    // });
  function validafecha(){
   var horaactual = "<?php echo date("H:i");?>";
   var fechaval = "<?php echo date('Y-m-d'); ?>";
   var fecha_cita = $("#fecha_cita").val();
  //  var fec = $("#fechaval").val();
   var horadesde  = $("#hora").val();
    if (fecha_cita==fechaval){
     if(horadesde < horaactual){
       swal("debe elegir una hora superior a la hora actual "+horaactual+" hs");
        

     }else{
       validaCita($("#hora").val());
     }
   }else{
      validaCita($("#hora").val());
   }

}
  function validaCita(hora)
  {
          var fecha_cita  = $("#fecha_cita").val();
          var hora        = hora;
          var barbero     = $("#emple").val();
          var usuario     = $("#Id_usuario").val();
          var barberia    = $("#Cod_barberia").val();



          var accion      = "valida_citas";



          $.post("../Controller/Citas.controller.php", {hora: hora, acc: accion, fecha_cita: fecha_cita, barbero: barbero, usuario:usuario, barberia:barberia, horaactual:horaactual, fechaval:fechaval, horadesde:horadesde}, function(result)
          {

              if(result.ue == true)
                 {
                    $("#btnreg").val("disabled",true);
                    swal(result.msn);
                 }else{

                    document.getElementById("frm").submit();
                 }
          },"json");
        //   alert(result);
        //});
      }
    // $("#hora").keyup(function()
    //     {
    //         //se asigna el valor de #hora a la variable #horafinal.
    //         $("#horafinal").val($("#hora").val());
    //         validaCita($("#horafinal").val());
    //     });
         $("#btnreg").click(function() {
          //aqui el de los campos

           if($("input").val() == "" || $("select").val() == ""){
            swal("Los campos no deben ir vacios!");
           }else{
             validafecha($("#fechaval").val());
            }
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
<body background="imagenes/reloj.jpeg">
  <?php include_once("../Components/menu_barberias.php") ?>
<div class="container">
  <div class="row">
    <div id="centro" class="col l6 s12 m8 offset- m4">
      <form action="../Controller/Citas.controller.php" method="POST" id="frm">
        <center>
          <h4>Citas</h4>
              <div class="input-field col l12 s12 m12">
              <!-- provisional de la fecha con calendario -->
              <input type="date" name="Fecha" min="<?php echo date('Y-m-d');?>"  required id="fecha_cita"/>
              <!-- textbox provisional del horario -->
              <!-- combobox de servicios -->
              </div>
              <div class="input-field col l12 s10 m10 offset-s1 l1 m2">
                <?php
                    $services=Gestionar_servicio::ReadAll();
                ?>
              <select name="Servicio">
                <option disabled selected>Seleccione un servicio</option>
                <?php
                  foreach ($services as $row)
                  {
                ?>
                <option value="<?php echo $row["Nombre"] ?>" ><?php echo $row["Nombre"] ?></option>
                <?php
                  }
                ?>
              </select>
              </div>
              <!-- combobox de los barberos -->
              <div class="input-field col l12 s10 m10 offset-s1 l1 m2">
                <?php
                    $barberos=Gestion_empleados::ReadByBarberia($_SESSION["nit"])
                ?>
              <select name="Barbero" id="emple" >
                <option value="" disabled selected>Seleccione un Barbero</option>
                  <?php
                    foreach ($barberos as $row)
                    {
                  ?>
                <option value="<?php echo $row["Nombre"] ?>"><?php echo $row["Nombre"] ?></option>
                    <?php
                      }
                    ?>
                </select>
                <?php
                    $horario=Gestion_barberias::ValidaBarberia($_SESSION["nit"]);
                    //Capturamos la hora de atencion en la barberia
                    $fin=$horario["Hora_fin"];
                    $inicio=$horario["Hora_inicio"];

                ?>
                    <input type="time" max="<?php echo $fin ?>" min="<?php echo $inicio ?>" name="Hora" id="hora"  step="1800" ></input>
                    <span type="hidden" id="horafinal"></span>
                    <!-- captura de fecha actual -->
                    <span type="hidden" id="fechaval" value="<?php echo date('Y-m-d');?>"></span>
                </div>
                <input type="hidden" id="Id_usuario" name="Id_usuario" value="<?php echo $_SESSION["Id_usuario"]; ?>"/>
                <input type="hidden" id="Cod_barberia" name="Cod_barberia" value="<?php echo $_SESSION["nit"]; ?>"/>
                <input type="hidden" name="acc" value="R">
                <span id="resultadobusqueda" class="red-text accent-3 left" style="margin-left: 50px;"> </span>
                <div class="col l12 s12 m12">


                <div class="col l6 s12 m6">
                  <button id="btnreg" type="button"  class="waves-effect  btn-large green" style="width:100%">
                    Reservar cita
                  </button>
                </div>
                <div class="col l6 s12 m6">
                  <button class="waves-effect  btn-large red" href="Dashboard_Cliente.php" style="width:100%"><a href="Dashboard_Cliente.php" style="color:white; font-size:14px;">Cancelar</a></button>
                </div>
                </div>
                </center>
                </form>
            </div>
        </div>
    </div>
    <?php
      include_once("../Components/footer.php")
    ?>

</body>
</html>
