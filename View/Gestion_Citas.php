<?php
  session_start();
  include_once("../Model/conexion.php");
  include_once("../Model/Citas.class.php");

  if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Gestion de las Citas</title>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
      <!--  -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
      <!-- iconos -->
      <link rel="stylesheet" href="iconos/css/font-awesome.min.css">
      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
      <!--  -->
       <script src="sweetalert-master/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

  <?php

if(isset($_GET["m"]) and isset($_GET["tm"])){
         if($_GET["m"] != ""){
           echo "<script>
                   $(document).ready(function(){
                      sweetAlert({
                           title: '...',
                           text: '".$_GET["m"]."',
                           type: '".$_GET["tm"]."',
                           showCancelButton: false,
                           confirmButtonColor: '#4db6ac',
                           confirmButtonText: 'Aceptar',
                          cancelButtonText: 'No, cancel plx!',
                           closeOnConfirm: false,
                           closeOnCancel: false
                       });
                   });
                </script>";
           }
         }
?>


<script type="text/javascript" charset="utf8" src="DataTable/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="DataTable/jquery.dataTables.css">
    <script>
        $(document).ready( function () {
          $('#datatable').DataTable();
        });
      </script>

 </head>
 <body>

  <?php include_once("../Components/menu_admin.php") ?>

  <center><h1>Gestion Citas</h1></center>
  <div class="container">
    <div class="row">
     <!--  <div class="col s1 l1 m1  offset-m5 offset-l5"><a class="btn-floating btn-large waves-effect waves-light green" href="Reservar_Citas.php"><i class="material-icons">add</i></a></div>
      <div class="col s6 offset-s1 l6 m6"><p><b>Nueva Cita<b></p></div> -->
    </div>
  </div>

    <!-- <button class="waves-effect  btn-large cyan" href="Reservar_Citas.php">Reservar Nueva Cita</button> -->

    <table id="datatable" class="display highlight centered responsive-table bordered">
    <thead>
      <tr>
        <th>CODIGO CITA</th>
        <th>FECHA</th>
        <th>HORA</th>
        <th>MINUTOS</th>
        <th>FORMATO</th>
        <th>SERVICIO</th>
        <th>BARBERO</th>
        <th>ID_USUARIO</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <?php
      $citas=Gestionar_citas::ReadAll();
      foreach ($citas as $row) {


    echo "<tr>
                    <td>".$row["Cod_cita"]."</td>
                    <td>".$row["Fecha"]."</td>
                    <td>".$row["Hora"]."</td>
                    <td>".$row["Minutos"]."</td>
                    <td>".$row["Formato"]."</td>
                    <td>".$row["Servicio"]."</td>
                    <td>".$row["Barbero"]."</td>
                    <td>".$row["Id_Usuario"]."</td>

                    <td>
                    <div class='col s12 m12 l12'>
                        <div class='col s3 m3 l3'>
                          <a href='Modificar_cita.php?ui=".base64_encode($row["Cod_cita"])."'><i class='fa fa-pencil  tooltipped' data-position='left' data-delay='50' data-tooltip='Editar'></i></a>
                        </div>
                        <div class='col s3 m3 l3'>
                          <a href='../Controller/Citas.controller.php?ui=".base64_encode($row["Cod_cita"])."&acc=d'><i class='fa fa-trash tooltipped' data-position='left' data-delay='50' data-tooltip='Borrar'></i></a>
                        </div>
                    </div>


                    </td>
                    </tr>";
      }
      ?>
<!-- class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip -->

    </tbody>

  </table>


  <?php include_once("../Components/footer.php") ?>
 </body>
 </html>
