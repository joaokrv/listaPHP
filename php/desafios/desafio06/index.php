<!-- 
    Desafio 6 - Cálculo de Quantos Salários Mínimos o Usuário Recebe

    Proposta: Criar uma página que permita ao usuário informar seu salário atual
    e informe quantos salários mínimos ele recebe com base no valor atualizado do salário mínimo.

    O salário mínimo é obtido em tempo real a partir da API oficial do Banco Central do Brasil.
    Após a submissão do formulário (via método GET), o sistema realiza os cálculos necessários
    e apresenta os resultados de forma formatada para moeda brasileira (pt-BR).
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php   
        // Buscando dados do Formulario abaixo
        // Verifica se o usuário enviou um valor via GET
        // Se o usuário não enviou nada, definimos 0 como padrão para evitar erros
        $salario = floatval($_GET ['salario'] ?? 0);
    ?>

    <main>

        <!-- API que busca o salário atual de acordo com o Banco Central -->
        <?php  
            // URL da API
            $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.1619/dados/ultimos/1?formato=json";

            // Decodifica a URL da API
            $decode = json_decode(file_get_contents($url), true);

            // Busca os valores na API
            $salario_minimo = $decode[0]['valor'];
            $data_ref = $decode[0]['data'];

            // Formata o valor convertido para pt_BR
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <h1>Informe seu salário</h1>

        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="0" step="0.01" placeholder="0.00" require>
            <p>Considerando o salário mínimo como <strong
                    style='font-size: 20px;'><?= numfmt_format_currency($padrao,$salario_minimo, "BRL") ?></strong> de
                acordo com o <a href="https://dadosabertos.bcb.gov.br/" target=_blank>Banco Central</a>, na data do dia
                <?=$data_ref?>
            </p>
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            // Cálculos
            $numSalarioMin = intdiv($salario, $salario_minimo); 
            $restanteSalario = $salario % $salario_minimo;

            // Para menor ou igual a 1 salário echo no singular, para 2 ou mais, salários no plural
            if ($numSalarioMin <= 1) {  
                echo "Quem recebe um sálario de <strong
                    style='font-size: 20px;'>" . numfmt_format_currency($padrao, $salario, "BRL") . "</strong> ganha <strong>" . $numSalarioMin . " salário mínimo</strong> + " . numfmt_format_currency($padrao, $restanteSalario, "BRL");
            } else {
                echo "Quem recebe um sálario de <strong
                    style='font-size: 20px;'>" . numfmt_format_currency($padrao, $salario, "BRL") . "</strong> ganha <strong>" . $numSalarioMin . " salários mínimos</strong> + " . numfmt_format_currency($padrao, $restanteSalario, "BRL");
            }
        ?>
    </section>
</body>

</html>