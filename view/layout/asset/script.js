

$(document).ready(function () {
    
    $(".sticky-form-mini").click(function () {
        $(".sticky-form-big").show();
        $(".sticky-form-mini").hide();
    });

    $(".sticky-form-hide").click(function () {
        $(".sticky-form-big").hide();
        $(".sticky-form-mini").show();
    });


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


    filter_data();
    // filter select option nèee
    $("#fetchval_option").on('change', function () {
        var value = $(this).val();
        // alert(value);
        if (value != "") {

            $.ajax({
                url: "./view/fetch_data.php",
                method: "POST",
                data: {
                    value: value
                },
                success: function (data) {
                    $('.filter_data').html(data);
                }
            });
        } else {
            filter_data();

        }
    });


    // search nèeeeee
    $("#search_product_name").keyup(function () {
        var input = $(this).val();
        // alert(input);
        if (input != "") {
            $.ajax({
                url: "./view/fetch_data.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function (data) {
                    $('.filter_data').html(data);
                }
            });
        } else {
            filter_data();

        }
    });





    function filter_data() {
        // $('.filter_data').html('<div id="loading" style=""> LỖI </div>');
        var action = 'fetch_data';
        var brand = get_filter('brand');
        var catalog = get_filter('catalog');
        var price = get_filter('price');

        $.ajax({
            url: "./view/fetch_data.php",
            method: "POST",
            data: {
                action: action,
                catalog: catalog,
                brand: brand,
                price: price,
            },
            success: function (data) {
                $('.filter_data').html(data);
            }
        });

    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function () {
        filter_data();
    });

});



