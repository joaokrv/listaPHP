<!-- 
    Exercício 00 — Primeiro site em PHP: "Olá, Mundo!"
    Este exercício marca o início da jornada em PHP, quebrando a "maldição do Olá, Mundo!". 
    Aqui, foram utilizados os comandos `echo` e `print`, que servem para exibir informações 
    diretamente no navegador via linguagem PHP.

    A diferença entre eles é pequena:
      • `echo` é ligeiramente mais rápido e não retorna valor
      • `print` retorna 1 e pode ser usado em expressões

    Também foi utilizado o Unicode para exibir o emoji via `\u{1F680}`.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldição</title>
</head>

<body>
    <h1>
        <?php 
            // Exibindo texto com echo e print
            echo "Olá, Mundo \u{1F680} | ";
            print "Olá, Mundo \u{1F680}";
        ?>
    </h1>

    <p>Vamos tentar nos livrar da maldição!</p>
</body>

</html>