<?php
session_start();
if(isset($_POST['login'])){
    $login = $_POST['login'];
    if(!isset($_SESSION[$login])){
        $_SESSION[$login] = array();
    }
    header("location:index.php");
}
