<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String em PHP</title>
</head>

<body>
    <h1>String em PHP</h1>
    <?php 
        $cidade = "Belo Horizonte";
        $estado = "MG";
        const NOME = "João Victor";

        echo "Cidade: $cidade, Estado: $estado (Aspas duplas \" \")<br>";
        echo 'Cidade: $cidade, Estado: $estado (Aspas simples \' \')';
        echo "<br>Sou o " . NOME . " e estou fazendo faculdade em $cidade, $estado<br>";
    ?>
</body>

</html>