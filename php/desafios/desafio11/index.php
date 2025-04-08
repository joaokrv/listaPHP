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
    <title>DESAFIO - Conversor de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Recebe os dados enviados via método GET e armazena em variáveis
        // Se nada for enviado, o valor padrão será 0
        $segundos = $_GET['sec'] ?? 0;

        // Garantir que $segundos seja tratado como um inteiro
        $segundos = intval($segundos);
    ?>

    <main>
        <h1>Conversor de Tempo</h1>

        <!-- Formulário retroalimentado (action chama a própria página) -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <!-- Campo para inserir o total de segundos -->
            <label for="sec">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec" min="0" value="<?= $segundos ?>" required>

            <!-- Botão de envio -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando</h2>
        <?php
            // Verificação se o valor é válido (> 0)
            if ($segundos < 0) {
                // Exibe mensagem de erro caso o valor dos segundos seja negativo
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Total de segundos &gt; 0)!</h3>";  
            } else {
                // Cálculo das unidades de tempo

                // Calcula a quantidade de semanas
                $semanas = intdiv($segundos, 604800); 
                $resto = $segundos % 604800;  // Resto de segundos após a divisão por 604800 (segundos em uma semana)

                // Calcula a quantidade de dias
                $dias = intdiv($resto, 86400); 
                $resto = $resto % 86400;  // Resto de segundos após a divisão por 86400 (segundos em um dia)

                // Calcula a quantidade de horas
                $horas = intdiv($resto, 3600); 
                $resto = $resto % 3600;  // Resto de segundos após a divisão por 3600 (segundos em uma hora)

                // Calcula a quantidade de minutos
                $minutos = intdiv($resto, 60); 
                $resto = $resto % 60;  // Resto de segundos após a divisão por 60 (segundos em um minuto)

                // O que sobrou são os segundos restantes
                $segundos_restantes = $resto; 

                // Exibindo o resultado de forma organizada
                echo "<p>O total de <strong>" . number_format($segundos, 0, ',',  '.') . " segundos</strong> equivale a:</p>";
                echo "<ul>";
                echo "<li>" . number_format($semanas, 0, ',',  '.') . " semana(s)</li>";
                echo "<li>$dias dia(s)</li>";
                echo "<li>$horas hora(s)</li>";
                echo "<li>$minutos minuto(s)</li>";
                echo "<li>$segundos_restantes segundo(s)</li>";
                echo "</ul>";
            }
        ?>
    </section>
</body>

</html>