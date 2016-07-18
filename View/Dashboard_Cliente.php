<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<meta charset="UTF-8">
	<title>Dashboard Cliente</title>

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


	<?php include_once("../Components/menu_barberias.php"); ?>


	<div class="row ">
      <div class="col  s12 m12 l12  header" ></div>
    </div>




<div class="container">
<div class="row">

    <div class="col s12 m6 l6 iconos  red darken-4"><h3>Citas</h3><a href="#"><i class="fa fa-calendar-o "></i></a><br>
	<!-- <a class="links" href="#">Reservar Cita</a><br>
	<a class="links" href="#">Modificar Cita</a> -->
	<div class="row">
      <a href="Reservar_Citas.php" class="tooltipped col s2 offset-l4 offset-s4 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Reservar Cita"><i class="fa fa-calendar-check-o ico"></i></a>
      <a href="Mi_Cita.php?ja=<?php echo $_SESSION["Id_usuario"] ?>" class="tooltipped col s2 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Modificar Cita"><i class="fa fa-retweet ico"></i></a>
    </div>
    </div>

    <div class="col s12 m6 l6  iconos  red darken-3"><h3>Cortes</h3><a href="#"><i class="fa fa-picture-o"></i></a><br>
	<!-- <a class="links" href="#">Ver Cortes</a><br>
	<a class="links" href="#">Ver Estilos de Barba</a> -->
	<div class="row">
      <a href="#" class="tooltipped col s2 offset-l5 offset-s5 red darken-4 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Ver Cortes"><i class="fa fa-file-image-o ico"></i></a>
    </div>
    </div>


    <div class="col s12 m6 l6  iconos  red darken-3"><h3>Perfil</h3><a href="#"><i class="fa fa-user icono_usuario"></i></a><br>
	<!-- <a class="links" href="#">Mi Perfil</a><br>
	<a class="links" href="#">Cambiar Contraseña</a> -->
	<div class="row">
      <a href="editar_mi_perfil.php" class="tooltipped col s2 offset-l5 offset-s5 red darken-4 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Mi Perfil"><i class="fa fa-user ico"></i></a>
    </div>

    </div>

    <div class="col s12 m6 l6  iconos  red darken-4"><h3>Servicios</h3><a href="#"><i class="fa fa-scissors icono_servicios"></i></a><br>
	<!-- <a class="links" href="#">Solicitar Servicio</a> -->
	<div class="row">
      <a href="consulta_servicios.php" class="tooltipped col s2 offset-l5 offset-s5 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Servicio"><i class="fa fa-scissors ico"></i></a>
    </div>
    </div>

  </div>

</div>


	<?php include_once("../Components/footer.php"); ?>



</body>
</html>
