<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Registrar_Barberia</title>
	<link  rel="stylesheet" type="text/css" href="estilos.css">
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="mis-estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>


    <link rel="stylesheet" type="text/css" href="sweet/dist/sweetalert.css">
    <script src="sweet/dist/sweetalert.min.js"></script> 
    
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body id="fondo">
	
	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l6 offset-l3">
					<form action="../Controller/barberias.controller.php" method="POST">
						<div class="col l12  input-field"  >
							<center><h4>Registrar Barberia</h4></center>
							<i class="fa fa-hashtag prefix"></i>
							<input type="text" placeholder="NIT" name="nit"/>
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Nombre" name="nombre" />
							<i class="material-icons prefix">location_on</i>
							<input type="text" placeholder="Direccion" name="direccion"/>
							<i class="material-icons prefix">phone</i>
							<input type="text" placeholder="Telefono" name="telefono" />
							<i class="material-icons prefix">business</i>
							<input type="text" placeholder="Ciudad" name="ciudad" />							
							
							<button id="boton" name="acc" value="c" class="waves-effect  btn-large green" >Registrar</button>
							<a id="boton" class="waves-effect  btn-large red"  >Cancelar</a>
							
						</div>
					</form>			
				</div>
			</div>
		</div>
		
</body>
</html>