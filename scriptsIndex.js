const nav = document.querySelector("#navegador");
const abrir = document.querySelector("#menu");
const cerrar = document.querySelector("#cierre");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})