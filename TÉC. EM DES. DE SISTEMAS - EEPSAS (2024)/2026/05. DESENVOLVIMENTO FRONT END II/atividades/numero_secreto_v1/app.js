alert("Bem Vindo do Jogo do Número Secreto");

let numeroMaximo = prompt("Escolha o Numero Limite para o jogo");
let numeroSecreto = parseInt(Math.random() * numeroMaximo) + 1;
let chute;
let tentativas = 1; 

//enquanto o chute "não for igual"(Diferente) ao número secreto  
while(chute != numeroSecreto){
    let chute = prompt(`Escolha um número entre 1 e ${numeroMaximo}`);
    //Se meu numero secreto for igual ao meu chute, faça algo
    
    if (chute == numeroSecreto){
        break;
    } else{ //senão
        tentativas++;
        if(chute > numeroSecreto){
            alert(`O numero secreto é menor ${chute}`);
            }else{
            alert(`O numero secreto é maior ${chute}`);}
        }
}
//operador ternario
let palavraTentativa = tentativas > 1 ? "tentativas":"tentativa";

alert(`Parabéns, você descobriu o número Secreto ${numeroSecreto}, com ${tentativas} ${palavraTentativa}`);