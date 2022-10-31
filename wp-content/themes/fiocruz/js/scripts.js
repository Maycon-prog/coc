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

function verificadorDeTeclas(){
    if(event.key == '2') {
        document.getElementById("menu-item-19").focus();
    } else {
        alert("deu ruim");
    }
}

