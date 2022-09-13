<?php 
include '../clases/class.productos.php';


//instanciamos la clase productos y llamamos el método obtener para ver todos los productos
$producto = new producto('','','','','','');
$lista = $producto->obtener();
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