# 🖥️ Exercício 01 - Informações do PHP

Neste exercício, o objetivo é exibir todas as informações detalhadas sobre a configuração atual do PHP instalado no servidor local ou remoto.

## 💡 Proposta

- Utilizar a função `phpinfo()` para mostrar:
  - Versão do PHP
  - Extensões instaladas
  - Diretórios de configuração
  - Informações do sistema, servidor web, ambiente e mais

Essa página é útil para diagnosticar o ambiente de desenvolvimento, identificar limitações e entender o que está habilitado no servidor.

## 🧠 Conceitos abordados

- Uso da função `phpinfo()` em PHP
- Geração automática de uma página com dados técnicos detalhados
- Estrutura básica de uma página HTML integrada ao PHP

## 📋 Estrutura esperada

A página gerada pelo `phpinfo()` inclui:

- Versão do PHP instalada
- Informações de compilação
- Variáveis de ambiente e do servidor
- Extensões e módulos habilitados
- Configurações de carregamento de arquivos (upload), timezone, memória, etc.

## 🧪 Exemplo de uso

```php
<?php 
    phpinfo();
?>
```
- Basta acessar a página para visualizar todos os dados formatados automaticamente.

---

## ⚠️ Observação
Por questões de segurança, não é recomendado deixar páginas com phpinfo() acessíveis em produção, pois elas revelam detalhes sensíveis do ambiente.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)