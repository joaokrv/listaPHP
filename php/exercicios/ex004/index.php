<!-- 
    Exercício 04 — Strings, Aspas e Constantes em PHP
    Neste exercício foi abordado o funcionamento das aspas simples (' ') e aspas duplas (" ") no PHP.
    Também vimos como utilizar **constantes** com a palavra-chave `const`.
    O objetivo foi mostrar como o comportamento das aspas afeta a interpolação de variáveis nas strings.
-->

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
        // Variáveis simples
        $cidade = "Belo Horizonte";
        $estado = "MG";

        //  Constante com a palavra-chave `const`
        const NOME = "João Victor";

        // Exemplo com aspas duplas (permite interpolação de variáveis)
        echo "Cidade: $cidade, Estado: $estado (Aspas duplas \" \")<br>";

        // Exemplo com aspas simples (não interpola variáveis)
        echo 'Cidade: $cidade, Estado: $estado (Aspas simples \' \')';

        // Exibição de constante e concatenação
        echo "<br>Sou o " . NOME . " e estou fazendo faculdade em $cidade, $estado<br>";
    ?>
</body>

</html>