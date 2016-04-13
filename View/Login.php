<!DOCTYPE html>
<html>
<head>
	<title>Login Barber-Garage</title>
	<meta charset="utf-8"/>
	  
	<!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

    <link  rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body class="fondo">
<<<<<<< HEAD

  <?php 
    include_once("../Components/menu.php")
   ?>

	<div class="container">
      	<div class="row">
      		<div id="centro"  class="col l4 s12 offset-l4 input-field" >
=======
    <?php 
    include_once("../Components/menu.php")
   ?>
	<div class="container">
      	<div class="row">
      		<div id="centro"  class="col l4 s12 offset-s0 offset-l4 input-field" >
>>>>>>> origin/master
      			<form>
      			<center><h4>Login</h4></center>
						<i class="material-icons prefix">account_circle</i>
						  <input type="text" placeholder="Id_usuario..." name="id_usuario" required />

						<i class="material-icons prefix">vpn_key</i>
						  <input type="password" placeholder="Contraseña..." name="clave" required/>

<<<<<<< HEAD
						<button id="boton" class="waves-effect btn-large green" type="submit" name="" value="" href="#">Ingresar</button> 

            <div class="col l5 s12">
                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box">Recordar</label>              
              </div>   
            <div class="col l7 s12" id="lgn-rec">
              <a  href="">Recuperar Contraseña</a>
            </div>         
            </form>
      		</div>
    	</div>
    </div>
<?php 
    include_once("../Components/footer.php")
   ?>
=======
						<button id="boton" class="waves-effect btn-large green" type="submit" name="" value="" href="#">Ingresar</button>
                        <div class="col l4 s12">
                        <input type="checkbox" class="filled-in recordar" id="filled-in-box" checked="checked" />
                        <label for="filled-in-box">Recordar</label>              
                        </div>   
                        <div class="col l8 offset-l5 s12 " id="lgn-rec">
                        <a class="waves-effect waves-light modal-trigger" href="#modal1">Recuperar Contraseña</a>
                        	<form action="" method="POST">
                        	<div id="modal1" class="modal">
                            	<div class="modal-content">
                              		<h4>Recuperar contraseña</h4>
                              		<p>Ingrese el correo </p>
                              		<input type="email" placeholder="Correo electrónico" name="Correo"/>
                              		<p>En breves segundos te enviaremos un enlace al correo ingresado</p>
                            	</div>
                            	<div class="modal-footer">
                              		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
                              		<a id="btncrc" href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            	</div>
                        	</div>
                        	</form>
                        </div>							
							
      			</form>
      		</div>
    	</div>
    </div>
    <?php 
    include_once("../Components/footer.php")
   ?>
   <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    </script>
>>>>>>> origin/master
</body>
</html>