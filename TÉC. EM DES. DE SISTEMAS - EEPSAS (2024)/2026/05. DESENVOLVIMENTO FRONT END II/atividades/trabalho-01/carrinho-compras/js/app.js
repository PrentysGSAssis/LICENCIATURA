let totalGeral;
limpar();


function adicionar() {
    /*recuperar (obter) valores do PRODUTO (nome e valor unitario) e QUANTIDADE
    Verificar se os valores são válidos, dando um ALERT com os valores passados para o código*/
    let produto = document.getElementById('produto').value;
    let nomeProduto = produto.split('-')[0];
    let valorUnitario = produto.split('R$')[1];
    let quantidade = document.getElementById('quantidade').value; 
    
    //calcular o preço, que será o nosso subtotal (que é representado pelo valor da variavel que armazea o valor unitário multiplicado pela quantidade)
    let preco = quantidade * valorUnitario;
        
    /*adicionar os produtos no carrinho (que é a seção de produtos) e o valor do subtotal.
    E a cada produto adicionado, eu preciso incluir um novo elemento HTML, que é a seção de produto atual mais o novo produto adicional.
    */
    let carrinho = document.getElementById('lista-produtos');
    carrinho.innerHTML = carrinho.innerHTML + 
    `<section class="carrinho__produtos__produto">
    <span class="texto-azul">${quantidade}x</span> ${nomeProduto} <span class="texto-azul">R${preco}</span>
    </section>`;
    
    //atualizar o valor total do carrinho, que é o valor do subtotal mais o valor total anterior (que é representado pela variável totalGeral)
    totalGeral = totalGeral + preco;
    let campoTotal = document.getElementById('valor-total'); 
    campoTotal.innerHTML =  `R$ ${totalGeral}`;
    document.getElementById('quantidade').value = '';
}

function limpar() {
    //limpar o carrinho, zerar o valor total
    totalGeral = 0;
    document.getElementById('lista-produtos').innerHTML = '';
    document.getElementById('valor-total').innerHTML = 'R$ 0';
}