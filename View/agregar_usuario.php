<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<head>
	  <!--Aqui llamaremos los estilos necesarios-->
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

		<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      	<script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

      	<script type="text/javascript">//consiulta de rol

	 		$(document).ready(function(){
	    	$('#select_perfil').material_select();//se repite esta linea cada que se haga un nueva consulta

	  		});
      
    	</script>

	</head>

	<body id="fondo">


      	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l6 offset-l3 " >
					<form action="../Controller/usuarios.controller.php" method="POST">
						<div class="col l12  input-field"  >
							<center><h4>Registrar Usuario</h4></center>
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Id_usuario..." name="id_usuario"/>
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" placeholder="Clave..." name="clave" />
							<i class="material-icons prefix">person_pin</i>
							<input type="text" placeholder="Cedula..." name="cedula"/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre..." name="nombre" />
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" />
							<i class="material-icons prefix">phone</i>
							<input type="text" placeholder="Telefono..." name="telefono" id="icon_telephone" />
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="text" placeholder="Celular..." name="celular" id="icon_telephone"/>
							<i class="material-icons prefix">email</i>
							<input type="text" placeholder="Correo..." name="correo" />
							<i class="material-icons prefix">assignment_ind</i> 
							<div class="col l11 offset-l1">
								<select id="select_perfil" name="perfil">
									<?php //consulta de rol
										require_once("../Model/conexion.php");
										require_once("../Model/usuarios.class.php");

										$perfiles = Gestion_Usuarios::ReadALL();

										foreach ($perfiles as $row) {
											echo "<option value='".$row["Id_usuario"]."'> ".$row["Perfil"]."</option>";
											}
									?>
								</select>
							</div>
							<button id="boton" class="waves-effect  btn-large green" type="submit" name="acc" value="c">Registrar</button>	
							<button id="boton" class="waves-effect  btn-large red" type="submit"   >Cancelar</button>
							<?php echo @$_REQUEST["msn"]; ?>
						</div>
					</form>			
				</div>
			</div>
		</div>
	</body>
</html>