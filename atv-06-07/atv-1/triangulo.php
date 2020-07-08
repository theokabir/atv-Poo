<?php

class Triangulo{
    private $base;
    private $alt;

    function __construct($base, $alt){
        $this->base = $base;
        $this->alt = $alt;
    }

    function getBase(){
        return $this->base;
    }

    function setBase($base){
        $this->base = $base;
    }

    function getAlt(){
        return $this->alt;
    }

    function setAlt($alt){
        $this->alt = $alt;
    }

    function area(){
        return ($this->getBase()*$this->getAlt()/2);
    }

    function imprimir(){
        echo "<p><strong>Altura: </string>".$this->getAlt()."</p><br>";
        echo "<p><strong>Base: </string>".$this->getBase()."</p><br>";
        echo "<p><strong>Area: </string>".$this->area()."</p><br>";
    }
}

?>