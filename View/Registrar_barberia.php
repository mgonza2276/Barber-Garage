<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Registrar_Barberia</title>
	<link  rel="stylesheet" type="text/css" href="estilos.css">
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>


    <link rel="stylesheet" type="text/css" href="sweet/dist/sweetalert.css">
    <script src="sweet/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- mapas -->
    <script type="text/javascript" src="gmaps/gmaps.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	
  	<script type="text/javascript">
    var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
      });
      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
          alert("Hola, Humano!");
        }
      });
    });
  </script>
</head>
<body id="fondo">
<?php  
  include("../Components/menu_admin.php");
?>
	
	<div class="container">

      	<div class="row">

      		<div id="formulario" class="col l6 offset-l3">
          		<form action="../Controller/barberias.controller.php" method="POST">
            		<div class="col l12  input-field"  >
             <!-- aqui -->
             			<center><h4>Registrar Barberia</h4></center>
            			<div class="col l6 input-field ">
            <!-- aqui -->
              
              				<i class="fa fa-hashtag prefix"></i>
              					<input type="text" placeholder="NIT" name="nit"/>
              				<i class="material-icons prefix">store</i>
              					<input type="text" placeholder="Nombre" name="nombre" />
              				<i class="material-icons prefix">location_on</i>
             				 	<input type="text" placeholder="Direccion" name="direccion"/>
              				<i class="material-icons prefix">phone</i>
              					<input type="number" placeholder="Telefono" name="telefono" />
              				<i class="material-icons prefix">business</i>
              					<input type="text" placeholder="Ciudad" name="ciudad" />
              				<a id="boton" class="waves-effect  btn-large red "  >Cancelar</a>
             			</div>            
            			<div class="col l6 input-field">
            				<b>Selecciona tu ubicacion :</b>
                  			<div id="map">
                  			</div>
                  			<button id="boton" name="acc" value="c" class="waves-effect  btn-large green " >Registrar</button>       
             			</div> 
						
             				
             			   
            		</div>
          		</form>     
        	</div>
		</div>
	</div>
  <?php  
  include("../Components/footer.php");
?>

		
</body>
</html>