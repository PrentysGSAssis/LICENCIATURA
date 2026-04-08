<?php

echo "******************************\n";
echo "Escolha opção no menu abaixo:\n";
echo "1 - Ação\n";
echo "2 - Comédia\n";
echo "3 - Super Herói\n";
echo "4 - Terror\n";
echo "5 - Sair\n";
echo "******************************\n";

$opcao = (float) fgets(STDIN);

switch ($opcao) {
    case 1:
        echo "Você escolheu Ação\n";
        break;
    case 2:
        echo "Você escolheu Comédia\n";
        break;
    case 3:
        echo "Você escolheu Super Herói\n";
        break;
    case 4:
        echo "Você escolheu Terror\n";


        
        break;
    default:
        echo "Opção inválida\n";
}