<?php

function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

echo "A temperatura em Fahrenheit é " . celsiusToFahrenheit($argv[1]) . "\n";