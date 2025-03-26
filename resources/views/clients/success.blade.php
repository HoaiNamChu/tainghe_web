@extends('clients.layout')


@section('content')

    <nav>
        <div class="container">
            <ol class="breadcrumb m-breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://taingheviet.com">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Trạng thái đơn hàng</li>
            </ol>
        </div>
    </nav>
    <div class="container">
        <article class="order bg-white mb-5" style="padding: 10px;">
            <h2 class="order__heading" style="font-weight:bold;">Đặt hàng thành công</h2>
            <section class="order-info border mb-20" style="padding-left: 20px;">
                <p>Cảm ơn bạn. Đơn hàng của bạn đã được nhận. Chúng tôi sẽ gọi lại ngay cho bạn!</p>
                <div class="row">
                    <div class="order-info__item">
                        <div class="order-info__label">Mã đơn hàng</div>
                        <div class="order-info__value">202503250125-ly-thi-nhu</div>
                    </div>
                    <div class="order-info__item">
                        <div class="order-info__label">Thời gian</div>
                        <div class="order-info__value">25 tháng 03 năm 2025</div>
                    </div>
                    <div class="order-info__item">
                        <div class="order-info__label">Tổng cộng</div>
                        <div class="order-info__value">550.000 VNĐ</div>
                    </div>
                    <div class="order-info__item">
                        <div class="order-info__label">Phương thức thanh toán</div>
                        <div class="order-info__value">Chuyển tiền qua ATM</div>
                    </div>
                </div>
            </section>
            <div class="title_info" style="padding:20px;border: 1px solid #e9ecef;">
                <h2 style="font-weight: bold;">Xác nhận thông tin khách hàng</h2>
                <span>Họ Tên : ly thi nhu</span>
                <br>
                <span>Số điện thoại : 0345612354</span>
                <br>
                <span>Email : nhunhu@gmail.com</span>
                <br>
            </div>
            <section class="order-detail border">
                <div class="order-detail__heading">Chi tiết đơn hàng</div>
                <div class="table-responsive">
                    <table class="table order-table">
                        <tbody>
                        <tr class="font-weight-bold">
                            <td>Sản phẩm</td>
                            <td class="text-right">Đơn giá</td>
                            <td class="text-right">Giảm giá</td>
                            <td class="text-right">Tổng cộng</td>
                        </tr>

                        <tr>
                            <td class="py-2 pl-4">Moondrop Chu 2 × 1</td>
                            <td class="py-2 text-right">550.000 VNĐ</td>
                            <td class="py-2 text-right"> - 0 VNĐ</td>
                            <td class="py-2 text-right">550.000 VNĐ</td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td>Tổng tiền</td>
                            <td colspan="3" class="text-right">550.000 VNĐ</td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td>Giảm giá</td>
                            <td colspan="3" class="text-right"> - 0 VNĐ</td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td>Tổng cộng</td>
                            <td colspan="3" class="text-right">550.000 VNĐ</td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td>Phương thức thanh toán:</td>
                            <td colspan="3" class="text-right">Chuyển tiền qua ATM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
    </div>

@endsection
