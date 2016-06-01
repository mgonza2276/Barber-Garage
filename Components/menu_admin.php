

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../View/estilos_componentes.css">

    <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>
    


  
<!-- submenu configuracion administrador desktop -->
<ul id="submenu_sesion_admin_desktop" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/edita-mi-perfil-admin.php">Mi Perfil</a></li>
  <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/cerrarsesion.php">Cerrar Sesion</a></li>
</ul>

<!-- submenu configuracion administrador movil -->
<ul id="submenu_sesion_admin_movil" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/edita-mi-perfil-admin.php">Mi Perfil</a></li>
  <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/cerrarsesion.php">Cerrar Sesion</a></li>
</ul>


<!-- submenu de gestionar usuarios desktop -->
<ul id="sub_menu_gest_usuario_desktop" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/agregar_usuario.php">Ingresar Usuarios</a></li>
  <li><a class="indigo-text text-darken-4" href="../View/gestion_usuarios.php">Consultar Usuarios</a ></li>
  <!-- <li><a class="indigo-text text-darken-4" href="">Modificar Usuarios</a ></li> -->
</ul>


<!-- submenu de gestionar usuarios movil -->
<ul id="sub_menu_gest_usuario_movil" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/agregar_usuario.php">Ingresar Usuarios</a></li>
  <li><a class="indigo-text text-darken-4" href="../View/gestion_usuarios.php">Consultar Usuarios</a ></li>
  <!-- <li><a class="indigo-text text-darken-4" href="">Modificar Usuarios</a ></li> -->
</ul>



<!-- submenu de gestionar barberia desktop -->
<ul id="sub_menu_gest_barberia_desktop" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/Registrar_barberia.php">Registar Barberia</a></li>
  <li><a class="indigo-text text-darken-4" href="../View/agregar_servicio.php">Agregar Servicios</a ></li>
  <!-- <li><a class="indigo-text text-darken-4" href="">Modificar Servicios</a ></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/gestion_servicio.php">Consultar Servicios</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/gestion_barberias.php">Consultar Barberias </a ></li>
</ul>


<!-- submenu de gestionar barberia movil -->
<ul id="sub_menu_gest_barberia_movil" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="../View/Registrar_barberia.php">Registar Barberia</a></li>
  <li><a class="indigo-text text-darken-4" href="../View/agregar_servicio.php">Agregar Servicios</a ></li>
  <!-- <li><a class="indigo-text text-darken-4" href="">Modificar Servicios</a ></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/gestion_servicio.php">Consultar Servicios</a ></li>
  <li><a class="indigo-text text-darken-4" href="../View/gestion_barberias.php">Consultar Barberias </a ></li>
</ul>


  <!-- desktop -->

<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio_administrador" href="../View/Dashboard_Admin.php">Inicio</a></li>
        
        <li><a class="dropdown-button gestionar_usuarios" href="#!" data-activates="sub_menu_gest_usuario_desktop">Gestionar  Usuarios</a></li>

        <li><a class="consultar_citas" href="#">Consultar Citas</a></li>
        
        <li><a class="dropdown-button gestionar_barberia" href="#!" data-activates="sub_menu_gest_barberia_desktop">Gestionar Barberia</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_admin_desktop"><?php echo $_SESSION["Nombre"] ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      

    <!-- movil -->
      
      <ul class="side-nav" id="mobile-demo">

        <li><a class="inicio_administrador" href="Dashboard_Admin.php">Inicio</a></li>
        <li><a class="dropdown-button gestionar_usuarios" href="#!" data-activates="sub_menu_gest_usuario_movil">Gestionar Usuarios</a></li>

        <li><a class="consultar_citas" href="#">Consultar Citas</a></li>
        
        <li><a class="dropdown-button gestionar_barberia" href="#!" data-activates="sub_menu_gest_barberia_movil">Gestionar Barberia</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_admin_movil"><?php echo $_SESSION["Nombre"] ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      
    </div>
  </nav>
  




