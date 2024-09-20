<?php 
    //testando tipo objeto
    class Computador{
        var $cpu;
        function ligar(){
            echo "Ligando um computador na {$this->cpu}";
        }
    }
    $objeto = new Computador;
    $objeto->cpu = 'energia';
    $objeto->ligar();
?>