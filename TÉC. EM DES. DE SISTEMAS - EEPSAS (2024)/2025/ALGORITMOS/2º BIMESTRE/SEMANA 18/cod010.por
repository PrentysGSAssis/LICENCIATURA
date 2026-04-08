programa
{
    inteiro num1, num2
    logico eh_multiplo

    funcao inicio() {
        escreva("Digite o primeiro número inteiro: ")
        leia(num1)
        escreva("Digite o segundo número inteiro: ")
        leia(num2)
        eh_multiplo = (num1 % num2 == 0)
        escreva("O primeiro é múltiplo do segundo? ", eh_multiplo, "\n")
    }
}