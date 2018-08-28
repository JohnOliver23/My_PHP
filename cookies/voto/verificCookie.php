<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="style.css">
<?php
//unset($_COOKIE['uservote']);
//var_dump($_COOKIE);
if (isset($_COOKIE['uservote'])){
    ?><div class="votado">Não foi Possível Registrar o voto, Você já voltou!</div>
    <?php
}else{
if(isset($_POST['gridRadios'])){
    if($_POST['gridRadios']=='option1'){
      ?><p>seu voto foi registrado com sucesso você, voltou<span class='sim'> Sim</span></p>
    <?php 
    setcookie('uservote','sim'); 
    }
    else{
      ?>
        <p>seu voto foi registrado com sucesso, você voltou <span class='nao'>Não</span></p>
    <?php
    setcookie('uservote','nao');   
    }
   }
}
    ?>