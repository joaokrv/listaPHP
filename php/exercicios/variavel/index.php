<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1>Teste Variavel</h1>
    <?php 
        $nome = "João Victor";
        $idade = "19";
        $data = date("d/M/Y");
        const PAIS = "Brasil";
        date_default_timezone_set("America/Sao_Paulo");

        echo "<h2>Boa sorte</h2>";
        echo "<p>Bom dia, hoje é dia " . $data . " no " . PAIS . " e seu nome é " . $nome . ", confere?</p>";
        echo "<p>Além disso, sua idade é " . $idade . ", confere?</p>";
    ?>
</body>

</html>