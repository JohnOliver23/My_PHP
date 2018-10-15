<?php


spl_autoload_register(
    function($classe){
        
        echo "o interpretador1 está a procura da classe $classe em ";
        $filename = "$classe.php";
        
        
        $path = __DIR__ . '/' . preg_replace("/\\\/","/",$filename);
        echo "$path<br>";

        $realpath = realpath($path);

        if(file_exists($realpath))
            include_once($realpath);
    }
);


?>