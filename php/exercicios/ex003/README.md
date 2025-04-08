# 🧮 Exercício 03 - Tipos Primitivos em PHP

Neste exercício, o objetivo foi explorar os tipos primitivos em PHP e compreender como eles se comportam ao serem atribuídos a variáveis.

## 💡 Proposta

- Atribuir diferentes valores a variáveis em PHP.
- Utilizar a função `var_dump()` para inspecionar o tipo e o valor dessas variáveis.
- Compreender como o PHP lida com tipos como inteiros, binários, hexadecimais, octais e valores em notação científica.

## 🧠 Conceitos abordados

- Tipos primitivos: inteiros, strings, float, boolean, entre outros.
- Prefixos numéricos especiais:
  - `0x` → Hexadecimal
  - `0b` → Binário
  - `0` → Octal
  - `e` → Notação científica (ex: `3e2` = 300)
- A função `var_dump()` que mostra o tipo e valor da variável.

## 📋 Estrutura esperada

A aplicação define variáveis com valores numéricos e utiliza `var_dump()` para imprimir a estrutura da variável:

```php
$v = 320;
var_dump($v); // Resultado: int(320)
A saída revela o tipo (neste caso int) e o valor armazenado.
```

---

## 🧪 Exemplo de uso
```php
<?php 
    $num = 300;
    echo "<p>Valor da variavel é $num</p>";

    $v = 320;
    echo "<p>O comando var_dump mostra a variavel dessa forma: int(320)</p>";
?>
Essa técnica é fundamental para depuração e aprendizado da tipagem no PHP.
```

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)