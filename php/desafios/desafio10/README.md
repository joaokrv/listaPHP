# 💸 Desafio 10 - Reajuste de Preço

Este desafio propõe a criação de uma página em PHP que permita calcular o novo preço de um produto com base em uma porcentagem de reajuste fornecida pelo usuário.

A entrada dos dados é feita por meio de um formulário retroalimentado utilizando o método `GET`, e a porcentagem é controlada com um **input deslizante (range)**, atualizado em tempo real via **JavaScript**.

---

## 💡 Funcionalidades

- Entrada do valor atual do produto;
- Controle deslizante para escolher o percentual de reajuste (0% a 100%);
- Cálculo e exibição do novo valor com base no reajuste;
- Feedback dinâmico da porcentagem com `JavaScript`.

---

## 📥 Exemplo de uso

O usuário informa:

- **Preço atual**: R$ 100,00
- **Reajuste**: 15%

O sistema exibe:

> O produto que custava **R$ 100,00**, com aumento de **15%**, passará a custar **R$ 115,00**.

---

## 🧪 Tecnologias Utilizadas

- **PHP** (processamento e cálculos)
- **HTML** (estrutura do formulário)
- **CSS** (estilo visual via `style.css`)
- **JavaScript** (atualização dinâmica do valor do range)

---

## ▶️ Como utilizar

1. Inicie um servidor local (como XAMPP, WAMP, Laragon, etc.);
2. Abra o arquivo `index.php` ou equivalente no navegador (`http://localhost/...`);
3. Insira o valor do produto e ajuste o percentual com o slider;
4. Clique em **Calcular** para visualizar o novo valor com o reajuste.

---

## 📎 Estrutura do Código

- Captura dos valores com `$_GET` e definição de valores padrão;
- Verificação para garantir que o valor inserido seja maior que zero;
- Uso de `input type="range"` com `oninput` para atualizar o valor exibido em tempo real;
- Cálculo do novo preço com base na fórmula:

```php
$reajuste = $valor * $porcentagem / 100;
$novoValor = $valor + $reajuste;
```

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)