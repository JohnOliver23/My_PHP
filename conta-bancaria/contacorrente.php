<?php
include_once 'cliente.php';
class ContaCorrente
{
    private $numero;
    private $saldo;
    private $cliente;
    public function __construct($num, $saldo, $cli)
    {
        $this->numero = $num;
        $this->saldo = $saldo;
        $this->cliente = $cli;
    }
    public function depositar(int $valor)
    {
        $this->saldo += $valor;
    }
    public function getSaldo(): int
    {
        return $this->saldo;
    }
    public function setSaldo(int $valor)
    {
        $this->saldo = $valor;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }
    public function setNumero(int $num)
    {
        $this->numero = $num;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    public function setCliente(Cliente $cli)
    {
        $this->cliente = $cli;
    }

    public function sacar(int $valor): bool
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        }
        return false;

    }

}
