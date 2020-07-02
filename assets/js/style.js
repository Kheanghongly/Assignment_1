$(function () {
    $(".item_product").slice(0, 6).show();
    $("#load").on('click', function (e) {
        e.preventDefault();
        $(".item_product:hidden").slice(0, 6).slideDown();
        if ($(".item_product:hidden").length == 0) {
            $("#load").fadeOut('slow');
            
        }

    });
});
