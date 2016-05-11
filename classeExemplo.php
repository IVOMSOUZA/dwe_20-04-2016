<?php


class Teste{
    var $atributo1;
    var $atributo2;
    
    function getAtributo1(){
        echo "atributo1" . $this->atributo1."</br>";
        
    
    
}
function setAtributo1($atributo1){
        $this->atributo1 = $atributo1;
    } 
    
}


$teste = new Teste();
$teste-> atributo1= "ifsp";
$teste->getAtributo1();
$teste->setAtributo1("hortolandia");
$teste->getAtributo1();