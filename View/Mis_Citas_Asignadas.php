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



    <script>
        $(document).ready( function () {
          $('#datatable');
        });
      </script>
  
 </head>
 <body>

  <?php include_once("../Components/menu_barbero.php") ?>
  
  <h1>Gestion Citas</h1>
    <a href="Reservar_Citas.php">Reservar Nueva Cita</a>
    <table id="datatable" class="display highlight centered responsive-table bordered">
    <thead>
      <tr>
        <th>CODIGO CITA</th>
        <th>FECHA</th>
        <th>HORA</th>
        <th>MINUTOS</th>
        <th>FORMATO</th>
        <th>SERVICIO</th>
        <th>USUARIO</th>
      </tr>     
    </thead>
      
    <tbody>
      <?php 
      $citas=Gestionar_citas::Mis_citas_asignadas($_REQUEST["mca"]);
      foreach ($citas as $row) {
        
        
    echo "<tr>
                    <td>".$row["Cod_cita"]."</td>
                    <td>".$row["Fecha"]."</td>
                    <td>".$row["Hora"]."</td>
                    <td>".$row["Minutos"]."</td>
                    <td>".$row["Formato"]."</td>
                    <td>".$row["Servicio"]."</td>
                    <td>".$row["Id_Usuario"]."</td>
                    <td>
                      <div class='col s12 m12 l12'>
                        <div class='col s3 m3 l3'>
                          <a href='modifi_citas_barbero.php?ui=".base64_encode($row["Cod_cita"])."'><i class='fa fa-pencil  tooltipped' data-position='left' data-delay='50' data-tooltip='Editar'></i></a>
                        </div>
                        <div class='col s3 m3 l3'>
                          <a href='../Controller/Citas.controller.php?ui=".base64_encode($row["Cod_cita"])."&acc=D'><i class='fa fa-trash tooltipped' data-position='left' data-delay='50' data-tooltip='Borrar'></i></a>
                        </div>
                    </div>

                    </td>
                    </tr>";
      }
      ?>

    
    </tbody>

  </table>

  <?php include_once("../Components/footer.php") ?>
 </body>
 </html>