# 🧾 Exercício 05 - Formulário com HTML e Processamento em PHP

Neste exercício, desenvolvemos um pequeno site com **HTML**, **CSS** e **PHP** que permite ao usuário preencher um formulário com seu nome, sobrenome e idade, e depois recebe essas informações com uma mensagem personalizada. 

## 💡 Proposta

- Criar um formulário web com campos de entrada para **nome**, **sobrenome** e **idade**.
- Enviar os dados via método `GET` para uma página PHP.
- Exibir uma mensagem personalizada com os dados inseridos.
- Tratar casos onde os campos possam não ser preenchidos corretamente (controle de exceções simples).

## 🧠 Conceitos abordados

- Formulários HTML com o método `GET`
- Recebimento de dados via `$_GET` no PHP
- Uso do operador null coalescing (`??`) para valores padrão
- Interação entre HTML e PHP
- Navegação com `javascript:window.location.href` para retorno de página

## 🧪 Exemplo de uso

### 📄 `index.html`

```html
<form action="cad.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" name="sobrenome" id="sobrenome">

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" min="0" max="110">

    <input type="submit" value="Enviar">
</form>
```
---

### 🧮 `cad.php`

```php
<?php 
   $nome = $_GET["nome"] ?? "Nome inválido";
   $sobrenome = $_GET["sobrenome"] ?? "Sobrenome inválido";
   $idade = $_GET["idade"] ?? "Idade inválida";
   
   echo "<p>É muito bom te conhecer <b>$nome $sobrenome</b>, você tem <b>$idade</b> anos mesmo?</p>";
?>

🔄 Link de retorno
<p><a href="javascript:window.location.href='index.html'">Voltar para página anterior</a></p>

```

---

## 🧷 Observação  
Embora este exercício utilize o método GET por simplicidade, em aplicações reais que lidam com dados sensíveis (como senhas ou informações pessoais), o ideal é usar o método POST para maior segurança e privacidade.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)