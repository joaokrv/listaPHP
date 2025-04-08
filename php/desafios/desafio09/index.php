<!-- 
    Desafio 9 - Cálculo de Idade

    Proposta: Criar uma página que receba o ano de nascimento de uma pessoa e o ano desejado para consulta.
    Com esses dados, o sistema deve calcular e exibir a idade da pessoa no ano escolhido.

    A entrada é feita por meio de um formulário retroalimentado (método GET). 
    O ano atual é identificado automaticamente pelo sistema para auxiliar no preenchimento.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO - Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Buscando dados do Formulario abaixo
        $anoAtual = date("Y");
        $anoNasc = $_GET['anoNasc'] ?? '';
        $anoEsc = $_GET['anoEsc'] ?? $anoAtual;
    ?>

    <main>
        <h1>Calculando sua Idade</h1>

        <!-- Criando Formulario -->
        <form action=" <?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=$anoAtual?>" value="<?=$anoNasc?>"
                require>
            <label for="anoEsc">Quer saber sua idade em que ano? (Atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="anoEsc" id="anoEsc" min="1900" value="<?=$anoEsc?>" require>
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            // Verificação se o número não é nulo.
            if ($anoNasc == null || $anoEsc == null || $anoEsc < $anoNasc ) {
                // Mensagem erro
                echo "<h3 style='color: red;'>Erro: Insira um valor válido (Ano escolhido deve ser maior que o ano de nascimento)!</ h3>";  

            } else {
                // Cálculos
                $idade = $anoEsc - $anoNasc;
                
                // Criando enunciado e formatação <p>
                echo "<p>Quem nasceu em <strong>$anoNasc</strong> vai ter <strong style='font-size: 20px;'>$idade anos</strong> em $anoEsc!</p>";
            }
        ?>
    </section>

</body>

</html>