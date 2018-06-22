function topFunction() {
    $("html, body").animate({ scrollTop: "0px" }, {
        duration: 1500,
        easing: 'swing',
    });
}
$(document).ready(function() {
    var windowEl = $(document);

    function cekBar() {
        element = $(".navbar");
        var insHeight = 0;
        var navOffset = 360;
        var topOffset = '100px';
        var nav = $(".navbar");
        var padding = $(".navbar").find("#header-container");
        var topmenu = $("#top-btn");
        if (windowEl.width() <= 768) {
            if (windowEl.scrollTop() <= parseInt(topOffset)) {
                element.css({ 'margin-top': 0, 'transition': 'none' });
                element.removeClass("navbar-fixed-top");
                padding.addClass("pad-header");
                topmenu.fadeOut();
            } else {
                element.css({ 'margin-top': 0, 'transition': 'none' });
                element.addClass("navbar-fixed-top");
                padding.addClass("pad-header");
                topmenu.fadeIn();
            }
        } else {
            if (windowEl.scrollTop() <= parseInt(topOffset)) {
                element.css({ 'margin-top': 0, 'transition': 'none' });
                element.css('margin-bottom', 0);
                element.removeClass("navbar-fixed-top");
                padding.removeClass("pad-header");
                topmenu.fadeOut();
            } else if (windowEl.scrollTop() > parseInt(topOffset) && windowEl.scrollTop() < navOffset) {
                element.css({ 'margin-top': 0, 'transition': 'none' });
                element.css('margin-bottom', parseInt(topOffset) + "px");
                element.addClass("navbar-fixed-top");
                padding.addClass("pad-header");
                topmenu.fadeIn();
            } else {
                if (!element.hasClass("navbar-fixed-top")) {
                    element.css({ 'margin-top': 0, 'transition': 'none' });
                    element.css('margin-bottom', parseInt(topOffset) + "px");
                    element.addClass("navbar-fixed-top");
                    padding.addClass("pad-header");
                    topmenu.fadeIn();
                }
                element.css({ 'margin-top': 0, 'transition': 'all .5s ease-in-out' });
            }
        }
    }
    windowEl.scroll(function() {
        cekBar();
    });
    cekBar();
});