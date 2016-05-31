

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
    <div class="col s12 m6 l6 iconos  red darken-4"><h4>Gestionar Usuarios</h4><a href="agregar_usuario.php"><i class="fa fa-users"></i></a><br>
  <a class="links" href="agregar_usuario.php">Ingresar Usuarios</a><br>
  <a class="links" href="#">Consultar Usuarios</a><br>
  <a class="links" href="#">Modificar Usuarios</a>
    </div>

    <div class="col s12 m6 l6  iconos red darken-3"><h4>Citas</h4><a href="#"><i class="fa fa-calendar-o "></i></a><br>
  <a class="links" href="#">Consultar citas</a><br>
    </div>

    

    <div class="col s12 m6 l6  iconos  red darken-3"><h4>Gestionar Barberia</h4><a href="Registrar_barberia.php"><i class="fa fa-university"></i></a><br>
  <a class="links" href="Registrar_barberia.php">Registrar Barberia</a><br>
  <a class="links" href="#">Agregar servicios</a><br>
  <a class="links" href="#">Modificar Servicios</a><br>
  <a class="links" href="#">Consultar Servicios</a><br>
  <a class="links" href="#">Editar Barberia</a>

    </div>

    <div class="col s12 m6 l6  iconos red darken-4"><h4>Perfil</h4><a href="#"><i class="fa fa-user"></i></a><br>
  <a class="links" href="edita-mi-perfil-admin.php">Mi Perfil</a><br>
  <a class="links" href="#">Cambiar Contraseña</a>
    </div>
    
  </div>

</div>

<?php include_once("../Components/footer.php") ?>


</body>
</html>

