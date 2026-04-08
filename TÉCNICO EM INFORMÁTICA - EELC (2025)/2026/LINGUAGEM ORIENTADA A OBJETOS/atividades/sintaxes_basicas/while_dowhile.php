<?php


$condicao = (10 > 5); //Condição verdadeira

while ($condicao) {

    echo "A condição é verdadeira! \n";
    $condicao = false; //Alterando a condição para falsa, para evitar loop infinito
        
}



do {
    // Bloco executado pelo menos uma vez, mesmo que a condição seja falsa
   
    echo "Entrou no bloco do-while\n";
    // atualiza a condição para demonstrar repetição
    
    $condicao = false;
} while ($condicao);