<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<head>
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>

      
	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

		
	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">      
	</head>

	<body>
      	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l6 offset-l3">
					<form action="../Controller/usuarios.controller.php" method="POST">
						<div class="col l12  input-field"  >
							<h3>Registro Usuario</h3>
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Id_usuario..." name="id_usuario" required />
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" placeholder="Clave..." name="clave" required/>
							<i class="material-icons prefix">person_pin</i>
							<input type="number" placeholder="Cedula..." name="cedula"/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre..." name="nombre" />
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" />
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono..." name="telefono" id="icon_telephone" />
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="number" placeholder="Celular..." name="celular" id="icon_telephone"/>
							<i class="material-icons prefix">email</i>
							<input type="email" placeholder="Correo..." name="correo" required />
							<i class="material-icons prefix"hidden>assignment_ind</i> 
							<input type="hidden" value="Usuario" name="perfil"/>					
							<button id="boton" class="waves-effect  btn-large green" name="acc" value="c" >Registrar</button>
							<button id="boton" class="waves-effect  btn-large red"  >Cancelar</button>
							<?php echo @$_REQUEST["msn"]; ?>
						</div>
					</form>			
				</div>
			</div>
		</div>
	</body>
</html>