@extends('clients.layout')


@section('content')
    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Đăng nhập</li>
            </ol>
        </nav>
        <section class="container-fluid bg-white rounded mb-30" style="min-height: 550px;">
            <h2 class="text-24 font-weight-600 border-bottom py-20 mb-3">Đăng nhập</h2>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">
                    <p>Xin Quý khách vui lòng điền đầy đủ thông tin đăng nhập theo form dưới đây <span
                            class="has-account">Nếu bạn chưa có tài khoản vui lòng <a href="{{ route('register') }}">đăng
                                    ký</a> tại đây</span></p>
                    <form action="{{ route('login') }}" method="post" name="theForm" class="pb-30">
                        @csrf
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Tên đăng nhập</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="username" value="" maxlength="32"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <label class="col-form-label col-sm-4">Mật khẩu</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="password" name="password" value="" maxlength="32"
                                       required/>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <div class="col-sm-8 offset-sm-4">
                                <label class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    <span class="form-check-label">Ghi nhớ đăng nhập</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row mb-10">
                            <div class="col-sm-8 offset-sm-4">
                                <button class="btn btn-blue px-5" type="submit">Đăng
                                    nhập
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
