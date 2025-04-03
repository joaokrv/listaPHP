<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
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