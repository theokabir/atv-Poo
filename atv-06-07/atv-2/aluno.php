<?php

class Aluno{
    private $nome;
    private $matricula;
    private $notas;

    function __construct($nome, $matricula, $notas){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = (is_array($notas)?$notas:false);
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getNotas(){
        return $this->notas;
    }

    function setNotas($notas){
        $this->notas = (is_array($notas)?$notas:false);
    }

    function calcMedia(){
        $med = 0;
        $n = $this->getNotas();
        for($i = 0; $i < 4; $i++){
            $med += $n[$i];
        }
        $med /= 4;

        if(($med < 0) or ($med > 10)){
            $med = "ERROR";
        }elseif($med < 5){
            $med = "I($med)";
        }elseif($med <= 6){
            $med = "R($med)";
        }elseif($med <= 8){
            $med = "B($med)";
        }elseif($med <= 10){
            $med = "MB($med)";
        }

        return $med;
    }

    function imprimir(){
        echo "<div class=\"border border-secundary rounded p-4\">";

        echo "<p><strong>Nome: </strong>". $this->getNome() ."</p>";
        echo "<p><strong>Matricula: </strong>". $this->getMatricula() ."</p>";
        echo "<p><strong>Media: </strong>". $this->calcMedia() ."</p>";

        echo "</div>";
    }
}

?>