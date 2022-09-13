function guardar(){
	var response = grecaptcha.getResponse();
//validamos los datos y el reCaptcha
	if(response.length == 0){
		$('#respu').html("<div class='alert alert-danger'>Por favor verifique el ReCaptcha</div>");
	}else if ($('#nombre').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#nombre').focus();
	}else if ($('#marca').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#marca').focus();
	}else if ($('#descripcion').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#descripcion').focus();
	}else if ($('#precio').val() == ""){
		$('#respu').html("<div class='alert alert-danger'>Rellene todos los campos</div>");
		$('#precio').focus();
	}else{
		ajax();
	}
}

//enviamos los datos
function ajax(){

	var form = document.querySelector('form');
	$('#login').disabled = true;
	var fd = new FormData( form );
	var ajax = new XMLHttpRequest( );
	ajax.open( 'POST', 'registrar.php' );
	ajax.onload = function(){
		if (ajax.responseText == "1") {
			$('#respu').html("<div class='alert alert-success'>Articulo guardado</div>");
			form.reset();
		}else{
			$('#respu').html(ajax.responseText);
		}
	}
	ajax.send( fd );


}