<?php 
define ('DS',DIRECTORY_SEPARATOR);
define ('ROOT', realpath(dirname(__FILE__)) DS);




 include("config/Autoload.php");
 config\Autoload::run();
$producto=new modelo\producto;
 $producto->set("id","1");
 $datos= $producto->view();
 echo $datos['nombre'];
?>