<?php

session_start();

  require_once("../Model/conexion.php");
  require_once("../Model/servicio.class.php");
  require_once("../Model/empleados.class.php");

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
  $(document).ready(function()
  {
     <?php

      if(isset($_GET["msn"]))
      {
        echo "swal( '".$_GET["msn"]."','', 'success');";
      }
    ?>
    $('select').material_select();
    $('#fecha_cita').datepicker(
    {

      showOn: "button",
      buttonImage:"calendario/images/calen.png",
      buttonImageOnly:true,
      showButtonPanel:true,
      minDate: "-0D"


    });

  function validaCita(hora)
  {
          var hora        = hora;
          var fecha_cita  = $("#fecha_cita").val();
          var empleado    = $("#emple").val();
          // var formato     = $("#formato").val();
          var min         = $("#min").val();
          var accion      = "valida_citas";

          $.post("../Controller/Citas.controller.php", {hora: hora, acc: accion, emple: empleado, fecha_cita: fecha_cita, min:min}, function(result)
          {
                 if(result.ue == true)
                 {
                    swal(result.msn);
                    $("#btnreg").prop("disabled",true);
                 }else
                  {
                    $("#btnreg").prop("disabled",false);
                  }
          },"json");
    }
        $("#hora").change(function()
        {
            //se asigna el valor de #hora a la variable #horafinal.
            $("#horafinal").val($("#hora").val());
            validaCita($("#horafinal").val());
        });
        $("#emple").change(function()
        {
            validaCita($("#horafinal").val());
        });
        $("#min").change(function()
        {
            validaCita($("#horafinal").val());
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
                <input type="text" name="Fecha" placeholder="clic en el calendario" required id="fecha_cita" readonly  />
                          <!-- textbox provisional del horario -->
                <div class="input-field col s12">
                  <div class="input-field col s5">
                    <select name="Hora" id="hora" required>
                      <option value="" disabled selected>Seleccione la hora </option>
                      <option value="12">12</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                    </select>
                </div>
                <input type="hidden" name="horafinal" id="horafinal">
                  <div class="input-field col s4">
                    <select name="Min" id="min">
                      <option required value="" disabled selected>Minutos</option>
                      <option value="00">00</option>
                      <option value="30">30</option>
                    </select>
                    </div>
                  <!--<div class="input-field col s4">
                    <input name="formato" type="radio" id="test1" value="am" checked required />
                  <label for="test1">am</label>
                  <input name="Formato" type="radio" id="test2" value="pm" />
                  <label for="test2">pm</label>
                  </div>-->
                  <div class="input-field col s2">
                    <label>hs</label>
                  </div>
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
                            <?php $barberos=Gestion_empleados::ReadAll() ?>
                <select name="Barbero" id="emple">
                <option value="" disabled selected>Seleccione un Barbero</option>
                <?php foreach ($barberos as $row) {
                  ?>
                  <option value="<?php echo $row["Nombre"] ?>"><?php echo $row["Nombre"] ?></option>
                <?php } ?>

                </select>

                </div>



                <input type="hidden" name="Id_usuario" value="<?php echo $_SESSION["Id_usuario"]; ?>"/>

                <input type="hidden" name="Cod_barberia" value="<?php echo $_SESSION["nit"]; ?>"/>


 <span id="resultadobusqueda" class="red-text accent-3 left" style="margin-left: 50px;"> </span>

                            <button id="btnreg" type="submit"  class="waves-effect  btn-large green" onclick="return validarCita()" style="width:100%" name="acc" value="R" >Reservar cita
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