function uncheckOthers_dm(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox_dm');

    checkboxes.forEach(function (checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheckOthers_br(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox_br');

    checkboxes.forEach(function (checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheckOthers(clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.checkbox');

    checkboxes.forEach(function (checkbox) {
        // Kiểm tra xem checkbox hiện tại có phải là checkbox được click không
        var isClickedCheckbox = (checkbox === clickedCheckbox);

        // Nếu không phải là checkbox được click, bỏ chọn nó
        if (!isClickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

function uncheck_all_brand() {

    var checkboxes1 = document.getElementById('brand_ne1');
    var checkboxes2 = document.getElementById('brand_ne2');
    var checkboxes3 = document.getElementById('brand_ne3');
    var checkboxes4 = document.getElementById('brand_ne4');
    var checkboxes5 = document.getElementById('brand_ne5');
    var checkboxes6 = document.getElementById('brand_ne6');
    var checkboxes7 = document.getElementById('brand_ne7');
    var checkboxes8 = document.getElementById('brand_ne8');
    var checkboxes9 = document.getElementById('brand_ne9');
    var checkboxes10 = document.getElementById('brand_ne10');
    var checkboxes11 = document.getElementById('brand_ne11');
    var checkboxes12 = document.getElementById('brand_ne12');
    var checkboxes13 = document.getElementById('brand_ne13');
    var checkboxes14 = document.getElementById('brand_ne14');
    var checkboxes15 = document.getElementById('brand_ne15');
    var checkboxes16 = document.getElementById('brand_ne16');
    var checkboxes17 = document.getElementById('brand_ne17');
    var checkboxes18 = document.getElementById('brand_ne18');
    var checkboxes19 = document.getElementById('brand_ne19');
    var checkboxes20 = document.getElementById('brand_ne20');
    var checkboxes21 = document.getElementById('brand_ne21');
    var checkboxes22 = document.getElementById('brand_ne22');
    var checkboxes23 = document.getElementById('brand_ne23');
    var checkboxes24 = document.getElementById('brand_ne24');


    if (checkboxes1.checked == true || checkboxes2.checked == true || checkboxes3.checked == true || checkboxes4
        .checked == true || checkboxes5.checked == true || checkboxes6.checked == true || checkboxes7.checked == true ||
        checkboxes8.checked == true || checkboxes9.checked == true || checkboxes10.checked == true || checkboxes11
            .checked == true || checkboxes12.checked == true || checkboxes13.checked == true || checkboxes14.checked ==
        true || checkboxes15.checked == true || checkboxes16.checked == true || checkboxes17.checked == true ||
        checkboxes18.checked == true || checkboxes19.checked == true || checkboxes20.checked == true || checkboxes21
            .checked == true || checkboxes22.checked == true || checkboxes23.checked == true || checkboxes24.checked == true
    ) {

        checkboxes1.checked = false;
        checkboxes2.checked = false;
        checkboxes3.checked = false;
        checkboxes4.checked = false;
        checkboxes5.checked = false;
        checkboxes6.checked = false;
        checkboxes7.checked = false;
        checkboxes8.checked = false;
        checkboxes9.checked = false;
        checkboxes10.checked = false;
        checkboxes11.checked = false;
        checkboxes12.checked = false;
        checkboxes13.checked = false;
        checkboxes14.checked = false;
        checkboxes15.checked = false;
        checkboxes16.checked = false;
        checkboxes17.checked = false;
        checkboxes18.checked = false;
        checkboxes19.checked = false;
        checkboxes20.checked = false;
        checkboxes21.checked = false;
        checkboxes22.checked = false;
        checkboxes23.checked = false;
        checkboxes24.checked = false;
    }



    // for (let i = 1; i < checkboxes.length + 1; i++) {
    //     if (checkboxes[i].checked) {

    //         checkboxes[i].checked = false;

    //     }

    // }
    // }

}



/* 22. Cart Plus Minus Button
    /*----------------------------------------*/
$(".qtybutton").on("click", function () {
    var $button = $(this);
    var $input = $button.parent().find("input");
    var oldValue = parseFloat($input.val());
    var productId = $input.closest("tr").attr("productId");

    if ($button.hasClass('inc')) {
        var newVal = oldValue + 1;
    } else {
        // Don't allow decrementing below zero
        var newVal = oldValue > 1 ? oldValue - 1 : 1;

    }

    // Cập nhật giá trị hiển thị và biến $quantity
    $input.val(newVal);

    // Gửi yêu cầu AJAX để cập nhật số lượng trên máy chủ
    $.ajax({
        type: "POST",
        url: "./view/update_quantity.php",
        data: { productId: productId, quantity: newVal },
        dataType: "json",
        success: function (response) {
            if (response.success) {
                console.log("Cập nhật số lượng thành công!");

                location.reload();
                // Có thể thực hiện các bước khác sau khi cập nhật thành công
            } else {
                console.error("Lỗi khi cập nhật số lượng!");
            }
        },
        error: function () {
            console.error("Lỗi kết nối đến máy chủ!");
        }
    });
});





//CHANGE TRẠNG THÁI S_STATUS CỦA SESSIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
$("input.this_checkbox").on("change", function () {
    var $checkbox = $(this);
    var productId = $checkbox.closest("tr").attr("productId");
    var newStatus = $checkbox.prop("checked") ? 1 : 0;

    // Gửi yêu cầu AJAX để cập nhật trạng thái trên máy chủ
    $.ajax({
        type: "POST",
        url: "./view/update_status.php",
        data: { productId: productId, s_status: newStatus },
        dataType: "json",
        success: function (response) {
            if (response.success) {
                console.log("Cập nhật trạng thái thành công!");
                location.reload();
                // Có thể thực hiện các bước khác sau khi cập nhật thành công
            } else {
                console.error("Lỗi khi cập nhật trạng thái!");
                // Hiển thị thông báo lỗi cho người dùng
            }
        },
        error: function () {
            console.error("Lỗi kết nối đến máy chủ!");
            // Hiển thị thông báo lỗi cho người dùng
        }
    });
});




// KIỂM TRA DỮ LIỆU TRƯỚC KHI THỰC HIỆN
////////////////////////////////////
///////////////////////////////////
////////////////////////////////////
///////////////////////////////////

//GIỎ HÀNG
$(document).ready(function () {
    $("#checkout-link").click(function (event) {
        // Kiểm tra xem có ít nhất một ô kiểm đã được chọn hay không
        var checkboxes = $(".this_checkbox:checked");

        if (checkboxes.length === 0) {
            // Ngăn chặn hành vi mặc định của liên kết (không điều hướng)
            event.preventDefault();

            // Hiển thị một cảnh báo hoặc bất kỳ thông báo nào khác rằng cần chọn một sản phẩm
            alert("Hãy chọn một sản phẩm để thanh toán.");
        }
    });
});
// CHECKOUT
$(document).ready(function () {
    $('#checkFormCheckout').submit(function (event) {


        // Kiểm tra xem nút gửi có thuộc tính đặc biệt không
        if ($(document.activeElement).hasClass('voucher-check')) {
            return; // Nếu có, không làm gì cả và cho phép gửi form
        }


        var hoten = $('input[name="hoten"]').val();
        var dienthoai = $('input[name="dienthoai"]').val();
        var email = $('input[name="email"]').val();
        var diachi = $('input[name="diachi"]').val();
        var nguoinhan_hoten = $('input[name="nguoinhan_hoten"]');
        var nguoinhan_dienthoai = $('input[name="nguoinhan_dienthoai"]');
        var nguoinhan_diachi = $('input[name="nguoinhan_diachi"]');
        var ptvc = $('input[name="ptvc"]:checked').val();

        // Kiểm tra nếu nút gửi được nhấn là nút kiểm tra voucher
        if ($(event.relatedTarget).attr('name') === 'value_voucher') {
            return; // Không làm gì và cho phép gửi form cho việc kiểm tra voucher
        }


        if (hoten === '' || dienthoai === '' || email === '' || diachi === '') {
            alert('Vui lòng điền đầy đủ thông tin');
            event.preventDefault();
        } else {
            // Kiểm tra xem các trường nguoinhan có visible không (có đang ẩn hay không)
            var nguoinhan_visible = nguoinhan_hoten.is(':visible') && nguoinhan_dienthoai.is(':visible') && nguoinhan_diachi.is(':visible');


            if (nguoinhan_visible && (nguoinhan_hoten.val() === '' || nguoinhan_dienthoai.val() === '' || nguoinhan_diachi.val() === '' || ptvc === '')) {
                alert('Vui lòng điền đầy đủ thông tin người nhận');
                event.preventDefault();
            }
        }
    });
});

// KIỂM TRA DỮ LIỆU TRỐNG END 
////////////////////////////////////
///////////////////////////////////
////////////////////////////////////
///////////////////////////////////






$(document).ready(function () {
    // Hàm xử lý lưu và khôi phục trạng thái checkbox
    function handleCheckboxStatus() {
        // Lấy giá trị của checkbox đã chọn
        var selectedCheckbox = $('input[name="ptvc"]:checked').val();

        // Lưu giá trị của checkbox đã chọn vào localStorage
        localStorage.setItem('selectedCheckbox', selectedCheckbox);
    }

    // Kiểm tra nếu đã có giá trị checkbox đã lưu trong localStorage
    var savedCheckbox = localStorage.getItem('selectedCheckbox');
    if (savedCheckbox) {
        // Đặt checkbox đã chọn trước đó là đã được chọn
        $('input[name="ptvc"][value="' + savedCheckbox + '"]').prop('checked', true);
    }

    // // Hàm xóa thông tin đã lưu trong localStorage
    // function clearCheckboxStatus() {
    //     localStorage.removeItem('selectedCheckbox');
    // }




    // Bắt sự kiện khi input radio được chọn
    $('input[name="ptvc"]').click(function () {
        var selectedValue = $('input[name="ptvc"]:checked').val();

        // Gửi giá trị được chọn đến xuli.php qua Ajax
        $.ajax({
            url: './view/update_quantity.php',
            method: 'POST',
            data: { ptvc: selectedValue },
            success: function (response) {
                // Cập nhật lại trang sau khi đã gửi dữ liệu thành công
                handleCheckboxStatus();
                window.location.reload();
                // location.reload();
                // clearCheckboxStatus(); // Xóa trạng thái checkbox sau khi reload

            },
            error: function (xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error(error);
            }
        });
    });
});



