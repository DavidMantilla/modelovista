<?php 
define ('DS',DIRECTORY_SEPARATOR);
define ('ROOT',  realpath(dirname(__FILE__)).DS);



 include("config/Autoload.php");
 config\Autoload::run();
config\enrutador::run(new config\request());
?>