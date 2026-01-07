// ==============================
// Google Analytics (carga bajo interacción)
// ==============================
function cargarAnalytics() {
	if (window.gtagLoaded) return;
	window.gtagLoaded = true;

	// Crear script de GA
	const script = document.createElement("script");
	script.src = "https://www.googletagmanager.com/gtag/js?id=G-613K0N2Q3W";
	script.async = true;
	document.body.appendChild(script);

	// Inicializar dataLayer
	window.dataLayer = window.dataLayer || [];
	window.gtag = function () {
		dataLayer.push(arguments);
	};

	gtag("js", new Date());
	gtag("config", "G-613K0N2Q3W");
}

// Cargar GA al primer scroll o click
window.addEventListener("scroll", cargarAnalytics, { once: true });
window.addEventListener("click", cargarAnalytics, { once: true });

// ==============================
// Google Maps (clic sobre contenedor)
// ==============================
const mapContainer = document.getElementById("map-container");

mapContainer.addEventListener("click", function () {
	const iframe = document.createElement("iframe");
	iframe.src =
		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7289470510786!2d-58.83331098591055!3d-27.477696682887526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456c783f70041d%3A0xd24a2d1dada87c4f!2sGestor%C3%ADa+Quatro!5e0!3m2!1ses-419!2sar!4v1551667383208";
	iframe.width = "100%";
	iframe.height = "400";
	iframe.style.border = "0";
	iframe.allowFullscreen = true;
	iframe.loading = "lazy";
	iframe.referrerPolicy = "no-referrer-when-downgrade";

	mapContainer.innerHTML = "";
	mapContainer.appendChild(iframe);
});
