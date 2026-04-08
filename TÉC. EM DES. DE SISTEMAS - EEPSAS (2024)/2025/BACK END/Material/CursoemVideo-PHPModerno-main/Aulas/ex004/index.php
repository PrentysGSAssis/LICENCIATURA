<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP • Curso em Vídeo - PHP Moderno</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>

    <?php
        $num = 300;
        $hexadecimal = 0x1A; // 0x
        $binario = 0b1010;   // 0b
        $octal = 0020;       // 00

        echo "<p>O valor da variável é $num</p>";
        echo "<p><b>Hexadecimal</b>: ". dechex($hexadecimal). " em decimal é $hexadecimal</p>";
        echo "<p><b>Binário</b>: "    . decbin($binario)    . " em decimal é $binario</p>";
        echo "<p><b>Octal</b>: "      . decoct($octal)      . " em decimal é $octal</p>";

        echo "<br>";

        $string = "Henrique";
        $int    = 300;
        $float  = 3.14;
        $bool   = false;
        var_dump($string);
        var_dump($int);
        var_dump($float);
        var_dump($bool);

        echo "<br><br>";

        echo "<p><b>Potência</b>: 3e2 (3.10²) é ". 3e2 . "</p>";
        var_dump(3e2);
        var_dump((integer)3e2);
    ?>
</body>
</html>