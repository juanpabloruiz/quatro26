<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Quatro</title>

    <!-- Estilo -->
    <link rel="preload" href="style.css" as="style">
    <link rel="stylesheet" href="style.css">

    <!-- Meta tags Google -->
    <meta name="description" content="Servicios profesionales en la Provincia de Corrientes. Asesoramiento jurídico, notarial y contable. Especialistas en el Régimen Jurídico de Automotores y sus derivados.">
    <meta name="keywords" content="Corrientes, Registro, Automotor, Propiedad, Inmueble, Catastro, Municipalidades, IPS, AnSeS, Trámites">
    <meta name="robots" content="index, follow">
    <meta name="language" content="es_ES">
    <meta name="author" content="Juan Guillermo Ruiz">
    <meta name="theme-color" content="#ffffff">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://estudioquatro.com/iconos/ms-icon-144x144.png">

    <!--- Íconos -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://estudioquatro.com/iconos/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://estudioquatro.com/iconos/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://estudioquatro.com/iconos/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://estudioquatro.com/iconos/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://estudioquatro.com/iconos/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://estudioquatro.com/iconos/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://estudioquatro.com/iconos/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://estudioquatro.com/iconos/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://estudioquatro.com/iconos/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://estudioquatro.com/iconos/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://estudioquatro.com/iconos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://estudioquatro.com/iconos/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://estudioquatro.com/iconos/favicon-16x16.png">
    <link rel="manifest" href="https://estudioquatro.com/iconos/manifest.json">
    <?php
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = rtrim($path, '/');
    $valid = ['/quienes-somos', '/equipo', '/contacto', ''];
    $canon = in_array($path, $valid) ? $path : '';
    ?>
    <link rel="canonical" href="https://estudioquatro.com<?= $canon ?: '/' ?>">

    <!-- Open Graph para WhatsApp, Facebook, Telegram -->
    <meta property="og:title" content="Estudio Quatro">
    <meta property="og:locale" content="es_LA">
    <meta property="og:description" content="Servicios profesionales en la Provincia de Corrientes. Asesoramiento jurídico, notarial y contable. Especialistas en el Régimen Jurídico de Automotores y sus derivados.">
    <meta property="og:url" content="https://estudioquatro.com">
    <meta property="og:type" content="business.business">
    <meta property="og:image" content="https://estudioquatro.com/img/logo.png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">

    <!-- Twitter Card (opcional, también funciona en WhatsApp) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Estudio Quatro">
    <meta name="twitter:description" content="Estudio Quatro: especialistas en X. Visitanos y conoce nuestros servicios.">
    <meta name="twitter:image" content="https://estudioquatro.com/img/logo.png">
</head>

