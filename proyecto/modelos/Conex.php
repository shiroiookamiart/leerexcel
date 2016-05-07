<?php
define('HOST','127.0.0.1'); 
define('USER','root');
define('PASS','123456');
define('DBNAME','prueba');
class Conex
{
    protected $conexion;
    protected $db;
 
    public function conectar()
    {
        $this->conexion = mysql_connect(HOST, USER, PASS);
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db(DBNAME, $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);
 
        return true;
 
    }
 
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysql_close($this->$conexion);
        }
 
    }
    
    public function insertar($nombre, $apel, $est){
        $sql = "insert into algo(nombre, apellido, estatus) values ('".$nombre."','".$apel."',".$est.")";
        $insertar = mysql_query($sql);
        $resp = FALSE;
        if($insertar){
            $resp = TRUE;   
        }
        return $resp;
    }
    
    public function consultar(){
        $sql = "select * from algo";
        $con = mysql_query($sql);
        $resp = ($con)?$con:"0";
        return $resp;
    }
    
}