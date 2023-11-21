

$(document).ready(function () {

    $(".accordion").accordion({
        heightStyle: "content",
        collapsible: true,
        icon: false

    });
    $(".accordion").click(function () {
        if ($(this).closest("div").find("i").hasClass("fa-chevron-down")) {
            $(this).closest("div").find("i").removeClass("fa-chevron-down").addClass("fa-chevron-right");
        } else if ($(this).closest("div").find("i").hasClass("fa-chevron-right")) {
            $(this).closest("div").find("i").removeClass("fa-chevron-right").addClass("fa-chevron-down");
        }
    });



    // danh mục trang productttttttttttttttttttttttttttttt
    // $('.radioButton')("click", function () {

    //     // Kiểm tra xem radio button đã được chọn chưa
    //     if ($(this).prop("checked")) {
    //         // Nếu đã chọn, thì hủy chọn bằng cách đặt checked thành false
    //         $(this).prop("checked", false);
    //     }
    // });





    $(".1").show();
    $(".2").hide();
    $(".3").hide();
    $(".4").hide();

    $("#1").click(function () {
        $(".1").show();
        $(".2").hide();
        $(".3").hide();
        $(".4").hide();

    });

    $("#2").click(function () {
        $(".2").show();
        $(".1").hide();
        $(".3").hide();
        $(".4").hide();
    });

    $("#3").click(function () {
        $(".3").show();
        $(".1").hide();
        $(".2").hide();
        $(".4").hide();
    });

    $("#4").click(function () {
        $(".4").show();
        $(".1").hide();
        $(".2").hide();
        $(".3").hide();
    });



});