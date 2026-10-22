# 📮 Consulta de CEP

Aplicação web em **PHP** que consulta a API pública **[ViaCEP](https://viacep.com.br)**, recebe os dados em **JSON**, processa e apresenta o endereço ao usuário.

> Atividade: consumo de API pública com PHP (requisição HTTP → JSON → exibição).

https://github.com/user-attachments/assets/9133a490-1c83-406e-9650-2987afefd7d9

## Como funciona

1. O usuário informa um CEP (ex.: `01001-000`) e clica em **Consultar**.
2. O PHP remove tudo que não for número e faz uma requisição `GET` com cURL:
   ```
   https://viacep.com.br/ws/01001000/json/
   ```
3. A API devolve um JSON; o PHP usa `json_decode()` para interpretá-lo.
4. O endereço é exibido na página:

   ```
   CEP: 01001-000
   Logradouro: Praça da Sé
   Bairro: Sé
   Cidade: São Paulo
   Estado: SP — São Paulo
   ```

   Também são mostrados complemento, região, DDD e código IBGE.

## Requisitos da atividade atendidos

- [x] Título do sistema
- [x] Formulário com campo de pesquisa
- [x] Botão de consulta
- [x] Área de apresentação dos resultados
- [x] Requisição HTTP feita pelo PHP a uma API pública
- [x] Tratamento do JSON retornado

## Tratamento de erros

- CEP com menos ou mais de 8 números → aviso ao usuário
- CEP inexistente (a ViaCEP responde `{"erro": true}`) → mensagem amigável
- Falha de conexão ou resposta inválida → mensagem de erro
- Toda saída é escapada com `htmlspecialchars()` (proteção contra XSS)

## Estrutura

```
consulta-cep/
├── index.php          # formulário, requisição à API e exibição
├── assets/style.css   # estilos (tema carta postal, responsivo)
└── README.md
```

## Como executar

Requisitos: **PHP 8.2+** com a extensão **cURL** habilitada.

```bash
git clone https://github.com/SEU-USUARIO/consulta-cep.git
cd consulta-cep
php -S localhost:8000
```

Acesse <http://localhost:8000>. Com XAMPP/WAMP, copie a pasta para `htdocs` e acesse `http://localhost/consulta-cep`.

> O PHP precisa de um servidor: abrir o `index.php` com duplo clique não funciona.

**Erro "SSL certificate problem" no Windows/XAMPP:** baixe o `cacert.pem` em curl.se/docs/caextract.html e configure `curl.cainfo` no `php.ini`.

## Tecnologias

PHP 8 · cURL · JSON · HTML5 · CSS3 · API ViaCEP

## Autor

Seu nome — curso/turma
