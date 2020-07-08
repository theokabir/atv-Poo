<?php

class Conta{
    private $nome;
    private $saldo;
    private $date;

    function __construct($nome){
        $this->nome = $nome;
        $this->saldo = 200;
        $this->date = getDate();
    }

    function getNome(){
        return $this->nome;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    function saque($val){
        if(($this->saldo - $val) < 0){
            echo "<p style=\"color: red\">O saldo não pode ser negativo</p>";
            echo "<p style=\"color: red\">se saldo continua ".$this->getSaldo()." </p>";
        }else{
            $this->saldo -= $val;
            echo "<p style=\"color: green\">você sacou R$:$val</p>";
            echo "<p style=\"color: green\">Seu saldo atual é de: R$:".$this->getSaldo()."</p>";
        }
    }

    function deposito($val){
        $this->saldo += $val;
        echo "<p style=\"color: green\">você depositou4 R$:$val</p>";
        echo "<p style=\"color: green\">Seu saldo atual é de: R$:".$this->getSaldo()."</p>";
    }
}

?>