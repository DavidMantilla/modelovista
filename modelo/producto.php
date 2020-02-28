<?php namespace modelo;

class producto {
private $id;
private $codigo; 
private $nombre; 
private $descripcion;
private $categoria;


function __Construct(){

$this->con =new conexion();

}


function set($atributo,$contenido){

$this->$atributo=$contenido;

}
function get($atributo){

   $return=$this->$atributo;

}


function listar(){

$Datos= $this->con->consultaRetorno("SELECT t1.*, t2.categoria FROM productos AS t1 INNER JOIN categoria AS t2 ON t1.categoria =t2.id ");
return $Datos;

}

function add(){
$sql="INSERT INTO productos (id, codigo, nombre, descripcion, categoria ) VALUES (null, '{$this->nombre}','{$this->descripcion},{$this->categoria}')";

 $Datos= $this->con->consultaSimple($sql);
return $Datos;



}
function Delete(){
$sql="DELETE FROM productos WHERE id= '{$this->id}'";
    
     $Datos= $this->con->consultaSimple($sql);
    return $Datos;
    
    
    
    }

    function Edit(){
        $sql="UPDATE FROM productos SET codigo='{$this->nombre}',nombre='{$this->nombre}', descripcion='{$this->descripcion}',  categoria='{$this->categoria}' WHERE id= '{$this->id}'";
            
             $Datos= $this->con->consultaSimple($sql);
            return $Datos;
            
            
            
            }
            function view(){

                $Datos= $this->con->consultaRetorno("SELECT t1.*, t2.nombre_categoria FROM productos AS t1 INNER JOIN categoria AS t2 ON t1.categoria =t2.id WHERE t1.id='{$this->id}'");
                 $row= mysqli_fetch_assoc($Datos);
                
                 return $row;

                }
        


} ?>