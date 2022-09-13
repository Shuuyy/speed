//aqui validamos el formato de l email

function validaremail(){
	if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
		$('#email').css("border-color", "red");
		$('#login').css("display", "none");
		$('#respu').html("<div class='alert alert-danger'>Formato de email no válido</div>")
	}else{
		$('#email').css("border-color", "green");
		$('#login').css("display", "block");
		$('#respu').html("");
	}
}

//validamos la longitud y caracteres dela contraseña
function validarcontra(){
	var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	var enoughRegex = new RegExp("(?=.{6,}).*", "g");
	if (false == enoughRegex.test($('#pass').val())) {
		$('#respu').html('<div class="alert alert-danger">La contraseña debe contener al menos 8 carácteres.</div>');
		$('#pass').css("border-color", "red");
		$('#passstrength').html('');
		$('#login').css("display", "none");
	} else if (strongRegex.test($('#pass').val())) {
		$('#passstrength').className = 'ok';
		$('#passstrength').html('Fuerte!');
		$('#pass').css("border-color", "green");
		$('#respu').html('');
		$('#login').css("display", "block");
	} else if (mediumRegex.test($('#pass').val())) {
		$('#passstrength').className = 'alert';
		$('#passstrength').html('Media!');
		$('#pass').css("border-color", "yellow");
		$('#respu').html('');
		$('#login').css("display", "block");
	} else {
		$('#passstrength').className = 'error';
		$('#passstrength').html('Débil!');
		$('#pass').css("border-color", "orange");
		$('#respu').html('');
		$('#login').css("display", "none");
	}
}


//validamos que la contraseña y la confirmacion sean iguales
function contrasiguales(){
	var confirmacion = $('#conf').val();
	var contraor = $('#pass').val();

	if (confirmacion == contraor) {
		$('#respu').html("");
		$('#conf').css("border-color", "green");
		$('#login').css("display", "block");
	}else{
		$('#respu').html("<div class='alert alert-danger'>Las contraseñas no coinciden</div>");
		$('#conf').css("border-color", "red");
		$('#login').css("display", "none");
	}
}

//verificamos que todos los campos se encuentren rellenos
function login(){
	var response = grecaptcha.getResponse();

	if(response.length == 0){
		$('#respu').html("<div class='alert alert-danger'>Por favor verifique el ReCaptcha</div>");
	}else if ($('#nombre').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#nombre').focus();
	}else if ($('#ape').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#ape').focus();
	}else if ($('#linea1').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#linea1').focus();
	}else if ($('#linea2').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#linea2').focus();
	}else if ($('#linea3').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#linea3').focus();
	}else if ($('#email').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#email').focus();
	}else if ($('#pass').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#pass').focus();
	}else if ($('#conf').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#conf').focus();
	}else{
		ajax();
	}
}

//enviamos los datos
function ajax(){

	$.ajax({url: "registrar.php", data:{
		nombre: $('#nombre').val(),
		ape: $('#ape').val(),
		linea1: $('#linea1').val(),
		linea2: $('#linea2').val(),
		linea3: $('#linea3').val(),
		email: $('#email').val(),
		pass: $('#pass').val()
	}, type: "POST", success: function(result){
		if (result == "1") {
			alert('Registro guardado');
			window.location('../login/');
		}else if(result == "3"){
			$('#respu').html('<div class="alert alert-danger">Por favor rellene todos los campos</div>');
		}else if(result == "2"){
			$('#respu').html('<div class="alert alert-danger">Este registro ya existe, por favor <a href="../login/">Inicie sesion</a></div>');
		}else{
			$('#respu').html(result);
		}
	}});
}

