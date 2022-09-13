<?php 
include '../clases/class.usuarios.php';
$email = $_POST['email'];
$codigo = $_POST['codigo'];

$usuario = new usuario('','','',$email,$codigo);
$ver = $usuario->verificarcodigo();
if ($row = $ver->fetch_array()) {
    echo $row['email'];
}else{
    echo "0";
}
 ?>
