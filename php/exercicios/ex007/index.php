<!-- 
    Exercício 07 - Formulário Retroalimentado em PHP
    Neste exercício, aprendemos como criar um formulário que envia dados para o próprio arquivo PHP
    (sem precisar de uma segunda página), utilizando o recurso $_SERVER['PHP_SELF'].
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroativo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Coleta os valores enviados pelo formulário (via método GET)
        // Se nenhum valor for enviado, o valor padrão será 0
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>

        <!-- 
            Formulário Retroalimentado:
            O action utiliza $_SERVER['PHP_SELF'] para enviar os dados ao próprio arquivo.
            Isso permite processar e exibir os dados na mesma página.
        -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>" required>

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" required>

            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>

        <?php
            // Validação: Verifica se os dois valores foram informados
            if ($valor1 == null || $valor2 == null) {
                // Se algum valor estiver faltando, exibe uma mensagem de erro
                die("<h3 style='color: red;'>Erro: Insira um valor válido!</h3>");
            } else {
                // Realiza a soma e exibe o resultado
                $soma = $valor1 + $valor2;
                echo "<p>O valor da soma entre os números $valor1 e $valor2 foi <strong style='font-size: 18px;'> $soma </strong></p>";
            }
        ?>
    </section>
</body>

</html>