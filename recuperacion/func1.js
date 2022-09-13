function validaremail(){
	if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
		$('#email').css("border-color", "red");
		$('#login').prop("disabled", true);
		$('#respu').html("<div class='alert alert-danger'>Formato de email no válido</div>")
	}else{
		$('#email').css("border-color", "green");
		$('#login').prop("disabled", false);
		$('#respu').html("");
	}
}

function login(){
	var response = grecaptcha.getResponse();

	if(response.length == 0){
		$('#respu').html("<div class='alert alert-danger'>Por favor verifique el ReCaptcha</div>");
	}else if ($('#email').val() == "") {
		$('#respu').html("<div class='alert alert-danger'>Ingrese su email</div>");
		$('#email').focus();
	}else{
		ajax();
	}
}

function ajax(){
	$.ajax({
		method: "POST",
		url: "codigo.php",
		data: { email: $('#email').val() }
	})
	.done(function( msg ) {
		$('#respu').html(msg);
	});
}

function cont(){
	var response = grecaptcha.getResponse();
	if (response.length == 0){
		$('#respu').html("<div class='alert alert-danger'>Por favor verifique el ReCaptcha</div>");
	}else if($('#email').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Ingrese su email</div>");
		$('#email').focus();
	}else if($('#code').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Ingrese su codigo</div>");
		$('#code').focus();
	}else{
		$.ajax({
			method: "POST",
			url: "rec.php",
			data: { 
				email: $('#email').val(),
				codigo: $('#code').val()
			}
		})
		.done(function( msg ) {
			if (parseInt(msg) == 0) {
				$('#respu').html("<div class='alert alert-danger'>Revise que su correo electrónico o su código</div>");
				$('#email').focus();
			}else{
				window.location="cambiar.php?id="+msg;
			}
			
		});
	}
}

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

function cambiar(){
	$.ajax({
		method: "POST",
		url: "sust.php",
		data: { 
			email: $('#email').val(),
			contra: $('#pass').val()
		}
	})
	.done(function( msg ) {
		alert(msg);
		window.location="../login/";

	});
}