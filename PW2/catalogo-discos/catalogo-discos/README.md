# 🎵 Catálogo de Discos/Músicas — CRUD

Sistema de gestão de álbuns musicais (título, artista, ano de lançamento e gênero), feito com **PHP + MySQL (PDO)**, **HTML/CSS** e **JavaScript**.

## 📁 Estrutura do projeto

```
catalogo-discos/
├── config/
│   ├── db.php          # Conexão PDO com o MySQL
│   └── funcoes.php      # Funções auxiliares (validação/sanitização)
├── css/
│   └── style.css        # Estilos do sistema
├── js/
│   └── script.js         # Busca dinâmica, validação de formulário, modal de exclusão
├── database.sql           # Script para criar o banco e a tabela
├── index.php              # Listagem (Read)
├── create.php              # Cadastro (Create)
├── edit.php                # Edição (Update)
└── delete.php               # Exclusão (Delete)
```

## ⚙️ Instalação

### 1. Requisitos
- PHP 7.4 ou superior (com extensão PDO MySQL habilitada)
- MySQL ou MariaDB
- Servidor local: XAMPP, WAMP, MAMP, Laragon, ou `php -S` embutido

### 2. Criar o banco de dados
Importe o arquivo `database.sql` no seu MySQL. Você pode fazer isso via phpMyAdmin (aba "Importar") ou pelo terminal:

```bash
mysql -u root -p < database.sql
```

Isso cria o banco `catalogo_discos`, a tabela `discos` e insere alguns registros de exemplo.

### 3. Configurar a conexão
Abra `config/db.php` e ajuste, se necessário, usuário/senha do seu MySQL:

```php
$host = 'localhost';
$dbname = 'catalogo_discos';
$user = 'root';
$senha = ''; // sua senha do MySQL, se houver
```

### 4. Rodar o projeto
- **Com XAMPP/WAMP**: coloque a pasta `catalogo-discos` dentro de `htdocs` (ou `www`) e acesse `http://localhost/catalogo-discos/`
- **Com o servidor embutido do PHP** (mais rápido para testar):
  ```bash
  cd catalogo-discos
  php -S localhost:8000
  ```
  Depois acesse `http://localhost:8000`

## ✨ Funcionalidades

- **Create**: cadastro de novo disco/música com validação (servidor + JavaScript)
- **Read**: listagem de todos os discos com busca dinâmica (filtro em tempo real por título, artista ou gênero)
- **Update**: edição dos dados de um disco existente
- **Delete**: exclusão com modal de confirmação (evita cliques acidentais)
- Proteção contra SQL Injection via **PDO com prepared statements**
- Proteção contra XSS com `htmlspecialchars()` em todas as saídas
- Layout responsivo (funciona em celular)

## 🛠️ Possíveis melhorias futuras

- Autenticação de usuário (login/logout)
- Upload de capa do álbum
- Paginação da listagem
- Filtro avançado por gênero/ano usando `SELECT` dinâmico
- API REST (JSON) para consumo por front-end separado (React, Vue, etc.)
