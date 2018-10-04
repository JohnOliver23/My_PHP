<?php
include_once('Nomeavel.php');
include_once('Logger.php');
abstract class Produto {
    use Nomeavel, Logger;
    private $codigo;
    private $preco;

    function __construct( $nome,  $cod,  $preco){
        if($nome == null){
            throw new InformacaoNulaException("o parametro nome esta nulo");
        }
        if($cod == null){
            throw new InformacaoNulaException("o parametro codigo esta nulo");
        }
        if($preco == null){
            throw new InformacaoNulaException("o parametro codigo esta nulo");
        }
        $this->codigo = $cod;
        $this->preco = $preco;
        $this->nome = $nome;
    }
    function  getCodigo() :int{
        return $this->codigo;
    }
    function getPreco() :float{
        return $this->preco;
    }
    function setCodigo(int $cod){
        $this->codigo = $cod;
    }
    function setPreco(float $p){
        $this->preco = $p;
    }
}


?>