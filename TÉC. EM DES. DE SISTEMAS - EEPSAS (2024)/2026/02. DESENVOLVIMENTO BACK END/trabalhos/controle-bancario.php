<?php

$saldo = 1000;
$titularConta = 'Prentys Assis';

echo "\n****** Bem Vindo a Banco EEPSAS *******\n";
echo "Titular: $titularConta\n";
echo "Saldo Atual: R$ $saldo\n";
echo "*****************************************\n";

do{
        echo "\n== Menu Principal ==\n";
        echo "1. Consultar saldo atual\n";
        echo "2. Sacar valor\n";
        echo "3. Depositar valor\n";
        echo "4. Sair\n
    ";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
            case 1:
                    echo "\n*************\n";
                    echo "Titular: $titularConta\n";
                    echo "Saldo atual: R$ $saldo\n";
                    echo "*************\n";
                    break;

            case 2:
                    echo "Qual valor deseja sacar? ";
                    $valorASacar = (float) fgets(STDIN);
                    if ($valorASacar > $saldo) {
                            echo "Saldo insuficiente. Retornando ao menu principal.\n";
                    } else {
                            $saldo -= $valorASacar;
                            echo "Saldo atual: R$ $saldo\n";
                    }
                    break;

            case 3:
                    echo "Quanto deseja depositar? ";
                    $valorADepositar = (float) fgets(STDIN);
                    if ($valorADepositar <= 0) {
                            echo "Erro: o valor do depósito deve ser positivo. Retornando ao menu principal.\n";
                    } else {
                            $saldo += $valorADepositar;
                            echo "Saldo atual: R$ $saldo\n";
                    }
                    break;
                            
            case 4:
                echo "Adeus\n";
                break;
                            
            default:
                echo "Opção inválida\n";
                    break;
            }
} while ($opcao != 4);