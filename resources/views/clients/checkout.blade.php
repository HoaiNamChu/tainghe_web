@extends('clients.layout')


@section('content')

    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="https://taingheviet.com">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Đặt hàng &amp; thanh toán</li>
            </ol>
        </nav>
        <section class="container-fluid bg-white rounded mb-30" style="min-height: 550px;">
            <h2 class="text-24 font-weight-600 border-bottom py-20 mb-3">Đặt hàng &amp; thanh toán</h2>
            <form class="row gutter-20" action="{{ route('payment') }}" method="post" name="orderForm" id="orderForm">
                @csrf
                <div class="col-lg-8 mb-20">
                    <div class="card">
                        <div class="card-header text-center text-16 font-weight-700 pt-10 pb-2">THÔNG TIN MUA HÀNG
                        </div>
                        Xin Quý khách vui lòng điền đầy đủ thông tin người nhận, chúng tôi sẽ liên lạc với Quý khách
                        sớm nhất có thể
                        <div class="card-body">
                            <div class="text-16 font-weight-bold mb-10">THÔNG TIN NGƯỜI MUA HÀNG</div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Họ và tên người mua hàng
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" placeholder="Họ và tên" name="name"
                                           value="" required="" fdprocessedid="waxspl">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Số điện thoại liên lạc
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="tel" placeholder="Số điện thoại"
                                           name="phone" value="" required="" fdprocessedid="p4iqd">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                           value="" fdprocessedid="8qhxq">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Tỉnh/Thành phố</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="s_province_id" name="province_code"
                                            required="" fdprocessedid="7fz2ma">
                                        <option disabled="" selected="">Chọn tỉnh / thành phố</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Quận/Huyện</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="s_district_id" name="district_code" required=""
                                            fdprocessedid="yyh7v">
                                        <option disabled="" selected="">Chọn quận / huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Xã/Phường</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="s_ward_id" name="ward_code" required=""
                                            fdprocessedid="yyh7v">
                                        <option disabled="" selected="">Chọn xã / phường</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Địa chỉ nhận hàng
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text"
                                           placeholder="Vui lòng điền chính xác và dầy đủ địa chỉ"
                                           name="address_detail" value="" required="" fdprocessedid="vvynei">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Phương thức thanh toán</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="payment_method">
                                        <option disabled="" selected="">Chọn phương thức thanh toán</option>
                                        @foreach($paymentMethods as $item)
                                            <option value="{{ $item->code }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <label class="col-form-label col-md-4">Ghi chú</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="note" value=""
                                           placeholder="Lời nhắn cho chủ shop" fdprocessedid="7gl7w">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-20">
                        <div class="card-header text-center text-16 font-weight-700 pt-10 pb-2">MÃ GIẢM GIÁ</div>
                        <div class="card-body">
                            <div class="text-center mb-3">Nơi quý khách nhập “ Mã giảm giá ” để hưởng những ưu đãi
                                từ SLaudio - TAI NGHE VIỆT Headphone Store
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" size="1" name="coupon" id="coupon"
                                       autocomplete="Off" placeholder="Nhập mã giảm giá" fdprocessedid="1zemj">
                                <input type="hidden" id="totalcost" name="totalcost" value="45850000">
                                <span class="input-group-append">
                                <button class="input-group-text bg-blue text-white" type="button"
                                        onclick="checkCoupon()" fdprocessedid="tv1w4a">Sử dụng</button>
                            </span>
                                <p id="coupon_result" class="text-danger font-weight-bold mt-3"></p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-20">
                        <div class="card-header text-center text-16 font-weight-700 pt-10 pb-2">Đơn hàng
                            ({{count(session('cart'))}} sản phẩm) - <a href=".md-cart" data-toggle="modal">Giỏ hàng</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            @php $total = 0; @endphp
                            @foreach($carts as $key => $item)
                                <li class="list-group-item">
                                    <a class="media link-unstyled"
                                       href="https://taingheviet.com/thieaudio-monarch-mkiii-pr11046.html"
                                       title="Thieaudio Monarch MKIII">
                                        <div class="iwrap-100 border" style="width: 70px;">
                                            <img
                                                src="{{ $item['product']->image }}"
                                                onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                                                alt="Thieaudio Monarch MKIII"
                                            >
                                        </div>
                                        <div class="media-body px-10">Thieaudio Monarch MKIII</div>
                                        <div class="text-secondary font-weight-600 text-right">
                                            <div>{{ number_format($item['product']->productVariants[0]->price) }}VNĐ
                                            </div>
                                            <div>x{{ $item['quantity'] }}</div>
                                            <div>{{ number_format($item['product']->productVariants[0]->price * $item['quantity']) }}
                                                VNĐ
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @php $total += $item['product']->productVariants[0]->price * $item['quantity']; @endphp
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between font-weight-600 text-secondary">
                                <span>Tổng tiền hàng</span>
                                <span>{{ number_format($total) }} VNĐ</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between font-weight-600 text-secondary">
                                <span>Giảm giá</span>
                                <span>- <span class="coupon_discount">0</span> VNĐ</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between font-weight-600 text-secondary">
                                <span>Tổng tiền thanh toán</span>
                                <span class="text-red"><span
                                        class="coupon_total_cost">{{ number_format($total) }}</span> VNĐ</span>
                                <input type="hidden" name="total_amount" value="{{ $total }}">
                            </li>
                            <li class="list-group-item d-flex justify-content-between font-weight-600 text-secondary">
                                <span class="" style="font-size: 14px;color: #c42121"><span class="">Giá của sản phẩm chưa bao gồm chi phí vận chuyển ...</span></span>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-block btn-red font-weight-700 py-2 mb-20" type="submit" name="btnOrder"
                            value="Gửi đặt hàng" fdprocessedid="f7oioe">TIẾN HÀNH THANH TOÁN
                    </button>
                </div>
            </form>
        </section>
    </div>

