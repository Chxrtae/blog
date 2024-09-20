<?php
function contadorKabuuum($a) {
    if ($a >= 0) {
        for ($i = $a; $i >= 0; $i--) {
            echo "$i... ";
        }
        echo "kabuuum!";
    } else {
        echo "O valor deve ser não negativo.";
    }
}

$numero = 5;
contadorKabuuum($numero);
?>
