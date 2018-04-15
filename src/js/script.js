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
$(".sub-menu").each(function () {
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