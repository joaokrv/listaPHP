<!-- 
    Exercício 02 — Função date() e Fuso Horário em PHP
    Neste exercício aprendemos a usar a função `date()` para obter data e hora atuais com base no fuso horário.
    Foi utilizado também o comando `date_default_timezone_set()` para garantir que o horário exibido 
    esteja ajustado corretamente para a região definida — neste caso, "America/Sao_Paulo".
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 — Data e Hora</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>

    <?php 
        // Define o fuso horário padrão
        date_default_timezone_set("America/Sao_Paulo");

        // Exibe a data no formato "dia/mês/ano"
        echo "<p>No Brasil, hoje é dia " . date("d/M/Y");

        // Exibe o horário no formato "hora:minuto:segundo"
        echo " e a hora atual é: " . date("G:i:s</p>");
    ?>
</body>

</html>
