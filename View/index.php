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

		
	  <!--Aqui llamaremos los estilos necesarios-->
	  <link  rel="stylesheet" type="text/css" href="estilos.css">      
</head>
<body class="fondo">
	<?php include_once("../Components/menu.php") ?>

	<div class="container">

			
      	<div class="row">

      	<div id="formulario" class="col l8 offset-l2">

	<!-- <ul class="collapsible" data-collapsible="accordion"> -->
	<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons ">person</i><h5>Registro Usuario<h5></div>
      <div class="collapsible-body">
		<!-- inicio del formulario registro -->
		<form action="../Controller/usuarios.controller.php" method="POST" >
						<!-- <center><h5>Registro Usuario</h5></center> -->
						<div class="col l6  input-field"  >
							<input type="hidden" name="pag" value="index">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" placeholder="Nombre de Usuario..." name="id_usuario" required />
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" placeholder="Contraseña..." name="clave" required/>
							<i class="material-icons prefix">person_pin</i>
							<input type="number" placeholder="Cedula..." name="cedula"/>
							<i class="material-icons prefix">person</i>
							<input type="text" placeholder="Nombre y Apellido..." name="nombre" />
							<button id="boton" class="waves-effect  btn-large cyan" name="acc" value="c" >Registrar</button>
						</div>
						<div class="col l6  input-field"  >
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Dirección..." name="direccion" />
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono..." name="telefono" id="icon_telephone" />
							<i class="material-icons prefix">stay_current_portrait</i>
							<input type="number" placeholder="Celular..." name="celular" id="icon_telephone"/>
							<i class="material-icons prefix">email</i>
							<input type="email" placeholder="Correo..." name="correo" required />
							<a id="boton" href="index.php" class="waves-effect  btn-large blue-grey darken-1">Cancelar</a>
						</div>
							<i class="material-icons prefix"hidden>assignment_ind</i> 
							<input type="hidden" value="Usuario" name="perfil"/>					
							
							<!-- <?php //swal //@$_GET["msn"];  ?> -->
							<!-- swal(<?php //@$_GET["msn"];  ?>) -->
							<!-- <?php //echo //@$_REQUEST["msn"]; ?> -->
					</form >

		<!-- fin formulario de registro -->



      </div>
    </li>
    <li>
      <div class="collapsible-header coll_login "><hr><i class="material-icons">lock_outline</i><h5 id="margen">Iniciar Sesion</h5></div>


      <div class="collapsible-body">
      	<!-- inicio formulario login -->

      	<form class="form_login" action="../Controller/validausuario.controller.php" method="post">
      				<!-- <center><h5>Login</h5></center> -->
						
					<div class="col l6  input-field offset-l3"  >	
						<i class="material-icons prefix">account_circle</i>
						<input type="text" placeholder="Nombre de usuario" name="Id_usuario" required />

						<i class="material-icons prefix">vpn_key</i>
						<input type="password" placeholder="Contraseña..." name="Clave" required/>

						<button href="comp_menu.php" id="boton" class="waves-effect btn-large teal darken-2">Ingresar</button>
              <div class="col l4 s12">
                <input type="checkbox" class="filled-in recordar" id="filled-in-box" checked="checked" />
                  <label for="filled-in-box">Recordar</label>
              </div>
              <div class="col l8 offset-l5 s12 " id="lgn-rec">
                <a class="waves-effect waves-light modal-trigger" href="#modal1">Recuperar Contraseña</a>
                  
					</div><!--cierre de form login-->

                  <div id="modal1" class="modal">
                    <div class="modal-content">
                      <h4>Recuperar contraseña</h4>
                        <p>Ingrese el correo </p>
                          <!-- <input type="text" placeholder="Correo electrónico" name="RecCorreo" required/> -->
                        <p>En breves segundos te enviaremos un enlace al correo ingresado</p>
                    </div>
                      <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        <a id="btnCancelar" href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                      
                      	<hr>

                      </div>
                  </div>
              </div>

      			</form>




		<!-- fin formulario login -->

      </div>
    </li>
    
  </ul>

</div>
</div>
</div>

	<?php include_once("../Components/footer.php") ?>


	<!--  -->
		 <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    </script>
    <!--  -->	
</body>
</html>