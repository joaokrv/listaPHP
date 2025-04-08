# 📅 Exercício 02 - Data e Hora com PHP

Neste exercício, o objetivo é exibir a **data e hora atual** utilizando a função `date()` do PHP, considerando a **configuração de fuso horário (timezone)** do Brasil.

## 💡 Proposta

- Exibir a data atual no formato `dia/mês/ano`
- Exibir o horário atual no formato `hora:minuto:segundo`
- Ajustar a timezone para garantir que o horário esteja de acordo com o fuso horário de São Paulo

## 🧠 Conceitos abordados

- Função `date()` do PHP
- Formatação de data (`d/M/Y`) e hora (`G:i:s`)
- Configuração da timezone com `date_default_timezone_set()`
- Integração do PHP com HTML para exibição dinâmica

## 🧪 Exemplo de uso

```php
<?php 
    date_default_timezone_set("America/Sao_Paulo");

    echo "<p>No Brasil, hoje é dia " . date("d/M/Y");
    echo " e a hora atual é: " . date("G:i:s</p>");
?>
```

---

## 🕒 Exemplo de saída:
- No Brasil, hoje é dia 08/Abr/2025 e a hora atual é: 14:23:45   
*(A saída será sempre baseada no horário real do servidor na timezone configurada)*

## ⚠️ Observações
- O PHP usa o horário UTC por padrão. Sempre que for trabalhar com data e hora local, é fundamental ajustar a timezone com date_default_timezone_set().

- A lista de timezones suportadas pode ser consultada neste link da documentação oficial.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)