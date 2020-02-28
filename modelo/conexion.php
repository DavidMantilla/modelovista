<?php namespace modelo;

class conexion{

    private $datos = array (
    
        "host"=>"localhost",
        "user"=>"root",
        "password"=>"",
        "db"=>"barcode"

    );

    private $con;


    function __Construct (){
   
       $this->con= new \mysqli($this->datos["host"],$this->datos["user"],$this->datos["password"],$this->datos["db"]);



    }


      public function consultaSimple($sql){
       
        $this->con->query($sql);



      }
public function consultaRetorno($sql){
       
       $datos= $this->con->query($sql);
        
        return $datos;


      }


}

?>