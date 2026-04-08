<?php

echo "Digite um número: \n";

$numero = (float) fgets(STDIN);

echo "O número é: $numero\n";

// Onde, a função nativa "fgets" captura uma string de um arquivo, e STDIN é o identificador do terminal;
// Basicamente, o "f" vem de "file" (arquivo), indicando que estamos obtendo algo de um arquivo. O "gets" vem de "pegar" e o "s" é de string, que significa obter uma sequência de caracteres de um arquivo.
// Assim, quando utilizamos a função fgets, que tenta ler uma string de um arquivo, e passamos o nosso terminal como o arquivo de entrada, ela ficará aguardando até digitarmos algo no terminal e pressionarmos "Enter".