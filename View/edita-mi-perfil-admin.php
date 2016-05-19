<?php
 session_start();
  require_once("../Model/conexion.php");
  require_once("../Model/usuarios.class.php");

   if(!isset($_SESSION["Id_usuario"])){
    $msn = base64_encode("Debe iniciar sesion primero!");
    $tipo_msn = base64_encode("advertencia");

    header("Location: ../View/Login.php?m=".$msn."&tm=".$tipo_msn);
  }

  $usuario =  Gestion_Usuarios::ReadbyID($_SESSION["Id_usuario"]);
?>
<!DOCTYPE html>
<html>
<head>
	
  <meta charset="utf-8"/>
   <link type="text/css" rel="stylesheet" href="estilos.css">
  <title>Actualiza tu perfil</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster" />
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <script>
      <?php

          if(isset($_GET["m"])){
            if($_GET["m"] != ""){
              echo "<script>alert('".$_GET["m"]."')</script>";
            }
          }

      ?>
      </script>
</head>
  <body id="fondo" class="fondo">
  <?php 
      include_once("../Components/menu_admin.php") 
    ?>
  
        <div class="container">

          <div class="row">

            <div id="formulario" class="col l6 offset-l3">
          <form action="../Controller/usuarios.controller.php" method="POST" >
            <h3>Edita Mi Perfil</h3>
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
            </div>
                        <div class="col l6 s12">
                            <button id="boton" class="waves-effect  btn-large cyan" name="acc" value="u" >Actualizar</button>
                        </div>
                        <div class="col l6 s12">
                            <a id="boton" href="Dashboard_Admin.php" class="waves-effect  btn-large blue-grey darken-1">Cancelar</a>
                        </div>
                      
              
              <!-- <?php //swal //@$_GET["msn"];  ?> -->
              <!-- swal(<?php //@$_GET["msn"];  ?>) -->
              <!-- <?php //echo //@$_REQUEST["msn"]; ?> -->
          </form>       
        </div>
      </div>
    </div>
    <?php 
      include_once("../Components/footer.php") 
    ?>
      <script type="text/javascript" src="Materialize\jquery-1.12.1.min.js"></script>
      <script type="text/javascript" src="Materialize\materialize\js\materialize.js"></script>
  </body>
  </html>