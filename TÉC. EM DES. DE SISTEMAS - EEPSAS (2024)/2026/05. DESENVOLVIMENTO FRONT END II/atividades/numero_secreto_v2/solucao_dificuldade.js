function exibirTexto (tag, texto) {
    let campo = document.querySelector(tag);
    campo.innerHTML = texto;
}

let tentativas = 1;
let maxNumero = 10;

function textoInicial() {
    exibirTexto('h1', 'Jogo do Número Secreto');
    exibirTexto('p', `Escolha um número de 1 a ${maxNumero}`);
}

textoInicial()

let numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto() {
    return parseInt(Math.random() * maxNumero) + 1;
}

function definirDificuldade(){
    let dificuldade = prompt('Defina o valor máximo do Número Secreto:');
    maxNumero = dificuldade;
    let msgDificuldade = `Dificuldade definida para ${maxNumero}. Escolha um número de 1 a ${maxNumero}`;
    exibirTexto('p', msgDificuldade);
    novoJogo()
}

function verificarChute() {
    let chute = document.querySelector('input').value;
    if (chute == numeroSecreto){
        exibirTexto('h1', 'Acertou');
        let palavraTentativa = tentativas == 1 ? 'tentativa':'tentativas';
        let msgTentativa = `Parabéns, você acertou o Numero Secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativa}`;
        exibirTexto('p', msgTentativa);
        document.getElementById('reiniciar').removeAttribute('disabled')
        document.getElementById('definirDificuldade').removeAttribute('disabled');
    } else {
        tentativas++;
        limparCampo();
        if(chute > numeroSecreto) {
        exibirTexto('p', 'O número secreto é menor');
        }else{
        exibirTexto('p', 'O número secreto é maior');

        }
    }
}
function limparCampo(){
    chute = document.querySelector('input');
    chute.value = '';
}

function novoJogo(){
    limparCampo()
    tentativas = 1;
    numeroSecreto = gerarNumeroSecreto();
    textoInicial()
    document.getElementById('reiniciar').setAttribute('disabled', true);
    document.getElementById('definirDificuldade').setAttribute('disabled', false);
}