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
As credenciais do banco ficam no arquivo `.env` (não versionado no Git). Se você baixou este projeto e não tem o `.env` ainda:

```bash
cp .env.example .env
```

Depois abra o `.env` e ajuste conforme seu MySQL:

```
DB_HOST=localhost
DB_NAME=catalogo_discos
DB_USER=root
DB_PASS=sua_senha_aqui
```

O `config/db.php` lê essas variáveis automaticamente — não é necessário editar esse arquivo.

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

## 🔐 Versionando no GitHub com segurança

O arquivo `.env` (com suas credenciais reais) está no `.gitignore` e **nunca deve ser commitado**. Apenas o `.env.example` (sem senha) vai para o repositório.

```bash
git init
git add .
git commit -m "Primeiro commit do catálogo de discos"
git branch -M main
git remote add origin https://github.com/seu-usuario/seu-repo.git
git push -u origin main
```

Quem clonar o projeto deve rodar `cp .env.example .env` e preencher suas próprias credenciais antes de usar.

> ⚠️ Se você já deu commit/push do `.env` ou de um `db.php` com senha real em algum momento, apenas apagar o arquivo não é suficiente — a senha continua no histórico do Git. Troque a senha do banco e considere limpar o histórico com `git filter-repo`.

## 🛠️ Possíveis melhorias futuras

- Autenticação de usuário (login/logout)
- Upload de capa do álbum
- Paginação da listagem
- Filtro avançado por gênero/ano usando `SELECT` dinâmico
- API REST (JSON) para consumo por front-end separado (React, Vue, etc.)
