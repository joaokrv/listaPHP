# 🧮 Desafio 08 - Médias Aritméticas

Este desafio propõe a criação de uma página em PHP que recebe dois valores numéricos e seus respectivos pesos, com o objetivo de calcular e exibir:

- A média aritmética simples;
- A média aritmética ponderada.

Os valores são enviados por meio de um formulário retroalimentado utilizando o método `GET`. Após a submissão, os cálculos são realizados e exibidos com formatação adequada para facilitar a visualização dos resultados.

---

## 💡 Funcionalidades

- Entrada de dois valores numéricos (notas);
- Definição de pesos individuais para cada valor;
- Cálculo da média simples;
- Cálculo da média ponderada;
- Validação básica de preenchimento;
- Resultados formatados com duas casas decimais.

---

## 📥 Exemplo de uso

O usuário informa:

- **Nota 1**: 7.5 com **peso 2**
- **Nota 2**: 8.5 com **peso 3**

O sistema irá calcular:

- Média simples: (7.5 + 8.5) / 2 = **8.00**
- Média ponderada: (7.5×2 + 8.5×3) / (2+3) = **8.10**

---

## 🧪 Tecnologias Utilizadas

- **PHP** (processamento dos dados e cálculos)
- **HTML** (estrutura do formulário)
- **CSS** (estilização externa via `style.css`)

---

## ▶️ Como utilizar

1. Execute o servidor local (como XAMPP ou WAMP);
2. Acesse o arquivo via navegador (`http://localhost/...`);
3. Insira os valores e pesos desejados;
4. Clique em **Analisar** para ver os resultados.

---

## 📎 Estrutura do Código

- `$_GET` para recuperar os dados do formulário;
- Validação de campos não preenchidos;
- Utilização das funções aritméticas para cálculo;
- Apresentação dos resultados em lista (`<ul>`), com destaque visual.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)
