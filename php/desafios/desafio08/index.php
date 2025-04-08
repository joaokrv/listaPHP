<!-- 
    Desafio 8 - Médias Aritméticas

    Proposta: Criar uma página que receba dois valores numéricos e seus respectivos pesos.
    A partir desses dados, o sistema deve calcular e exibir tanto a média aritmética simples quanto a média ponderada.

    A entrada é feita por meio de um formulário retroalimentado (método GET), onde o usuário informa as notas e os pesos.
    O resultado deve ser exibido de forma clara com destaque para os cálculos realizados.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Medias</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Buscando dados do Formulario abaixo
        $valor1 = $_GET['num1'] ?? '';
        $valor2 = $_GET['num2'] ?? '';
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias </h1>

        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="num">Primeiro valor:</label>
            <input type="number" name="num1" id="num1" min="0" value="<?=$valor1?>" require>
            <label for="num">Primeiro peso:</label>
            <input type="number" name="peso1" id="peso1" min="1" value="<?=$peso1?>" require>
            <label for="num">Segundo valor:</label>
            <input type="number" name="num2" id="num2" min="0" value="<?=$valor2?>" require>
            <label for="num">Segundo peso:</label>
            <input type="number" name="peso2" id="peso2" min="1" value="<?=$peso2?>" require>
            <input type="submit" value="Analisar">
        </form>

    </main>

    <section>
        <h2>Resultado final</h2>
        <?php
            // Verificação se o número não é nulo.
            if ($valor1 != null || $valor2 != null) {
                
                // Cálculos
                $mediaSimples = ($valor1 + $valor2) / 2;
                $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
                
                // Criando lista e formatação <p>
                echo "<p>Analisando os <strong style='font-size: 20px;'>números $valor1 e $valor2</strong>, temos:</p>";
                echo "<ul>";
                echo "<li>A<strong> Média Aritmética Simples</strong> entre eles é <strong style='font-size: 20px;'>" . number_format($mediaSimples, 2, ',', '.') . "</strong>";
                echo "<li>A<strong> Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é <strong style='font-size: 20px;'>" . number_format($mediaPonderada, 2, ',', '.') ."</strong>";
                echo "</ul>";

            } else {
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Nota >= 0)!</ h3>";
            }

        ?>
    </section>


</body>

</html>