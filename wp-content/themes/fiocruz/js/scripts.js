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
    console.log(document.getElementById('pagina').className)
    console.log(document.getElementById('pagina'))
    
    if(document.getElementById('pagina').className == "dark-mode"){
        document.getElementById('pagina').className = "light-mode";
    } else {    
        document.getElementById('pagina').className = "dark-mode";
    }
}

