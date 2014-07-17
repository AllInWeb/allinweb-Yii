/**
 * Created by viktor on 7/15/14.
 */

/**
 * Остановить скроллинг
 */
$(function() {
    $(window).bind('mousewheel', function() {
        $("html, body").stop();
    });
});

$(document).ready(function () {
    $(function(){
        $("#single").single();});
    // $("#carousel").infiniteCarousel({});
    $('#carousel').infiniteCarousel({
        displayTime: 5000,
        textholderHeight: .30,
        displayProgressBar: false

    });

    $(document).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#mvup').show();
        } else {
            $('#mvup').hide();
        }
    });

    $('#mvup').click(function () {
        $('body,html').animate({scrollTop: 0}, 400);
        return false;
    });
    $("#menu li a, #menu li ul li a").click(function () {
        var selected = $(this).attr('href');
        var offset = $(selected).offset();
        var pos = offset.top - 100;
        $.scrollTo(pos, 555);
        return false;
    });

    $('#h3 a').click(function () {
        var current = $(this).attr('href');
        var id = current.slice(1, current.length);
        $('div[id =' + id + ']').toggle();


        return false;
    });

        $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $('.hidden-menu').show().animate({marginTop: '-175px'}, 10);
        } else {
            $('.hidden-menu').hide();
        }
    });
//    $(window).scroll(function () {
//        if ($(this).scrollTop() > 100) {
//            $('.hidden-menu').show();
//            $('.hidden-menu').animate({
//                marginTop: '-180px'}, 10);
//        } else {
//            $('.hidden-menu').hide();
//        }
//    });
});