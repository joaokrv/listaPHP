<!-- 
    Exercício 01 — Informações sobre o ambiente PHP
    Neste exercício foi utilizada a função nativa `phpinfo()`, que exibe uma página com todos os 
    dados detalhados do ambiente de execução do PHP, como:
      • Versão do PHP instalada
      • Extensões habilitadas
      • Configurações do servidor
      • Diretórios de inclusão
      • Limites de memória, tempo de execução, entre outros

    Essa função é útil principalmente para fins de diagnóstico, testes de ambiente 
    e verificação de configurações do servidor.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 — Informações do PHP</title>
</head>

<body>
    <h1>Dados do servidor</h1>

    <?php 
        // Exibe todas as informações do ambiente PHP atual
        phpinfo();
    ?>
</body>

</html>
