<?php
$host_banco = "127.0.0.1";
$port = "5432";
$db_name = "cliente_conta";
$usuario = "postgres";
$password = "1";
$string = "host=$host_banco port=$port dbname=$db_name user=$usuario password=$password";
$conexao = pg_connect($string);
//echo "conexao efetuada com sucesso!";
?>