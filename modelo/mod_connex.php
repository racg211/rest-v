<?php
class Connex{
    private $user;
    private $clave;
    private $servidor;
    private $db;
    private $port;
    private $pgconn;


    function Connex(){

        $this->user = 'postgres';  
        $this->clave='postgresql';  
        $this->servidor ='localhost'; 
        $this->db = 'restaurante';  
        $this->port = 5432;  //5432
        $this->pgconn='';
    }

    public function conectar(){
	
		
        $this->pgconn = pg_connect("dbname='".$this->db."' port='".$this->port."' password='".$this->clave."' user='".$this->user."' host='".$this->servidor."'" ) or die("ERROR DE CONEXION");
        $pgconn = $this->pgconn;

       // $_SESSION['pgconn']=$pgconn;
        return $pgconn;
    }
}

?> 
