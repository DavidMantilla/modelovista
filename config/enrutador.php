<?php

namespace config;

class enrutador{

    public static function run(Request $request){
         $controlador= $request->getControlador()."Controller";
         $ruta=ROOT."controlador".DS.$controlador.".php";
        
         $metodo=$request->getMetodo();
         $argumento=$request->getArgumento();


         if($metodo=="index.php"){

            $metodo="index";
         }
         if(is_readable($ruta)){
 
            require_once $ruta;

            $mostrar="\\controlador\\".$controlador;
           
            $controlador= new $mostrar;

            if (!isset($argumento)){
                 call_user_func(array($controlador,$metodo));
            }
            else
            {
                call_user_func_array(array($controlador,$metodo),$argumento);


            }
         }

    }






}





?>