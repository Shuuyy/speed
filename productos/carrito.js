function agregar(user, producto){
	$.ajax({url: "../carrito/agregar.php", data:{
		idusuario : user,
		idproducto : producto
	}, type: "POST", success: function(result){
		alert("Articulo agregado al carrito");
	}});
}

function iniciesesion(){
	alert("Para agregar productos a su carrito inicie sesión");
	window.location="../login/";
}