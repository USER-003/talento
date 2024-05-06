(function ($) {
    "use strict";

    $(document).ready(function() {
        console.log("El documento está listo.");

        var topbarHeight = $('.topbar').outerHeight(); // Obtén la altura de la barra superior
        console.log("Altura de la topbar:", topbarHeight);

        $(window).scroll(function() {
            console.log("Desplazamiento detectado.");

            if ($(this).scrollTop() > topbarHeight) {
                console.log("Desplazamiento más allá de la topbar. Agregando clase fixed-top.");
                $('.navbar-expand-lg').addClass('fixed-top'); // Agrega la clase fixed-top cuando el usuario desplaza más allá de la barra superior
            } else {
                console.log("Desplazamiento hacia arriba. Eliminando clase fixed-top.");
                $('.navbar-expand-lg').removeClass('fixed-top'); // Elimina la clase fixed-top cuando el usuario se desplaza hacia arriba
            }
        });
    });



    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

})(jQuery);

