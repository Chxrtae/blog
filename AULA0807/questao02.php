<?php
function raizSomaQuadrados($x, $y) {
    $somaQuadrados = $x*2 + $y*2;
    return sqrt($somaQuadrados);
}
$x = 5;
$y = 3;
echo "A raiz quadrada da soma dos quadrados é: " . raizSomaQuadrados($x, $y);
?>