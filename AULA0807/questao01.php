<?php

function numeroMaior( $a, $b, $c){
    if ( $a >= $b && $a >= $c){
    return $a;
    }elseif ( $b >= $a && $b >= $c){
    return $b;
    }else {
    return $c;  
    }
}

$a = 34;
$b = 59;
$c = 91;

$maiorValor = numeroMaior ($a, $b, $c);
echo "O maior número dentre os 3 é: " .$maiorValor;  
?>
