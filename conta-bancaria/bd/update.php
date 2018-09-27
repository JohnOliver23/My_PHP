<?php
session_start();
include_once("conexao.php");
include_once("../cliente.php");
include_once("../contacorrente.php");
$querySelect = pg_query($conexao,'select * from conta_cliente ');
$rows = pg_fetch_all($querySelect);
foreach ($rows as $key => $value) {
    $nome = $value['nome'];
    $cpf = $value['cpf'];
    $saldo = $value['saldo'];
}
$cliente = new Cliente($cpf, $nome);
$conta = new ContaCorrente($cpf, $saldo, $cliente);

if(isset($_GET['saque'])){
    $valor = $_GET['saque'];
    if($conta->sacar($valor)){
        $querySelect = pg_query($conexao,"update conta_cliente set saldo = (select saldo from conta_cliente where cpf =1234) - $valor");
    }else{
       $_SESSION['erro'] = "saldo insuficiente!";
    }
    
}
if(isset($_GET['deposito'])){
    $valor = $_GET['deposito'];
    $conta->depositar($valor);
    $querySelect = pg_query($conexao,"update conta_cliente set saldo = (select saldo from conta_cliente where cpf =1234) + $valor");
}
header("Location: ../index.php");
?>