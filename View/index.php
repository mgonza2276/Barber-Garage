<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> -->
	<meta charset="UTF-8">
	<title>Barber Garage</title>

	<!--Aqui llamaremos los iconos que necesitaremos-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>

      <!-- iconos -->
  	  <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

	  <script type="text/javascript" src="../Controller/validarcampos.js"></script>


    <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">

    <script src="sweetalert-master/dist/sweetalert.min.js"></script>

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
          
          $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
          
        <?php

      if(isset($_GET["m"])){
        echo "swal( '".$_GET["m"]."','', 'success');";
      }
    ?>

  })
    </script>
</head>
<body class="fondo">
	<?php include_once("../Components/menu.php") ?>

<div class="container ">
    <div class="row">       
        
          <div id="centro"  class="col l4 offset-l3 s12 m8 offset-m2 offset-s0  input-field" >
            <form id="formulario" action="../Controller/validausuario.controller.php" method="post">
                <center><h3 id="bajar_titulo">Log In</h3></center>
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" placeholder="Nombre de usuario" name="Id_usuario" id="id_usuario"required />
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" placeholder="Contraseña..." name="Clave" id="clave_usuario"required/>
                <div class="col l12 s12">
                    <button id="boton" class="waves-effect waves-light btn cyan" onclick="return validar_login()">Ingresar</button>
                </div>             
                <div class="col l12 s12">
                    <a id="boton" class="waves-effect waves-light btn blue-grey darken-1" href="Registro_usuario.php"><spam>Regístrate</spam></a>
                </div>
            </form>
          </div>
        <div class="col l4 s12 m8 offset-l1">
           
        <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div id="BarberG" class="collapsible-header active"><i class="material-icons">info</i>¿Que es Barber-Garage?</div>
              <div  class="collapsible-body blue-grey lighten-5"><p>Somos un aplicativo desarrollado con el fin de facilitar a los usuarios reservar citas en su barberia favorita desde su dispositivo movil o computadora de una manera mas  facil.</p></div>
            </li>    
          </ul>
          
        
        </div><!-- fin formulario login -->
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
