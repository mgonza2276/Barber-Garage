 <?php 
 session_start();
 ?> 


<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<head>
	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
	
		<!-- iconos -->
      <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      	<script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

      	<script type="text/javascript">
            //consulta de rol

	 		$(document).ready(function(){
	    	$('#select_perfil').material_select();//se repite esta linea cada que se haga un nueva consulta

	  		});

    	</script>

    	<!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">
	  
		<script type="text/javascript" src="../Controller/validarcampos.js"></script>
	      

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

	<body id="fondo">

		<?php include_once("../Components/menu_admin.php") ?>


      	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l8 offset-l2">
					<form action="../Controller/usuarios.controller.php" method="POST" >
						<center><h3>Agregar Usuario</h3></center>
						<div class="col l6  input-field"  >
							<input type="hidden" name="pag" value="agregar_usuario">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Id_usuario..." name="id_usuario" id="nickname" />
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" placeholder="Clave..." name="clave" id="clave"/>
							<i class="material-icons prefix">person_pin</i>
							<input type="number" placeholder="Cedula..." name="cedula" id="cedula"/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre..." name="nombre" id="nombre" />

				</div>

						<div class="col l6  input-field"  >
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" id="direccion" />
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono..." name="telefono" id="telefono" />
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="number" placeholder="Celular..." name="celular" id="celular" />
							<i class="material-icons prefix">email</i>
							<input type="email" placeholder="Correo..." name="correo" id="email" />
						</div>
						<div class="col l12 input-field">
								<i class="material-icons prefix">email</i>
							<div class="col l5 offset-l1" >
								<select id="select_perfil" name="perfil">
									<option value="Administrador"> Administrador</option>
									<option value="Empleado"> Empleado</option>
								</select>
							</div>
						</div>
						<div class="col l6  input-field">
						
						<button id="boton" class="waves-effect  btn-large cyan" name="acc" value="c" onclick="return validar()">Registrar</button>
						
						</div>
						<div class="col l6  input-field">
							<a id="boton" href="agregar_usuario.php" class="waves-effect  btn-large  blue-grey darken-1">Cancelar</a>
						</div>
                         <?php /*echo @$_REQUEST["msn"]; 
                        */?>


					</form>
				</div>
			</div>
		</div>

		<?php include_once("../Components/footer.php") ?> 
	</body>
</html>
