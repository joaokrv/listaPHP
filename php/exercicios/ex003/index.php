<!-- 
    Exercício 03 — Tipos Primitivos e var_dump() em PHP
    Neste exercício aprendemos como funcionam os **tipos primitivos** em PHP (int, float, string, etc),
    além de como visualizar o tipo e valor de uma variável com a função `var_dump()`.

    Também foi revisado o uso de prefixos numéricos:
    - 0x = Hexadecimal
    - 0b = Binário
    - 0  = Octal
    - e  = Potência de 10 (ex: 3e2 = 3 × 10² = 300)
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
        // Exemplo de variável com valor inteiro
        $num = 300;
        echo "<p>Valor da variável é $num</p>";

        // Demonstração da função var_dump()
        $v = 320;
        // var_dump($v); -> Mostra tipo e valor da variável

        echo "<p>O comando var_dump mostra a variável dessa forma: int(320)</p>";
    ?>
</body>

</html>