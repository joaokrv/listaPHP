<!-- Sexto exercicio, neste exercicio vamos ver o primeiro site de fato, aqui existe um arquivo CSS, HTML e um PHP. 
Neles foram configurados para que o usuário digite seu nome, Sobrenome e Idade possuindo um pequeno controle de excessões. 
Além disso, vimos de uma maneira melhor como puxar uma informação de um HTML, para o PHP e utilizá-la. -->

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
           $nome = $_GET["nome"] ?? "Nome invalido ";
           $sobrenome = $_GET["sobrenome"] ?? "Sobrenome invalido";
           $idade = $_GET["idade"] ?? "Idade invalida";
           
           echo "<p>É muito bom te conhecer <b>$nome $sobrenome</b>, você tem <b>$idade</b> anos mesmo? <br>Esse foi o meu site/formulário. ";

           //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>
        <p><a href="javascript:window.location.href='index.html'">Voltar para página anterior</a></p>
    </main>

</body>

</html>
