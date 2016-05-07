<?php
include_once "../phpexcel/Excel/reader.php";
include_once '../modelos/Conex.php';
set_time_limit(0);
class SubirExcel extends Conex{
    
    public function __construct(){
        extract($_POST);
        $archivo = $_FILES["file"]["name"];
        $extencion = explode(".", $archivo);
        $ruta = "../archivos/".$extencion[0].".xls";
        $resp = "";
        if($extencion[1] == "xls" || $extencion[1] == "xlsx"){
            if(!move_uploaded_file($_FILES["file"]["tmp_name"],$ruta)){
                $resp = "2";
            }else{
                chmod($ruta, 0777);
                $resp = $this->leerExcel($ruta);
            }    
        }else{
            $resp = "3";
        }
        echo $resp;
    }
    
    protected function leerExcel($ruta){
        $mensaje = "";
        if($ruta){
            $data = new Spreadsheet_Excel_Reader();
            $data->setOutputEncoding('CP1251');
            $data->read($ruta);
            $this->conectar();
            for($i=0; $i<count($data->sheets); $i++) {
                for($z=1; $z<count($data->sheets[$i]['cells']); $z++) {
                    $nombre = $data->sheets[$i]['cells'][$z][1];
                    $apel = $data->sheets[$i]['cells'][$z][2];
                    $est = $data->sheets[$i]['cells'][$z][3];
                    $mensaje = ($this->insertar($nombre, $apel, $est))?1:0;
                }    
            }
            $this->desconectar();
        }else{
            $mensaje = "2";
        }
        return $mensaje;
    }
    
}    

if(isset($_POST)){    
   new SubirExcel();
}
