<?php 
include '../clases/class.carrito.php';

//instanciamos la clase carrito pasando los parametros del identificador del articulo y del usuario para agregarlo a su carrito de compras, esta actividad se llama desde "productos"
$producto = $_POST['idusuario'];
$usuario = $_POST['idproducto'];

$carrito = new carrito($producto, $usuario);
$carrito->insert();
 ?>