<?php

function tabuada($numero) {
    if ($numero > 0) {
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    } 
}

$tabuada = 9;
echo "Tabuada do $tabuada:<br>";
tabuada($tabuada);
?>