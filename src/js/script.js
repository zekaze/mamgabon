$(document).ready(function () {
    /*
    Bootstrap hover dropdown
    */

    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
    });

//NavToggle
    var navToggle = $("#navToggle");
    navToggle.click(function () {
        $("#main-menu").toggleClass("visible");
        $(this).toggleClass("fa-bars");
        $(this).toggleClass("fa-close");
    });

//Accordion
    var allSubMenus = $(".sub-menu");
    allSubMenus.each(function () {
        var self = $(this),
            button = self.find(".menu-item"),
            collapse = self.find("ul"),
            maxHeight = collapse.height();

        button.click(function () {
            //console.log(maxHeight);
            if(self.height() > 43){
                self.innerHeight(43);
            }
            else{
                self.innerHeight(maxHeight + 70);
            }
        });
    });

    /*
    Slick carousel
    */

    var slickControls = $(".controls"),
        slickPrev = slickControls.find(".prev"),
        slickNext = slickControls.find(".next");

    $('.slick').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        autoplay: true,
        infinite: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        nextArrow: slickNext,
        prevArrow: slickPrev,
        responsive: [
            {
                breakpoint: 1441,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1240,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '200px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 860,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '100px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 580,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '50px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1
                }
            }
        ]
    });

    var $animation_elements = jQuery('*[data-animate]'),
        $window = jQuery(window);

    $window.on('scroll',function () {
        check_if_in_view();
        minimizeNavMenu();
        showBackToTopButton();
    });

    /*
    Animation on scroll
    */

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);


        $.each($animation_elements, function() {
            var $element = jQuery(this);
            var $animation = $element.attr('data-animate');
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);


            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('animated data-animated '+$animation);
            }
        });
    }

    /*
    Minimize nav menu
    */
    function minimizeNavMenu() {
        var $navMenu = $("#main-menu"),
            $height = $navMenu.height(),
            $header = $("#main-header"),
            $top = $window.scrollTop(),
            $width = $window.width();

        if(($top > 540) && ($width > 991)){
            $header.addClass("fixed");
        }
        else {
            $header.removeClass("fixed");
        }
    }

    /*
    * Show Back to top button
    * */
    function showBackToTopButton() {
        if($window.scrollTop() > 300){
            $(".back-to-top").addClass("visible");
        }
    }

    /*
    Zabuto calendar
    */

    $('#calendar').zabuto_calendar({
        language: "fr",
        show_previous: false,
        today: true,
        ajax: {
            url: "assets/event_data.php",
            modal: true
        }
    });

    /*
        Magnific Popup
    */

    $('.popup-link').magnificPopup({
        type: 'image'
        // other options
    });

    $('.popup-galery').magnificPopup({
        delegate: 'a',
        type: 'image'
    });


    /*
    Back to top button
    */

    var btt = $('.back-to-top');

    btt.on('click', function () {

        $('html, body').animate({

            scrollTop: 0

        }, 800, function () {

            btt.removeClass("visible");

        });
    });


    /*
    * Search toggle
    * */
    $(".search-toggle").click(function () {
        $(".top_search_bar").toggleClass("visible").find(".search-input");
        $(".top_search_bar.visible").find(".search-input").focus();
        $(this).preventDefault();
    })

    /*
    * Slick forms
    * */
    var regFormButton = $("#regFormButton"),
    loginFormButton = $("#loginFormButton");
    $('#slick-forms').slick({
        slidesToShow: 2,
        autoplay: false,
        infinite: false,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        variableWidth: false,
        nextArrow: loginFormButton,
        prevArrow: regFormButton,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    fade: true
                }
            }
        ]
    });

});

