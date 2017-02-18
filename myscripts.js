$(function () {
    $("#createParty").on("click", function () {
        animate("h1", "shake");
    });

    $("#joinParty").on("click", function () {
        animate("h1", "swing");
    });

    $(".ui.button.toggle").state({
        text: {
            inactive: 'Non',
            active: 'Oui'
        }
    });

    $("#sidebartrigger").find("> div.ui.button").on("click", function () {
        $('.ui.sidebar').sidebar('setting', 'transition', 'overlay').sidebar('show')
    });

    $(window).on('resize', function () {
        if ($(this).width() > 767)
            $('.ui.sidebar').sidebar('hide')
    });

    function animate(element, animation) {
        $(element).addClass(animation + " animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
            function () {
                $(this).removeClass(animation + " animated");
            });
    }
});