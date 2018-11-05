
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="get">
    <p>Digite o Gênero do Filme</p>
    <input type="text" name ="genero" id="filme" value='<?= isset($_COOKIE['input'])?$_COOKIE['input']:""?>'>
    <?php 
    if(isset($_COOKIE['input']))
        unset($_COOKIE['input']);
    ?>
    <input type="submit">
</form>
<?php
include_once "dados.php";
if(isset($_GET['genero'])){
    $genero_filme = $_GET['genero'];
    setcookie('input',$genero_filme); 
    if(empty($filmes[$genero_filme])){
        echo "não existe filmes com esse gênero";
    }else{
        foreach ($filmes[$genero_filme] as $key => $value) {
            echo "$value<br>";
        }
    }
}

?>

</body>
</html>

