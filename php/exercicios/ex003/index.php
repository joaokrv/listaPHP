<!-- Quarto exercicio, aqui aprendemos a utilizar o comando var_dump( ), assim como a maneira que as variaveis e tipos funcionam em PHP -->

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
        // 0x = Hexadecimal
        // 0b = Binário
        // 0 = Octal
        // e = Potencia de 10, ex.: 3e2 = 300. 3x10(2).
        
        $num = 300;
        echo "<p>Valor da variavel é $num</p>";

        $v = 320;
        //var_dump($v);

        echo "<p>O comando var_dump mostra a variavel dessa forma: int(320)</p>";
    ?>
</body>

</html>