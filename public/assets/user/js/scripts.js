$(document).ready(function() {

    var $window = $(window);

    function setCSS() {
        // var windowHeight = $(window).innerHeight();
        var windowHeight = $(window).height();
        var windowWidth = $(window).width();

        var loginLeft = $(".login-content-left").outerHeight(true);
        var asideHeader = $(".aside-header").outerHeight(true);
        var asideFooter = $(".aside-footer").outerHeight(true);

        // var chatTopBtm = chatHead + chatFoot;
        var asideHeadFooter = asideHeader + asideFooter;
        var asideContent = windowHeight - asideHeadFooter;

        $('.login-right-img').css('height', loginLeft);
        $('.content-wrapper').css('min-height', windowHeight);
        $('.aside-contents').css('height', asideContent);
    };

    setCSS();
    $(window).on('load resize shown.bs.modal', function() {
        setCSS();
    });
});

// $('.intro-slide').slick({
//     dots: false,
//     arrows: true,
//     infinite: false,
//     speed: 500,
//     slidesToShow: 3,
//     slidesToScroll: 3,
// });

$('.intro-slide').slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('.log-loc-txt-slide').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 3500,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true
});

let target='', menu='', $target='', scrollToPos, scrollPosition, headerHeight

$(document.body).on('touchmove', windowOnScroll); // for mobile
$(window).on('scroll', windowOnScroll);
$('body').on('scroll', windowOnScroll);

function windowOnScroll() {
    var scroll = $(window).scrollTop() || $("body").scrollTop();
    var coverWidth = 210;

    if ($('.restaurant-filters').closest('.js-restaurant-filters-cover').length > 0) {
        coverWidth = $('.restaurant-filters').closest('.js-restaurant-filters-cover').width();
    }

    if (scroll >= 500) {
        $(".restaurant-filters").addClass("res-filters-fixed").css({
            width: coverWidth
        });

        $('#secondary-menu').removeClass('hidden')
    } else {
        $(".restaurant-filters").removeClass("res-filters-fixed").css({
            width: 'auto'
        });
        $('#secondary-menu').addClass('hidden')
    }

    if (scroll >= 500) {
        $(".food-filters").addClass("food-filters-fixed");
    } else {
        $(".food-filters").removeClass("food-filters-fixed");
    }

    if (scroll >= 500) {
        $(".cart").addClass("cart-fixed");
    } else {
        $(".cart").removeClass("cart-fixed");
    }

    if (scroll >= 500) {
        $(".check-cart").addClass("check-cart-fixed");
    } else {
        $(".check-cart").removeClass("check-cart-fixed");
    }
}

$(document).ready(function() {
    $(document).on("scroll", onScroll);
    $('body').on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll")
        $('body').off("scroll")

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        target = this.hash
        menu = target
        $target = $(target)

        scrollToPos = $target.offset().top + 2

        if ($(window).width() < 768) {
            scrollPosition = $(window).scrollTop() || $("body").scrollTop()
            scrollToPos = $target.offset().top + 2 + scrollPosition - 75
        }

        $('html, body, #custom-modal').stop().animate({
            'scrollTop': scrollToPos
        }, 500, 'swing', function() {
            window.location.hash = target;
            if ($(window).width() >= 768) {
                onScroll();
            }
            $(document).on("scroll", onScroll);
            $('body').on("scroll", onScroll);
        });
    });
});

let wrapperTop = 0, sidebarHeight = 0, offset = 75, elementTop = 0;

function onScroll(event) {
    var scrollPos = $(window).scrollTop() || $("body").scrollTop();
    var wrapperHeight = 0;

    if (($('.js-restaurant-wrapper').length > 0) && ($('.js-restaurant-filters-cover').length > 0)) {
        wrapperHeight = $('.js-restaurant-wrapper').height();
        wrapperTop = $('.js-restaurant-wrapper').offset().top;

        sidebarHeight = $('.restaurant-filters').height();

        if ((scrollPos + sidebarHeight) >= (wrapperHeight + wrapperTop - offset)) {
            $(".restaurant-filters").addClass('res-filters-absolute-bottom');
        } else {
            $(".restaurant-filters").removeClass('res-filters-absolute-bottom');
        }
    }

    $('.filter-scroll-menu').each(function() {

        if (($(window).width() >= 768) && ($(this).closest('.nav').length > 0)) {
            return false;
        }

        var currLink = $(this);
        var refElement = $(currLink.attr("href"));

        headerHeight = $('#secondary-menu').height()
        elementTop = refElement.offset().top;

        if ($(window).width() < 768) {
            elementTop = refElement.offset().top + scrollPos - 75;
        }

        if (elementTop <= scrollPos) {
        // if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.filter-scroll-menu').removeClass("active");
             $(this).addClass("active");

            if ($(window).width() < 768) {
                $('.js-scroll-title').html($(currLink).html())
            }
        } else {
            currLink.removeClass("active");
        }
    });

    if ((scrollPos + 10) >= ($(document).height()-$(window).height())) {
        $('.filter-scroll-menu').removeClass("active");
        $('.filter-scroll-menu:last-child').addClass("active");
    }
};

