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
		$('#respu').html("<div class='alert alert-danger'>Rellene los campos de acceso</div>");
		$('#email').focus();
	}else if ($('#psw').val() == "") {
		$('#respu').html("<div class='alert alert-danger'>Rellene los campos de acceso</div>");
		$('#psw').focus();
	}else{
		ajax();
	}
}

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