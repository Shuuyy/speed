<?php 
include '../bd/conect.php';
class usuario
{
	protected $nombre;
	protected $ape;
	protected $direccion;
	protected $email;
	protected $pass;

	public function __construct($nom, $ap, $dir, $em, $pas){
		$this->nombre = filter_var($nom, FILTER_SANITIZE_STRING);
		$this->ape = filter_var($ap, FILTER_SANITIZE_STRING);
		$this->direccion = filter_var($dir, FILTER_SANITIZE_STRING);
		$this->email = filter_var($em, FILTER_SANITIZE_EMAIL);
		$this->pass = md5($pas);
	}

	public function insert(){
		$db = new Conexion();
		$sql = "INSERT INTO usuarios(`nombre`, `apellidos`, `email`, `contra`, `direccion`) VALUES ('$this->nombre','$this->ape','$this->email','$this->pass','$this->direccion')";
		$db->query($sql) ? $m = "1" : $m="hubo un error";
	}

	public function verificar(){
		$db = new Conexion();
		$sql = "SELECT * FROM usuarios WHERE email = '$this->email'";
		$result = $db->query($sql);
		return $result;
	}

	public function login(){
		$db = new Conexion();
		$sql = "SELECT * FROM usuarios WHERE email = '$this->email' AND contra = '$this->pass'";
		$resultado = $db->query($sql);
		return $resultado;
	}

	public function recuperacion(){
		$db = new Conexion();
		$sql = "UPDATE usuarios SET copdigo = '$this->pass' WHERE email = '$this->email'";
		$db->query($sql);
	}

	public function verificarcodigo(){
		$db= new Conexion();
		$sql = "SELECT * FROM usuarios WHERE email = '$this->email' AND copdigo = '$this->pass'";
		$resultado = $db->query($sql);
		return $resultado;
	}
	
	public function cambiarcontra(){
		$db= new Conexion();
		$delete = "UPDATE usuarios SET copdigo = '' WHERE email = '$this->email'";
		$db->query($delete);
		$sql = "UPDATE usuarios SET contra = '$this->pass' WHERE email = '$this->email'";
		$db->query($sql);
	}
}
?>