<?php
include_once '../modelos/Conex.php';
class CargarTabla extends Conex{
    
    public function __construct() {
        $this->conectar();
        $tabla = "";
        $res = $this->consultar();
        $this->desconectar();
        if($res != 0){
          while($row = mysql_fetch_array($res)){
              $tabla .="<tr>";
              $tabla .="<td>".$row["id"]."</td>";
              $tabla .="<td>".$row["nombre"]."</td>";
              $tabla .="<td>".$row["apellido"]."</td>";
              $tabla .="<td>".$row["estatus"]."</td>";
              $tabla .="</tr>";
          }  
        }
        echo $tabla;
    }
}

new CargarTabla();
