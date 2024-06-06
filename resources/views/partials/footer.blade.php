<footer id="footer" class="row mx-0 lazy-img" data-src="/images/pages/footer.jpg" data-lazytype="bg">
    <div class="filtro"></div>

    <div class="col-12 col-md-4 col-xl-2 mb-3 d-flex justify-content-center align-items-start">
        <img class="logo lazy-img" data-src='/images/logos/logo-juralia-blanco.png' alt="logo juralia"/>
    </div>
    <div class="col-12 col-md-4 col-xl-2 mb-3 d-flex flex-column alig-items-center justify-content-start">
        <a @if(Route::current()->uri == "/") href="#header" @else href="/#header" @endif>Inicio</a>
        <a @if(Route::current()->uri == "/") href="#about" @else href="/#about" @endif>Nosotros</a>
        <a @if(Route::current()->uri == "/") href="#areas" @else href="/#areas" @endif>Servicios</a>
        <a @if(Route::current()->uri == "/") href="#footer" @else href="/#footer" @endif>Contacto</a>
    </div>
    <div class="col-12 col-md-4 col-xl-2 mb-3 d-flex flex-column alig-items-center justify-content-start">
        <a href="/cookies">Política de cookies</a>
        <a href="/privacidad">Política de privacidad</a>
    </div>
    <div class="col-12 col-md-4 col-xl-2 mb-3 d-flex flex-column alig-items-center justify-content-start">
        <span>+34 664 394 175</span>
        <span>info@juralia.es</span>
    </div>
    <div class="col-12 col-md-4 col-xl-2 mb-3 d-flex flex-column alig-items-center justify-content-start">
        <span>Calle Sao Paulo, 17 Planta 1ª Oficina 7</span>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14072.080909764722!2d-15.433738518187273!3d28.145872421795396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4095082a5fbcbb%3A0x173c4ab620e9ac5!2sJURALIA%20Las%20Palmas!5e0!3m2!1ses!2ses!4v1622043719935!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="col-12 d-flex justify-content-center">
        <a rel=noreferrer target="_blank" href="http://lemontik.com/">Powered by Lemontik🍋</a>
    </div>
</footer>