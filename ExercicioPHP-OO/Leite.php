<?php
class Leite extends Produto implements Perecivel{
    private $marca;
    private $volume;
    private $dataValidade;
    function __construct(int $cod, float $preco, String $marca, int $volume, String $dtValidade ){
        parent::__construct($cod, $preco);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dtValidade;
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
    function  getMarca() :String{
        return $this->marca;
    }
    function getVolume() :int{
        return $this->volume;
    }
    function getDataValidade() :String{
        return $this->dataValidade;
    }
    
    function setMarca(int $marca){
        $this->marca = $marca;
    }
    function setVolume(float $v){
        $this->volume = $v;
    }
    function setDataValidade(float $dt){
        $this->dataValidade = $dt;
    }
    public function estaVencido(): bool{
        if($this->dataValidade != "05/07/2018" ){
            return true;
        }
        return false;
    }

}