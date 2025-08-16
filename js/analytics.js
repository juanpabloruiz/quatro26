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