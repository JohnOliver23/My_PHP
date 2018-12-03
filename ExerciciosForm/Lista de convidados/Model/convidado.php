<?php
namespace App\Model;
class Convidado {
    private $nome;
    private $sexo;

    public function __construct($n, $s){
        $this->nome = $n;
        $this->sexo = $s;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this-> sexo = $s;
    }
}