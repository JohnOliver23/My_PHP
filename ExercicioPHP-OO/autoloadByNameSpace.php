<?php
namespace Model;

spl_autoload_register(function($classe){
   $dir = __NAMESPACE__."/".$classe.".php";
   if(!file_exists($dir)){
    foreach (scandir(__NAMESPACE__) as $key => $value) {
        $dir = __NAMESPACE__."/$value/$classe.php";
        if(file_exists($dir)){
            echo "incluindo $dir <br>";
            include_once($dir);
        }
    };  
   }else{
    echo "incluindo $dir <br>";
    include_once($dir);
   }
});


?>