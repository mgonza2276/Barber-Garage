<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barber Garage</title>

	<!--Aqui llamaremos los iconos que necesitaremos-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>

      <!-- iconos -->
  	  <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

	  <script type="text/javascript" src="../Controller/validarcampos.js"></script>
	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">    

	  <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

		<script src="sweetalert-master/dist/sweetalert.min.js"></script>
     	<script type="text/javascript">
     	$(document).ready(function(){
     	
        <?php

	  	if(isset($_GET["msn"])){
	  		echo "swal( '".$_GET["msn"]."','', 'success');";
	  	}
	  ?>
	})
	  </script>

</head>









<body class="fondo">
	<?php include_once("../Components/menu.php") ?>

	<div class="container">

		<div class="row">

		<div id="formulario" class="col l8 offset-l2">

			<form action="../Controller/usuarios.controller.php" name="fvalidacion"method="POST" >
						<center><h4>Registro Usuario</h4></center>
						<div class="col l6  input-field"  >
							<input type="hidden" name="pag" value="registro_usuario">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Nombre de Usuario..." name="id_usuario" required />
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" placeholder="Contraseña..." name="clave" id="clave" required/>
							<i class="material-icons prefix">person_pin</i>
							<input type="number" placeholder="Cedula..." name="cedula" required/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre y Apellido..." name="nombre" id="nombre" required/>
							<button id="boton" class="waves-effect  btn-large cyan" name="acc" value="c" onclick="return validar()" >Registrar</button>
						</div>
						<div class="col l6  input-field"  >
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" required/>
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono..." name="telefono" id="icon_telephone" />
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="number" placeholder="Celular..." name="celular" id="icon_telephone"/>
							<i class="material-icons prefix">email</i>
							<input type="email" placeholder="Correo..." name="correo" id="email"required />
							<a id="boton" href="Registro_usuario.php" class="waves-effect  btn-large blue-grey darken-1">Cancelar</a>
						</div>
							<i class="material-icons prefix"hidden>assignment_ind</i> 
							<input type="hidden" value="Usuario" name="perfil"/>					
							
							<!-- <?php //swal //@$_GET["msn"];  ?> -->
							<!-- swal(<?php //@$_GET["msn"];  ?>) -->
							<!-- <?php //echo //@$_REQUEST["msn"]; ?> -->
					</form >

				</div>

			</div>

		</div>
		<?php include_once("../Components/footer.php") ?>
		

	</body>
</html>