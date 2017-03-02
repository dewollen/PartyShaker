$(function () {

    //
    // La petite sidebar
    //

    // Déclencheur + animation
    $("#sidebartrigger").find("> div.ui.button").on("click", function () {
        $('.ui.sidebar').sidebar('setting', 'transition', 'overlay').sidebar('show')
    });

    // Si la sidebar est ouverte et qu'on redimensionne la fenetre, ferme la sidebar
    $(window).on('resize', function () {
        if ($(this).width() > 767)
            $('.ui.sidebar').sidebar('hide');
    });


    // Le menu déroulant du compte
    $(".ui.dropdown.item").dropdown();


    // Une petite fonction pour utiliser animate.css
    function animate(element, animation) {
        $(element).addClass(animation + " animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
            function () {
                $(this).removeClass(animation + " animated");
            });
    }

    //
    // Le champ de mines ;)
    //

    $("#vote").state({
        text: {
            inactive: 'Non',
            active: 'Oui'
        }
    });

    $("#createParty").on("click", function () {
        animate("h1", "shake");
    });

    $("#joinParty").on("click", function () {
        animate("h1", "swing");
    });
});