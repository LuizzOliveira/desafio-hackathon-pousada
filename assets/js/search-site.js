document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('search-form');
    const input = document.getElementById('site-search');
    const resultsBox = document.getElementById('search-results');

    if (!form || !input || !resultsBox) {
        console.warn('Search: elementos não encontrados.');
        return;
    }

    // Ocultar inicialmente
    resultsBox.style.display = "none";

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        doSearch(input.value);
    });

    // Busca com debounce ao digitar
    let debounceTimer;
    input.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => doSearch(input.value), 300);
    });

    // ➤ Fechar ao clicar fora da caixa OU fora do input
    document.addEventListener('click', (ev) => {
        const isInside =
            resultsBox.contains(ev.target) ||
            form.contains(ev.target) ||
            input.contains(ev.target);

        if (!isInside) {
            resultsBox.style.display = "none";
        }
    });

    // ➤ Fechar ao perder foco (pequeno delay para permitir clique no item)
    input.addEventListener('blur', () => {
        setTimeout(() => {
            resultsBox.style.display = "none";
        }, 200);
    });

    function doSearch(rawTerm) {
        const termo = String(rawTerm || '').toLowerCase().trim();
        resultsBox.innerHTML = '';

        if (!termo) {
            resultsBox.style.display = "none";
            return;
        }

        const elementos = document.querySelectorAll('h1, h2, h3, p, li, .card, .conteudo');
        const resultados = [];

        elementos.forEach(el => {
            const txt = (el.innerText || '').toLowerCase();
            if (txt.includes(termo)) {

                // Gerar id único caso não tenha
                if (!el.id) {
                    el.id = 'search-target-' + Math.random().toString(36).slice(2, 9);
                }

                resultados.push({
                    texto: el.innerText.trim(),
                    id: el.id,
                    snippet: getSnippet(el.innerText, termo)
                });
            }
        });

        // ➤ Remover duplicações pelo texto principal
        const textoSet = new Set();
        const resultadosUnicos = resultados.filter(r => {
            if (textoSet.has(r.texto)) return false;
            textoSet.add(r.texto);
            return true;
        });

        if (resultadosUnicos.length === 0) {
            resultsBox.style.display = "none";
            return;
        }

        // Montar resultados únicos
        resultsBox.innerHTML = resultadosUnicos.map(r => `
            <div class="item-resultado" data-target="${r.id}" role="button" tabindex="0">
                <strong>${escapeHtml(r.texto.split('\n')[0].slice(0, 120))}</strong>
            </div>
        `).join('');

        resultsBox.style.display = "block";

        // Evento de clique: scroll + highlight + fechar
        document.querySelectorAll('.item-resultado').forEach(item => {

            item.addEventListener('click', () => {
                const target = document.getElementById(item.dataset.target);

                if (target) {
                    highlightElement(target);
                    target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }

                resultsBox.style.display = "none";
                input.value = "";
            });

            item.addEventListener('keydown', (ev) => {
                if (ev.key === 'Enter' || ev.key === ' ') item.click();
            });
        });

        resultsBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function getSnippet(text, term) {
        const idx = text.toLowerCase().indexOf(term);
        if (idx === -1) return text.slice(0, 120);
        const start = Math.max(0, idx - 30);
        return text.slice(start, start + 160).replace(/\s+/g, ' ');
    }

    function highlightElement(el) {
        el.classList.add('search-highlight');
        setTimeout(() => el.classList.remove('search-highlight'), 2200);
    }

    function escapeHtml(str) {
        return str.replace(/[&<>"']/g, m => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        })[m]);
    }
});
