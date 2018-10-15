<?php
namespace Model\Tretas;
trait Logger{
    public function exibeMensagem(String $msg){
        echo "<br> $msg<br>";
    }
}