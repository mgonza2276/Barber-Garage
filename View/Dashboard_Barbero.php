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
	<!-- <a class="links" href="#">Reservar Cita</a><br>
	<a class="links" href="#">Modificar Cita</a><br>
	<a class="links" href="#">Consultar Cita</a><br>
	<a class="links" href="#">Mis Citas Asignadas</a> -->
		<div class="row">
      		<a href="Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>" class="tooltipped col s2 offset-l4 offset-s4 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Mis Citas Asignadas"><i class="fa fa-calendar-check-o ico"></i></a>
      		<a href="Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>" class="tooltipped col s2 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Modificar Citas"><i class="fa fa-retweet ico"></i></a>
    	</div>
    </div>

    <div class="col s12 m6 l6  iconos  red darken-3"><h3>Cortes</h3><a href="#"><i class="fa fa-picture-o"></i></a><br>
	<!-- <a class="links" href="#">Ver Cortes</a><br>
	<a class="links" href="#">Ver Estilos de Barba</a> -->
		<div class="row">
      		<a href="#" class="tooltipped col s2 offset-l5 offset-s5 red darken-4 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Ver Cortes"><i class="fa fa-file-image-o ico"></i></a>
    	</div>
    </div>


    <div class="col s12 m6 l6  iconos  red darken-3"><h3 id="cons_usua">Consultar usuarios</h3><a href="#"><i class="fa fa-users icono_usuarios"></i></a><br>
	<!-- <a class="links" href="#">Consultar Usuarios</a> -->
		<div class="row">
      		<a href="consulta_usuarios.php" class="tooltipped col s2 offset-l5 offset-s5 red darken-4 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Consultar Usuarios"><i class="fa fa-users ico"></i></a>
    	</div>
    </div>

    <div class="col s12 m6 l6  iconos  red darken-4"><h3 id="configuracion">Configuración</h3><a href="#"><i class="fa fa-cog icono_configuracion"></i></a><br>
	<!-- <a class="links" href="#">Mi perfil</a><br>
	<a class="links" href="#">Cambiar mi Contraseña</a> -->
		<div class="row">
        	<a href="editar_mi_perfil_barbero.php" class="tooltipped col s2 offset-l5 offset-s5 red darken-3 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Mi Perfil"><i class="fa fa-cog ico"></i></a>
      	</div>
    </div>
  
  </div>

</div>
	

	<?php include_once("../Components/footer.php"); ?>


	
</body>
</html>