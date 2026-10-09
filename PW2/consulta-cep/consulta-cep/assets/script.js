const API_BASE = 'https://viacep.com.br/ws';

const formulario = document.getElementById('formulario');
const campo = document.getElementById('cep');
const botao = document.getElementById('botao');
const areaResultados = document.getElementById('resultados');

function esc(texto) {
    const div = document.createElement('div');
    div.textContent = texto ?? '';
    return div.innerHTML;
}
campo.addEventListener('input', () => {
    const n = campo.value.replace(/\D/g, '').slice(0, 8);
    campo.value = n.length > 5 ? `${n.slice(0, 5)}-${n.slice(5)}` : n;
});


async function consultarCep(cep) {
    const resposta = await fetch(`${API_BASE}/${cep}/json/`);

    if (resposta.status === 400) return null; 
    if (!resposta.ok) throw new Error(`A API respondeu com o código HTTP ${resposta.status}.`);

    const dados = await resposta.json(); 

    if (dados.erro) return null;
    return dados;
}

function criarResultado(d) {
    const campos = [
        ['CEP', d.cep],
        ['Logradouro', d.logradouro],
        ['Complemento', d.complemento],
        ['Bairro', d.bairro],
        ['Cidade', d.localidade],
        ['Estado', d.uf ? `${d.uf}${d.estado ? ' — ' + d.estado : ''}` : ''],
        ['Região', d.regiao],
        ['DDD', d.ddd],
        ['Código IBGE', d.ibge],
    ];

    const itens = campos
        .map(([nome, valor]) =>
            `<div><dt>${nome}</dt><dd>${esc(valor || '—')}</dd></div>`)
        .join('');

    return `
    <article class="endereco">
        <h2>${esc(d.logradouro || 'Endereço sem logradouro')}</h2>
        <p class="endereco__cidade">${esc([d.bairro, d.localidade, d.uf].filter(Boolean).join(' · '))}</p>
        <dl class="dados">${itens}</dl>
    </article>`;
}

function mostrarMensagem(texto, tipo = '') {
    areaResultados.innerHTML = `<p class="mensagem ${tipo ? 'mensagem--' + tipo : ''}">${esc(texto)}</p>`;
}

formulario.addEventListener('submit', async (evento) => {
    evento.preventDefault(); // não recarrega a página

    const cep = campo.value.replace(/\D/g, '');

    if (cep.length !== 8) {
        mostrarMensagem('O CEP deve ter 8 números. Exemplo: 01001-000.', 'aviso');
        return;
    }

    botao.disabled = true;
    botao.textContent = 'Consultando...';
    mostrarMensagem('Buscando endereço...', 'vazio');

    try {
        const dados = await consultarCep(cep);

        if (!dados) {
            mostrarMensagem(`CEP ${campo.value} não encontrado. Confira os números e tente novamente.`);
            return;
        }
        areaResultados.innerHTML = criarResultado(dados);
    } catch (erro) {
        console.error(erro);
        const detalhe = erro instanceof TypeError
            ? 'Falha de conexão. Verifique sua internet ou se algum bloqueador está barrando o site.'
            : erro.message;
        mostrarMensagem(`Não foi possível consultar a API: ${detalhe}`, 'erro');
    } finally {
        botao.disabled = false;
        botao.textContent = 'Consultar';
    }
});
