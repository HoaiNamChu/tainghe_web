function submitSubcribe() {
    "" === $("#email").val() ? alert("Bạn phải nhập email!") : $.ajax({
        type: "POST",
        url: NVCMS_URL + "/?mod=home&act=saveMail",
        dataType: "text",
        data: $("#SubcribeForm").serialize()
    }).done(function (t) {
        1 === t ? alert("Hệ thống đã lưu thông tin của bạn thành công !") : alert("Không lưu được thông tin của bạn. Vui lòng thử lại sau. Xin cảm ơn !")
    })
}

function submitContact() {
    "" === $("#name").val() || "" === $("#phone").val() || "" === $("#email").val() || "" === $("#content").val() ? alert("Bạn phải nhập đủ các thông tin!") : $.ajax({
        type: "POST",
        url: NVCMS_URL + "/?mod=home&act=saveContact",
        dataType: "text",
        data: $("#contactForm").serialize()
    }).done(function (t) {
        1 === t ? alert("Hệ thống đã lưu thông tin của bạn thành công !") : alert("Không lưu được thông tin của bạn. Vui lòng thử lại sau. Xin cảm ơn !")
    })
}


function setMenuClicked(t) {
    $.cookie("menu_a_clicked", t, {path: "/", expires: 1})
}

function getMenuClicked() {
    return $.cookie("menu_a_clicked")
}

function deletetMenuClicked() {
    $.cookie("menu_a_clicked", null, {path: "/", expires: 1})
}

function setMenuActive() {
    var t;
    0 !== (t = getMenuClicked()) && null != t || (t = 0), $("#menu_a_" + t).addClass("active")
}

if ($(".search-input").length > 0) {
    $(".search-input").keyup(function (e) {
        var keyword = $(".search-input").val();
        var category = $(".category").val();
        if (e.which !== 13) {
            $.ajax({
                type: "POST",
                url: NVCMS_URL + "/?sub=ajax&act=getsearch",
                dataType: "text",
                data: {'keyword': keyword, 'category': category}
            }).done(function (str) {
                if (str !== "") {
                    $(".search_result").show().html(str);
                } else {
                    $(".search_result").hide();
                }

            });
        }
    });
}

$(document).ready(function () {
    setMenuActive()
});
