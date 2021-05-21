// Navbar Toggle for mobile
// let navbarToggle = document.querySelector('.navbar-burger');
// let navbarMenu = document.querySelector('.navbar-menu');

// navbarToggle.addEventListener('click', () => {
//     navbarToggle.classList.toggle('is-active');
//     navbarMenu.classList.toggle('is-active');
// });




// Carousel header
$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 0,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


$(document).ready(function () {
    // For Navbar
    $('.navbar-burger').on('click', function () {
        $('.navbar-cs-menu').slideToggle('active');

        if ($(this).hasClass('is-active')) {
            $(this).removeClass("is-active");
        } else {
            $(this).addClass("is-active")
        }
    });
    // for products
    $('.has-cs-dropdown').on('click', function (e) {
        e.stopPropagation();
        $('.dropdown-menu').slideToggle('active');
        
        if ($('.arrow').hasClass('arrow-up')) {
            $('.arrow').removeClass('arrow-up');
        } else {
            $('.arrow').addClass('arrow-up');
        }
    });
});






// For According menu on q-and-a.php 
const accordion = document.getElementsByClassName('content-box');

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}

