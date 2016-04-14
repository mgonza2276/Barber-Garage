<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu de navegacion</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="estilos_componentes.css">

    

</head>
<body>
	 <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>

	<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio" href="../View/index.php">Inicio</a></li>
        <li><a class="acerca" href="badges.html">Acerca de...</a></li>
        <li><a class="contacto" href="collapsible.html">Contacto</a></li>
        <li><a class="waves-effect waves-light btn " href="Login.php">Iniciar Sesion</a></li>
        <li><a class="waves-effect waves-light btn " href="registro_usuario.php">Registrarme</a></li>
      </ul>
      
      <ul class="side-nav" id="mobile-demo">
        <li><a class="inicio" href="index.php">Inicio</a></li>
        <li><a class="acerca" href="badges.html">Acerca de...</a></li>
        <li><a class="contacto" href="collapsible.html">Contacto</a></li>        
        <li><a class="waves-effect waves-light btn ">Iniciar Sesion</a></li>
        <li><a class="waves-effect waves-light btn ">Registrarme</a></li>
      </ul>
    </div>
  </nav>

	
	
	<!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="..\View\Materialize\jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="..\View\Materialize\materialize\js\materialize.js"></script>

</body>
</html>