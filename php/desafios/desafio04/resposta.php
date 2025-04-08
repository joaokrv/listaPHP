<!-- 
    Desafio 4 - Análise de Números Reais

    Proposta: Criar um site que analisa um número real informado pelo usuário.
    O valor é enviado via método GET para esta página (resposta.php), onde será exibido:

    - A parte inteira do número
    - A parte fracionária (decimais) do número

    Também foram implementadas:
    - Validação para garantir que um valor válido seja enviado
    - Conversão e formatação para o padrão brasileiro (pt-BR)
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
        <h1>Analise de números Reais</h1>
    </header>

    <main>
        <?php 
            // Verifica se o usuário enviou um valor via GET
            // Se o usuário não enviou nada, definimos 0 como padrão para evitar erros
            $valor = floatval($_GET["valor"] ?? 0);

            // Se o valor for inválido ou não informado, exibe uma mensagem
            if ($valor <= 0) {
                die("<h3 style='color: red;'>Erro: Insira um valor válido!</h3><a href='index.html'>Voltar</a");
            }   
            
            echo "<h2>Analisador de números Reais</h2>";
            echo "<p>Analisando o número <strong style='font-size: 18px;'>" . number_format($valor, 3, ",", ".") . "</strong> informado...</p>";
            
            //Parte inteira
            $int = (int)$valor;

            //Parte Fracionada
            $fra =  $valor - $int;
            
            echo "<ul><li>A parte inteira do número é: <strong style='font-size: 18px;'> " . number_format($int, 0, ",", ".") . " </strong></li>";
            echo "<li>A parte fracionária do número é: <strong style='font-size: 18px;'>" . number_format($fra, 3, ",", ".") . "</strong></li>";

            //var_dump($_GET) -> mostra todos os dados; $_REQUEST -> Junção do $_GET / $_POST / $_COOKIES
        ?>


        <button onclick="javascript:window.location.href='index.html'">&larr; Voltar</button>
    </main>

</body>

</html>