<!-- No décimo desafio, foi proposto de fazer um site que faça o cálculo percentual de um reajusta de preço, ou seja, pede preço atual do produto e qual a 
porcentagem de reajuste será acrescentado ao produto, após isso faz o calculo em um formulário retroalimentado. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Recebe os dados enviados via método GET e armazena em variáveis
        // Se nada for enviado, os valores padrão são 0
        $valor = $_GET ['valor'] ?? 0;
        $porcentagem = $_GET ['porc'] ?? 0;
    ?>

    <main>
        <h1>Calculando Reajuste de Preço</h1>

        <!-- Formulário retroalimentado (action chama a própria página) -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <!-- Campo para inserir o preço do produto -->
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="valor" min="0" value="<?=$valor?>" step="0.01" required>

            <!-- Slider de porcentagem com valor dinâmico atualizado via JS -->
            <label for="porc"> Qual será o percentual de reajuste? (<span id="valorPorc"> <?=$porcentagem?> </span>%)
            </label>
            <input type="range" id="porc" name="porc" min="0" max="100" value="<?=$porcentagem?>" step="1" required
            oninput="atualizarValor(this.value)"> <!-- Chama função JS ao mover o slider -->

            <!-- Botão de envio -->
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            // Verificação se o valor é válido (> 0)
            if ($valor <= 0) {
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Preço do produto &gt; 0)!</h3>";  
            } else {
                // Cálculo do reajuste
                $reajuste = $valor * $porcentagem / 100;
                $novoValor = $valor + $reajuste;

                // Exibindo o resultado
                echo "<p>O produto que custava <strong>R$" . number_format($valor, 2, ',',  '.') . "</strong>, com aumento de <strong>$porcentagem%</strong>, passará   a custar <strong style='font-size: 20px;'>R$" . number_format($novoValor, 2, ',', '.') . "</strong>.</p>";
            }
        ?>
    </section>

    <!-- 
        JAVASCRIPT
        - Função 'atualizarValor(valor)'
        - É executada toda vez que o usuário move o slider (input type="range")
        - Atualiza o conteúdo do <span id="valorPorc"> com o novo valor da porcentagem em tempo real
    -->
    <script>
    function atualizarValor(valor) {
        document.getElementById('valorPorc').textContent = valor;
    }
    </script>
</body>

</html>
