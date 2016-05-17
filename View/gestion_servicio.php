<?php 
	session_start();
	require_once("../Model/conexion.php");
  	require_once("../Model/servicio.class.php");

  	if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: index.php?m=".$msn."&tm=".$tipo_msn);
  }
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<title>archivo gestion servicios</title>
		<meta charset="utf-8">
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
      		$('#datatable').DataTable();
    		});
    	</script>


</head>

<body>	

    <?php include_once("../Components/menu_admin.php") ?>
		<h1>Gestion Servicios</h1>
		<a href="agregar_servicio.php">Agregar Nuevo Servicio</a>
		<table id="datatable" class="display highlight centered responsive-table bordered">
      		<thead>
      			<tr>
          			<th>Id_servicio</th>
          			<th>Nombre</th>
          			<th>Precio</th>
          			<th>Duracion</th>
        		</tr>
      		</thead>
      		<tbody>
      			<?php 
      				$servicios=Gestionar_servicio::ReadAll();
      				foreach ($servicios as $row) {
        
        		echo "<tr>
                		<td>".$row["Id_servicio"]."</td>
                		<td>".$row["Nombre"]."</td>
                		<td>".$row["Precio"]."</td>
                		<td>".$row["Duracion"]."</td>
                		<td>
                		<a href='editar_servicio.php?ui=".base64_encode($row["Id_servicio"])."'><i class='fa fa-pencil'></i></a>

                  		<a href='../Controller/servicios.controller.php?ui=".base64_encode($row["Id_servicio"])."&acc=d'><i class='fa fa-trash'></i></a>


                		</td>
              		  </tr>";

              		}
      		 	?>
      		</tbody>	
      	</table>

    <?php include_once("../Components/footer.php") ?> 
</body>

</html>