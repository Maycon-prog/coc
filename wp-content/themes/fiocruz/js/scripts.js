function button_menu(action){
    switch (action) {
        case 'open':
            document.getElementById('menu-mobile').style.display = 'block';
            document.getElementById('menu-desktop').style.display = 'none';   
        break;
        case 'close':
            document.getElementById('menu-mobile').style.display = 'none';
            document.getElementById('menu-desktop').style.display = 'block'; 
        break;
        default: alert("Informe o action");
    }
}
function font_size(escala){
    switch (escala) {
        case 'sub':
            body.style.zoom = parseFloat(body.style.zoom) - 0.1 ;
        break;
        case 'normal':
            body.style.zoom = 1.0 ;
        break;
        case 'soma':
            body.style.zoom = parseFloat(body.style.zoom) + 0.1 ;
        break;
        default: alert("Informe a Escala");
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var elms = document.getElementsByClassName('splide');

    for (var i = 0; i < elms.length; i++) {
        new Splide(elms[i], {
            classes:{
                prev: 'splide__arrow--prev prev',
                next: 'splide__arrow--next next'
            }
        }).mount();
    }
});

function contraste() {
    if(document.getElementsById('pagina').className == "dark-mode"){
        document.getElementsById('pagina').className = "light-mode";
    } else {    
        document.getElementsById('pagina').className = "dark-mode";
    }
}

