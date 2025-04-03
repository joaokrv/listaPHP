<!-- Primeiro site em PHP, apenas para se livrar da Maldição "Olá mundo!", aqui vimos o conceito do echo/print-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldiçã</title>
</head>

<body>
    <h1>
        <?php 
            echo "Olá, Mundo \u{1F680}|";
            print "\nOlá, Mundo \u{1F680}"
        ?>
    </h1>
    <p>Vamos tentar nos livrar da malidção</p>
</body>

</html>