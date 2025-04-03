<!-- Neste arquivo PHP, descrevo diversas funções aritmeticas e suas funcionalidades. -->

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
        $resultado = -10000;
        echo "abs( ) - Mostra o valor absoluto, ou seja, sem sinal.<br>Exemplo, o valor absoluto de $resultado é " . abs($resultado) . ".<br>";
        
        $resultado = 254;
        echo "<br>base_convert( ) - Converte a base entre binario, octal, decimal, hexadecimal.<br>Deve ser utilizado da seguinte maneira -> base_convert(numero, base atual, base desejada).<br>Exemplo, o valor $resultado está em decimal, em octal é " . base_convert($resultado, 10, 8) . " e em binario é " . base_convert($resultado, 10, 2) . ".<br>";

        $resultado = 7;
        echo "<br>intdiv( ) - Faz a divisão inteira, sem valor decimal.<br>Mostra como resultado o número inteiro mais próximo de fazer a divisão<br>Exemplo, a divisão de $resultado/2, no qual deveria dar 3.5, porém utilizando o intdiv(7, 2) o resultado é: " . intdiv($resultado, 2) . ".<br>";

        echo "<br>min(n1, n2, n3...), max(n1, n2, n3...) - Mostra o valor mínimo e máximo entre os valores escolhidos<br>Exemplo: Valor minimo -> " . min(1, 2, 3, 4, 5, 6) . "<br>Valor máximo -> " . max(1, 2, 3, 4, 5, 6) . ".<br>";

        echo "<br>pi( ) - Mostra o valor de pi<br>PI = " . pi() . ".<br>";

        $resultado = 5**2;
        echo "<br>** ou pow(n1, n da potencia) - Faz a potencia<br>Exemplo:<br>5^2: " . $resultado . "<br>5^2: " . pow(5, 2) . "<br>";

        $resultado = 25;
        echo "<br>sqrt(n) - Raiz quadrada<br>Exemplo: Raiz quadrada de 25: " . sqrt($resultado) . "<br>";

        echo "<br>+  = Adição<br>- = Subtração<br>* = Multipolicação<br>/ = Divisão Real<br>% = Resto da divisão<br>** = Potencia";
    ?>
</body>

</html>