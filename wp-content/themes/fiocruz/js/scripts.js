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

