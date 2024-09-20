<?php
    define("QTDE_ALUNOS", 30, FALSE);
    echo "Quantidade dos alunos da disciplina: ".QTDE_ALUNOS;
    echo "<br>";

    echo "Quantidade dos alunos da disciplina: ".constant("QTDE_ALUNOS");
    echo "<br>";

    if(defined())