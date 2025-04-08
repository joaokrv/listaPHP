<!-- 
    Desafio 5 - Anatomia de uma Divisão

    Proposta: Criar um site que simule a estrutura de uma divisão matemática.
    O usuário informa o dividendo e o divisor, e o sistema calcula o quociente
    e o resto da divisão, apresentando os resultados em um formato de tabela
    semelhante à divisão manual.

    O formulário é retroalimentado, ou seja, os valores são mantidos após o envio.
    O resultado é formatado com uma tabela estilizada via CSS, simulando a estrutura
    da operação matemática.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Buscando dados do Formulario abaixo
        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 1;
    ?>

    <main>
        <h1>Analisador</h1>

        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" min="0" value="<?=$dividendo?>" require>
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="<?=$divisor?>" require>
            <input type="submit" value="Analisar">
        </form>

    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <?php
            // Verificação se o número não é nulo.
            if ($dividendo != null || $divisor != null) {
                // Cálculos
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
            } else {
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (divisor ≠ 0)!</ h3>";
            }
        ?>

        <!-- Cria uma tabela com HTML, a tabela com a classe "divisao" possui uma configuração CSS pronta, no qual o tr é a linha e o td é o conteudo dentro da linha. -->

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>


</body>

</html>