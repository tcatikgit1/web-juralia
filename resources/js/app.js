require('./bootstrap');

function openArea(evt) {
    const id = evt.currentTarget.getAttribute("data-bloque");
    document.getElementById('info-area-' + id).classList.add("mostrado");
    document.getElementById('exp-info' + id).classList.add("mostrado");
    document.getElementById('btn-bloque-' + id).classList.add("oculto");

    document.getElementById('area-' + id).classList.add("mostrado");
    document.getElementById('area-' + (id == 1 ? 2 : 1)).classList.add("oculto");
}

function closeArea(evt) {
    const id = evt.currentTarget.getAttribute("data-bloque");
    document.getElementById('info-area-' + id).classList.remove("mostrado");
    document.getElementById('exp-info' + id).classList.remove("mostrado");
    document.getElementById('btn-bloque-' + id).classList.remove("oculto");

    document.getElementById('area-' + id).classList.remove("mostrado");
    document.getElementById('area-' + (id == 1 ? 2 : 1)).classList.remove("oculto");
}

// Controlar los modales
function addEventsArea() {
    var elements = document.getElementsByClassName("btn-bloque");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", openArea);
    }
    elements = document.getElementsByClassName("btn-bloque-close");
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", closeArea);
    }
}

function clickBtnAbout() {
    var element = document.getElementById("btn-about");
    if (element.getAttribute('data-status') == 'open') {
        document.getElementById('about-info').style["height"] = '0';
        document.getElementById('about-info').style["margin-top"] = '0';
        element.setAttribute('data-status', 'close');
    } else {
        document.getElementById('about-info').style["height"] = '250px';
        document.getElementById('about-info').style["margin-top"] = '4rem';
        element.setAttribute('data-status', 'open');
    }
}

// Controlar los modales
function addEventsAbout() {
    var element = document.getElementById("btn-about");
    element.addEventListener("click", clickBtnAbout);
}

//Add event from js the keep the marup clean
function init() {
    addEventsArea();
    addEventsAbout();
}

const alturaAboutInfo = document.getElementById('about-info').offsetHeight;
document.getElementById("about-info").style["height"] = '0';

//Prevent the function to run before the document is loaded
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        init();
    }
});
