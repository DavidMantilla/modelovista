<?php namespace modelo

class categoria {
private $id;
private $nombre; 


function __Construct(){

$this->con =new conexion();

}
function setAtributo($atributo,$contenido){

$this->$atributo=$contenido;

}
function getAtributo($atributo){

   $return=$this->$atributo;

}


function listar(){

$Datos= $this->con->consultaRetorno("SELECT * FROM  categoria ");
return $Datos;

}

function add(){
$sql="INSERT INTO categoria (id, nombre) VALUES (null, '{$this->nombre}')";

 $Datos= $this->con->consultaSimple($sql);




}
function Delete(){
$sql="DELETE FROM  categoria WHERE id= '{$this->id}'";
    
  $this->con->consultaSimple($sql);
  
    
    
    
    }

    function Edit(){
        $sql="UPDATE FROM categoria SET nombre='{$this->nombre}' WHERE id= '{$this->id}'";
            
             $Datos= $this->con->consultaSimple($sql);
            return $Datos;
            
            
            
            }
            function view(){

                $Datos= $this->con->consultaRetorno("SELECT t1, t2.nombre FROM productos AS t1 INNER JOIN categoria AS t2 ON  ti.categoria =t2.id WHERE t1.id= '{$this->id}'");
                $row= mysqli_fetch_assoc($Datos);
                
                return $row;
                
                }
        


} ?>