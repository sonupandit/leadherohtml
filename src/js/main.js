import "./jscolor";



$(".c-wrapper").height(window.innerHeight);
$(".c-app").css("min-height", window.innerHeight);

$(window).on("resize", function(){
    $(".c-wrapper").height(window.innerHeight);
    $(".c-app").css("min-height", window.innerHeight);
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
