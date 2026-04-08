
# Curso em Video - PHP Moderno


Material das aulas, exercícios e anotações do curso de PHP do Curso em Vídeo

<img src="imgs/phpmoderno_icon.jpg" width=140px align="right">


---


### Curiosidades sobre o PHP

<details>
    <summary>Por que um elefante?</summary>
    <br>
    Pois <a href="https://www.instagram.com/vincentpontier/"">Vincent</a> (criador do mascote), achou que as letras da sigla PHP, olhadas de um certo ângulo, parecia um elefante.
    <br>
    <img src="imgs/elephpant.png" width="130px">
</details>

<details>
    <summary>Significado da sigla PHP</summary>
    <br>
    <b>P</b>HP <b>H</b>ypertext <b>P</b>reprocessor.
</details>


<details>
    <summary>Apenas a Super Tag funciona?</summary>
    <br>

Não! no PHP existe outras 4 formas de colocar um código PHP dentro do HTML, além da forma mais comum, sendo a Super tag (`<?php ?>`). Entretanto, é recomendado utilizar a Super tag.



| Nome            | Código                              | Como utilizar                                                                  |
|  ---            | ---                                 | ---                                                                            |
| Short open tag  | `<? ?>`                             | Precisa habilitar *"short_open-tag"* no `php.ini`                              |
| Short open tag  | `<?= ?>`                            | Habilitada da mesma forma do item acima e **substitui o comando `echo`**       |
| Asp tags        | `<% %>`                             | Precisa habilitar *"asp_tags"* no `php.ini` e utilizar a versão **PHP <= 5.6** |
| Marca de script | `<script language="php"> </script>` | Apenas para **PHP <= 5.6.40**                                                  |

</details>
<!-- Curiosidades sobre o PHP -->



## Anotações
<details>
    <summary>
    <b>Variáveis e Constantes</b>
    </summary>

As variáveis e constantes são espaços na memória, onde podemos armazenar valores e consulta-los quando quisermos. Porém, os valores nas `variáveis podem variar`, e os valores nas `constantes não variam`.

| Como declarar | Exemplo                 |
| ---           | ---                     |
| `$nome`       | `$nome = 'Henrique'`    |
| `const PAIS`  | `const PAIS = 'Brasil'` |

*Obs: o nome das variáveis e constantes podem contem acentos, embora não seja uma boa prática.*

#### Regras para nomes indentificadores

1. Variáveis sempre começam com o **símbolo `$`**.
2. O segundo carácter (após o `$`) pode ser **letra** ou **símbolo**.
3. O terceiro pode ser **[a-z]**, **[A-Z]**, **[0-9]** e **[_]**.
4. Aceita caracteres da tabela **ASCII** a partir de **128**.
5. Aceita caracteres acentuados como **á**, **õ**, **ç**.
6. A linguagem é **case sensitive** em relação aos nomes.
7. Nomes especiais (indentificadores reservados) como o `$this` não podem ser usados.

#### Recomendações para dar nomes 

1. Tente dar nomes **claros** e de **fácil** identificação
1. Evite nomes muito **curtos** ou **longos**
1. Defina um **padrão** e siga em todo o projeto
1. Para **variáveis**, dê preferência a letras **minúsculas**
1. Para **constantes**, dê preferências a letras **maiúsculas**
1. Use **camelCase** para métodos e atributos
1. Use **SNAKE_CASE** para nomear constantes
</details>


<details>
    <summary><b>Tipos primitivos</b></summary>

#### Tipos primitivos escalares

| Nome da variável | Valor   | Tipo                                                              | Definição                                                                                                     |
| ---              | ---     | ---                                                               | ---                                                                                                           |
| `$sobrenome`     | "Silva" | **String**                                                        | Sequência de letras, números e símbolos, sempre representadas entre aspas                                     |
| `$idade`         | 34      | **Int** ou **integer**                                            | Um valor numérico Inteiro, aquele que vem sem a parte decimal.                                                |
| `$peso`          | 85.9    | **Float**, **double** ou **real**. *Real* apenas no *PHP < 7.4*   | Um valor numérico Real, que vem com a parte decimal, depois do ponto flutuante.                               |
| `$casado`        | true    | **Bool** ou **boolean**                                           | Um valor lógico ou Booleano, que aceita apenas os valores verdadeiro ou falso (**true** ou **false**).        |


#### > 10 Exemplos 

| Valor     | Resposta   |
| ---       | ---        |
| `"RJ"`    | `string`   |
| `3.1415 ` | `float`    |
| `17`      | `int`      |
| `true`    | `bool`     |
| `""`      | `atring`   |
| `-19`     | `int`      |
| `"fase"`  | `"string"` |
| `0x1A`    | `int`      | 
| `3e2`     | `float`    |
| `"1024"`  | `string`   |

**Obs:**
- hexadecimal: 0x
- Binário: 0b
- Octal: 0o

</details>

<!-- <details>
    <summary><b></b></summary>


</details> -->

<!-- Anotações -->