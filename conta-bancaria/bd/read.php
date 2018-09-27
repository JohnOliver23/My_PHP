<?php
include_once("conexao.php");
include_once("cliente.php");
include_once("contacorrente.php");
$querySelect = pg_query($conexao,'select * from conta_cliente ');
$rows = pg_fetch_all($querySelect);
foreach ($rows as $key => $value) {
    $nome = $value['nome'];
    $cpf = $value['cpf'];
    $saldo = $value['saldo'];
}
$cliente = new Cliente($cpf, $nome);
$conta = new ContaCorrente($cpf, $saldo, $cliente);
?>