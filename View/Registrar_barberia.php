<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta charset="UTF-8">
	<title>Registrar_Barberia</title>
	<link  rel="stylesheet" type="text/css" href="estilos.css">
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <!--links de materialize-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>


    <!-- iconos -->
    <link rel="stylesheet" href="iconos/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="sweet/dist/sweetalert.css">
    <script src="sweet/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- mapas -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>  	 -->
    <script type="text/javascript" src="gmaps/gmaps.js"></script>



  <?php
      if(isset($_GET["m"])){
        if($_GET["m"] !=""){
          echo "<script>alert('".$_GET["m"]."')</script>";
        }
      }
     ?>


  	<script>
    var map;
    $(document).ready(function(){
      var map = new GMaps
      ({
        el: '#map',
        lat: 6.244203,
        lng: -75.58121189999997,
         click: function(e){

          map.addMarker({
            lat: e.latLng.lat(),
            lng: e.latLng.lng()

          });


          $("#ltn").val(e.latLng.lat());
          $("#lng").val(e.latLng.lng());

        }
      });


      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);

        },
        error: function(error){
          alert('Geolocalizacion fallida: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },


        // always: function(){
        //   alert("Hola, Humano!");
        // }
      });
    });
  </script>
</head>
<body id="fondomapa">

<?php
  include("../Components/menu_admin.php");
?>


  <?php include_once("../Components/menu_admin.php") ?>


	<div class="container">

      	<div class="row">

      		<div id="formMapa" class="col l12 s12 m10 ">
          		<form action="../Controller/barberias.controller.php" method="POST">
            		<div class="col l12  input-field"  >
             <!-- aqui -->
             			<center><h4>Registrar Barberia</h4></center>
            			<div class="col l4 input-field ">
            <!-- aqui -->

              				<i class="fa fa-hashtag prefix"></i>
              					<input type="text" placeholder="NIT" name="nit" required/>
              				<i class="material-icons prefix">store</i>
              					<input type="text" placeholder="Nombre" name="nombre" required />
              				<i class="material-icons prefix">location_on</i>
             				 	<input type="text" placeholder="Direccion" name="direccion" required/>
              				<i class="material-icons prefix">phone</i>
              					<input type="number" placeholder="Telefono" name="telefono" required/>
              				<i class="material-icons prefix">business</i>
              					<input type="text" placeholder="Ciudad" name="ciudad" required/>
              				<input type="hidden" value="" name="Geo_x" id="ltn">
                      <input type="hidden" value="" name="Geo_y" id="lng">
             			</div>
            			<div class="col l8 input-field">
            				<b>Selecciona tu ubicacion :</b>
                  			<div id="map">
                  			</div>
                        <div class="col l6">
                        <button id="boton" name="acc" value="c" class="waves-effect  btn-large green " >Registrar</button>
                        </div>
                        <div class="col l6">
                        <a id="boton" class="waves-effect  btn-large red "  >Cancelar</a>
                        </div>

             			</div>
            		</div>
          		</form>
        	</div>
		</div>
	</div>

  <?php
  include("../Components/footer.php");
?>



		<?php include_once("../Components/footer.php") ?>

</body>
</html>
