function validar(){

	nickname=document.getElementById('nickname').value;
	nombre=document.getElementById('nombre').value;
	clave=document.getElementById('clave').value;
	cedula=document.getElementById('cedula').value;
	email=document.getElementById('email').value;
	telefono=document.getElementById('telefono').value;
	celular=document.getElementById('celular').value;
	telefono=document.getElementById('telefono').value;
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if (nickname===""||clave===""||cedula===""||nombre===""||direccion===""||telefono===""||celular===""||email==="") {
		swal("Faltan campos por llenar!","","warning");
		return false;
	}
	

	if (nombre==="") {
		swal("El campo nombre esta vacio");
		return false;
	} 

	if (clave.length<6) {
		swal("Oops...La contraseña es muy corta!", "", "");
		return false;
	}

	if (telefono.length>7||telefono.length<7) {
		swal("Oops...El telefono no es valido", "", "error");
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