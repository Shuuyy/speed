<?php 
include '../clases/class.usuarios.php';
$email = $_POST['email'];
$psw =  $_POST['contra'];

$usuario = new usuario('','','',$email,$psw);
$usuario->cambiarcontra();
echo "Contraseña actualizada exitosamente";
?>