<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáreis e constantes • Curso em Vídeo - PHP Moderno</title>
</head>
<body>
    <h1>Variáveis e Constante</h1>

    <?php
        // ===============================================
        // Constantes
        $nome = 'Henrique';
        $sobrenome = 'Silva';
        const PAIS = 'Brasil';

        $nome = 'Gustavo';
        // PAIS = 'França';

        echo "<p>Muito prazer, $nome $sobrenome! Você mora no(a) " . PAIS . ".</p>";
        echo "<hr>";


        // ===============================================
        // Case sensitive
        $nome = 'Pedro';
        $Nome = 'Maria';

        echo "<h3>Case sensitive</h3";
        echo "<p>É verdade que seu nome é $nome?</p>";
        echo "<hr>";


        // ===============================================
        // Convenções
        $camelCase = 'camelCase';
        $PascalCase = 'PascalCase';
        $snake_case = 'snake_case';

        echo "<h3>Convenções</h3>";
        echo "<p>$camelCase</p>";
        echo "<p>$PascalCase</p>";
        echo "<p>$snake_case</p>";
        echo "<hr>";
    ?>
</body>
</html>