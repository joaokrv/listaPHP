<!-- 
    Desafio 2 - Gerador de Número Aleatório

    Proposta: Criar um site onde o usuário digita dois números inteiros (inicial e final),
    e o sistema gera um número aleatório dentro desse intervalo.

    Funcionalidades implementadas:
    - Validação dos dados recebidos via GET
    - Verificação se o número inicial é menor que o final
    - Geração de número aleatório usando mt_rand()
    - Exibição do resultado com interface amigável
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
           $numero1 = $_GET ["num1"] ?? 1;
           $numero2 = $_GET ["num2"] ?? 100;
           $aleatorio = null;

           if ($numero1 > $numero2) {
            echo "<h3 style='color: red;'>Erro: O número inicial deve ser menor que o número final.</h3>";
           } else {
            $aleatorio = mt_rand($numero1, $numero2);
               echo "<h2>Resultado Final</h2>";
               echo "<p>Sorteando número entre <strong>$numero1</strong> e <strong>$numero2</strong>...</p>";
               echo "<p>O número sorteado foi: <strong style='font-size: 24px;'>$aleatorio</strong></p>";
           }
           
           //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>

        <button onclick="window.location.reload();">&#x1F504;Gerar outro</button>
        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>

</body>

</html>