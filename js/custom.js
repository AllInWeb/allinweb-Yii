$(function () {

    /**
     * Остановить скроллинг
     */
    $(window).bind('mousewheel', function () {
        $("html, body").stop();
    });

    /**
     * Одностраничность
     */
    $("#single").single();

    /**
     * Карусель(слайдер)
     */
    $('#carousel').infiniteCarousel({
        displayTime: 5000,
        textholderHeight: .30,
        displayProgressBar: false
    });

    /**
     * Показать стрелку вверх
     * @type {*|jQuery|HTMLElement}
     */
    var $mvup = $('#mvup');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            var scrollTop = $(this).scrollTop();
        } else {
            scrollTop = false;
        }
        if ((document.documentElement.scrollTop || scrollTop) < 100) {
            $mvup.removeClass('moveUp').hide();

            return;
        }
        if ($mvup.hasClass('moveUp')) {
            return;
        }
        $mvup.addClass('moveUp').show();
    });

    /**
     * Вверх
     */
    $mvup.click(function () {
        $('body,html').animate({scrollTop: 0}, 400);
        return false;
    });

    /**
     * Сролинг по блокам по клику на пункт меню
     */
    $("#menu li a").click(function () {
        var selected = $(this).attr('href');
        if (selected == '#sites') {
            $.scrollTo(0, 555);
        } else {
            var offset = $(selected).offset();
            var pos = offset.top - 100;
            $.scrollTo(pos, 555);
        }

        return false;
    });

    /**
     * Аккордион
     */
    $('#h3 a').click(function (event) {
        event.preventDefault();
        var $link = $(this);
        var current = $link.attr('href');
        var id = current.slice(1, current.length);
        $('#accordion').find('[id =' + id + ']').toggle();
        if ($link.hasClass('minus')) {
            $link.html('<img src="images/plus.png">').removeClass('minus').parent().css({"border-bottom": "1px solid gray"});
        } else {
            $link.html('<img src="images/minus.png">').addClass('minus').parent().css({"border-bottom": 0});
        }
    });

    /**
     * Для меню
     * @type {*|jQuery|HTMLElement}
     */
    var $menu = $('#menu');

    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            var scrollTop = $(this).scrollTop();
        } else {
            scrollTop = false;
        }
        if ((document.documentElement.scrollTop || scrollTop) < 150) {
            if ($menu.hasClass('fixed-menu')) $menu.removeClass('fixed-menu');

            return;
        }

        if ($menu.hasClass('fixed-menu')) return;
        $menu.addClass('fixed-menu');
    });

    /**
     * Добавляем placeholder IE8
     */
    if ($.browser.msie) {
        $('input, textarea').placeholder();
    }
});