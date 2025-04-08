<!-- 
    Desafio 12 - Simulador de Caixa Eletrônico

    Proposta: Desenvolver uma página que receba um valor em reais e simule o saque desse valor
    da forma mais otimizada possível, utilizando a menor quantidade de cédulas disponíveis.
    O cálculo deve considerar notas de R$100, R$50, R$20, R$10, R$5, R$2 e R$1.
    A entrada é feita por um formulário retroalimentado (método GET) e os resultados são exibidos
    de forma organizada na tela.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Simulador de Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
    img.nota {
        position: relative;
        top: 20px;
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <?php 
        // Recebe os dados enviados via método GET e armazena em variáveis
        // Se nada for enviado, o valor padrão será 0
        $dinheiro = $_GET['din'] ?? 0;

        // Criação do formatador de moeda no padrão brasileiro (para exibir o valor corretamente)
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>Simulador de Caixa Eletrônico</h1>

        <!-- Formulário retroalimentado (action chama a própria página) -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <!-- Campo para inserir o valor desejado para saque -->
            <label for="din">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="din" id="din" min="0" value="<?=$dinheiro?>" required>

            <!-- Botão de envio -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
        // Verificação se o valor é válido (maior ou igual a 0)
        if ($dinheiro < 0) {
            echo "<h3 style='color: red;'>Erro: Insira um valor válido (Valor &gt;0)!</h3>";  
        } else {
            // Cálculo da quantidade de cédulas de cada valor
            $cem = intdiv($dinheiro, 100);         // Notas de R$100
            $resto = $dinheiro % 100;
            
            $cinq = intdiv($resto, 50);           // Notas de R$50
            $resto = $resto % 50;
            
            $vin = intdiv($resto, 20);            // Notas de R$20
            $resto = $resto % 20;
            
            $dez = intdiv($resto, 10);            // Notas de R$10
            $resto = $resto % 10;
            
            $cinc = intdiv($resto, 5);            // Notas de R$5
            $resto = $resto % 5;
            
            $dois = intdiv($resto, 2);            // Notas de R$2
            $resto = $resto % 2;
            
            $um = $resto;                         // Notas de R$1
        }
    ?>

    <section>
        <!-- Exibe o valor total do saque formatado -->
        <h2>Saque de <?= numfmt_format_currency($padrao, $dinheiro, "BRL") ?> realizado</h2>

        <!-- Exibição do resultado final em forma de lista, com as cédulas necessárias -->
        <p>O caixa eletrônico vai te entregar <strong style="font-size: 20px;">
                <?= numfmt_format_currency($padrao, $dinheiro, "BRL") ?></strong> que equivalem às seguintes notas:</p>

        <ul>
            <!-- Exibe a quantidade de cédulas de R$100, se houver -->
            <?php if ($cem > 0) echo "<li><img src='imagens/100-reais.jpg' alt='Cem reais' class='nota'> " . number_format($cem, 0, ',',  '.') . " nota(s) de R$100</li>"; ?>

            <!-- Exibe a quantidade de cédulas de R$50, se houver -->
            <?php if ($cinq > 0) echo "<li><img src='imagens/50-reais.jpg' alt='Cinquenta reais' class='nota'> $cinq nota(s) de R$50</li>"; ?>

            <!-- Exibe a quantidade de cédulas de R$20, se houver -->
            <?php if ($vin > 0) echo "<li><img src='imagens/20-reais.jpg' alt='Vinte reais' class='nota'> $vin nota(s) de R$20</li>"; ?>

            <!-- Exibe a quantidade de cédulas de R$10, se houver -->
            <?php if ($dez > 0) echo "<li><img src='imagens/10-reais.jpg' alt='Dez reais' class='nota'> $dez nota(s) de R$10</li>"; ?>

            <!-- Exibe a quantidade de cédulas de R$5, se houver -->
            <?php if ($cinc > 0) echo "<li><img src='imagens/5-reais.jpg' alt='Cinco reais' class='nota'> $cinc nota(s) de R$5</li>"; ?>

            <!-- Exibe a quantidade de cédulas de R$2, se houver -->
            <?php if ($dois > 0) echo "<li><img src='imagens/2-reais.jpg' alt='Dois reais' class='nota'> $dois nota(s) de R$2</li>"; ?>

            <!-- Exibe a quantidade de moedas de R$1, se houver -->
            <?php if ($um > 0) echo "<li><img src='imagens/1-real.jpg' alt='Um real' class='nota'> $um moeda(s) de R$1</li>"; ?>
        </ul>

    </section>
</body>

</html>