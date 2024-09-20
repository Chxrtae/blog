<?php

//LAURA
# LAURA
/* LAURA */
echo 'a
', "b";
echo "
";
print ('ab');
echo "
";

echo "Utilizando var_dump
";
$a = array("a","b","c");
echo "
";
var_dump ($a);

echo "
Utilizando print_r
";
$a = array("a","b","c");
echo "
";
print_r($a);

// testando variaveis
$a = 1;
$b = 2;
$c = $a + $b;

echo " O valor da variável a é: ". $a;

echo " O valor da variável b é: ". $b;

echo " O valor da variável c é: ". $c;

$a = 1;
$b = 2;
$c = $a + $b;

function soma() {
echo "C é igual a: ". $GLOBALS['c'];
}
echo "A é igual a: ". $a;
echo "
";
echo "B é igual a: ". $b;
echo "
";

soma();
?>

