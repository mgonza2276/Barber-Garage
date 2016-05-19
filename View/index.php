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

	<div class="container ">
    
    <div class="row">

      <div id="centro"  class="col l4 s12 offset-s0 offset-l4 input-field" >
      	
        <form id="formulario" action="../Controller/validausuario.controller.php" method="post">				

      				    <center><h3 id="bajar_titulo">Login</h3></center>

						        <i class="material-icons prefix">account_circle</i>
						        <input type="text" placeholder="Nombre de usuario" name="Id_usuario" required />
						        
                    <i class="material-icons prefix">vpn_key</i>
						        <input type="password" placeholder="Contraseña..." name="Clave" required/>
						        
                    <button href="comp_menu.php" id="boton" class="waves-effect waves-light btn cyan">Ingresar</button>
              
              <div class="col l12 s12">
                    <input type="checkbox" class="filled-in recordar" id="filled-in-box" checked="checked" />
                      <label for="filled-in-box">Recordar</label>
                      <br>
                      <br>
                      <hr>
              </div>
              <div class="col l12 s12">
                  
                  <a id="boton" class="waves-effect waves-light btn blue-grey darken-1" href="Registro_usuario.php"><spam>Regístrate</spam></a>
              </div> 
        </form>
      </div>		
                  <!-- fin formulario login -->
    </div>
  </div>
</div>
	<?php include_once("../Components/footer.php") ?>
		 <script type="text/javascript">
        $(document).ready(function()
        {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
        });
    </script>
    	
</body>
</html>