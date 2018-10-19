<?php
spl_autoload_register(
    function($classe){
        echo "o interpretador está a procura da classe $classe em";
        $filename = "$classe.php";
        $path = __DIR__ . "/" . preg_replace("/\\\/","/",$filename);
        echo $path;
        if(file_exists($path))
            include_once($path);
    }
)
?>