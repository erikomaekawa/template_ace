$(function () {

    var clicked = 0;
    $('.menu-btn').click(function (e) {

        var screen_height = $(window).height() - $('.mob-header').height();

        $(this).toggleClass('active');
        $('body').toggleClass('menu-active');

        if (clicked == 0) {
            $('.main-menu-wrap').height(screen_height);
            clicked = 1;
            return;
        }

        if (clicked == 1) {
            $('.main-menu-wrap').removeAttr('style');
            clicked = 0;
            return;
        }

    });

});
