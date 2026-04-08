alert("Boas Vindas ao Jogo do Número Secreto!");

let numeroMaximo = prompt("Escolha o número máixmo do jogo!")
let numeroSecreto = parseInt(Math.random() * numeroMaximo +1);
let chute;
let tentativas = 1;

while (chute != numeroSecreto){
    let chute = prompt(`Escolha um número entre 1 e ${numeroMaximo}`);
    if (chute == numeroSecreto) {
        break
    } else{
        tentativas++
        if (chute > numeroSecreto) {
            alert(`O número secreto é menor do que ${chute}`);
        } else {
            alert(`O número secreto é maior do que ${chute}`);
        }
    }
}

//Operador Ternário
let palavraTentativas = tentativas == 1 ? `tentativa`:`tentativas`;
alert(`Você descobriu o Número Secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativas}`);