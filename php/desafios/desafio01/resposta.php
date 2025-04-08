<!-- 
    Desafio 1 - Antecessor e Sucessor

    Proposta: Criar um site onde o usuário insere um número inteiro
    e a aplicação retorna o seu antecessor e sucessor.

    Funcionalidades:
    - Recebe o número via GET
    - Calcula o antecessor e o sucessor
    - Exibe os três valores formatados na tela
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
           $numero = $_GET["numero"] ?? 0;
           
           echo "<h1>Resultado Final</h1><br>Número <em>antecessor</em>: ". ($numero - 1) . "<br><br>Número <strong>escolhido</strong>: <strong>$numero</strong><br><br>Número <em>sucessor</em>: " . ($numero + 1);

           //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>

        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>

</body>

</html>