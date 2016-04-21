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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

    <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    </script>

  </head>
  <body>
    <h1>GESTIONAR USUARIOS</h1>

    <a href="agregar_usuario.php">Nuevo Usuario</a>



    <table id="datatable" class="display">
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
                  <a href='controller.usuario.php?ui=".base64_encode($row["Id_usuario"])."&acc=d'><i class='fa fa-trash'></i></a>


                </td>
              </tr>";
      }

      ?>
      </tbody>
    </table>
  </body>
</html>