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

            // Busca a cotação atual do dólar usando a API AwesomeAPI
            $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
            $response = file_get_contents($url); // Obtém os dados JSON da API
            $jsonCotacao = json_decode($response, true); // Converte JSON para array associativo
            $dataCotacao = $jsonCotacao["USDBRL"]["create_date"]; // Pega a data da cotação
            // Converte a data para o formato brasileiro
            $dataFormatada = DateTime::createFromFormat("Y-m-d H:i:s", $dataCotacao)->format("d/m/Y \à\s H:i");
            $cotacao = $jsonCotacao["USDBRL"]["bid"]; // Obtém a cotação atual do dólar            

            $valorConvertido = $valor/$cotacao;

            //Formata o valor convertido para pt_BR
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<h2>Resultado</h2>";
            echo "<p>Cotação atual: " . numfmt_format_currency($padrao, $cotacao, "USD" . "</p>");
            echo "<p>Data da cotação: $dataFormatada</p>";
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a aproximadamente <strong style='font-size: 22px;'>" . numfmt_format_currency($padrao, $valorConvertido, "USD") . "</strong></p>";
            echo "<p>A cotação foi retirada do site: <a href=$url target=_blank>API AwesomeAPI</a></p>";
           
           //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>

        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>

</body>

</html>
