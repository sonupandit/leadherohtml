import "./jscolor";



$(document).on("click", ".c-header-toggler:eq(1)", function(){
   $("html").toggleClass("nav-hide");
});

$(window).on("resize", function(){
 if(window.innerWidth > 991){
    $(".nav-hide .c-header-toggler:eq(1)").trigger("click");
 }
});


$(".c-wrapper").height(window.innerHeight);
$(".c-app").css("min-height", window.innerHeight);

$(window).on("resize", function(){
    $(".c-wrapper").height(window.innerHeight);
    $(".c-app").css("min-height", window.innerHeight);
});


$(document).on("click", ".closing-btn", function(){
    $(this).toggleClass("active");
 });


// search toogle
$(document).on("click", ".search-link", function(){
    $("html").toggleClass("search-active");
});

$(document).on("keyup", function(e) {
    if (e.keyCode === 27) {
        $("html").removeClass("search-active");
    }
});
