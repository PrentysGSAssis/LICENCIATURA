function exibirTexto (tag, texto) {
    let campo = document.querySelector(tag);
    campo.innerHTML = texto;
}

let tentativas = 1;

function textoInicial() {
    exibirTexto('h1', 'Jogo do Número Secreto');
    exibirTexto('p', 'Escolha um número de 1 a 10')
}

textoInicial()

let numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto() {
    return parseInt(Math.random() * 10) + 1;
}

function verificarChute() {
    let chute = document.querySelector('input').value;

    if (tentativas > 10) {
        exibirTexto('h1', 'Fim de Jogo');
        exibirTexto('p', 'Você esgotou suas 10 tentativas! Reinicie o jogo.');
        document.getElementById('reiniciar').removeAttribute('disabled')
        return;
    }

    if (chute == numeroSecreto){
        exibirTexto('h1', 'Acertou');
        let palavraTentativa = tentativas == 1 ? 'tentativa':'tentativas';
        let msgTentativa = `Parabéns, você acertou o Numero Secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativa}`;
        exibirTexto('p', msgTentativa);
        document.getElementById('reiniciar').removeAttribute('disabled')
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
}