<?php

class Automotor {

    private $motor;
    private $combustivel;
    private $rodas;
    private $acentos;
    private $cor;
    private $velocidade = 1;

    function __construct() {
     
    }

    function getMotor() {
        $this->motor;
    }

    function getCombustivel() {
        $this->motor;
    }

    function setMotor($motor) {
        $this->motor = $motor;
    }

    function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }
    function getVelocidade(){
        echo $this->velocidade;
    }
     function acelerar($velocidade) {
        $this->velocidade = $velocidade + 10;
    }

}
