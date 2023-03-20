// navbar scroll fixed on top
$(function () {
    $(window).scroll(function () {

        const navbar = $('.navbar-block')
        const navbarHeight = $('.navbar-block').outerHeight()

        if ($(window).scrollTop() >= navbarHeight / 4) {
            navbar.css({ "transform": "scale(1.02)", "transition": "0.35s all ease-in" })
        } else {
            navbar.css({ "transform": "scale(1)", "transition": "0.35s all ease-in" })
        }
    })
})

//Back to top with smoothly scroll
$(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn()
        } else {
            $('#back-to-top').fadeOut()
        }
    })
    $('#back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 300);
        return false;
    })
})

//Click menu navbar, then add item--active class
$(function () {

    $('.navbar-category .nav-item').click(function () {
        //remove old active class
        const oldActive = $('.navbar-category .nav-item .nav-link.item--active')
        oldActive.removeClass('item--active')

        //add class active when click
        $(this).children('.nav-link').addClass('item--active')
    })
})


// Click menu popular, product jump to it and focus
$(function () {
    let popPosition = $('#recommend-products').offset().top
    let proPosition = $('#main-products').offset().top
    let navHeight = $('.navbar-block').height()

    $('.nav-item.navbar-pop').click(() => {
        $('html, body').animate({
            scrollTop: popPosition - navHeight
        }, 400);
    })

    // $('.nav-item.navbar-pro').click(() => {
    //     $('html, body').animate({
    //         scrollTop: proPosition - navHeight
    //     }, 400);
    // })
})


//Click heart add active class
$(function () {
    $('.recommend-heart').on('click', function (e) {
        e.preventDefault()
        $(this).hasClass('heart-active') ? $(this).removeClass('heart-active') : $(this).addClass('heart-active')

    })
})


//Click product button, fly to cart
let count = 0;

$('.cart-btn').on('click', function (e) {
    e.preventDefault()

    let cart = $('.menu-cart');
    // find the img of that card which button is clicked by user
    let imgtodrag = $(this).parent().parent().parent().find("img").eq(0);

    if (imgtodrag) {
        //duplicate the img
        var imgclone = imgtodrag.clone().offset({
            top: imgtodrag.offset().top + 50,
            left: imgtodrag.offset().left + 50
        }).css({
            'opacity': '0.8',
            'position': 'absolute',
            'height': '150px',
            'width': '150px',
            'border-radius': '5px',
            'z-index': '10000'
        }).appendTo($('body')).animate({
            'top': cart.offset().top + 10,
            'left': cart.offset().left + 5,
            'width': '40px',
            'height': '40px'
        }, 1000, 'easeInOutExpo');

        setTimeout(function () {
            count++;
            $(".menu-cart span.item-count").text(count);
        }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function () {
            $(this).detach()
        });
    }
});










