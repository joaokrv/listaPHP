<!-- 
    Desafio 11 - Conversor de Tempo

    Proposta: Desenvolver uma página que receba uma quantidade total de segundos e converta esse valor
    em semanas, dias, horas, minutos e segundos restantes, utilizando um formulário retroalimentado (método GET).
    O resultado deve ser exibido de forma clara e organizada na tela.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Recebe os dados enviados via método GET e armazena em variáveis
        // Se nada for enviado, os valores padrão são 0
        $segundos = $_GET ['sec'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <!-- Formulário retroalimentado (action chama a própria página) -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <!-- Campo para inserir o preço do produto -->
            <label for="sec">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec" min="0" value="<?=$segundos?>" required>

            <!-- Botão de envio -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando</h2>
        <?php
            // Verificação se o valor é válido (> 0)
            if ($segundos < 0) {
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Total de segundos &gt; 0)!</h3>";  
            } else {
                // Cálculo do reajuste
                $semanas = intdiv($segundos, 604800);
                $restSem = $segundos % 604800;
                $dias = intdiv($restSem, 86400);
                $restDias = $segundos % 86400;
                $horas = intdiv($restDias, 3600);
                $restHoras = $segundos % 3600;
                $minutos = intdiv($restHoras, 60);
                $restMin = $segundos % 60;

                // Exibindo o resultado
                echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ',',  '.') . " segundos</strong> equivalem a um total de:</p>";
                echo "<ul>";
                echo "<li>$semanas semanas</li>";
                echo "<li>$dias dias</li>";
                echo "<li>$horas horas</li>";
                echo "<li>$minutos minutos</li>";
                echo "<li>$restMin segundos</li>";
            }
        ?>
    </section>
</body>

</html>
