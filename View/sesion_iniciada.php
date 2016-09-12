<?php
include_once("../Model/barberias.class.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Barber Garage</title>

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize/materialize/css/materialize.css"  media="screen,projection"/>

  <!-- iconos -->
  <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="estilos.css">

  <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

    <script>
      $(document).ready(function() {
      $('select').material_select();
  });
    </script>

</head>
<body Class="fondo">



  <?php include_once("../Components/menu_sesion_iniciada.php") ?>
  <div class="container ">


    <div class="row">
        <div class="col s12 m6">
          <div class="cardb blue-grey lighten-4" id="BarberG">
            <div class="card-content black-text">
              <p>Barber Garage es la <br> aplicacion ideal para <br> reservar tus citas en tu <br> barberia favorita</p>
            </div>
          </div>
        </div>


    <div class="col s12 m6 l6">
          <div class="cardb blue-grey lighten-4" id="BarberG">
            <div class="card-content black-text col s12 m12 l12">
              <h1>Encuentra tu Barberia Favorita</h1>

              <form action="../Controller/validabarberia.controller.php" method="post">

              <div class="input-field col l8 offset-l2 s12">
                  <?php
                      $barberias= Gestion_barberias::ReadAll();
                     ?>
                  <div class="col l12 s12 m12">
                    <label style="color:black;">Seleccione una barberia :</label>
                    <br>
                  </div>
                  <div class="col l12 s12 m12">
                    <select name="nit" required>
                      <!-- <option disabled selected>Seleccione una barberia</option> -->
                      <?php
                        foreach ($barberias as $barberia) {
                      ?>
                      <option name="barberia"  value="<?php echo $barberia[0]; ?>" required="true">
                              <?php echo $barberia[1]; ?>
                      </option>
                     <?php }  ?>
                    </select>
                  </div>

              </div>
              <div class="input-field col l8  s10 m8">
                <button type="submit" id="boton" class="waves-effect waves-light btn  light-blue darken-2 btn_entrar_bar">Entrar a la Barberia</button>
              </div>
              </form>
              </div>

            </div>
          </div>
        </div>

    </div>


  <?php include_once("../Components/footer.php") ?>





  <!--Import jQuery before materialize.js-->

</body>
</html>
