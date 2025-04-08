<!-- 
    Processamento do Formulário (cad.php)
    Este arquivo recebe os dados enviados via GET a partir do formulário HTML e processa as informações.
    Inclui um pequeno controle de exceções utilizando o operador de coalescência nula (??) para tratar valores inválidos ou não preenchidos.
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
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
        <?php 
           // Capturando os dados via GET com fallback caso estejam ausentes
           $nome = $_GET["nome"] ?? "Nome inválido";
           $sobrenome = $_GET["sobrenome"] ?? "Sobrenome inválido";
           $idade = $_GET["idade"] ?? "Idade inválida";

           // Exibição da mensagem personalizada com os dados do usuário
           echo "<p>É muito bom te conhecer <b>$nome $sobrenome</b>, você tem <b>$idade</b> anos mesmo? <br>Esse foi o meu site/formulário.</p>";

           // Comentários úteis para depuração:
           // var_dump($_GET) -> mostra todos os dados enviados pela URL
           // $_REQUEST -> junção de $_GET, $_POST e $_COOKIE
        ?>

        <!-- Botão para voltar à página anterior -->
        <p><a href="javascript:window.location.href='index.html'">Voltar para página anterior</a></p>
    </main>

</body>

</html>