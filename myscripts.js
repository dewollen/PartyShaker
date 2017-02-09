$(function () {
    $("#createParty").on("click", function () {
        animate("h1", "shake");
    });

    $("#joinParty").on("click", function () {
        animate("h1", "swing");
    });

    function animate(element, animation) {
        $(element).addClass(animation + " animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
            function () {
                $(this).removeClass(animation + " animated");
            });
    }
});

