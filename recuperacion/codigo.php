<?php 
include '../clases/class.usuarios.php';
$email = $_POST['email'];
$codigounico = uniqid();

$usuario = new usuario('','','',$email, $codigounico);
$usuario->recuperacion();

if(mail($email, "Recuperación de contraseña MaFeKa", "Su codigo de recuperacion de contrasena es: " . $codigounico, "From: mafeka@icepopjs.com")){
    echo "Correo enviado";
}else{
    echo "error";
}
// error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);

// require '../src/Exception.php';
// require '../src/PHPMailer.php';
// require '../src/SMTP.php';


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->Host="mail.icepopjs.com";
// $mail->Port="587";
// $mail -> SMTPSecure = "tls";
// $mail -> SMTPAuth = true;

// $mail->Username = "mafeka@icepopjs.com";
// $mail->Password = "Asdf159357.";WMaFeKa");
// $mail->addAddress($email, "Recuperación de contraseña");
// $mail->Subject="Recupere su cuenta ahora";
// $mail->msgHTML("<div style=''>Recupere sucontraseña, ingrese el siguient código en 'Ya tengo un código' y reestablezca su contraseña<br><center><h2>".$codigounico."</h2></center><br>Este código es de uso único y no podrás volver a utilizarlo.</div>");
// if(!$mail->send()){
   // echo "Error al enviar" . $mail->ErrorInfo;
// }
 ?>
