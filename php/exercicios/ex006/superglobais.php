<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <pre>
            <?php   

                //Permite a configuração do cookie
                setcookie("dia-do-mês", "04", time() + 3600);

                //Permite a inicialização de uma sessão
                session_start();
                $_SESSION["teste"] = "Funcionou";

                // A superglobal GET extrai os dados a partir da URL, ou seja, vem pela QUERY STRING
                // Na URL: http://localhost/php/exercicios/ex006/superglobais.php?nome=JoaoVictor&idade=19 o que vem depois do ? são as variaveis e seus valores, separadas pelo &
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                // A superglobal POST extrai dados a partir de um formulário, os dados aparecem conforme explicado no video 34 da playlist, minuto 10:47.
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                
                // A superglobal REQUEST extrai todos os dados, faz a unificação do GET e POST em um único array associativo
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                // A Superglobal COOKIES, terá acesso aos cookies a sua sessão PHP, apenas sua aplicação.
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                // A Superglobal FILES, terá acesso aos arquivos que fez upload do seu site PHP, apenas seu site PHP.


                // A Superglobal SESSION, terá acesso as variáveis de sessão que são variáveis que não são perdidas entre as navegações de páginas.
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                // A Superglobal ENV, vem de enviroment, que significa ambiente, são variáveis de ambiente do servidor. NAO FUNCIONA EM SERVIDOR LOCAL.
                echo "<h1>SuperGlobal ENV</h1>";
                var_dump($_ENV);               

                // A SuperGlobal SERVER, possui inumeras variaves sobre o Servidor, nome do servidor, endereço de IP, onde os arquivos estao salvos, o nome do server. PHP SELF é muito importante.
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                // A SuperGlobal $GLOBALS, puxa os dados de todas as globais, porém puxa muito recurso e é demorada.
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);

            ?>
            
        </pre>

        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>

    </main>
</body>

</html>