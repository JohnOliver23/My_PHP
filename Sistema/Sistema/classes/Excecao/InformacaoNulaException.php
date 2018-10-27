<?php
namespace App\Excecao;
    class InformacaoNulaException extends \Exception
    {
        function __construct($message)
        {
            parent::__construct($message);
        }
    }
?>