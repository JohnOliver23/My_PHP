<?php
include_once("conexao.php");
include_once("../cliente.php");
include_once("../contacorrente.php");
$cliente = new Cliente(1234, "John");
$conta = new ContaCorrente(123, 100, $cliente);
$nome = $cliente->getCpf();
$cpf = $cliente->getNome();
$saldo = $conta->getSaldo();
$queryInsert = pg_query($conexao, "insert into conta_cliente values( '$nome','$cpf','$saldo')");
$affected_rows = pg_affected_rows($queryInsert);

?>