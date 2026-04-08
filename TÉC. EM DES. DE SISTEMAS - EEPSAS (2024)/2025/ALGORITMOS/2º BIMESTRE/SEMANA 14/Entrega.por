programa
{
     funcao inicio()
     {
          inteiro dano_min, dano_max
          real dano_medio

          escreva("--- Calculadora de Dano Médio (Tibia) ---\n")

          escreva("Qual o dano MÍNIMO da sua arma? ")
          leia(dano_min)

          escreva("Qual o dano MÁXIMO da sua arma? ")
          leia(dano_max)

          // Calcula a média. Dividir por 2.0 força o resultado ser real.
          dano_medio = (dano_min + dano_max) / 2.0

          escreva("\nSua arma tem Dano Mínimo: ", dano_min)
          escreva(", Dano Máximo: ", dano_max)
          escreva(" e Dano Médio: ", dano_medio, ".\n")
     }
}