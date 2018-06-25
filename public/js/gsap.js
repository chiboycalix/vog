$(document).ready(function() {
    $('#vogbtn').click(function(e) {
        e.preventDefault();


    });
    TweenMax.to(".myclass", 5, { scale: 1.34, ease: Bounce.easeOut });

    TweenMax.from('img#gsap-img', 5, { scale: 0.5, opacity: 0.5, ease: Bounce.easeOut, onComplete: complete });

    function complete() {

        TweenMax.to('a#vogbtn', 1, { scale: 1.4 });
        TweenMax.to('a#cat', 1, { x: 5, y: 2 });
    }

});




//Tween for categories

$('.modal-body a img.myclass1').mouseover(function() {
    TweenMax.to('.modal-body img[src] ', 1, { scale: 1.2, x: 2, y: 2, rotation: 10, ease: Power4.easeOut });
    TweenMax.to('.modal-body p', 1, { scale: 1.2, x: 2, y: 2, rotation: 10 });
    $('.modal-body p').css({
        'color': 'green'
    });
    $('.modal-body img.myclass1').css({
        'color': 'green'
    });
});


$('.modal-body a img.myclass1').mouseout(function() {
    TweenMax.to('.modal-body  img[src] ', 1, { scale: 1, x: 2, y: 2, rotation: 0 });
    TweenMax.to('.modal-body  p', 2, { scale: 1, x: 2, y: 2, rotation: 0 });
    $('.modal-body p').css({
        'color': '#d0ac04'
    });
    $('.modal-body img.myclass1').css({
        'color': '#d0ac04'
    });
});