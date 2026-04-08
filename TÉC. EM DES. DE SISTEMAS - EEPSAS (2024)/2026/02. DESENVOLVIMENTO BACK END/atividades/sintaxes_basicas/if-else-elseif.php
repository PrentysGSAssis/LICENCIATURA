<?php

$anoLancamento =  2022;

if ($anoLancamento > 2022) {
    echo "O Filme é lançamento!\n";
    }   
elseif ($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "o Filme ainda é novo\n";
    }
else {
    echo "O Filme não é um lançamento\n";
}