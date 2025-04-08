# 💱 Desafio 03 - Conversor de Moedas (BRL → USD)

Este desafio implementa um conversor de moedas simples usando **PHP**, que transforma valores de **Real (BRL)** em **Dólar (USD)** com base na cotação atual do Banco Central do Brasil.

---

## 📌 Objetivo

Praticar os seguintes conceitos:

- Coleta de dados com `$_GET`
- Consumo de APIs externas com `file_get_contents`
- Decodificação de JSON com `json_decode`
- Manipulação e formatação de datas com `DateTime`
- Formatação de valores monetários com `NumberFormatter`
- Validação de entrada e tratamento de erros

---

## 🧠 Lógica do Código

1. O usuário insere um valor em Reais no formulário da página `index.html`.
2. O valor é enviado para `resposta.php` via método `GET`.
3. O sistema acessa a **API do Banco Central** para buscar a cotação mais recente do dólar comercial.
4. O valor é convertido com base na cotação obtida.
5. A página exibe o valor convertido e a data/hora da cotação usada.

---

## 💡 Exemplo de uso

**Entrada do usuário:**

R$ 500,00

**Cotação simulada:**

1 USD = R$ 5,00

**Resultado exibido:**

Seus R$ 500,00 equivalem a aproximadamente US$ 100,00. Cotação usada: R$ 5,00 Data da cotação: 04/04/2025 às 13:20

---

## 🧪 Testando localmente

1. Inicie seu servidor local (XAMPP/WAMP).
2. Acesse no navegador: http://localhost/desafios/d03/
3. Informe um valor em reais no formulário.
4. Clique em **Converter** para visualizar o resultado.

> ⚠️ Se nenhum valor válido for informado, será exibida uma mensagem de erro.

---

## 🔗 Recursos Relacionados

- 📺 Curso em Vídeo - PHP:  
  [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)

- 📘 API de Cotações do Banco Central:  
  [https://dadosabertos.bcb.gov.br](https://dadosabertos.bcb.gov.br)

---

## 🎯 Finalidade do Desafio

- Fixar o uso de **requisições externas (APIs)** em PHP.
- Praticar o **tratamento de dados JSON** e **formatação de moeda**.
- Simular uma aplicação prática de uso comum na web.

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)