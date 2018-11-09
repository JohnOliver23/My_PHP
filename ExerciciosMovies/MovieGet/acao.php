<?php
include_once "dados.php";

if(isset($_GET['genero'])){
    $genero_filme = $_GET['genero'];
    if(empty($filmes[$nome_filme])){
        echo "não existe filmes com esse gênero";
    }else{
        foreach ($filmes[$genero_filme] as $key => $value) {
            echo "$value<br>";
        }
    }
}
if(isset($_GET['filme'])){
   $nome_filme = $_GET['filme'];
   echo "$nome_filme";
}



?>