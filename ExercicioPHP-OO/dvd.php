<?php
include_once('Produto.php');
include_once('InformacaoNulaException.php');
include_once('Logger.php');
class DVD extends Produto {
    private $ano;

    function __construct(String $nome, String $ano, String $cod, float $preco ){
        if($ano == null){
            throw new InformacaoNulaException("o parametro ano esta nulo");
        }
        parent::__construct($nome, $cod, $preco);
        $this->ano = $ano;
        $this->exibeMensagem("a classe ".__CLASS__." foi criada");
    }
    function getAno( ){
        return $this->ano;
    }
    function setAno(float $a){
        $this->ano = $a;
    }
    
}
