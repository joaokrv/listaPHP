# 🕒 Desafio 11 - Conversor de Tempo

Este desafio consiste em criar uma página que recebe um valor em segundos informado pelo usuário e realiza a conversão para semanas, dias, horas, minutos e segundos restantes.

---

## 💡 Proposta

Desenvolver uma página web que:

- Receba um número total de segundos via formulário (método `GET`);
- Converta esse número em:
  - Semanas
  - Dias
  - Horas
  - Minutos
  - Segundos restantes;
  
- Exiba os resultados de forma clara e organizada;
- Utilize validação para garantir que o valor inserido seja um número não negativo.

---

## 🧠 Lógica aplicada

Para realizar a conversão, são utilizados os seguintes fatores:

- 1 semana = **604.800** segundos  
- 1 dia = **86.400** segundos  
- 1 hora = **3.600** segundos  
- 1 minuto = **60** segundos  

Com isso, aplicam-se divisões inteiras (`intdiv`) e o operador módulo (`%`) para calcular o tempo restante em cada unidade.

---

## 🧪 Exemplo

**Entrada do usuário:**
900.610


**Saída esperada:**
Analisando o valor que você digitou, 900.610 segundos equivalem a um total de:

- 1 semana

- 3 dias

- 10 horas

- 10 minutos

- 10 segundos

---

## 🛠️ Tecnologias utilizadas

- HTML5
- CSS3
- PHP (versão >= 7)
- `intdiv()` para divisões inteiras
- `$_GET` para recepção dos dados via formulário
- `number_format()` para formatação dos números
- Formulário retroalimentado (`action="<?= $_SERVER['PHP_SELF'] ?>"`)

---

## 🧾 Organização do código

### Formulário (HTML)
- Campo de entrada para total de segundos;
- Envio por método `GET`;
- Validação para valores não negativos.

### Processamento (PHP)
- Recebe o valor via `$_GET['sec']`;
- Realiza os cálculos de tempo;
- Exibe os resultados em lista no `section`.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)