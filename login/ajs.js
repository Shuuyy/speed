//Validamos el email, que tenga formato de correo electrónico del lado del cliente mientras lo escribe
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

//Validaremos, al hacer clic en el botón, que se hayan rellenao los campos y aprobado el reCaptcha
function login(){
	var response = grecaptcha.getResponse();
	if(response.length == 0){
		$('#respu').html("<div class='alert alert-danger'>Por favor verifique el ReCaptcha</div>");
	}else if ($('#email').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#email').focus();
	}else if ($('#pass').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#pass').focus();
	}else{
		ajax()
	}
}

//Una vez validado hacemos el envío de datos
function ajax(){
	$.ajax({
		method: "POST",
		url: "login.php",
		data: { email: $('#email').val(), psw: $('#psw').val() }
	})
	.done(function( msg ) {
		$('#respu').html(msg);
	});
}