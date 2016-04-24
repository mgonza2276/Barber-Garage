<?php 
	session_start();
	require_once("../Model/conexion.php");
  	require_once("../Model/barberias.class.php");

  	if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: Login.php?m=".$msn."&tm=".$tipo_msn);
  }
 ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Gestion barberias</title>
		<meta charset="utf-8">
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
		<h1>GESTIONAR BARBERIAS</h1>
		<a href="Registrar_barberia.php">Nueva Barberia</a>
		<table id="datatable" class="display highlight centered responsive-table bordered">
      		<thead>
        		<tr>
          			<th>Cod_barberia</th>
          			<th>Nombre</th>
          			<th>Direccion</th>
          			<th>Telefono</th>
          			<th>Ciudad</th>
        		</tr>
      		</thead>
      	<tbody>
      		<?php 
      			$barberias=Gestion_barberias::ReadAll();
      			foreach ($barberias as $row) {
        
        		echo "<tr>
                	<td>".$row["Cod_barberia"]."</td>
                	<td>".$row["Nombre"]."</td>
                	<td>".$row["Direccion"]."</td>
                	<td>".$row["Telefono"]."</td>
                	<td>".$row["Ciudad"]."</td>
                	<td>

                  	<a href='editar_barberias.php?ui=".base64_encode($row["Cod_barberia"])."'><i class='fa fa-pencil'></i></a>

                  	<a href='../Controller/barberias.controller.php?ui=".base64_encode($row["Cod_barberia"])."&acc=d'><i class='fa fa-trash'></i></a>


                	</td>
              		</tr>";
      			}
      		 ?>
      	</tbody>	
      	</table>
	</body>
</html>