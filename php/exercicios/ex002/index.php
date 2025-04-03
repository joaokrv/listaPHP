<!-- Terceiro exercicio, aqui aprendemos a utilizar o comando date, que busca automaticamente a regio setada por ele, trazndo data e hora de forma detalhada -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>No Brasil, hoje é dia " . date("d/M/Y");
        echo " e a hora atual é: " . date("G:i:s</p>");
    ?>
</body>

</html>