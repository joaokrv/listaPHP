# 💵 Exercício 12 - Simulador de Caixa Eletrônico

Este exercício consiste em criar uma página que simula o funcionamento de um caixa eletrônico. Ao informar um valor em reais, o sistema calcula e exibe a menor quantidade possível de cédulas para efetuar o saque.

---

## 💡 Proposta

Desenvolver uma página web que:

- Receba um valor em reais via formulário (`GET`);
- Calcule a quantidade de cédulas de cada valor necessárias para compor o montante informado, utilizando a menor quantidade possível de notas;
- Exiba o resultado em uma lista com a quantidade de cada cédula;
- Valide se o valor informado é maior ou igual a zero;
- Utilize um formulário retroalimentado para facilitar testes consecutivos.

---

## 🧠 Lógica aplicada

A simulação considera as seguintes cédulas disponíveis:

- R$ 100
- R$ 50
- R$ 20
- R$ 10
- R$ 5
- R$ 2
- R$ 1

A lógica consiste em usar divisões inteiras (`intdiv`) para determinar quantas notas de cada valor são necessárias e o operador módulo (`%`) para calcular o restante a ser distribuído com as próximas cédulas.

---

## 🧪 Exemplo

**Entrada do usuário:**  
R$ 378

**Saída esperada:**  

O caixa eletrônico vai te entregar **R$378,00**, que equivalem às seguintes notas:

- **CEM REAIS** = x 3  
- **CINQUENTA REAIS** = x 1  
- **VINTE REAIS** = x 1  
- **DEZ REAIS** = x 0  
- **CINCO REAIS** = x 1  
- **DOIS REAIS** = x 1  
- **UM REAL** = x 1  

---

## 🛠️ Tecnologias utilizadas

- HTML5
- CSS3
- PHP (versão >= 7)
- `intdiv()` para divisões inteiras
- `$_GET` para recepção dos dados via formulário
- `NumberFormatter` (`numfmt_create` e `numfmt_format_currency`) para formatação monetária
- Formulário retroalimentado (`action="<?= $_SERVER['PHP_SELF'] ?>"`)

---

## 🧾 Organização do código

### Formulário (HTML)

- Campo de entrada numérica para o valor em reais;
- Envio dos dados por método `GET`;
- Campo com valor persistente utilizando `value="<?=$dinheiro?>"`.

### Processamento (PHP)

- Verificação da validade do valor inserido (não negativo);
- Cálculo da quantidade de cédulas para cada valor disponível;
- Exibição dos resultados em uma lista `<ul>` formatada.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)