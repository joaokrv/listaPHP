<!-- No sétimo desafio, foi proposto de fazer um site que faça a raiz quadrada e cubica de um valor, ou seja, realizar a radiciação em um formulário retroalimentado. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Buscando dados do Formulario abaixo
        $valor = $_GET['num'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de raiz</h1>

        <!-- Formulário retroalimentado (action chama a própria página) -->
        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" min="0" value="<?=$valor?>" require>
            <input type="submit" value="Analisar">
        </form>

    </main>

    <section>
        <h2>Resultado final</h2>
        <?php
            // Verificação se o número não é nulo.
            if ($valor != null) {
                // Cálculos
                $raizQd = sqrt($valor); // Poderia ser $valor ** (1/2);
                $raizCb = $valor ** (1/3); // Poderia ser pow($valor, 1/3);
                echo "Analisando o <strong style='font-size: 20px;'>número $valor</strong>, temos:";
                echo "<ul><li>A sua raíz quadrada é <strong style='font-size: 20px;'>" . number_format($raizQd, 3, ',', '.') ."</strong>";
                echo "<li>A sua raíz cúbica é <strong style='font-size: 20px;'>" . number_format($raizCb, 3, ',', '.') ."</strong>";
            } else {
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Raiz >= 0)!</ h3>";
            }

        ?>
    </section>


</body>

</html>
