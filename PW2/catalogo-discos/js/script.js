document.addEventListener('DOMContentLoaded', function () {

    // ==========================================
    // 1. Busca/filtro em tempo real na listagem
    // ==========================================
    const campoBusca = document.getElementById('campo-busca');
    if (campoBusca) {
        campoBusca.addEventListener('keyup', function () {
            const termo = campoBusca.value.toLowerCase();
            const linhas = document.querySelectorAll('#tabela-discos tbody tr');
            let visiveis = 0;

            linhas.forEach(function (linha) {
                const texto = linha.innerText.toLowerCase();
                const corresponde = texto.includes(termo);
                linha.style.display = corresponde ? '' : 'none';
                if (corresponde) visiveis++;
            });

            const msgVazio = document.getElementById('msg-vazio-busca');
            if (msgVazio) {
                msgVazio.style.display = visiveis === 0 ? 'block' : 'none';
            }
        });
    }

    // ==========================================
    // 2. Modal de confirmação de exclusão
    // ==========================================
    const modal = document.getElementById('modal-confirmar');
    const linkConfirmar = document.getElementById('link-confirmar-exclusao');
    let botoesExcluir = document.querySelectorAll('#tabela-discos .btn-excluir');

    botoesExcluir.forEach(function (botao) {
        botao.addEventListener('click', function (e) {
            e.preventDefault();
            const id = botao.getAttribute('data-id');
            const titulo = botao.getAttribute('data-titulo');

            document.getElementById('modal-titulo-item').textContent = titulo;
            linkConfirmar.href = 'delete.php?id=' + id;
            modal.classList.add('ativo');
        });
    });

    const btnCancelar = document.getElementById('btn-cancelar-modal');
    if (btnCancelar) {
        btnCancelar.addEventListener('click', function () {
            modal.classList.remove('ativo');
        });
    }

    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('ativo');
            }
        });
    }

    // ==========================================
    // 3. Validação de formulário (criar/editar)
    // ==========================================
    const formDisco = document.getElementById('form-disco');
    if (formDisco) {
        formDisco.addEventListener('submit', function (e) {
            let valido = true;
            const anoAtual = new Date().getFullYear();

            const campos = [
                { id: 'titulo', mensagem: 'Informe o título do álbum/música.' },
                { id: 'artista', mensagem: 'Informe o nome do artista.' },
                { id: 'genero', mensagem: 'Informe o gênero musical.' }
            ];

            campos.forEach(function (campo) {
                const input = document.getElementById(campo.id);
                const erroEl = document.getElementById('erro-' + campo.id);
                if (!input.value.trim()) {
                    erroEl.textContent = campo.mensagem;
                    erroEl.style.display = 'block';
                    input.classList.add('input-invalido');
                    valido = false;
                } else {
                    erroEl.style.display = 'none';
                    input.classList.remove('input-invalido');
                }
            });

            const ano = document.getElementById('ano_lancamento');
            const erroAno = document.getElementById('erro-ano_lancamento');
            const valorAno = parseInt(ano.value, 10);

            if (!ano.value || isNaN(valorAno) || valorAno < 1900 || valorAno > anoAtual + 1) {
                erroAno.textContent = `Informe um ano válido (1900 a ${anoAtual + 1}).`;
                erroAno.style.display = 'block';
                valido = false;
            } else {
                erroAno.style.display = 'none';
            }

            if (!valido) {
                e.preventDefault();
            }
        });
    }
});
