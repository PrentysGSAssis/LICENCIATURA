<?php

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

//paracada linha da tabela $notas chame a o slot de memória como $nota e execute
foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}