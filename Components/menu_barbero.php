 <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../View/estilos_componentes.css">

    <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>


     <!-- submenu configuracion barbero -->
<ul id="submenu_sesion_barbero" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="#!">Mi Perfil</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/index.php">Cerrar Sesion</a></li>
</ul>

<!-- submenu Citas -->
<ul id="citas_barbero" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="#!">Reservar Cita</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Modificar Cita</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Consultar Cita</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Mis Citas Asignadas</a ></li>
</ul>


<!--  -->

<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio_barbero" href="Dashboard_Barbero.php">Inicio</a></li>
        
        <li><a class="dropdown-button gest_citas" href="#!" data-activates="citas_barbero">Citas</a></li>

        <li><a class="Cortes_barbero" href="#">Ver Cortes</a></li>

        <li><a class="Con_usuarios" href="#">Consultar Usuarios</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_barbero">Nombre del barbero<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>


      <ul class="side-nav" id="mobile-demo">
		
		<li><a class="inicio_barbero" href="Dashboard_Barbero.php">Inicio</a></li>
        
        <!-- <li><a class="dropdown-button" href="#!" data-activates="citas_barbero">Citas</a></li> -->

        <li><a class="Cortes" href="#">Ver Cortes</a></li>

        <li><a class="Con_usuarios" href="#">Consultar Usuarios</a></li>
        
        <!-- <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_barbero">Nombre del barbero<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
		
	 </div>
  </nav>
  