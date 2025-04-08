# 🎲 Desafio 02 - Sorteador de Números Aleatórios

Este desafio consiste em um pequeno sistema PHP que recebe dois números (inicial e final) informados pelo usuário e sorteia um valor aleatório entre eles. Ele simula um sorteador, como o de rifas ou sorteios simples.

## 📌 Objetivo

Praticar os seguintes conceitos:

- Uso de formulários com método `GET`
- Entrada de múltiplos valores numéricos
- Manipulação de números inteiros
- Função `mt_rand()` para gerar aleatórios
- Validação simples dos dados de entrada

## 🧠 Lógica do Código

1. O usuário preenche dois campos numéricos: um número inicial e um final.
2. O PHP valida se o número inicial é menor que o final.
3. Se a validação for bem-sucedida, é sorteado um número entre os dois valores.
4. O número é exibido na tela, com a opção de gerar outro.

## 💡 Exemplo de uso

Suponha que o usuário insira os valores `10` e `50`.  
O sistema pode retornar, por exemplo:
Sorteando número entre 10 e 50... O número sorteado foi: 27
Caso o número inicial seja maior que o final, será exibida uma mensagem de erro.

## 🧪 Testando o desafio

Acesse no navegador e preencha os dois campos para realizar o sorteio:
http://localhost/desafios/d02/

## 📁 Arquivos

-index.html → Formulário de entrada

-resposta.php → Processamento dos dados e exibição do número sorteado

-style.css → (Opcional) Estilo da interface

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)