<?php 

include '../clases/class.usuarios.php';

//Recibimos los datos, vinstanciamos la clase usuario pasandole los parametros de acceso e invocamos el metodo login(), en caso de no obtener la respuesta informaremos que los datos son errorneos
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $contra = $_POST['psw'];
    $usuario = new usuario ('','','', $email, $contra);
    $login = $usuario->login();
    if ($row = $login->fetch_array()) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['datos']=$row;
         ?>
        <script type="text/javascript">
            window.location="../";
        </script>
        <?php 
    }else{
        echo "<div class='alert alert-danger'>Datos de acceso incorrectos</div>";
    }
}
 ?>