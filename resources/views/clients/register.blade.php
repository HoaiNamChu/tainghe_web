@extends('clients.layout')


@section('content')
    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Đăng ký</li>
            </ol>
        </nav>
        <section class="container-fluid bg-white rounded mb-30" style="min-height: 550px;">
            <h2 class="text-24 font-weight-600 border-bottom py-20 mb-3">Đăng ký</h2>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">
                    <p>Xin Quý khách vui lòng điền đầy đủ thông tin đăng ký theo form dưới đây <span
                            class="has-account">Nếu bạn đã có tài khoản vui lòng <a href="{{ route('login') }}">đăng nhập</a>
                                tại đây</span>
                    </p>
                    <form class="pb-30" method="post" action="{{ route('register') }}">
                        @csrf
                        <h3 class="text-18 mt-4 mb-3 text-center">THÔNG TIN TÀI KHOẢN</h3>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Tên đăng nhập
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="username" value="" maxlength="32"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Email
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="email" name="email" value="" maxlength="255"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Mật khẩu
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password" name="password" value="" maxlength="32"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Nhập lại mật khẩu
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password" name="password_confirm" value=""
                                       maxlength="32" required/>
                            </div>
                        </div>
                        <h3 class="text-18 mt-4 mb-3 text-center">THÔNG TIN LIÊN HỆ</h3>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Họ & tên
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="full_name" value="" maxlength="100"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Điện thoại
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="phone_number" value="" maxlength="255"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Tỉnh / Thành phố
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="s_province_id" name="province_code" required>
                                    <option disabled="" selected="">Chọn tỉnh / thành phố</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Quận / Huyện
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="s_district_id" name="district_code" required>
                                    <option disabled="" selected="">Chọn quận / huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Xã / Phường
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="s_ward_id" name="ward_code" required>
                                    <option disabled="" selected="">Chọn xã / phường</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Địa chỉ
                                <span class="text-danger">(*)</span>
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="address_detail" value="" required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <div class="col-sm-8 offset-sm-4">
                                <button class="btn btn-blue px-5" type="submit">Đăng
                                    ký
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
@endsection
