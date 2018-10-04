<?php
include_once('Produto.php');
include_once('Perecivel.php');
include_once('InformacaoNulaException.php');
include_once('Logger.php');
class Leite extends Produto implements Perecivel{
    private $volume;
    private $dataValidade;
    function __construct(String $nome, String $volume, $dtValidade, String $cod, float $preco){
        if($volume == null){
            throw new InformacaoNulaException("o parametro volume esta nulo");
        }
        if($dtValidade == null){
            throw new InformacaoNulaException("o parametro data validade está nulo");
        }
        parent::__construct($nome, $cod, $preco);
        $this->volume = $volume;
        $this->dataValidade = new DateTime($dtValidade);
        $this->exibeMensagem("a classe ". __CLASS__ ." foi criada");
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
    function getVolume() :int{
        return $this->volume;
    }
    function getDataValidade() :String{
        return $this->dataValidade;
    }
    
    function setVolume(float $v){
        $this->volume = $v;
    }
    function setDataValidade(float $dt){
        $this->dataValidade = $dt;
    }
    public function estaVencido(): bool{
        $atual = new DateTime();
        if ($atual < $this->dataValidade)
            return False;
        else
            return True;
    }
    

}