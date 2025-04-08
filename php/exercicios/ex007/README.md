# 🔁 Exercício 07 - Formulário Retroalimentado

Neste exercício, o objetivo é implementar um formulário retroalimentado, ou seja, um formulário que envia os dados para ele mesmo, sem a necessidade de um segundo arquivo PHP. Com isso, aprendemos a trabalhar com `$_SERVER["PHP_SELF"]` e validar entradas de forma prática.

## 💡 Proposta

- Criar um formulário que solicita dois valores numéricos.
- Submeter os dados para o mesmo arquivo que os processa.
- Exibir a soma dos valores recebidos dinamicamente na própria página.

## 🧠 Conceitos abordados

- Uso de `$_SERVER["PHP_SELF"]` para autoenvio de formulários.
- Recuperação de dados via `$_GET`.
- Operações aritméticas simples no PHP.
- Validação básica de entrada.
- Escapando o envio com valores nulos e exibindo mensagens de erro.

## 🧪 Exemplo de uso

```php
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="number" name="v1">
    <input type="number" name="v2">
    <input type="submit" value="Somar">
</form>
<?php
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

    if ($valor1 == null || $valor2 == null) {
        die("<h3 style='color: red;'>Erro: Insira um valor válido!</h3>");
    } else {
        echo "Resultado: " . ($valor1 + $valor2);
    }
?>
```

---

## 📋 O que o programa faz?
1. Exibe um formulário com dois campos de número.

2. Após o envio, os valores são somados e exibidos abaixo do formulário.

3. Se algum dos campos for deixado em branco, uma mensagem de erro é exibida.

---

## 🧰 Recursos adicionais
- $_SERVER["PHP_SELF"]: Garante que o formulário se autoenvie.

- require e ??: Tratam valores não definidos.

- die(): Encerra o processamento e mostra uma mensagem de erro, caso necessário.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)