<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Impulso Digital - Orçamento Rápido</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; margin: 0; padding: 0; }
        .container { max-width: 500px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h1 { color: #1a73e8; }
        label { font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; margin: 10px 0 20px 0; border-radius: 4px; border: 1px solid #ccc; }
        button { background: #1a73e8; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background: #155ab6; }
        .relatorio { background: #eaf4fe; padding: 20px; border-radius: 6px; margin-top: 20px; }
        .item { margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Impulso Digital</h1>
    <p>Simule seu orçamento rápido para anúncios!</p>
    <form method="post">
        <label for="valor">Valor mensal em anúncios (R$):</label>
        <input type="number" name="valor" id="valor" min="1" step="0.01" required>
        <button type="submit">Gerar Orçamento</button>
    </form>

    <?php
    function format_brl($valor) {
        return 'R$ ' . number_format($valor, 2, ',', '.');
    }
    function format_usd($valor) {
        return 'US$ ' . number_format($valor, 2, '.', ',');
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor'])) {
        $valor_reais = floatval($_POST['valor']);
        // Buscar cotação do dólar via API do Banco Central (cotacaoCompra)
        $data_hoje = date('d-m-Y');
        $data_ontem = date('d-m-Y', strtotime('-1 day'));
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='" . $data_ontem . "'&@dataFinalCotacao='" . $data_hoje . "'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao";
        $cotacao = 0;
        $json = @file_get_contents($url);
        if ($json !== false) {
            $dados = json_decode($json, true);
            if (isset($dados['value'][0]['cotacaoCompra'])) {
                $cotacao = floatval($dados['value'][0]['cotacaoCompra']);
            }
        }
        // Se não conseguiu cotação, usar valor padrão
        if ($cotacao <= 0) {
            $cotacao = 5.00; // fallback
        }
        $valor_dolar = $valor_reais / $cotacao;
        $taxa_agencia = $valor_dolar * 0.15;
        $total_projeto = $valor_dolar + $taxa_agencia;
        $protocolo = rand(1000, 9999);
        echo '<div class="relatorio">';
        echo '<h2>Relatório do Orçamento</h2>';
        echo '<div class="item"><strong>Investimento em Reais:</strong> ' . format_brl($valor_reais) . '</div>';
        echo '<div class="item"><strong>Investimento em Dólares:</strong> ' . format_usd($valor_dolar) . '</div>';
        echo '<div class="item"><strong>Taxa da Agência (15%):</strong> ' . format_usd($taxa_agencia) . '</div>';
        echo '<div class="item"><strong>Total do Projeto:</strong> ' . format_usd($total_projeto) . '</div>';
        echo '<div class="item"><strong>Número do Protocolo:</strong> ' . $protocolo . '</div>';
        echo '<div class="item"><em>Cotação utilizada: ' . format_brl($cotacao) . ' por US$ 1</em></div>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>
