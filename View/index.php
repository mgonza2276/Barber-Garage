<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barber Garage</title>

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="estilos.css">
</head>
<body Class="fondo">

	 

	<?php include_once("../Components/menu.php") ?> 

  <div class="container ">
  

    <div class="row">
        <div class="col s12 m6  ">
          <div class="card blue-grey darken-1 ">
            <div class="card-content white-text">
              <p>Barber Garage es la <br> aplicacion ideal para <br> reservar tus citas en tu <br> barberia favorita</p>
            </div>
          </div>
        </div>

		
		<div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <h1>Encuentra tu <br>Barberia Favorita</h1>
              <a class="waves-effect waves-light btn btn-buscar">Buscar Barberia</a>
            </div>
          </div>
        </div>

    </div>

  </div>    
  <?php include_once("../Components/footer.php") ?>

      
   
	
	
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
</body>
</html>