
 
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/Materialize/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../View/estilos_componentes.css">

    <script>$( document ).ready(function(){
     $(".button-collapse").sideNav();
     });</script>
    


  
<!-- Dropdown Structure -->
<ul id="submenu_sesion_admin" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="#!">Mi Perfil</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Cambiar Contraseña</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="../View/index.php">Cerrar Sesion</a></li>
</ul>

<!-- submenu de gestionar usuarios -->
<ul id="sub_menu_gest_usuario" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="#!">Ingresar Usuarios</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Consultar Usuarios</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Modificar Usuarios</a ></li>
</ul>

<!-- submenu de gestionar barberia -->
<ul id="sub_menu_gest_barberia" class="dropdown-content red darken-1">
  <li><a class="indigo-text text-darken-4" href="#!">Registar Barberia</a></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Agregar Servicios</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Modificar Servicios</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Consultar Servicios</a ></li>
  <!-- <li class="divider"></li> -->
  <li><a class="indigo-text text-darken-4" href="#!">Editar Barberia</a ></li>
</ul>


<nav id="menu">
    <div class="nav-wrapper red accent-4">
      <a href="#!" class="brand-logo">B-G</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="inicio_administrador" href="Dashboard_Admin.php">Inicio</a></li>
        
        <li><a class="dropdown-button gestionar_usuarios" href="#!" data-activates="sub_menu_gest_usuario">Gestionar  Usuarios</a></li>

        <li><a class="consultar_citas" href="#">Consultar Citas</a></li>
        
        <li><a class="dropdown-button gestionar_barberia" href="#!" data-activates="sub_menu_gest_barberia">Gestionar Barberia</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="submenu_sesion_admin">Nombre del administrador<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      

      <ul class="side-nav" id="mobile-demo">

        <li><a class="inicio_administrador" href="Dashboard_Admin.php">Inicio</a></li>
        <!-- <li><a class="dropdown-button gestionar_usuarios" href="#!" data-activates="sub_menu_gest_usuario">Gestionar <br> Usuarios</a></li> -->

        <li><a class="consultar_citas" href="#">Consultar<br>Citas</a></li>
        
        <!-- <li><a class="dropdown-button gestionar_barberia" href="#!" data-activates="sub_menu_gest_barberia">Gestionar<br>Barberia</a></li>
        
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Nombre del usuario<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
      </ul>
    </div>
  </nav>
  




