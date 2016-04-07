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

  




  <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio" href="index2.php">Inicio</a></li>
        <li><a class="acerca" href="badges.html">Acerca de...</a></li>
        <li><a class="contacto" href="collapsible.html">Contacto</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      
      <ul class="side-nav" id="mobile-demo">
        <li><a class="inicio" href="index2.php">Inicio</a></li>
        <li><a class="acerca" href="badges.html">Acerca de...</a></li>
        <li><a class="contacto" href="collapsible.html">Contacto</a></li>        
        
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
  
  <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="..\View\Materialize\jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="..\View\Materialize\materialize\js\materialize.js"></script>

</body>
</html>