@extends('clients.layout')

@section('content')
    <script src="www.google.com/recaptcha/api327f.js?hl=vi" async></script>
    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Liên hệ</li>
            </ol>
        </nav>
        <div class="row gutter-20 py-30">
            <div class="col-lg-6 mb-20 d-flex flex-column">
                <h2 class="text-20 font-weight-bold">LIÊN HỆ VỚI CHÚNG TÔI</h2>
                <div class="text-16 mb-3" style="line-height: 30px;">

                </div>
                <div class="map">
                    <div class="map__label">Cơ sở 1: La Casa Villa 25 Vũ Ngọc Phan. P Láng Hạ. Q Đống Đa. HN</div>
                    <div class="map__label">0948.121.389</div>
                    <div class="map__frame media-body embed-responsive">

                    </div>
                </div>
                <div class="map">
                    <div class="map__label">Cơ sở 2: 56/1 Nguyễn Thông, Phường 9. Quận 3. HCM</div>
                    <div class="map__label">0938.730.620</div>
                    <div class="map__frame media-body embed-responsive">

                    </div>
                </div>

            </div>
            <div class="col-lg-6 mb-20">
                <form class="card card-body" method="post">
                    <div class="form-row">
                        <div class="col-xl-9 col-lg-8 offset-xl-3 offset-lg-4 text-center">
                            <h2 class="text-center text-20 font-weight-bold mb-10">THÔNG TIN LIÊN HỆ</h2>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Họ và tên
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-xl-9 col-lg-8">
                            <input class="form-control" name="name" type="text" id="name" value=""
                                   placeholder="Họ và tên" required="required">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Số điện thoại
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-xl-9 col-lg-8">
                            <input class="form-control" type="tel" name="phone" id="phone" value=""
                                   placeholder="Số điện thoại" required="required">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Email
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-xl-9 col-lg-8">
                            <input class="form-control" type="email" name="email" id="email" value=""
                                   placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Tiêu đề</label>
                        <div class="col-xl-9 col-lg-8">
                            <input class="form-control" name="title" type="text" id="title" value=""
                                   placeholder="Tiêu đề">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Nội dung
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-xl-9 col-lg-8">
                                <textarea class="form-control" id="content" name="content" placeholder="Nội dung"
                                          rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label class="col-form-label col-xl-3 col-lg-4">Bạn là ROBOT?
                        </label>
                        <div class="col-xl-9 col-lg-8">
                            <div class="g-recaptcha mx-auto"
                                 data-sitekey="6LfxBy0UAAAAABEOKNxL9A5La5Be3wspSiDaGvIx"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-xl-9 col-lg-8 offset-xl-3 offset-lg-4 text-center">
                            <button class="btn btn-blue font-weight-bold" name="btnSend" value="Liên hệ"
                                    type="submit" onclick="return submitform(this);">LIÊN HỆ NGAY
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="sessid" id="sessid" value="">
                </form>
            </div>
        </div>
    </div>
    <script>
        function submitform(obj) {
            $("#sessid").val('d6e43d5b5e100e28ed7fd57507cb9990');
            return true;
        }
    </script>
@endsection
