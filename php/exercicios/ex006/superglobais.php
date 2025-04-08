<!-- 
    Exercício 06 - Superglobais em PHP (Parte 2)
    Neste arquivo, estudamos o funcionamento das variáveis superglobais do PHP,
    que são arrays associativos com escopo global, utilizados para capturar e manipular dados do servidor, formulários e ambiente.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <pre>
        <?php   
            echo "<h1>Superglobais</h1>";

            //  Superglobal COOKIE: define um cookie temporário que expira em 1 hora
            setcookie("dia-do-mês", "04", time() + 3600);

            //  Superglobal SESSION: inicia uma sessão e armazena uma variável    persistente
            session_start();
            $_SESSION["teste"] = "Funcionou";

            //  Superglobal GET: captura dados enviados pela URL (query string)
            echo "<h2>Superglobal GET</h2>";
            var_dump($_GET);

            //  Superglobal POST: captura dados enviados via formulário (ocultos na URL)
            echo "<h2>Superglobal POST</h2>";
            var_dump($_POST);

            //  Superglobal REQUEST: unifica GET e POST em um único array associativo
            echo "<h2>Superglobal REQUEST</h2>";
            var_dump($_REQUEST);

            //  Superglobal COOKIE: mostra os cookies disponíveis para a aplicação
            echo "<h2>Superglobal COOKIE</h2>";
            var_dump($_COOKIE);

            //  Superglobal SESSION: mostra os dados salvos na sessão atual
            echo "<h2>Superglobal SESSION</h2>";
            var_dump($_SESSION);

            //  Superglobal ENV: acessa variáveis de ambiente do servidor (pode não funcionar localmente)
            echo "<h2>SuperGlobal ENV</h2>";
            var_dump($_ENV);               

            //  Superglobal SERVER: mostra detalhes sobre o servidor e execução do    script (ex: IP, nome do arquivo, etc.)
            echo "<h2>Superglobal SERVER</h2>";
            var_dump($_SERVER);

            //  Superglobal GLOBALS: acessa todas as variáveis globais (demorado e    consome muitos recursos)
            echo "<h2>Superglobal GLOBALS</h2>";
            var_dump($GLOBALS);
        ?>
        </pre>

        <!-- Botão de retorno -->
        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>
</body>

</html>