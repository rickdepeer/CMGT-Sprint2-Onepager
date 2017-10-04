$(document).ready(function()
{
    $('#fullpage').fullpage({
        menu: "#menu",
        ancor: ["home", "concept", "info", "about-us", "contact"]

    });

    $(document.body).on("click", ".nav-link", function ()
    {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    })

});