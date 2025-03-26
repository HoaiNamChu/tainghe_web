function addToCart(productId, price, show_table, show_cart = false) {
    if (price > 0 && price != null) {
        var quantity = $("#dquantity").val();
        if (quantity == null) {
            quantity = 1;
        }
        $.ajax({
            type: "POST",
            url: NVCMS_URL + "/cart/add",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                product_id: productId,
                quantity: quantity
            }
        }).done(function (key) {
            $.ajax({
                type: "GET",
                url: NVCMS_URL + "/cart/show",
                dataType: "html",
                async: "true",
                cache: "false",
                success: function (data) {
                    $(show_table).html(data);
                    update_total_item();
                    if (show_cart === true) {
                        // $('.md-cart').modal('show');
                        $('.js-cart-modal').addClass('show');
                        $('body').addClass('over-hidden');
                    } else {
                        alert('Đã thêm vào giỏ hàng!');
                    }
                }
            });
        });
    } else {
        alert('Vui lòng liên hệ để đặt mua sản phẩm này!');
    }
}

function order(url, price) {
    if (price > 0 && price != null) {
        var quantity = $("#dquantity").val();
        if (quantity == null) {
            quantity = 1;
        }
        $.ajax({
            type: "GET",
            url: NVCMS_URL + "/" + url + "&quantity=" + quantity
        }).done(function (key) {
            window.location.href = NVCMS_URL + '/gio-hang';
        });
    } else {
        alert('Vui lòng liên hệ để đặt mua sản phẩm này!');
    }
}

function removeCartItem(itemId, ItemRow) {
    if (itemId !== "" && ItemRow !== "") {
        $.ajax({
            type: "POST",
            url: NVCMS_URL + "/cart/removeItem",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: "text",
            data: {temp_id: itemId}
        }).done(function () {
            console.log(ItemRow)
            $("." + ItemRow).remove();
            update_total_item();
            update_cart_price();
            update_order_price();
        })
    } else {
        alert("Sản phẩm này không tồn tại trong giỏ hàng!");
    }
}

function showCartContent(obj) {
    var toid = $(obj).data("toid");
    $.ajax({
        type: "GET",
        url: NVCMS_URL + "/cart/show",
        dataType: "html",
        async: "true",
        cache: "false",
        success: function (data) {
            $(toid).html(data);
        }
    });
}

function update_total_item() {
    $.ajax({
        type: "GET",
        url: NVCMS_URL + "/cart/getTotalItem",
        dataType: "text",
        async: "true",
        cache: "false",
        success: function (data) {
            $('#total_cart_item').text(data);
            $('#total_item_cart').text(data);
        }
    });
}

// Cập nhật khi thay đổi số lượng trong giỏ hàng
$('.quantity').change(function () {
    update_cart_price(this);
});

function update_cart_price(obj) {
    var itemId = $(obj).attr("data-itemId");
    var total_r = 0;
    var quantity = parseInt($('#quantity_r' + itemId).val());
    var price = parseInt($('#price_r' + itemId).attr("data-price"));

    total_r += quantity * price;
    $('#total_r' + itemId).attr("data-val", total_r);
    $('#total_r' + itemId).text(Number(total_r.toFixed(1)).toLocaleString());

    var total = 0;
    $('.total_r_item').each(function (index, item) {
        total_r = parseInt($(item).attr("data-val"));
        total += total_r;
    });

    $('#total').text(Number(total.toFixed(1)).toLocaleString());
    $('#total_payment').text(Number(total.toFixed(1)).toLocaleString());

    $.ajax({
        type: "POST",
        url: NVCMS_URL + "/cart/updateCart",
        dataType: "text",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: $("#cart").serialize(),
        success: function (data) {
            console.log(data)
        }
    })
}

// Cập nhật khi thay đổi số lượng trong khi thanh toán
$('.order_quantity').change(function () {
    update_order_price(this);
});

function update_order_price(obj) {
    var itemId = $(obj).attr("data-orderItemId");
    var total = 0;
    var total_r = 0;
    var quantity = parseInt($('#quantity_orderR' + itemId).val());
    var price = parseInt($('#price_orderR' + itemId).attr("data-orderPrice"));
    total_r += quantity * price;
    $('#total_orderR' + itemId).attr("data-orderVal", total_r);
    $('#total_orderR' + itemId).text(Number(total_r.toFixed(1)).toLocaleString());

    $('.total_r_orderItem').each(function (index, item) {
        total_r = parseInt($(item).attr("data-orderVal"));
        total += total_r;
    });

    $('#totalOrder').text(Number(total.toFixed(1)).toLocaleString());
    $('#total_orderPayment').text(Number(total.toFixed(1)).toLocaleString());

    $.ajax({
        type: "POST",
        url: NVCMS_URL + "/cart/updateCart",
        dataType: "text",
        data: $('#order').serialize(),
    })
}
