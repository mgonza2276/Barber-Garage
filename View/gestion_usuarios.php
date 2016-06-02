<?php
  session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");

  if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: Login.php?m=".$msn."&tm=".$tipo_msn);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <!--  -->
    <!--Aqui llamaremos los iconos que necesitaremos-->
    

      <!--Import materialize.css-->
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
     
      <!--  -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>

      <!-- iconos -->
      <link rel="stylesheet" href="iconos/css/font-awesome.min.css">
      
      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

    <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    </script>


  </head>
  <body>
    <?php 
      include_once("../Components/menu_admin.php") 
    ?> 
    <center><h1>GESTIONAR USUARIOS</h1></center>

    <a href="agregar_usuario.php">Nuevo Usuario</a>



    <table id="datatable" class="display highlight centered responsive-table bordered">
      <thead>
        <tr>
          <th>Id_usuario</th>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>Celular</th>
          <th>Correo</th>
          <th>Perfil</th>
        </tr>
      </thead>
      <tbody>



      <?php
      $usuarios = Gestion_Usuarios::ReadAll();

      foreach ($usuarios as $row) {
        
        echo "<tr>
                <td>".$row["Id_usuario"]."</td>
                <td>".$row["Cedula"]."</td>
                <td>".$row["Nombre"]."</td>
                <td>".$row["Direccion"]."</td>
                <td>".$row["Telefono"]."</td>
                <td>".$row["Celular"]."</td>
                <td>".$row["Correo"]."</td>
                <td>".$row["Perfil"]."</td>
                <td>

                  <a href='editar.usuario.php?ui=".base64_encode($row["Id_usuario"])."'><i class='fa fa-pencil'></i></a>

                  <a href='../Controller/usuarios.controller.php?ui=".base64_encode($row["Id_usuario"])."&acc=d'><i class='fa fa-trash'></i></a>


                </td>
              </tr>";
      }

      ?>
          
      </tbody>
    </table>
      <?php 
      include_once("../Components/footer.php") 
    ?> 
  </body>
</html>