programa
{
    real preco_a, preco_b
    logico a_mais_barato, precos_iguais

    funcao inicio() {
        escreva("Preço do Produto A: ")
        leia(preco_a)
        escreva("Preço do Produto B: ")
        leia(preco_b)
        a_mais_barato = (preco_a < preco_b)
        precos_iguais = (preco_a == preco_b)
        escreva("Produto A é mais barato que B? ", a_mais_barato, "\n")
        escreva("Os preços são iguais? ", precos_iguais, "\n")
    }
}