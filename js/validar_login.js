function validar(){
	var usuario, clave, expresion;
<<<<<<< HEAD
	usuario=document.getElementById("iusuario".value.trim());
	clave=document.getElementById("iclave".value.trim());
	var auth = grecaptcha.getResponse();
=======
	usuario=document.getElementById("iusuario".value.trim())
	clave=document.getElementById("iclave".value.trim())
	var response = grecaptcha.getResponse();
>>>>>>> 206d3c6ef7bfd43a94b95da3be3b84587ed0e894

	if (usuario == 0){
		alert("El usuario no puede estar vacío");
		return false;
	}
	else if (clave == 0){
		alert("El usuario no puede estar vacío");
		return false;
	}
<<<<<<< HEAD
	else if (clave.length>8){
		alert("La clave debe contener solo 8 caracteres");
		return false;
	}
	else if (auth.length == 0){
		alert("Captcha no verificado.");
		return false;
	}
	return true;
}
function valida_captcha() {
	var response = grecaptcha.getResponse();

	if(response.length == 0){
		alert("Captcha no verificado")
		return false;
	}
	
=======
		else if (clave.length>8){
		alert("La clave debe contener solo 8 caracteres");
		return false;
	}

	else if(response.length == 0){
		alert("Captcha no verificado")
		return false;
	}
	return true;
>>>>>>> 206d3c6ef7bfd43a94b95da3be3b84587ed0e894
}