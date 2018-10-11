<?php
spl_autoload_register(
    function($classe){
        echo "o interpretador1 está a procura da classe $classe <br>";
        $filename = "Model/$classe.php";
        if(file_exists($filename))
            include_once($filename);
    }
);
spl_autoload_register(
    function($classe){
        echo "O interpretador 2 está a procura da classe $classe <br>";
        $filename = "Model/Midia/$classe.php";
        if(file_exists($filename))
            include_once($filename);
    }
);

spl_autoload_register(
    function($classe){
        echo "o interpretador 3 está a procura da classe $classe <br>";
        $filename = "Model/Interfaces/$classe.php";
        if(file_exists($filename))
            include_once($filename);
    }
);

spl_autoload_register(
    function($classe){
        echo "o interpretador 4 está a procura da classe $classe <br>";
        $filename = "Model/Trait/$classe.php";
        if(file_exists($filename))
            include_once($filename);
    }
);


?>