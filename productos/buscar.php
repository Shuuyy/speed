<?php 
include '../clases/class.productos.php';

$clave = $_POST['buscar'];
//instanciamos la clase producto y llamamos la clase buscar habiendole pasado el parámetro de búsqueda
$producto = new producto($clave, '','','','','');
$lista = $producto->buscar();
while ($row = $lista->fetch_array()) {
    ?>
    
    <div class="col-sm-4">
        <div class="card" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="card-header">
                <img src="<?php echo '../' . $row['imagen'] ?>">
            </div>
            <div class="card-body">
                <h2><?php echo $row['nombre']; ?></h2>
                <p><?php echo $row['descripcion'] ?></p>
                <div class="row">
                    <div class="col-sm-6" style="text-align: left;">
                        <?php echo $row['marca']; ?>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <?php echo "$ " . $row['precio']; ?>
                    </div>
                </div><br>
                <center>
                    <?php 
                    if (isset($_SESSION['id'])) {
                        ?>
                        <script type="text/javascript" src="carrito.js"></script>
                        <button class="btn btn-warning" onclick="agregar(<?php echo $_SESSION['id']; ?>, <?php echo $row['id']; ?>)">Agregar al carrito</button>
                        <?php 
                    }else{
                        ?>
                        <script type="text/javascript" src="carrito.js"></script>
                        <button class="btn btn-warning" onclick="iniciesesion()">Agregar al carrito</button>
                        
                    <?php } ?>
                    
                </center>
                
            </div>
        </div>
    </div>
    <?php 
}
?>