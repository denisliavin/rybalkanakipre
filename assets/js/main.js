( function( $ ) {
    $("#menu-handheld").on('click', function (e) {
        let display = $("#fish").css('display')

        if (display == "block") {
            $("#fish").css('display', 'none')
        } else if (display == "none") {
            $("#fish").css('display', 'block')
        }
    });



}( jQuery ) );