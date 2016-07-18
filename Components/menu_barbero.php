<?php @session_start();  ?>
 <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../View/estilos_componentes.css">

    <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>


     <!-- submenu configuracion barbero desktop -->
<ul id="submenu_sesion_barbero_desktop" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="editar_mi_perfil_barbero.php">Mi Perfil</a></li>
  <!-- <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/index.php">Cerrar Sesion</a></li>
</ul>

     <!-- submenu configuracion barbero movil -->
<ul id="submenu_sesion_barbero_movil" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="editar_mi_perfil_barbero.php">Mi Perfil</a></li>
  <!-- <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/index.php">Cerrar Sesion</a></li>
</ul>


<!-- submenu Citas desktop -->
<ul id="citas_barbero_desktop" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>">Mis Citas Asignadas</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>">Modificar Citas</a ></li>
</ul>

<!-- submenu Citas movil -->
<ul id="citas_barbero_movil" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>">Mis Citas Asignadas</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/Mis_Citas_Asignadas.php?mca=<?php echo $_SESSION["Nombre"] ?>">Modificar Citas</a ></li>
  
  
</ul>


<!-- desktop -->

<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio_barbero" href="Dashboard_Barbero.php">Inicio</a></li>
        
        <li><a class="dropdown-button gest_citas" href="#!" data-activates="citas_barbero_desktop">Citas</a></li>

        <li><a class="Cortes_barbero" href="../View/gestionar_servicios.php">Servicios</a></li>

        <li><a class="Con_usuarios" href="../View/consulta_usuarios.php">Consultar Usuarios</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_barbero_desktop"><?php echo $_SESSION["Nombre"] ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>



<!-- movil -->
      <ul class="side-nav" id="mobile-demo">
		
		<li><a class="inicio_barbero" href="Dashboard_Barbero.php">Inicio</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="citas_barbero_movil">Citas</a></li>

        <li><a class="Cortes" href="../View/gestionar_servicios.php">Servicios</a></li>

        <li><a class="Con_usuarios" href="#">Consultar Usuarios</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_barbero_movil"><?php echo $_SESSION["Nombre"] ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
		
	 </div>
  </nav>
  