<?php 
include '../bd/conect.php';

class carrito{
	protected $user;
	protected $prod;

	public function __construct($idusuario, $idproducto){
		$this->user = $idusuario;
		$this->prod = $idproducto;
	}

	public function insert(){
		$db = new Conexion();
		$sql = "INSERT INTO carrito (id_usuario, id_producto) VALUES ('$this->user','$this->prod')";
		$db->query($sql);
	}

	public function mostrar(){
		$db = new Conexion();
		$sql = "SELECT * FROM carrito WHERE id_usuario = '$this->user'";
		$resp = $db->query($sql);
		$arreglocarro = array();
		while ($row = $resp->fetch_array()) {
			$idp = $row['id_producto'];
			$sql2 = "SELECT * FROM productos WHERE id = '$idp'";
			$res = $db->query($sql2);
			array_push($arreglocarro, $res->fetch_array());
		}
		
		return $arreglocarro;

	}

	public function comprar(){
		$db = new Conexion();
		$sql = "DELETE FROM carrito WHERE id_usuario = '$this->user'";
		$db->query($sql);
	}

	public function eliminar(){
		$db = new Conexion();
		$sql = "DELETE FROM carrito WHERE id_usuario = '$this->user' AND id_producto = '$this->prod'";
		$db->query($sql);
	}
}
?>
