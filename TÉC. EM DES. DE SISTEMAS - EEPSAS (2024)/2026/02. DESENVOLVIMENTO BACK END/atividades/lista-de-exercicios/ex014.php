<?php

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}

$imc = calculaImc($argv[1], $argv[2]);

if ($imc < 18.5) {
    echo "O Imc é " . $imc . " e está abaixo do peso\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "O Imc é " . $imc . " e está no peso normal\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "O Imc é " . $imc . " e está com sobrepeso\n";
} else {
    echo "O Imc é " . $imc . " e está com obesidade\n";
}