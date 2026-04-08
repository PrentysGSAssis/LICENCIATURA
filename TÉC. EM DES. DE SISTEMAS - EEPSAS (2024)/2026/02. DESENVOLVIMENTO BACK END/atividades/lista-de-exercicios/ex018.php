<?php
function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

$array = fgets(STDIN);
$array = explode(' ', $array);

$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);
?>