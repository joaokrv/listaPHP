# 🧮 Desafio 06 — Quantos Salários Mínimos Eu Recebo?

Este desafio propõe criar uma página onde o usuário informa seu **salário atual**, e o sistema retorna **quantos salários mínimos** esse valor representa, com base no valor **real e atualizado** do salário mínimo consultado pela API do Banco Central.

> 💡 Este projeto utiliza requisição externa via `file_get_contents` para buscar os dados do salário mínimo diretamente da [API oficial do Banco Central do Brasil](https://dadosabertos.bcb.gov.br/).

---

## 📌 Funcionalidades

- Formulário para entrada do salário do usuário
- Requisição à API para buscar o salário mínimo vigente
- Cálculo da quantidade de salários mínimos correspondentes ao valor inserido
- Exibição dos resultados com **formatação monetária brasileira**
- Mensagens ajustadas para singular ou plural com base no resultado
- Link para o site oficial do Banco Central

---

## 💡 Exemplo de Uso

Suponha que o salário mínimo atual seja R$ 1.412,00 e o usuário informe um salário de R$ 3.200,00.

A aplicação retornará:

> **Quem recebe um salário de R$ 3.200,00 ganha 2 salários mínimos + R$ 376,00.**

---

## 🧪 Tecnologias Utilizadas

- PHP
- HTML5 / CSS3
- API pública do Banco Central (BCB)
- `NumberFormatter` (para formatação monetária)
- Método `GET` para envio do formulário

---

## 🛠️ Como Executar

1. Instale um servidor local como o [XAMPP](https://www.apachefriends.org/pt_br/index.html)
2. Mova os arquivos do desafio para a pasta `htdocs` (no caso do XAMPP)
3. Inicie o módulo Apache
4. Acesse no navegador:  
   ```
   http://localhost/seu_projeto/desafio06/
   ```
5. Insira seu salário e clique em **Calcular**

---

## 🔗 Recursos Úteis

- 📊 [API de Dados Abertos - Banco Central](https://dadosabertos.bcb.gov.br/)
- 🧠 [Documentação do PHP - `NumberFormatter`](https://www.php.net/manual/pt_BR/class.numberformatter.php)

---

## 🎯 Objetivo do Desafio

Este exercício reforça conceitos como:

- Requisições externas com `file_get_contents`
- Manipulação de arrays associativos JSON
- Funções matemáticas (`intdiv`, módulo)
- Condicionais e internacionalização
- Exibição de dados de forma amigável ao usuário

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)