# 📝 Exercício 04 - Trabalhando com Strings e Constantes

Neste exercício, o foco foi aprender sobre a manipulação de **strings** em PHP, o uso de **aspas simples e duplas**, e como **definir constantes** com `const`.

## 💡 Proposta

- Compreender a diferença entre aspas simples e duplas ao trabalhar com variáveis em strings.
- Exibir strings com aspas dentro delas, utilizando sequências de escape.
- Declarar e utilizar constantes em PHP.

## 🧠 Conceitos abordados

- **Aspas duplas (`"`)**: interpretam variáveis dentro da string.
- **Aspas simples (`'`)**: não interpretam variáveis, exibem o conteúdo literalmente.
- **Constantes (`const`)**: valores fixos definidos uma vez, e que não podem ser alterados ao longo do programa.

## 📋 Estrutura esperada

Ao acessar a página, o PHP exibirá:

- A cidade e estado utilizando aspas duplas (com interpolação de variáveis).
- A mesma informação com aspas simples (sem interpolação).
- O nome definido como constante sendo usado em uma frase.

## 🧪 Exemplo de uso

```php
<?php 
    $cidade = "Belo Horizonte";
    $estado = "MG";
    const NOME = "João Victor";

    echo "Cidade: $cidade, Estado: $estado (Aspas duplas \" \")<br>";
    echo 'Cidade: $cidade, Estado: $estado (Aspas simples \' \')';
    echo "<br>Sou o " . NOME . " e estou fazendo faculdade em $cidade, $estado<br>";
?>
```

---

## 🔍 Saída esperada:
```bash
Cidade: Belo Horizonte, Estado: MG (Aspas duplas " ")
Cidade: $cidade, Estado: $estado (Aspas simples ' ')
Sou o João Victor e estou fazendo faculdade em Belo Horizonte, MG
```

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)