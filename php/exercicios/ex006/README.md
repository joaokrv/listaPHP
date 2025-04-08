# 🌐 Exercício 06 - Superglobais em PHP

Neste exercício, exploramos as **Superglobais do PHP**, que são variáveis internas sempre disponíveis, independentemente do escopo. Elas são essenciais para acessar informações como entradas de formulários, variáveis de sessão, cookies, e dados do servidor.

## 💡 Proposta

- Criar um formulário que envia dados via `POST` com parâmetros adicionais na URL (`GET`).
- Utilizar e exibir o conteúdo das principais superglobais:
  - `$_GET`, `$_POST`, `$_REQUEST`
  - `$_COOKIE`, `$_SESSION`, `$_ENV`
  - `$_SERVER`, `GLOBALS`

## 🧠 Conceitos abordados

- Superglobais e sua finalidade no PHP
- Diferença entre `GET`, `POST` e `REQUEST`
- Sessões e cookies
- Ambiente do servidor (`$_SERVER`, `$_ENV`)
- Inicialização de sessões com `session_start()`
- Uso de `setcookie()` para criar cookies temporários

## 🧪 Exemplo de uso

### 📝 `index.html`

```html
<form action="superglobais.php?turno=Tarde&modelo=Estagio" method="post">
    <label for="usu">Usuário</label>
    <input type="text" name="usu" id="usu" required>

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" required>

    <input type="submit" value="Entrar">
</form>
```

---

### 📄 `superglobais.php`
```php
setcookie("dia-do-mês", "04", time() + 3600);
session_start();
$_SESSION["teste"] = "Funcionou";

echo "<h2>Superglobal GET</h2>";
var_dump($_GET);

echo "<h2>Superglobal POST</h2>";
var_dump($_POST);

echo "<h2>Superglobal REQUEST</h2>";
var_dump($_REQUEST);

echo "<h2>Superglobal COOKIE</h2>";
var_dump($_COOKIE);

echo "<h2>Superglobal SESSION</h2>";
var_dump($_SESSION);

echo "<h2>SuperGlobal ENV</h2>";
var_dump($_ENV);

echo "<h2>Superglobal SERVER</h2>";
var_dump($_SERVER);

echo "<h2>Superglobal GLOBALS</h2>";
var_dump($GLOBALS);
```
---

| Superglobal        | Função                                                                 |
|--------------------|------------------------------------------------------------------------|
| `$_GET`            | Dados da URL (query string)                                            |
| `$_POST`           | Dados enviados por formulário                                          |
| `$_REQUEST`        | Combinação de `$_GET`, `$_POST` e `$_COOKIE`                          |
| `$_COOKIE`         | Acesso a cookies                                                       |
| `$_SESSION`        | Variáveis persistentes durante a sessão do usuário                    |
| `$_ENV`            | Variáveis de ambiente do servidor (nem sempre disponível localmente)  |
| `$_SERVER`         | Informações do servidor e execução                                     |
| `$GLOBALS`         | Todas as variáveis globais em um array associativo                    |

---
## ⚠️ Observações
- Nem todas as superglobais estão sempre disponíveis (por exemplo, $_ENV pode depender da configuração do servidor).

- O uso excessivo de $GLOBALS pode impactar a performance.

- As variáveis de sessão e cookies precisam de configuração adequada no servidor.

---

## 👨‍💻 Autor

Desenvolvido por João Victor — baseado nos exercícios do [Curso em Vídeo - PHP](https://www.youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_)