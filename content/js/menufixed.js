$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() - $("#header_sections").position().top < 0){
            $('#container-fluid').css({'position':'relative'});
        }else{
            $('#container-fluid').css({'position':'fixed'});
        }
    });
});