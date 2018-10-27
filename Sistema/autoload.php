<?php


spl_autoload_register(
    function($classe){
        
        echo "o interpretador1 está a procura da classe $classe em ";
        $filename = "$classe.php";
        echo "$filename<br>";

        if(file_exists($filename))
            include_once($filename);
    }
);


?>