
function exibeMensagemInicial(tag, texto){
    let campo = document.querySelector(tag);
    campo.innerHTML = texto;
}

let tentativas = 1;

function msgInicio(){
exibeMensagemInicial('h1', 'Jogo do Numero Secreto');
exibeMensagemInicial('p', 'Escolha um numero entre 1 e 10');
}

msgInicio()

numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto(dificuldade){
    return parseInt(Math.random() * dificuldade + 1);
}

function verificarChute() {
    let chute = document.querySelector('input').value;
        if (chute == numeroSecreto){
            exibeMensagemInicial('h1', 'Acertou');
            let palavraTentativa = tentativas == 1 ? 'tentativa':'tentativas';
            let msgTentativa = `Você acertou o número secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativa}`
            exibeMensagemInicial('p', msgTentativa);
            document.getElementById('reiniciar').removeAttribute('disabled');
        } else{
            tentativas++;
            if (chute > numeroSecreto){
                exibeMensagemInicial('p', 'O número secreto é Menor');
            }else{
                exibeMensagemInicial('p', 'O número secreto é Maior');
            }
            limparCampo()
        }
}

function limparCampo() {
    chute = document.querySelector('input');
    chute.value = '';
}

function novoJogo(){
    msgInicio();
    numeroSecreto = gerarNumeroSecreto();
    tentativas = 1;
    limparCampo();
    document.getElementById('reiniciar').setAttribute('disabled', true);
}

function definirDificuldade(){
    return prompt('Escolha o número limite para o número secreto');
}