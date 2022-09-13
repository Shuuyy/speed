function eliminar(user, product){
	$.ajax({url: "compras.php", data:{
		usu: user,
		idpr: product,
		accion : 'eliminar'
	}, type: "POST", success: function(result){

		alert("Producto eliminado");
		
	}});
}

function vaciar(user, direccion){
	
	$.ajax({url: "compras.php", data:{
		usu: user,
		accion : 'vaciar'
	}, type: "POST", success: function(result){
		alert("Compra completada, se entregará en: " direccion);
		
	}});
}