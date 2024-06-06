<nav id="navbar" @if(Route::current()->uri != "/") class="no-homepage" @endif>
    <button id="open-menu" class="hamburger d-md-none" aria-label="Left Align">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
    </button>
    <div class="navbar-grey">
        <div class="navbar-row1">
            <img src="/images/logos/logo-juralia-blanco.png" class="navbar-logo" width="50%" height="10%" alt="juralia logo">
            <div class="navbar-buttons d-md-flex d-none">
                <div class="navbar-button">
                    <div class="navbar-button-ico navbar-button-ico-phone"></div>
                    <span class="navbar-button-text">828 088 388</span>
                </div>
                <div class="navbar-button">
                    <div class="navbar-button-ico navbar-button-ico-mobile"></div>
                    <span class="navbar-button-text">664 394 175</span>
                </div>
                <div class="navbar-button">
                    <div class="navbar-button-ico navbar-button-ico-mail"></div>
                    <span class="navbar-button-text">info@juralia.es</span>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-green">
        <div class="d-none d-md-block">
            <a @if(Route::current()->uri == "/") href="#header" @else href="/#header" @endif class="navbar-link">Inicio</a>
            <a @if(Route::current()->uri == "/") href="#about" @else href="/#about" @endif class="navbar-link">Nosotros</a>
            <a @if(Route::current()->uri == "/") href="#areas" @else href="/#areas" @endif class="navbar-link">Servicios</a>
            <a @if(Route::current()->uri == "/") href="#formulario" @else href="/#formulario" @endif class="navbar-link">Contacto</a>
        </div>
    </div>
</nav>

{{-- SIDEBAR --}}
<div id="body-overlay"></div>
<nav class="real-menu" role="navigation">
    <img src="/images/logos/logo-juralia.png" class="menu-logo" alt="juralia logo">
    <ul class="sidebar-links">
        <li class="sidebar-item"><a @if(Route::currentRouteName() == "/") href="#header" @else href="/#header" @endif class="sidebar-link-item">Inicio</a></li>
        <li class="sidebar-item"><a @if(Route::currentRouteName() == "/") href="#about" @else href="/#about" @endif class="sidebar-link-item">Nosotros</a></li>
        <li class="sidebar-item"><a @if(Route::currentRouteName() == "/") href="#areas" @else href="/#areas" @endif class="sidebar-link-item">Servicios</a></li>
        <li class="sidebar-item"><a @if(Route::currentRouteName() == "/") href="#formulario" @else href="/#formulario" @endif class="sidebar-link-item">Contacto</a></li>
    </ul>
    <div class="navbar-buttons flex-column position-absolute bottom-0">
        <div class="navbar-button">
            <div class="navbar-button-ico navbar-button-ico-phone"></div>
            <span class="navbar-button-text">828 088 388</span>
        </div>
        <div class="navbar-button">
            <div class="navbar-button-ico navbar-button-ico-mobile"></div>
            <span class="navbar-button-text">664 394 175</span>
        </div>
        <div class="navbar-button">
            <div class="navbar-button-ico navbar-button-ico-mail"></div>
            <span class="navbar-button-text">info@juralia.es</span>
        </div>
    </div>
</nav>
