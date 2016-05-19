  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../View/estilos_componentes.css">

    <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>




   <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="edita-mi-perfil.php">Mi Perfil</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/cerrarsesion.php">Cerrar Sesion</a></li>
</ul>

<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio" href="sesion_iniciada.php">Inicio</a></li>
        <li><a class="acerca" href="#">Acerca de <br> Barber Garage</a></li>
        <li><a class="contacto" href="#">Contacto</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION["Nombre"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li><a class="inicio" href="sesion_iniciada.php">Inicio</a></li>
        <li><a class="acerca" href="#">Acerca de...</a></li>
        <li><a class="contacto" href="#">Contacto</a></li>
        <!-- <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Nombre del usuario<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
    </div>
  </nav>


  <!--Import jQuery before materialize.js-->
        <!--<script type="text/javascript" src="..\View\Materialize\jquery-1.12.1.min.js"></script>-->
        <!--<script type="text/javascript" src="..\View\Materialize\materialize\js\materialize.js"></script>-->

