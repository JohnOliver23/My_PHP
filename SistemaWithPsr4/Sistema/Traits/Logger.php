<?php
namespace Sistema\Traits;
trait Logger{
    public function exibeMensagem(String $msg){
        echo "<br> $msg<br>";
    }
}