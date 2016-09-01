<?php
 session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/barberias.class.php");

   if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: ../View/login.php?m=".$msn."&tm=".$tipo_msn);
  }

  $barberias =  Gestion_barberias::ReadbyID(base64_decode($_REQUEST["ui"]));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Actualizar_barberias</title>
	<link  rel="stylesheet" type="text/css" href="estilos.css">
	  <!--Aqui llamaremos los iconos que necesitaremos-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Materialize\materialize\css\materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="mis-estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>

	 <!-- iconos -->
  	  <link rel="stylesheet" href="iconos/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="sweet/dist/sweetalert.css">
    <script src="sweet/dist/sweetalert.min.js"></script> 
    
  <?php 
      if(isset($_GET["m"])){
        if($_GET["m"] !=""){
          echo "<script>alert('".$_GET["m"]."')</script>";
        }
      }
     ?>  

    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body id="fondo">

	<?php include_once("../Components/menu_admin.php") ?>
	
	<div class="container">

      		<div class="row">

      			<div id="formulario" class="col l6 offset-l3">
					<form action="../Controller/barberias.controller.php" method="POST">
						<div class="col l12  input-field"  >
							<center><h4>Actualizar Barberia</h4></center>
							<i class="fa fa-hashtag prefix"></i>
							<input type="text" placeholder="NIT" name="nit" value="<?php echo $barberias[0]?>" readonly/>
							<i class="material-icons prefix">store</i>
							<input type="text" placeholder="Nombre" name="nombre" required value="<?php echo $barberias[1]?>"  />
							<i class="material-icons prefix">location_on</i>
							<input type="text" placeholder="Direccion" name="direccion" required value="<?php echo $barberias[2]?>" />
							<i class="material-icons prefix">phone</i>
							<input type="number" placeholder="Telefono" name="telefono" required value="<?php echo $barberias[3]?>"  />
							<i class="material-icons prefix">business</i>
							<input type="text" placeholder="Ciudad" name="ciudad" required value="<?php echo $barberias[4]?>"  />			
              <i class="material-icons prefix">schedule</i>  
              <input type="time" name="entrada" value="<?php echo $barberias[7] ?>" max="14:00:00" min="06:00:00" > </br> </br>
              <i class="material-icons prefix">schedule</i>

              <input type="time" name="salida" value="<?php echo $barberias[8] ?>" max="20:00:00" min="14:00:00" >	
						</div>
                        <div class="col l6 s12">
                            <button id="boton" name="acc" value="u" class="waves-effect  btn-large green" >Actualizar</button>
                        </div>
                        <div class="col l6 s12">
                            <a id="boton" href="gestion_barberias.php"class="waves-effect  btn-large red"  >Cancelar</a>
                        </div>
					</form>			
				</div>
			</div>
		</div>
	
	<?php include_once("../Components/footer.php") ?>	
</body>
</html>