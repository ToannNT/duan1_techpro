

$( function() {

    $( ".accordion" ).accordion({
        heightStyle: "content",
        collapsible: true,
        icon:false

    });
    $(".accordion").click(function() {
        if ($(this).closest("div").find("i").hasClass("fa-chevron-down")) {
            $(this).closest("div").find("i").removeClass("fa-chevron-down").addClass("fa-chevron-right");
        } else if ($(this).closest("div").find("i").hasClass("fa-chevron-right")) {
            $(this).closest("div").find("i").removeClass("fa-chevron-right").addClass("fa-chevron-down");
        }
    });
} );