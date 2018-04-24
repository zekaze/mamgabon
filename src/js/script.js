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

$('.slick').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    autoplay: true,
    infinite: true,
    draggable: false,
    pauseOnFocus: false,
    pauseOnHover: false,
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
});

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