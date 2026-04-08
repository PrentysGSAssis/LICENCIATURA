programa
{
    // Objetivo: Ler nome e level de um jogador e exibir.
    // Autor: Prentys Assis
    // Data: 14/05/2025
    
    // 1. Declaração das variáveis
  cadeia nome_char
  inteiro level_char
        
    funcao inicio()
    {
        // 2. Mensagem inicial e pedido do nome
        escreva("--- Criação de Personagem Simples ---\n")
        escreva("Digite o nome do seu personagem Tibia: ")

        // 3. Leitura do nome
        leia(nome_char)

        // 4. Pedido do level
        escreva("Digite o level inicial do personagem (ex: 1): ")

        // 5. Leitura do level
        leia(level_char)

        // 6. Exibição dos dados lidos
        escreva("\n--- Personagem Criado ---\n")
        escreva("Nome: ", nome_char, "\n")
        escreva("Level: ", level_char, "\n")
    }
}