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