// Add Button Increase and Decrease 
$('.adds').click(function add() {
    var $rooms = $(".noOfRoom");
    var a = $rooms.val();

    a++;
    $(".subs").prop("disabled", !a);
    $rooms.val(a);
});
$(".subs").prop("disabled", !$(".noOfRoom").val());

$('.subs').click(function subst() {
    var $rooms = $(".noOfRoom");
    var b = $rooms.val();
    if (b >= 1) {
        b--;
        $rooms.val(b);
    } else {
        $(".subs").prop("disabled", true);
    }
});

// $(document).ready(function() {
//     $(".add-btn1").hide();
//     $(".add-btn").click(function() {
//         if ($('.add-btn').hasClass('active')) {
//             $('.add-btn').removeClass('active')
//             $('.add-btn1').addClass('active')
//         };
//     });
// });

$(".add-btn1").hide();
$(document).ready(function() {
    $(".add-btn").click(function() {
        console.log('hi')
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $(this).addClass('active')
        };
    });

});

$(document).ready(function() {
    $(".report-block").click(function() {
        if ($('.report-block').hasClass('active')) {
            $('.report-block').removeClass('active')
            $(this).addClass('active')
        };
    });

});

// Addon List JS
$(document).ready(function() {
    $(".hide-items").hide();
    $(".addons-hide").click(function() {
        $(".hide-items").fadeToggle()
    });
});

// Map JS
$(function() {
    /*$("#map").googleMap({
        zoom: 16, // Initial zoom level (optional)
        coords: [48.895651, 2.290569], // Map center (optional)
        type: "ROADMAP" // Map type (optional)
    });*/
    // Marker 1
    /*$("#map").addMarker({
        coords: [48.8720, 2.3316]
    });*/
});

// Delivery Address JS
$(document).ready(function() {
    $('.selected-address').hide();
    $('.check').hide();
    $('.change-link').hide();
    $(".address-box").click(function() {
        console.log();
        $('.delivery-address').fadeOut();
        $('.selected-address').fadeIn();
        $('.check').fadeIn();
        $('.change-link').fadeIn();
        $('.payment-block').addClass('active');
        $('#user_address_id').val($(this).data('id'));
        $('.payment_mode_type.cassh').trigger('click');
    });

});

$(document).ready(function() {
    $(".change-link").click(function() {
        console.log();
        $('.delivery-address').fadeIn();
        $('.selected-address').fadeOut();
        $('.check').fadeOut();
        $('.change-link').fadeOut();
        $('.payment-block').removeClass('active');
        $('#user_address_id').val('');
        $('.cardpay').prop('checked',false);
        $('.payment_mode_type').prop('checked',false);
        $('.btn_checkout').prop('disabled',true);
    });
});

// Edit Profile JS
$(document).ready(function() {
    $(".edit-link").click(function() {
        $(this).parentsUntil(".edit-profile-box-outer").toggleClass('active');
    });
});

//Statement Datetabele JS
$('#statement-modal').on('shown.bs.modal', function(e) {
    $(document).ready(function() {
        $('#statement').DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details for ' + data[0] + ' ' + data[1];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            }
        });
    });
});

// Forgot Jquery
$(document).ready(function() {
    $(".forgot-form-sec").hide();
    $(".forgot-link").click(function() {
        $(".forgot-form-sec").fadeIn();
        $(".login-form-sec").fadeOut();
    });
     $(".login-link").click(function() {
        $(".forgot-form-sec").fadeOut();
        $(".login-form-sec").fadeIn();
    });
    $('.logoback').on('click',function(){
        $('#home_page_back').submit();
    });
});

// $(document).ready(function() {
//     $(".login-back-btn").click(function() {
//         $(".forgot-form-sec").fadeOut();
//         $(".login-back-btn").fadeIn();
//     });
// });

