const SECTION_BY_PATH = {
    "/quienes-somos": "quienes-somos",
    "/equipo": "equipo",
    "/contacto": "contacto"
};

function scrollToSectionId(id) {
    const el = document.getElementById(id);
    if (!el) return;

    // Si tenés header fijo, poné su selector acá:
    const header = document.querySelector('.site-header');
    const offset = header ? header.offsetHeight : 0;

    const y = el.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({
        top: y,
        behavior: "auto"
    }); // o "smooth" si querés animación
}

document.addEventListener("DOMContentLoaded", () => {
    const path = (location.pathname || "/").replace(/\/+$/, ""); // sin barra final
    const id = SECTION_BY_PATH[path];
    if (id) {
        // Scrollea SIN agregar # a la URL
        scrollToSectionId(id);
        // Asegurá que la URL quede limpia exactamente en ese path
        history.replaceState(null, "", path);
    }
});