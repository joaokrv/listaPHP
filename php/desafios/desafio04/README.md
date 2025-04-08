# 🔍 Desafio 4 - Análise de Número Real

Este desafio propõe a criação de uma página em PHP que receba um número real digitado pelo usuário e exiba separadamente a **parte inteira** e a **parte fracionária** desse número.

A entrada de dados é feita através de um formulário e o resultado é processado e exibido em uma **página separada** (`resposta.php`).

---

## 💡 Funcionalidades

- Aceita a entrada de números reais (com casas decimais);
- Substituição automática de vírgula por ponto no campo de entrada;
- Identificação e exibição:
  - Parte inteira do número;
  - Parte fracionária do número;
- Validação de valor válido;
- Exibição formatada no padrão brasileiro (ex: `1.234,567`).

---

## 📥 Exemplo de uso

O usuário informa:

- **Número real**: `25,785`

O sistema exibe:

- Parte inteira: `25`
- Parte fracionária: `0,785`

---

## 🧪 Tecnologias Utilizadas

- **PHP** (validação, cálculos e exibição)
- **HTML + CSS** (estrutura e layout)
- **JavaScript** (substituição dinâmica de vírgula por ponto no input)

---

## ▶️ Como utilizar

1. Inicie um servidor local (XAMPP, WAMP, Laragon, etc.);
2. Abra o arquivo `index.html` no navegador;
3. Digite um número real (pode usar vírgula ou ponto);
4. Clique em **Analisar** para ser redirecionado à página de resultado (`resposta.php`);
5. Visualize a parte inteira e a parte fracionária do número informado.

---

## 📎 Estrutura do Código

### `index.html`

- Formulário de entrada com input tipo `text`;
- Script JS substitui `,` por `.` automaticamente no campo de input.

### `resposta.php`

- Conversão do valor com `floatval`;
- Cálculo das partes inteira e fracionária:
```php
$int = (int)$valor;
$fra = $valor - $int;
```

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)
