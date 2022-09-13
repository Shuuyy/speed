<?php 
class Conexion extends mysqli
{
    private $host = 'localhost';
    private $user = 'root';
    private $psw = '';
    private $database = 'mafeka';

    public function __construct(){
        parent:: __construct($this->host, $this->user, $this->psw, $this->database);

        
        $this->connect_errno ? die('error en la conexión' . mysqli_connect_errno()) : $m = "conetado";
        
        
    }
}
 ?>