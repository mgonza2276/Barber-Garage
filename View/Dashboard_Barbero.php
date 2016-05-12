<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Dashboard Barbero</title>

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize/materialize/css/materialize.css"  media="screen,projection"/>

	<!-- para los iconos -->
    <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="estilos.css">

	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

</head>
<body>


	<?php include_once("../Components/menu_barbero.php"); ?>
	
	
	<div class="row ">
      <div class="col  s12 m12 l12  header" ></div>
    </div>
	



<div class="container">
<div class="row">
    <div class="col s12 m6 l6 iconos  red darken-4"><h3>Citas</h3><a href="#"><i class="fa fa-calendar-o "></i></a><br>
	<a class="links" href="#">Reservar Cita</a><br>
	<a class="links" href="#">Modificar Cita</a><br>
	<a class="links" href="#">Consultar Cita</a><br>
	<a class="links" href="#">Mis Citas Asignadas</a>

    </div>
    <div class="col s12 m6 l6  iconos  red darken-3"><h3>Cortes</h3><a href="#"><i class="fa fa-picture-o"></i></a><br>
	<a class="links" href="#">Ver Cortes</a><br>
	<a class="links" href="#">Ver Estilos de Barba</a>
    </div>


    <div class="col s12 m6 l6  iconos  red darken-3"><h3>Consultar usuarios</h3><a href="#"><i class="fa fa-users"></i></a><br>
	<a class="links" href="#">Consultar Usuarios</a>
    </div>

    <div class="col s12 m6 l6  iconos  red darken-4"><h3>Configuracion</h3><a href="#"><i class="fa fa-cog"></i></a><br>
	<a class="links" href="#">Mi perfil</a><br>
	<a class="links" href="#">Cambiar mi Contraseña</a>

    </div>
  </div>

</div>
	

	<?php include_once("../Components/footer.php"); ?>


	
</body>
</html>