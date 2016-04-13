<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Asignar-rol</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
</head>
<body id="fondo">
	<div class="row">
      
      <div  id="centro" class="col l4 offset-l4">
      	<form action="../Controller/rol.controller.php" method="POST">
				
			<center><h4>Asignar Roles</h4></center>
				
				<input type="text" name="Id_rol" placeholder="Id Rol">
						
				<input type="text" name="Nombre_rol" placeholder="Nombre Rol">
								
				<button id="btnreg"class="waves-effect  btn-large green" style="width:100%" type="submit" name="acc" value="c">Registrar</button>

				<button class="waves-effect  btn-large red" style="width:100%">Cancelar</button>
				
				

				<?php echo @$_REQUEST["msn"]; ?>
			</form>
      </div>  
    </div>   
		
</body>
</html>