@endsection

@section('script')
    <script>

        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'https://esgoo.net/api-tinhthanh/1/0.htm',
                success: function (data_province) {
                    if (data_province.error == 0) {
                        $.each(data_province.data, function (key_province, val_province) {
                            $('#s_province_id').append('<option value="' + val_province.id + '">' + val_province.full_name + '</option>')
                        });
                        $('#s_province_id').change(function (e) {
                            var idProvince = $(this).val();
                            $.ajax({
                                type: 'GET',
                                url: 'https://esgoo.net/api-tinhthanh/2/' + idProvince + '.htm',
                                success: function (data_district) {
                                    $("#s_district_id").html('<option value="0">Chọn quận / huyện</option>');
                                    $("#s_ward_id").html('<option value="0">Chọn xã / phường</option>');
                                    if (data_district.error == 0) {
                                        $.each(data_district.data, function (key_district, val_district) {
                                            $('#s_district_id').append('<option value="' + val_district.id + '">' + val_district.full_name + '</option>')
                                        });

                                        $('#s_district_id').change(function (e) {
                                            var idDistrict = $(this).val();
                                            $.ajax({
                                                type: 'GET',
                                                url: 'https://esgoo.net/api-tinhthanh/3/' + idDistrict + '.htm',
                                                success: function (data_ward) {
                                                    $("#s_ward_id").html('<option value="0">Chọn xã / phường</option>');
                                                    if (data_ward.error == 0) {
                                                        $.each(data_ward.data, function (key_ward, val_ward) {
                                                            $('#s_ward_id').append('<option value="' + val_ward.id + '">' + val_ward.full_name + '</option>')
                                                        });
                                                    }
                                                }
                                            });
                                        });
                                    }
                                }
                            });
                        });
                    }
                }
            });
        });

    </script>
    <script type="text/javascript">
        function checkCoupon() {
            var coupon = $("#coupon").val();
            var totalCost = $("#totalcost").val();
            if (coupon !== '') {
                $.ajax({
                    type: "POST",
                    url: NVCMS_URL + "/checkCoupon",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: $('#orderForm').serialize()
                }).done(function (data) {

                    console.log(data.coupon)

                    if (!data.coupon) {
                        $("#coupon_result").html("Mã khuyến mại không hợp lệ, Hoặc đã hết hạn sử dụng!");
                    } else {
                        if (data == 1) {
                            $("#coupon_result").html("Bạn phải đăng nhập mới sử dụng được Coupon này!");
                        } else if (data == 3) {
                            $("#coupon_result").html("Bạn không đủ điều kiện để sử dụng Coupon này !");
                        } else {
                            $("#coupon_result").html("Mã khuyến mại đã được sử dụng thành công!");
                            var totalCostAfterKM = parseInt(totalCost) - parseInt(key);
                            $(".coupon_discount").html(moneyFormat(key));
                            $(".coupon_total_cost").html(moneyFormat(totalCostAfterKM));
                        }
                    }
                });
            } else {
                alert("Bạn chưa nhập mã khuyến mại");
            }
            return false;
        }

        function moneyFormat(n) {
            var t = n == null ? "0" : n.toString();
            return t.replace(/\d(?=(?:\d{3})+(?!\d))/g, "$&,")
        }
    </script>
@endsection
