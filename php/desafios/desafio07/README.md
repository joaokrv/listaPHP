# 🧮 Desafio 07 — Calculadora de Raízes

Este desafio propõe criar uma página que receba um número via formulário e exiba sua **raiz quadrada** e **raiz cúbica**. O cálculo é realizado após envio do formulário via método `GET`, e os resultados são apresentados com **três casas decimais**.

> 💡 O projeto utiliza `sqrt()` e operadores de exponenciação para realizar os cálculos matemáticos.

---

## 📌 Funcionalidades

- Formulário para entrada de um número
- Cálculo da raiz quadrada e raiz cúbica
- Resultados exibidos com precisão de 3 casas decimais
- Validação de entrada para valores maiores ou iguais a zero
- Página retroalimentada (os dados são mantidos após o envio)

---

## 💡 Exemplo de Uso

Suponha que o usuário insira o número `27`. A aplicação retornará:

> Analisando o número **27**, temos:  
> - A sua raiz quadrada é **5,196**  
> - A sua raiz cúbica é **3,000**

---

## 🧪 Tecnologias Utilizadas

- PHP
- HTML5 / CSS3
- `sqrt()` para raiz quadrada
- Operador `** (1/3)` para raiz cúbica
- Função `number_format()` para formatação

---

## 🛠️ Como Executar

1. Instale um servidor local como o [XAMPP](https://www.apachefriends.org/pt_br/index.html)
2. Mova os arquivos do desafio para a pasta `htdocs` (no caso do XAMPP)
3. Inicie o módulo Apache
4. Acesse no navegador:  
   ```
   http://localhost/seu_projeto/desafio07/
   ```
5. Insira um número no campo e clique em **Analisar**

---

## 🔗 Recursos Úteis

- 📘 [Documentação do PHP - sqrt()](https://www.php.net/manual/pt_BR/function.sqrt.php)
- 📘 [Documentação do PHP - number_format()](https://www.php.net/manual/pt_BR/function.number-format.php)

---

## 🎯 Objetivo do Desafio

Este exercício reforça conceitos como:

- Estrutura de formulários com método `GET`
- Operações matemáticas em PHP
- Estrutura condicional e validação de dados
- Exibição e formatação de resultados numéricos

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)