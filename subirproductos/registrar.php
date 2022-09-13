<?php 
include '../clases/class.productos.php';

//Recibiremos la imagen y los datos del articulo que han sido previamente validados
if ($_FILES['foto']['name'] != "") {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $foto = $_FILES['foto'];

    $tmp_name = $foto['tmp_name'];
    
    $img_file = $foto['name'];
    $img_type = $foto['type'];
    $directorio_destino = "../images/productos/" . $img_file;

        // Si se trata de una imagen   
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
     strpos($img_type, "jpg")) || strpos($img_type, "png")))
{            //¿Tenemos permisos para subir la imágen?   
    if (move_uploaded_file($tmp_name, $directorio_destino))
    {
        //instanciamos la clase producto, pasamos los parametros e invocando el metodo insert() registramos los datos
        $guardado = "images/productos/" . $img_file;
        $prod = new producto($nombre, $marca, $descripcion, $precio, $guardado, '');
        $prod->insert();
        echo "1";

    }
}

    //Si llegamos hasta aquí es que algo ha fallado


}else{
    echo "<div class='alert alert-danger'>Ingrese una imagen para el producto</div>";
}
?>