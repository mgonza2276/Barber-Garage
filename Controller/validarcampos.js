function validar(){

	nickname=document.getElementById('nickname').value;
	nombre=document.getElementById('nombre').value;
	clave=document.getElementById('clave').value;
	cedula=document.getElementById('cedula').value;
	email=document.getElementById('email').value;
	telefono=document.getElementById('telefono').value;
	celular=document.getElementById('celular').value;
	telefono=document.getElementById('telefono').value;
	direccion=document.getElementById('direccion').value;
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if (nickname===""&&clave===""&&cedula===""&&nombre===""&&direccion===""&&telefono===""&&celular===""&&email==="") {
		swal("Llene los campos!","","warning");
		return false;
	}
	
	if (clave==="") {
		swal("Debe llenar el campo clave");
		return false;
	} 

	if (clave.length<6) {
		swal("Oops...La contraseña es muy corta!", "", "error");
		return false;
	}

	if (cedula==="") {
		swal("Debe llenar el campo cedula");
		return false;
	} 

	if (nombre==="") {
		swal("Debe llenar el campo nombre");
		return false;
	} 

	if (direccion==="") {
		swal("Debe llenar el campo dirección");
		return false;
	} 

	if (telefono==="") {
		swal("Debe llenar el campo telefono");
		return false;
	} 

	if (telefono.length>7||telefono.length<7) {
		swal("Oops...El telefono no es valido", "", "error");
		return false;
	}

	if (celular==="") {
		swal("Debe llenar el campo celular");
		return false;
	} 

	if (celular.length>10||celular.length<10) {
		swal("Oops...El numero de celular no es valido", "", "error");
		return false;
	}


	if (email==="") {
		swal("El campo correo esta vacio");
		return false;
	}

	
	if ( !expr.test(email) ) {
        swal("Error!!, El correo " + email + " es invalido.","","error");
    	return false;
    	}

}


function validar_login(){
	id_usuario=document.getElementById('id_usuario').value;
	clave_usuario=document.getElementById('clave_usuario').value;
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


	if (id_usuario==="" && clave_usuario==="") {
		swal("Ingrese usuario y clave!","","warning");
		return false;
	}
	

	if (id_usuario==="") {
		swal("Ingrese su usuario!","","warning");
		return false;
	}

	if (clave_usuario===""){
		swal("Ingrese su clave!","","warning");
		return false;
	}

	
function validarCita()
	{
		Fecha	 = document.getElementById('Fecha').value;
		Hora	 = document.getElementById('Hora').value;
		Servicio = document.getElementById('Servicio').value;
		Barbero	 = document.getElementById('Barbero').value;
		Formato	 = document.getElementById('Formato').value;
		Min		 = document.getElementById('Min').value;
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if (Fecha===""&&Hora===""&&Servicio===""&&Barbero===""&&Formato===""&&Min==="") 
		{
			swal("Llene los campos!","","warning");
			return false;
		}


		
	}
}