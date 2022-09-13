<?php 
include '../clases/class.carrito.php';

//comparamos si se va a eliminar e  articulo del carrito o se va  terminar la compra
if ($_POST['accion'] == 'eliminar') {
	//instanciamos la clase carrito pasando los parametros del elemento a eliminar llamando el metodo eliminar()
	$usuario = $_POST['usu'];
	$producto =$_POST['idpr'];
	$carrito = new carrito ($usuario, $producto);
	$carrito->eliminar();

}else if($_POST['accion'] == 'vaciar'){
	//instanciamos la clase carrito pasando el parametro del usuario que realizará su compra
	$usuario = $_POST['usu'];
	$carrito = new carrito($usuario, '');
	$carrito->comprar();
?>
<script type="text/javascript">
	alert("Compra realizada, recibirá su compra en: su domicilio pronto");
</script>
<?php 
}
 ?>

<script type="text/javascript">
	window.location="./";
</script>