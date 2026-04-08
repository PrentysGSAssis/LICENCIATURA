<?php

//  for (inicialização, condição da repetição, incremento) {
        // Bloco de código a ser executado
//  }

    for ($i = 0; $i < 5; $i++) {
        echo "Valor de i: $i\n";
    }

// exemplo 1: usando for para preencher um array com valores
echo "\nExemplo 1: preenchendo um array com for\n";
$array = [];
for ($i = 0; $i < 5; $i++) {
    // adiciona o valor de $i ao final do array
    $array[] = $i;
    echo "for: adicionando $i ao array\n";
}

// exemplo 2: percorrendo o array com foreach para somar os valores
echo "\nExemplo 2: percorrendo o array com foreach para somar os valores\n";
$soma = 0;
foreach ($array as $valor) {
    $soma += $valor;
    echo "soma parcial = $soma\n";
}

echo "Soma total: $soma\n";
