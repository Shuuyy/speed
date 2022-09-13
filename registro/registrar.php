<?php 
include '../clases/class.usuarios.php';

//recibimos los datos y validamos que estén completos, después instancioamos la clase usuarios e invocamos el metodo insert() para registrarlo
if (isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $ape = $_POST['ape'];
    $email = $_POST['email'];
    $contra = $_POST['pass'];
    $direccion = $_POST['linea1'] . " " . $_POST['linea2'] . " " . $_POST['linea3'];
    if ($nombre != "" && $ape != "" && $email != "" && $contra != "" && $direccion != "") {
        $verif = new usuario('','','',$email,'');
        $ch = $verif->verificar();
        if ($row = $ch->fetch_array()) {
            echo "2";
        }else{
            $registro = new usuario($nombre, $ape, $direccion, $email, $contra);
            $registro->insert();
            echo "1";
        }
    }else{
        echo"3";
    }
}
?>