// Recuperar tema salvo
const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
    document.documentElement.classList.add("dark");
}

// Botão
const toggle = document.getElementById("theme-toggle");

toggle.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");

    // Salvar preferencia
    if (document.documentElement.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});
