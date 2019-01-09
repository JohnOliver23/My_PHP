<?php

if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $senha = $_POST['password'];
        if ($login=='john' && $senha =='123'){
            session_start();
            $_SESSION['login'] = true;
            header("location:home.php");
        }else{
            header("location:index.php?msg=Erro de autenticação");
        } 
}else{
    header("location:index.php?msg=Erro de autenticação");
}
