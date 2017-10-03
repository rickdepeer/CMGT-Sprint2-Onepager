$(document).ready(function()
{
    $('#fullpage').fullpage();

    $(document.body).on("click", ".nav-link", function ()
    {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    })

});