// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
    // We execute the same script as before
    vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

function hasClass(ele, cls) {
    return !!ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
    if (!hasClass(ele, cls)) ele.className += " " + cls;
}

function removeClass(ele, cls) {
    if (hasClass(ele, cls)) {
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        ele.className = ele.className.replace(reg, ' ');
    }
}

//The actual fuction
function toggleMenu() {
    var ele = document.getElementsByTagName('body')[0];
    if (!hasClass(ele, "menu-open")) {
        addClass(ele, "menu-open");
    } else {
        removeClass(ele, "menu-open");
    }
}

// Asignar las imágenes que sean
function loadImages(scroll_pos) {
    //Obtener todas las imágenes de carga asíncrona
    var elements = document.getElementsByClassName("lazy-img");
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];

        // Src de la imagen, que está contenida en un data
        var lazyType = element.getAttribute("data-lazytype");
        var imgSource = element.getAttribute("data-src");

        if (window.innerWidth <= 420) {
            imgSource = imgSource.replace('/images/pages/', '/images/pages/movil/').replace('/images/logos/', '/images/logos/movil/');
        }

        if (lazyType == 'bg') {
            element.style["background-image"] = `url("${imgSource}")`;
        } else {
            element.setAttribute("src", imgSource);
        }
        //element.classList.remove("lazy-img");
    }
}

function openPopup(evt) {
    var popupId = evt.currentTarget.getAttribute("data-popup");
    document.getElementById(popupId).style["z-index"] = '1060';
    document.getElementById(popupId).style["opacity"] = '1';
}

function closePopup(evt) {
    var popupId = evt.currentTarget.getAttribute("data-popup");
    document.getElementById(popupId).style["opacity"] = '0';
    setTimeout(() => {
        document.getElementById(popupId).style["z-index"] = '-1';
    }, 200);
}

// Controlar los modales
function addEventsPopups() {
    var elements = document.getElementsByClassName("popupbutton");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", openPopup);
    }
    elements = document.getElementsByClassName("close-popup");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", closePopup);
    }
}

var ticking = false;
window.addEventListener('scroll', function (e) {
    last_known_scroll_position = window.scrollY;
    if (!ticking) {
        // FUNCIONES QUE SE DESEEN INVOCAR CON EL EVENTO DEL SCROLL
        loadImages(last_known_scroll_position);
        ticking = true;
    }
});

//Add event from js the keep the marup clean
function init() {
    addEventsPopups();
    document.getElementById("open-menu").addEventListener("click", toggleMenu);
    document.getElementById("body-overlay").addEventListener("click", toggleMenu);
    var elements = document.getElementsByClassName("sidebar-link-item");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", toggleMenu);
    }
}
//Prevent the function to run before the document is loaded
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        init();
    }
});

window.onload = function () {
    // FUNCIONES QUE SE DESEEN INVOCAR CON EL EVENTO DEL SCROLL
    loadImages(0);
    ticking = true;
};