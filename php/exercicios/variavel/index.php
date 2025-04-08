<!-- 
    Revisão de Variáveis em PHP
    Este exercício demonstra o uso de variáveis, constantes e funções nativas para manipulação de dados dinâmicos com PHP.
    O objetivo é revisar conceitos básicos como:
    - Declaração de variáveis
    - Uso de constantes
    - Funções nativas como date()
    - Exibição de conteúdo dinâmico com echo
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1>Teste de Variáveis</h1>

    <?php 
        // Definindo variáveis comuns
        $nome = "João Victor";
        $idade = "19";

        // Função nativa para pegar a data atual no formato dia/mês/ano
        $data = date("d/M/Y");

        // Definindo uma constante (valor fixo)
        const PAIS = "Brasil";

        // Ajustando o fuso horário padrão para São Paulo
        date_default_timezone_set("America/Sao_Paulo");

        // Impressão de informações na tela
        echo "<h2>Boa sorte</h2>";
        echo "<p>Bom dia, hoje é dia " . $data . " no " . PAIS . " e seu nome é " . $nome . ", confere?</p>";
        echo "<p>Além disso, sua idade é " . $idade . ", confere?</p>";
    ?>
</body>

</html>
