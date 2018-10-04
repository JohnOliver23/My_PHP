<?php
class DVD extends Produto{
    private $titulo;
    private $ano;

    function __construct(int $cod, float $preco, String $tit, int $ano){
        $parent::__construct($cod, $preco);
        $this->titulo = $tit;
        $this->ano = $ano;
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
    function  getTitulo() :String{
        return $this->titulo;
    }
    function getAno() :int{
        return $this->ano;
    }
    function setTitulo(int $tit){
        $this->titulo = $tit;
    }
    function setAno(float $a){
        $this->ano = $a;
    }
    
}
