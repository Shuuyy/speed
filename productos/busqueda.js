function buscar(){
	$.ajax({url: "buscar.php", data:{
		buscar : $('#busqueda').val()
	}, type: "POST", success: function(result){
		$('#lista').html(result);
	}});
}

