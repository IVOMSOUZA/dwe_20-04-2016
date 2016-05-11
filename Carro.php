<?php

include 'Automotor.php';
class Carro extends Automotor {
    
   

    function velocidade(){

    $gol = new Automotor();
    
   $gol->acelerar(10);
   
   $gol->getVelocidade();
   
   echo 'ola';
    }
    
    
 
}


$Carro = new Carro();
$Carro->velocidade();


echo 'ola';