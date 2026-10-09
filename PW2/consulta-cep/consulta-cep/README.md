# 📮 Consulta de CEP

Aplicação web em **HTML, CSS e JavaScript** que consulta a API pública **[ViaCEP](https://viacep.com.br)**, recebe os dados em **JSON**, processa e apresenta o endereço de forma dinâmica, sem recarregar a página.

> Atividade: consumo de API pública (requisição HTTP → JSON → exibição).

## Como funciona

1. O usuário informa um CEP (ex.: `01001-000`) e clica em **Consultar**.
2. O JavaScript faz uma requisição `GET` com `fetch()`:
   ```
   https://viacep.com.br/ws/01001000/json/
   ```
3. A API devolve um JSON; `resposta.json()` o converte em objeto JavaScript.
4. Os dados são exibidos na página:

   ```
   CEP: 01001-000
   Logradouro: Praça da Sé
   Bairro: Sé
   Cidade: São Paulo
   Estado: SP — São Paulo
   ```

   Também são mostrados complemento, região, DDD e código IBGE.


## Detalhes do projeto

- Máscara automática no campo (`00000-000`) e aceita apenas números
- Validação: o CEP precisa ter 8 dígitos
- CEP inexistente: a ViaCEP responde `{"erro": true}`, e o sistema mostra mensagem amigável
- Falha de rede ou erro da API tratados com `try/catch`
- Botão desabilitado durante a consulta
- Textos escapados antes de entrar no HTML (proteção contra XSS)

## Estrutura

```
consulta-cep/
├── index.html         # estrutura da página (formulário e área de resultados)
├── assets/
│   ├── script.js      # requisição à API e exibição dos dados
│   └── style.css      # estilos (responsivo)
└── README.md
```

## Como executar

Baixe o projeto e abra o `index.html` no navegador. Não precisa instalar nada.

```
Acesse <http://localhost:8000>. Também pode ser publicado de graça com **GitHub Pages**.

## Tecnologias

HTML5 · CSS3 · JavaScript (fetch / async-await) · JSON · API ViaCEP

## Autor

caio Novaes Dos Santos
