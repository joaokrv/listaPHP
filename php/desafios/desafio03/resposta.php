<!-- 
    Desafio 3 - Conversor de Moedas (Real para Dólar)

    Proposta: Criar um site onde o usuário informa quanto possui em reais,
    e o sistema retorna quanto esse valor vale em dólares, usando a cotação atual do Banco Central.

    Funcionalidades implementadas:
    - Validação do valor recebido via GET
    - Consulta da cotação mais recente do dólar utilizando a API do Banco Central (PTAX)
    - Conversão do valor de reais para dólares
    - Exibição da cotação usada e data da consulta
    - Formatação dos valores para o padrão brasileiro (pt-BR)
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Conversor de Moedas</h1>
    </header>

    <main>
        <?php 
            // Verifica se o usuário enviou um valor via GET
            // Se o usuário não enviou nada, definimos 0 como padrão para evitar erros
            $valor = floatval($_GET["valor"] ?? 0);

            // Se o valor for inválido ou não informado, exibe uma mensagem
            if ($valor <= 0) {
                die("<h3 style='color: red;'>Erro: Insira um valor válido!</h3><a href='index.html'>Voltar</a");
            }   

            // Busca a cotação atual do dólar usando os dados abertos do Banco Central
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-01-2025\'&@dataFinalCotacao=\'04-30-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            // Obtém os dados JSON da API
            $response = file_get_contents($url); 
            
            // Converte JSON para array associativo
            $jsonCotacao = json_decode($response, true); 
            
            // Pega a data da cotação
            $dataCotacao = $jsonCotacao["value"]["0"]["dataHoraCotacao"]; 
            
            // Converte a data para o formato brasileiro
            $dataObj = DateTime::createFromFormat("Y-m-d H:i:s.u", $dataCotacao);

            // Verifica se a conversão foi bem-sucedida
            if ($dataObj === false) {
                die("<h2>Erro ao processar a data da cotação.</h2>");
            }

            // Formata a data corretamente para o formato brasileiro
            $dataFormatada = $dataObj->format("d/m/Y \à\s H:i");
            
            // Obtém a cotação atual do dólar
            $cotacao = $jsonCotacao["value"]["0"]["cotacaoCompra"];             

            //Faz a conversão
            $valorConvertido = $valor/$cotacao;

            //Formata o valor convertido para pt_BR
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<h2>Resultado</h2>";
            echo "<p>Cotação atual: <strong style='font-size: 20px;'>" . numfmt_format_currency($padrao, $cotacao, "USD") . "</strong></p>";
            echo "<p>Data da cotação: $dataFormatada</p>";
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a aproximadamente <strong style='font-size: 22px;'>" . numfmt_format_currency($padrao, $valorConvertido, "USD") . "</strong></p>";
            echo "<p>A cotação foi retirada do site: <a href=https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios target=_blank>Banco Central</a></p>";
            
            //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>

        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>

</body>

</html>