<body>

    <!-- Cabecera -->
    <header>
        <a href="../">
            <picture>
                <source srcset="img/logo.webp" type="image/webp" />
                <img src="img/logo.png" fetchpriority=high width="441" height="136" alt="Logotipo" />
            </picture>
        </a>
    </header>

    <!-- Equipo -->
    <div class="contenedor fila" id="equipo">
        <div class="columna">
            <picture>
                <source srcset="img/juan.webp" type="image/webp">
                <img src="img/juan.jpg" fetchpriority=high width="525" height="525" alt="Juan Guillermo Ruiz">
            </picture>
            <h2>Juan Guillermo Ruiz</h2>
            <p>Abogado - Mediador</p>
            <p>Especialista en Régimen Jurídico del Automotor y Relaciones de Familia</p>
            <p>jgr3400@gmail.com</p>
            <p>3794629166</p>
        </div>

        <div class="columna">
            <picture>
                <source srcset="img/transito.webp" type="image/webp">
                <img src="img/transito.jpg" fetchpriority=high width="525" height="525" alt="Tránsito Salvador Martínez">
            </picture>
            <h2>Tránsito Salvador Martínez</h2>
            <p>Abogado - Mediador</p>
            <p>Especialista en Derecho Laboral y Derecho Penal</p>
            <p>trasito412@gmail.com</p>
            <p>3794662013</p>
        </div>
    </div>


    <!-- Nosotros -->
    <div class="somos" id="quienes-somos">
        <section class="contenedor">
            <h2>Quiénes somos</h2>
            <p>Somos un equipo de profesionales apasionados por nuestra actividad, que buscamos mejorar día a día como personas y que tenemos un objetivo en común, brindar servicios en forma eficaz y rápida, adaptados a las necesidades de cada cliente ofreciendo confianza, calidad e integridad.</p>
            <p>Proveemos asesoramiento y servicios jurídicos. Especialistas en el Régimen Jurídico de Automotores y relaciones de familia. Derecho penal y Laboral.</p>
            <p>Nuestro alcance comprende principalmente la Ciudad de Corrientes y ciudades vecinas, pero también en forma online o presencial tenemos cobertura en todo la República Argentina.</p>
        </section>
    </div>

    <!-- Mapa -->
    <section class="contenedor" id="contacto">
        <h2>Ubicación en Google Maps</h2>
        <a target="_BLANK" href="https://www.google.com.ar/search?sxsrf=ACYBGNQDnuW-Kry7m1tnKC4DdZxXvFFy2A%3A1571524101231&source=hp&ei=BY6rXcuIDJO95OUP6-6YKA&q=estudio+quatro&oq=estudio+quatro&gs_l=psy-ab.3..35i39j0i22i30j0i22i10i30j38.1557.4302..4748...0.0..0.98.1301.14......0....1..gws-wiz.......0j0i131j0i67j0i20i263j0i10.ph4UaGhHjag&ved=0ahUKEwiLn7u-r6nlAhWTHrkGHWs3BgUQ4dUDCAY&uact=5#lrd=0x94456c783f70041d:0xd24a2d1dada87c4f,1,,,">Reseñas de nuestros clientes</a>
        <div id="map-container" style="margin-top:1rem;width:100%; height:400px; position:relative; cursor:pointer;">
            <picture>
                <source srcset="img/mapa.webp" type="image/webp">
                <img src="img/mapa.jpg" fetchpriority=high alt="Mapa de Estudio Quatro" style="width:100%; height:400px; object-fit:cover; display:block;">
            </picture>
            <!-- Texto opcional sobre la imagen -->
            <div style="position:absolute;top:0;left:0;width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:black;font-weight:bold;">
                Haz clic para ver el mapa
            </div>
        </div>
    </section>

    <!-- Pie -->
    <footer>
        <small>Seguinos en redes sociales</small>
        <br>
        <a href="https://www.facebook.com/EstudioQuatroo/" target="_BLANK">Facebook</a>
        <a href="https://www.instagram.com/estudio_quatro/" target="_BLANK">Instagram</a>
        <br>
        La Rioja 736 1er Piso Oficina 3<br>
        CP W3400 - Corrientes - Argentina
    </footer>

    <script>
        const mapContainer = document.getElementById("map-container");
        mapContainer.addEventListener("click", function() {
            // Crear iframe interactivo
            const iframe = document.createElement("iframe");
            iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7289470510786!2d-58.83331098591055!3d-27.477696682887526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456c783f70041d%3A0xd24a2d1dada87c4f!2sGestor%C3%ADa+Quatro!5e0!3m2!1ses-419!2sar!4v1551667383208";
            iframe.width = "100%";
            iframe.height = "400";
            iframe.style.border = "0";
            iframe.allowFullscreen = true;
            iframe.loading = "lazy";
            iframe.referrerPolicy = "no-referrer-when-downgrade";

            // Reemplazar imagen con iframe
            mapContainer.innerHTML = "";
            mapContainer.appendChild(iframe);
        });
    </script>

    <!-- Lazy load de Google Analytics -->
    <script>
        function cargarAnalytics() {
            if (window.gtagLoaded) return;
            window.gtagLoaded = true;

            var script = document.createElement('script');
            script.src = "https://www.googletagmanager.com/gtag/js?id=G-613K0N2Q3W";
            script.async = true;
            document.body.appendChild(script);

            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            window.gtag = gtag;
            gtag('js', new Date());
            gtag('config', 'G-613K0N2Q3W');
        }

        window.addEventListener('scroll', cargarAnalytics, {
            once: true
        });
        window.addEventListener('click', cargarAnalytics, {
            once: true
        });
    </script>

    <!-- Sitemap -->
    <script>
        // Mapa ruta → id de la sección
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
    </script>




</body>

</html>