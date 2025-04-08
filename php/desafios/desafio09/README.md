# 🎂 Desafio 09 - Cálculo de Idade

Este desafio consiste em desenvolver uma página em PHP que calcula a idade de uma pessoa com base em dois dados fornecidos:

- O ano de nascimento;
- Um ano específico para consulta (passado, presente ou futuro).

A entrada dos dados é feita por meio de um formulário retroalimentado utilizando o método `GET`, e o ano atual é detectado automaticamente para facilitar o preenchimento.

---

## 💡 Funcionalidades

- Entrada do ano de nascimento;
- Entrada do ano de consulta;
- Sugestão automática do ano atual;
- Cálculo da idade da pessoa no ano escolhido;
- Mensagem de erro em caso de inconsistência (ex: ano escolhido menor que o nascimento).

---

## 📥 Exemplo de uso

O usuário informa:

- **Ano de nascimento**: 2000
- **Ano para consulta**: 2030

O sistema exibe:

> Quem nasceu em **2000** vai ter **30 anos** em **2030**!

---

## 🧪 Tecnologias Utilizadas

- **PHP** (cálculo e validação dos dados)
- **HTML** (estrutura do formulário)
- **CSS** (estilização externa via `style.css`)

---

## ▶️ Como utilizar

1. Inicie um servidor local (como XAMPP ou WAMP);
2. Acesse o arquivo pelo navegador (`http://localhost/...`);
3. Informe o ano de nascimento e o ano para o qual deseja calcular a idade;
4. Clique em **Calcular** para ver o resultado.

---

## 📎 Estrutura do Código

- Uso de `date("Y")` para identificar o ano atual dinamicamente;
- Utilização de `$_GET` para capturar os dados inseridos;
- Validação para evitar cálculo com dados inválidos;
- Exibição do resultado com destaque e formatação clara.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos desafios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)
