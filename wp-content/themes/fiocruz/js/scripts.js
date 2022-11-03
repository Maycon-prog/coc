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

document.addEventListener('DOMContentLoaded', function () {
    if(sessionStorage.getItem('tema') == 'escuro') {
        document.getElementById('pagina').classList.add("dark-mode");
    }

    if(sessionStorage.getItem('fonte') == 'aumentada') {
        document.getElementById('pagina').classList.add("aumentou");
        document.getElementById('pagina').classList.remove("diminuiu");
    } else if(sessionStorage.getItem('fonte') == 'diminuida') {
        document.getElementById('pagina').classList.add("diminuiu");
        document.getElementById('pagina').classList.remove("aumentou");
    } else {
        document.getElementById('pagina').classList.remove("aumentou");
        document.getElementById('pagina').classList.remove("diminuiu");
    }
});

function contraste() {   
    if(document.getElementById('pagina').className.includes("dark-mode")){
        document.getElementById('pagina').classList.remove("dark-mode");
        document.getElementById('pagina').classList.add("light-mode");
        sessionStorage.removeItem('tema');
    } else {    
        document.getElementById('pagina').classList.add("dark-mode");
        document.getElementById('pagina').classList.remove("light-mode");
        sessionStorage.setItem('tema', 'escuro');
    }
}

function tamanhoFont(tamanho) {
    if(tamanho == 'normal') {
        document.getElementById('pagina').classList.remove("diminuiu");
        document.getElementById('pagina').classList.remove("aumentou");
        sessionStorage.removeItem('fonte');
        
    } else if(tamanho == 'sub') {
        document.getElementById('pagina').classList.add("diminuiu");
        document.getElementById('pagina').classList.remove("aumentou");
        sessionStorage.setItem('fonte', 'diminuida');
        
    } else {
        document.getElementById('pagina').classList.add("aumentou");
        document.getElementById('pagina').classList.remove("diminuiu");
        sessionStorage.setItem('fonte', 'aumentada');
    }
}

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
