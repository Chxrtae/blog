<?php
    //testando o tipo mixed
    $a = 50/5;
    $a2 = sqrt(-3);
    $a3 = pow(0, 0);
    $a4 = 81/9;

    echo $a."<br />";
    echo $a2."<br />";
    echo $a3."<br />";
    echo $a4."<br />";
    echo "<br />";

    echo gettype($a)."<br  />";
    echo gettype($a2)."<br  />";
    echo gettype($a3)."<br  />";
    echo gettype($a4);
?>