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
    if(document.getElementById('pagina').className == "dark-mode"){
        document.getElementById('pagina').className = "light-mode";
    } else {    
        document.getElementById('pagina').className = "dark-mode";
    }
}

function tamanhoFont(tamanho) {
    if(tamanho == 'normal') {
        document.getElementById('pagina').className = "";
    } else if(tamanho == 'sub') {
        document.getElementById('pagina').className = "diminuiu";
    } else {
        document.getElementById('pagina').className = "aumentou";
    }
}

