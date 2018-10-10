<?php
include_once('Nomeavel.php');
include_once('Logger.php');
abstract class Produto{
    use Nomeavel, Logger;
    private $codigo;
    private $preco;

    function __construct($nome, $cod, $preco){
        if($nome == null){
            throw new InformacaoNulaException("o parametro nome está nulo");
        }
        if($cod == null){
            throw new InformacaoNulaException("o parametro codigo esta nulo");
        }
        if($preco == null){
            throw new InformacaoNulaException("o parametro preco esta nulo");
        }
        $this->nome = $nome;
        $this->codigo = $cod;
        $this->preco = $preco;
        
    }
}
function  getCodigo()
 {
    return $this->codigo;
 }
function getPreco()
{
    return $this->preco;
}
function setCodigo(int $cod){
    $this->codigo = $cod;
}
function setPreco(float $p){
    $this->preco = $p;
}

?>