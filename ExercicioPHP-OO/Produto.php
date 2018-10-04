<?php
abstract class Produto{
    private $codigo;
    private $preco;
    abstract protected function getPreco();
    abstract protected function getCodigo();
    abstract protected function setPreco();
    abstract protected function setCodigo();
    function __construct(int $cod, float $preco){
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

}


?>