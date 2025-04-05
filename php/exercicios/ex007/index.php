<!-- Neste exercício, veremos sobre formulários retroalimentas, ou seja, ao inves de utilizar dois arquivos e mandar as informações de um pro outro, utiliza apenas um arquivo PHP no qual os dados são enviados a ele mesmo. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroativo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Buscando dados do Formulario abaixo
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>

        <!-- No action o $_SERVER['PHP_SELF'] pega o caminho para o arquivo, fazendo com que o site sempre retorne para o arquivo, assim como nos outros exercicios iam pro index.html -->
        <!-- <\?= é o mesmo que php echo -->
        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" require>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" require>
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>
        <?php
            // Verifica se o valor não é nulo, se não faz a soma, se sim aparece a mensagem de erro.
            if ($valor1 == null || $valor2 == null) {
                die("<h3 style='color: red;'>Erro: Insira um valor válido!</h3>");
            } else {
                $soma = $valor1 + $valor2;
                echo "<p>O valor da soma entre os números $valor1 e $valor2 foi <strong style='font-size: 18px;'> " . $soma . " </strong></p>";
            }
           
        ?>
    </section>
</body>

</html>