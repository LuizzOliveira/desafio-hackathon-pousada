document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('theme-toggle');
  const icon = document.getElementById('theme-icon');
  const root = document.documentElement;
  const storageKey = 'theme';

  if (!toggle) {
    console.error('theme-toggle: botão não encontrado (id="theme-toggle")');
    return;
  }
  if (!icon) {
    console.error('theme-toggle: ícone não encontrado (id="theme-icon")');
    return;
  }

  // Normaliza classes possíveis do FontAwesome (suporta fa, fas, fa-solid)
  function setIconToDark() {
    icon.classList.remove('fa-moon', 'fa-sun', 'fa-regular', 'fa-solid', 'fa', 'fas');
    // adiciona as classes mais comuns - ajuste se você usa outra convenção
    icon.classList.add('fa-solid', 'fa-moon'); // mostra lua quando o estado for dark? (você pode inverter)
    // se preferir que no modo dark mostre 'sol', troque para: icon.classList.add('fa-solid','fa-sun');
  }
  function setIconToLight() {
    icon.classList.remove('fa-moon', 'fa-sun', 'fa-regular', 'fa-solid', 'fa', 'fas');
    icon.classList.add('fa-solid', 'fa-sun');
  }

  // Inicialização: aplica tema salvo e ícone correto
  const saved = localStorage.getItem(storageKey);
  if (saved === 'dark') {
    root.classList.add('dark');
    // em dark você quer ícone de *sol* (indica trocar para claro)
    setIconToLight();
  } else if (saved === 'light') {
    root.classList.remove('dark');
    setIconToDark();
  } else {
    // sem preferência: respeita prefers-color-scheme
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (prefersDark) {
      root.classList.add('dark');
      setIconToLight();
    } else {
      root.classList.remove('dark');
      setIconToDark();
    }
  }

  // Toggle handler
  toggle.addEventListener('click', () => {
    const isNowDark = root.classList.toggle('dark');

    if (isNowDark) {
      // quando ficar dark, salvamos "dark" e mostramos ícone que sugere voltar ao claro (sol)
      localStorage.setItem(storageKey, 'dark');
      setIconToLight();
    } else {
      localStorage.setItem(storageKey, 'light');
      setIconToDark();
    }
  });
});
