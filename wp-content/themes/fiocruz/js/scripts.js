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

document.addEventListener('keyup', (event) => {
    var name = event.key;
    if (name === '2') {
      alert('2 foi pressionado');
    }
  }, false);

