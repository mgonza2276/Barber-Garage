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
    <?php 
    include_once("../Components/menu.php")
   ?>
	<div class="container">
      	<div class="row">
      		<div id="centro"  class="col l4 offset-l4 input-field" >
      			<form>
      				<center><h4>Login</h4></center>
						<i class="material-icons prefix">account_circle</i>
						<input type="text" placeholder="Id_usuario..." name="id_usuario" required />

						<i class="material-icons prefix">vpn_key</i>
						<input type="password" placeholder="Contraseña..." name="clave" required/>

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

</body>
</html>