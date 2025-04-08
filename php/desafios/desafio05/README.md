# 🧮 Desafio 05 - Média Aritmética

Este desafio consiste em desenvolver uma aplicação web em PHP que recebe duas notas de um aluno, calcula a média aritmética e exibe o resultado com formatação adequada. O projeto foi feito com base no curso do canal [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_).

---

## 💻 Tecnologias Utilizadas

- PHP  
- HTML  
- CSS (opcional)  
- Servidor local (XAMPP ou WAMP)

---

## 📌 Funcionalidades

- Permite ao usuário inserir duas notas via formulário.  
- Calcula a média entre as notas fornecidas.  
- Exibe a média com duas casas decimais.  
- Mostra os valores formatados em português brasileiro.

---

## 📥 Como Executar

1. **Instale um servidor local (como o XAMPP ou WAMP).**

2. **Clone ou copie os arquivos para a pasta do servidor:**  
   No XAMPP, por exemplo:  
   `C:\xampp\htdocs\listaPHP\desafios\desafio05\`

3. **Inicie o servidor Apache** pelo painel do XAMPP.

4. **Abra o navegador e acesse:**  
   `http://localhost/listaPHP/desafios/desafio05/`

5. **Preencha as notas e veja o resultado.**

---

## 🧠 Lógica do Código

- O formulário HTML coleta duas notas (`nota1` e `nota2`) usando o método GET.  
- O arquivo `resposta.php` valida os dados e calcula a média:

```php
$nota1 = $_GET["nota1"] ?? 0;
$nota2 = $_GET["nota2"] ?? 0;
$media = ($nota1 + $nota2) / 2;

Os valores são formatados com number_format() para exibir duas casas decimais:

$mediaFormatada = number_format($media, 2, ",", ".");
```

---

## 🎯 Objetivo do Desafio
- Praticar entrada e saída de dados com PHP.

- Trabalhar com operações matemáticas e formatação numérica.

- Melhorar a interação com o usuário via formulários web.

## 🔗 Recursos Complementares

- 📺 Curso em Vídeo - PHP:  
  [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)

- 📘 Documentação Oficial do PHP:  
  [php.net](https://www.php.net/)

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)