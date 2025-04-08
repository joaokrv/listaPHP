<!-- 
    Revisão de Funções Aritméticas em PHP
    Este arquivo apresenta uma explicação teórica com exemplos práticos de funções aritméticas básicas
    da linguagem PHP. É um conteúdo de revisão, com foco em compreensão e demonstração.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmeticas</title>
</head>

<body>
    <h1>Funções Aritméticas em PHP</h1>

    <?php
        // abs( ) - Retorna o valor absoluto (sem sinal)
        $resultado = -10000;
        echo "abs( ) - Mostra o valor absoluto, ou seja, sem sinal.<br>Exemplo, o valor absoluto de $resultado é " . abs($resultado) . ".<br>";
        
        // base_convert( ) - Converte número de uma base para outra
        $resultado = 254;
        echo "<br>base_convert( ) - Converte a base entre binário, octal, decimal, hexadecimal.<br>Deve ser utilizado da seguinte maneira -> base_convert(número, base atual, base desejada).<br>Exemplo, o valor $resultado está em decimal, em octal é " . base_convert($resultado, 10, 8) . " e em binário é " . base_convert($resultado, 10, 2) . ".<br>";

        // intdiv( ) - Retorna apenas a parte inteira da divisão
        $resultado = 7;
        echo "<br>intdiv( ) - Faz a divisão inteira, sem valor decimal.<br>Exemplo, a divisão de $resultado/2, que seria 3.5, com intdiv(7, 2) resulta em: " . intdiv($resultado, 2) . ".<br>";

        // min( ) e max( ) - Retornam respectivamente o menor e o maior valor de uma lista
        echo "<br>min(n1, n2, n3...), max(n1, n2, n3...) - Mostra o valor mínimo e máximo entre os valores escolhidos<br>Exemplo: Valor mínimo -> " . min(1, 2, 3, 4, 5, 6) . "<br>Valor máximo -> " . max(1, 2, 3, 4, 5, 6) . ".<br>";

        // pi( ) - Retorna o valor de pi
        echo "<br>pi( ) - Mostra o valor de pi<br>PI = " . pi() . ".<br>";

        // ** ou pow( ) - Faz potenciação
        $resultado = 5 ** 2;
        echo "<br>** ou pow(n1, expoente) - Faz a potência<br>Exemplo:<br>5^2 com operador **: " . $resultado . "<br>5^2 com função pow(): " . pow(5, 2) . "<br>";

        // sqrt( ) - Calcula a raiz quadrada
        $resultado = 25;
        echo "<br>sqrt(n) - Raiz quadrada<br>Exemplo: Raiz quadrada de 25: " . sqrt($resultado) . "<br>";

        // Operadores aritméticos básicos
        echo "<br>+  = Adição<br>- = Subtração<br>* = Multiplicação<br>/ = Divisão Real<br>% = Resto da divisão<br>** = Potência";
    ?>
</body>

</html>