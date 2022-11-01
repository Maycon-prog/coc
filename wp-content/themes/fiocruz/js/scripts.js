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
    if(document.getElementById('pagina').className.includes("dark-mode")){
        document.getElementById('pagina').classList.remove("dark-mode");
        document.getElementById('pagina').classList.add("light-mode");
    } else {    
        document.getElementById('pagina').classList.add("dark-mode");
        document.getElementById('pagina').classList.remove("light-mode");
    }
}

function tamanhoFont(tamanho) {
    if(tamanho == 'normal') {
        document.getElementById('pagina').classList.remove("diminuiu");
        document.getElementById('pagina').classList.remove("aumentou");
    } else if(tamanho == 'sub') {
        document.getElementById('pagina').classList.add("diminuiu");
        document.getElementById('pagina').classList.remove("aumentou");
    } else {
        document.getElementById('pagina').classList.add("aumentou");
        document.getElementById('pagina').classList.remove("diminuiu");
    }
}

