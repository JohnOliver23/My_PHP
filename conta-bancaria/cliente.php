<?php
class Cliente{
    private  $cpf;
    private  $nome;
    function __construct($cpf, $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
    function getCpf() : int{
        return $this->cpf;
    }
    function setCpf(int $cpf) {
        $this->cpf = $cpf;
    }
    function getNome(): String{
        return $this->nome;
    }
    function setNome(String $nome){
        $this->nome = $nome;
    }
}
?>