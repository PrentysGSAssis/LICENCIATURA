function sortear() {

    let quantidade = parseInt(document.getElementById('quantidade').value);
    let de = parseInt(document.getElementById('de').value);
    let ate = parseInt(document.getElementById('ate').value);

   if (verifica(quantidade, de, ate)){
        let sorteados = [];
        let numero;

        for (let i = 0; i < quantidade; i++){
            numero = gerarNumeroAleatorio(de, ate);

            /*Enquanto ele sortear um numero que já esta no Array, ele sorteia novamente, até encontrar um resultado que não esteja incluso*/

            while (sorteados.includes(numero)){
                numero = gerarNumeroAleatorio(de, ate);
            }

            sorteados.push(numero);
        }

        let resultado = document.getElementById('resultado');
        resultado.innerHTML = `<label class="texto__paragrafo">Números sorteados: ${sorteados}</label>`;

        alterarStatusdoBotao();
    }
}

function gerarNumeroAleatorio(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function alterarStatusdoBotao(){
    let botao = document.getElementById('btn-reiniciar');
    //verifica se na lista de classes do botão CONTÉM a classe 'botao-desabilitado'
    if(botao.classList.contains('container__botao-desabilitado')){
        botao.classList.remove('container__botao-desabilitado');
        botao.classList.add('container__botao');
    }else{
        botao.classList.remove('container__botao');
        botao.classList.add('container__botao-desabilitado');
    }
}

function reiniciar(){

    quantidade = document.getElementById('quantidade').value = '';
    de = document.getElementById('de').value = '';
    ate = document.getElementById('ate').value = '';
    resultado = document.getElementById('resultado').innerHTML = `<label class="texto__paragrafo">Números sorteados: nenhum até agora</label>`
    alterarStatusdoBotao();

}

function verifica(quantidade, de, ate) {
    let limite = (ate - de);
    if (quantidade > limite) {
        alert("A quantidade de números solicitados é maior que o intervalo.");
        return false;
    }
    return true;
}