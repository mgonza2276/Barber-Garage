

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Dashboard Administrador</title>

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

  <?php include_once("../Components/menu_admin.php"); ?>

 

 

  <div class="row ">
      <div class="col  s12 m12 l12  header_admin" ></div>
    </div>
  



<div class="container">
<div class="row">
    <div class="col s12 m6 l6 iconos  red darken-4"><h4 id="gest_usu">Gestionar Usuarios</h4><a href="agregar_usuario.php"><i class="fa fa-users icono_usuarios"></i></a><br>
  <!-- <a class="links" href="agregar_usuario.php">Ingresar Usuarios</a><br>
  <a class="links" href="#">Consultar Usuarios</a><br>
  <a class="links" href="#">Modificar Usuarios</a> -->
      <div class="row">
        <a href="" class="tooltipped col s2 offset-l3 offset-s3 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Ingresar Usuarios"><i class="fa fa-user-plus"></i></a>
        <a href="" class="tooltipped col s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Consultar Usuarios"><i class="fa fa-users"></i></a> 
        <a href="" class="tooltipped col s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Modificar Usuarios"><i class="fa fa-user-times"></i></a>
      </div>
    </div>

    <div class="col s12 m6 l6  iconos red darken-3"><h4>Citas</h4><a href="Gestion_Citas.php"><i class="fa fa-calendar-o "></i></a><br>
  <!-- <a class="links" href="Gestion_Citas.php">Consultar citas</a><br> -->
      <div class="row">
      <a href="" class="tooltipped col s2 offset-l5 offset-s5 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Consultar Citas"><i class="fa fa-calendar-check-o"></i></a>
    </div>
    </div>

    

    <div class="col s12 m6 l6  iconos  red darken-3"><h4 id="gest_bar">Gestionar Barberia</h4><a href="Registrar_barberia.php"><i class="fa fa-university icono_barberia"></i></a><br>
  <!-- <a class="links" href="Registrar_barberia.php">Registrar Barberia</a><br>
  <a class="links" href="#">Agregar servicios</a><br>
  <a class="links" href="#">Modificar Servicios</a><br>
  <a class="links" href="#">Consultar Servicios</a><br>
  <a class="links" href="#">Editar Barberia</a> -->
      <div class="row">
        <a href="" class="tooltipped col s2 offset-l2 offset-s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Registar Barberia"><i class="fa fa-university"></i></a>
        <a href="" class="tooltipped col s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Editar Barberia"><i class="fa fa-pencil-square-o"></i></a>
        <a href="" class="tooltipped col s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Agregar Servicios"><i class="fa fa-scissors"></i></a> 
        <a href="" class="tooltipped col s2 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Consultar Servicios"><i class="fa fa-search"></i></a> 
        
      </div>
    </div>

    <div class="col s12 m6 l6  iconos red darken-4"><h4>Perfil</h4><a href="#"><i class="fa fa-user icono_usuario"></i></a><br>
  <!-- <a class="links" href="edita-mi-perfil-admin.php">Mi Perfil</a><br>
  <a class="links" href="#">Cambiar Contraseña</a> -->
      <div class="row">
        <a href="" class="tooltipped col s2 offset-l5 offset-s5 indigo darken-2 div_enlaces" data-position="bottom" data-delay="50" data-tooltip="Mi Perfil"><i class="fa fa-user"></i></a>
      </div>
    </div>
    
  </div>

</div>

<?php include_once("../Components/footer.php") ?>


</body>
</html>

