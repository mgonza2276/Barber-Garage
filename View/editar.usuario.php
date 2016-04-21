<?php
 session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");

   if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: ../View/login.php?m=".$msn."&tm=".$tipo_msn);
  }

  $usuario =  Gestion_Usuarios::ReadbyID(base64_decode($_REQUEST["ui"]));
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

	<head>
	  
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
	  <link  rel="stylesheet" type="text/css" href="estilos.css">      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>      
      

		
	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">      
	</head>

	<body id="fondo" class="fondo">
	
      	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l6 offset-l3">
					<form action="../Controller/usuarios.controller.php" method="POST" >
						<h3>Edita Usuario</h3>
						<div class="col l6  input-field"  >
							<input type="hidden" name="pag" value="registro_usuario">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Nombre de Usuario..." name="id_usuario" required value="<?php echo $usuario[0]?>" readonly />
							<i class="material-icons prefix">person_pin</i>
							<input type="number" placeholder="Cedula..." name="cedula" value="<?php echo $usuario[2]?>"/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre y Apellido..." name="nombre" value="<?php echo $usuario[3]?>"/>
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" value="<?php echo $usuario[4]?>" />
							<button id="boton" class="waves-effect  btn-large cyan" name="acc" value="u" >Actualizar</button>
						</div>
						<div class="col l6  input-field"  >
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono..." name="telefono" id="icon_telephone" value="<?php echo $usuario[5]?>"/>
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="number" placeholder="Celular..." name="celular" id="icon_telephone " value="<?php echo $usuario[6]?>"/>
							<i class="material-icons prefix">email</i>
							<input type="email" placeholder="Correo..." name="correo" required  value="<?php echo $usuario[7]?>"/>
							<i class="material-icons prefix">assignment_ind</i> 
							<input type="text"  name="perfil" value="<?php echo $usuario[8]?>" />
								
							<a id="boton" href="gestion_usuarios.php" class="waves-effect  btn-large blue-grey darken-1">Cancelar</a>
						</div>
											
							
							<!-- <?php //swal //@$_GET["msn"];  ?> -->
							<!-- swal(<?php //@$_GET["msn"];  ?>) -->
							<!-- <?php //echo //@$_REQUEST["msn"]; ?> -->
					</form>				
				</div>
			</div>
		</div>
		<?php include_once("../Components/footer.php") ?>
		<script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      	<script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
	</body>
</html>
