<?php 
include '../bd/conect.php';
class producto
{
    protected $nombre;
    protected $marca;
    protected $descripcion;
    protected $precio;

    public function __construct($nombre, $marca, $descripcion, $precio, $iden, $id){
        $this->nom = $nombre;
        $this->marc = $marca;
        $this->desc = $descripcion;
        $this->price = $precio;
        $this->im = $iden;
        $this->id = $id;
    }

    public function insert(){
        $db = new Conexion();
        $sql = "INSERT INTO productos (nombre, marca, descripcion, precio, imagen) VALUES ('$this->nom','$this->marc','$this->desc','$this->price', '$this->im')";
        $db->query($sql); 
    }

    public function obtener(){
        $db = new Conexion();
        $sql = "SELECT * FROM productos  ORDER BY id DESC";
        $obt = $db->query($sql);
        return $obt;
    }

    public function buscar(){
        $db = new Conexion();
        $sql = "SELECT * FROM productos WHERE nombre LIKE '%$this->nom%' OR descripcion LIKE '%$this->nom%' OR marca = '%$this->nom%'";
        $obt = $db->query($sql);
        return $obt;
    }

    public function porid(){
        $db = new Conexion();
        $sql = "SELECT * from productos WHERE id = '$this->id'";
        $obt = $db->query($sql);
        return $obt;
    }

}

 ?>