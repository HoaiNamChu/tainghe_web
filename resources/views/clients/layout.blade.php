<!DOCTYPE html>
<html lang="vi" class="off-canvas">

<head>
    <title>@yield('title', 'HNC - TAI NGHE Headphone Store')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="HNC - TAI NGHE Headphone Store"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="HNC - TAI NGHE Headphone Store"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:site_name" content="HNC - TAI NGHE Headphone Store"/>
    <meta name="csrf-token" content="{!! csrf_token() !!}"/>
    <!-- vendor style-->

    <link rel="stylesheet"
          href="{{asset('/clients/themes/template/vendor/font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/clients/themes/template/vendor/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/clients/themes/template/vendor/ripple/css/ripple.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/clients/themes/template/vendor/easy-autocomplete/css/easy-autocomplete.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('/clients/themes/template/vendor/easy-autocomplete/css/easy-autocomplete.themes.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/clients/themes/template/vendor/swiper/css/swiper.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('/clients/themes/template/vendor/owl-carousel/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/clients/themes/template/vendor/slick-carousel/css/slick.min.css')}}"/>

    @yield('link')

    <!-- custom style-->
    <link rel="stylesheet" href="{{asset('/clients/themes/template/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('/clients/themes/template/css/custom.css')}}"/>
    <link rel="shortcut icon" href="{{asset('/clients/uploads/logo.png')}}" type="image/x-icon">

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v3.2'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.html';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="1397124893886294" theme_color="#0084ff"
         logged_in_greeting="Xin chào ! Chúng tôi có thể giúp gì được cho bạn ?"
         logged_out_greeting="Xin chào ! Chúng tôi có thể giúp gì được cho bạn ?">
    </div>

    <script>
        var NVCMS_URL = "{{route('home.index')}}";
        var URL_IMAGES = "{{asset('/clients/themes/template/images')}}";
        var URL_CSS = "{{asset('/clients/themes/template/css')}}";
        var URL_UPLOAD = "{{asset('/clients/uploads')}}";
    </script>
</head>

<body>
<!-- header-->
@include('clients.header')
<!-- end header-->
<!-- cart modal-->
<div class="md-cart modal fade" role="dialog">
    <div class="md-cart__dialog modal-dialog modal-lg" role="document">
        <div class="md-cart__content modal-content">
            <button class="md-cart__close" type="button" data-dismiss="modal">X</button>
            <h3 class="md-cart__heading">
                <img src="https://taingheviet.com/themes/template/images/icon-cart-black.png" alt="cart">
                <span>Giỏ hàng của tôi</span>
            </h3>
            <div id="listCartContent">

            </div>
        </div>
    </div>
</div>

@yield('content')

</main>


<!-- widgets: brands news videos-->
<section class="py-20 mb-40 bg-white">
    <div class="container">
        <div class="owl-carousel js-brand-slider">
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/aune">
                    <img class="mx-auto" src="{{asset('/clients/uploads/techzones-aune-logo.png')}}" alt="Aune"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="category/may-nghe-nhac-ibasso.html">
                    <img class="mx-auto" src="{{asset('/clients/uploads/ibasso.jpg')}}" alt="ibasso"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-sennheiser">
                    <img class="mx-auto" src="{{asset('/clients/uploads/logo%20sennheiser.jpg')}}" alt="Sennheiser"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-bose">
                    <img class="mx-auto" src="{{asset('/clients/uploads/bose-logo.jpg')}}" alt="Bose"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-audio-technica">
                    <img class="mx-auto" src="{{asset('/clients/uploads/audio-technica.jpg')}}" alt="AudioTechnica"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-hidizs">
                    <img class="mx-auto" src="{{asset('/clients/uploads/logo%20hidizs.jpg')}}" alt="Hidizs"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-skullcandy">
                    <img class="mx-auto" src="{{asset('/clients/uploads/Skullcandy.jpg')}}" alt="Skullcandy"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="category/tai-nghe-sony.html">
                    <img class="mx-auto" src="{{asset('/clients/uploads/logo%20sony.jpg')}}" alt="Sony"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled" href="category/fiio.html">
                    <img class="mx-auto" src="{{asset('/clients/uploads/fiio%20logo.jpg')}}" alt="FiiO"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-1more">
                    <img class="mx-auto" src="{{asset('/clients/uploads/1more-logo.jpg')}}" alt="1More"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-beats">
                    <img class="mx-auto" src="{{asset('/clients/uploads/0_VamjJKj0jkHLyNig%20(1).png')}}" alt="Beats"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/may-nghe-nhac-cayin">
                    <img class="mx-auto" src="{{asset('/clients/uploads/cayin-logo.jpg')}}" alt="Cayin"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
            <div class="item">
                <a class="card card-body border-0 text-center h-100 link-unstyled"
                   href="https://taingheviet.com.vn/category/tai-nghe-shure">
                    <img class="mx-auto" src="{{asset('/clients/uploads/Shure_Logo-1200x545_c.jpg')}}" alt="Shure"
                         onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                         style="height: 100px; width: auto !important;"/>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mb-20">
        <div class="row">
            <div class="col-lg-8">
                <section>
                    <h2 class="title">Tin tức</h2>
                    <div class="row">
                        <div class="col-md-6 mb-30 mb-md-0">
                            <!-- Home news-->
                            <article class="news">
                                <a class="d-block link-unstyled"
                                   href="danh-gia-nhanh-tripowin-x-0dibi-vivace-su-lua-chon-an-toan-nhat-trong-phan-khuc-gia-re-n102.html"
                                   title="Đánh giá nhanh: TRIPOWIN x 0DiBi Vivace - sự lựa chọn an toàn nhất trong phân khúc giá rẻ">
                                    <div class="iwrap-50">
                                        <img
                                            src="{{asset('/clients/uploads/AN%20AN%20AN%20AN%20AN%20AN%20AN%20AN/tripowin_vivace/z6286628732456_aec30eae47766fe7fbd95fbfbfb3838c.jpg')}}"
                                            onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                                            alt="Đánh giá nhanh: TRIPOWIN x 0DiBi Vivace - sự lựa chọn an toàn nhất trong phân khúc giá rẻ"/>
                                    </div>
                                    <div class="max-line-1 font-weight-600 mt-2 mb-1">Đánh giá nhanh: TRIPOWIN x
                                        0DiBi Vivace - sự lựa chọn an toàn nhất trong phân khúc giá rẻ
                                    </div>
                                </a>
                                <div class="text-12 text-gray-9 mb-1">
                                    <i class="fa fa-calendar"></i>
                                    04/02/2025
                                </div>
                                <div class="max-line-3"> Sự cạnh tranh trong ph&acirc;n kh&uacute;c gi&aacute; rẻ
                                    đ&atilde; trở n&ecirc;n căng thẳng hơn với m&agrave;n tr&igrave;nh l&agrave;ng
                                    của một trong những đối thủ mới nhất - Vivace v&agrave;o cuối năm 2024. Nhờ sự
                                    cộng t&aacute;c của...
                                </div>
                            </article>
                        </div>
                        <aside class="col-md-6">
                            <div class="media mb-30 m-last-0">
                                <a class="iwrap-66 mr-3"
                                   href="top-5-tai-nghe-duoi-1-trieu-danh-cho-nguoi-nhap-mon-10-2024-n101.html"
                                   style="width: 120px;"
                                   title="TOP 5 tai nghe dưới 1 triệu dành cho người nhập môn - 10/2024">
                                    <img
                                        src="{{asset('/clients/uploads/AN%20AN%20AN%20AN%20AN%20AN%20AN%20AN/collage1.jpg')}}"
                                        onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                                        alt="TOP 5 tai nghe dưới 1 triệu dành cho người nhập môn - 10/2024"/>
                                </a>
                                <div class="media-body align-self-center">
                                    <a class="d-block link-unstyled max-line-2 font-weight-600 mb-1"
                                       href="top-5-tai-nghe-duoi-1-trieu-danh-cho-nguoi-nhap-mon-10-2024-n101.html"
                                       title="TOP 5 tai nghe dưới 1 triệu dành cho người nhập môn - 10/2024">TOP 5
                                        tai nghe dưới 1 triệu dành cho người nhập môn - 10/2024</a>
                                    <div class="text-12 text-gray-9">
                                        <i class="fa fa-calendar"></i>
                                        24/10/2024
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-30 m-last-0">
                                <a class="iwrap-66 mr-3" href="sennheiser-hd-490-pro-nhe-nhang-luot-qua-n100.html"
                                   style="width: 120px;" title="Sennheiser HD 490 Pro: Nhẹ nhàng lướt qua">
                                    <img
                                        src="{{asset('/clients/uploads/Sennheiser%20HD490%20Pro/z5796824894774_3e4a886f4092b03b26eceeca6a075eb9.jpg')}}"
                                        onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                                        alt="Sennheiser HD 490 Pro: Nhẹ nhàng lướt qua"/>
                                </a>
                                <div class="media-body align-self-center">
                                    <a class="d-block link-unstyled max-line-2 font-weight-600 mb-1"
                                       href="sennheiser-hd-490-pro-nhe-nhang-luot-qua-n100.html"
                                       title="Sennheiser HD 490 Pro: Nhẹ nhàng lướt qua">Sennheiser HD 490 Pro: Nhẹ
                                        nhàng lướt qua</a>
                                    <div class="text-12 text-gray-9">
                                        <i class="fa fa-calendar"></i>
                                        18/09/2024
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-30 m-last-0">
                                <a class="iwrap-66 mr-3"
                                   href="sennheiser-hd-600-27-nam-1-huyen-thoai-hien-tai-ra-sao-n98.html"
                                   style="width: 120px;"
                                   title="Sennheiser HD 600: 27 năm 1 huyền thoại, hiện tại ra sao?">
                                    <img
                                        src="{{asset('/clients/uploads/Sennheiser%20HD%20600%20-%20REVIEW%20-%20IMAGES/%21%20sennheiser%20hd%20600.jpg')}}"
                                        onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"
                                        alt="Sennheiser HD 600: 27 năm 1 huyền thoại, hiện tại ra sao?"/>
                                </a>
                                <div class="media-body align-self-center">
                                    <a class="d-block link-unstyled max-line-2 font-weight-600 mb-1"
                                       href="sennheiser-hd-600-27-nam-1-huyen-thoai-hien-tai-ra-sao-n98.html"
                                       title="Sennheiser HD 600: 27 năm 1 huyền thoại, hiện tại ra sao?">Sennheiser
                                        HD 600: 27 năm 1 huyền thoại, hiện tại ra sao?</a>
                                    <div class="text-12 text-gray-9">
                                        <i class="fa fa-calendar"></i>
                                        09/02/2024
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 mb-30">
                <section class="h-100 d-flex flex-column">
                    <h2 class="title">Video</h2>
                    <div class="media-body">
                        <div class="embed-responsive embed-responsive-16by9 h-100">
                            <iframe width='560' height='315' src='https://www.youtube.com/embed/2g7bPobH9Tk'
                                    frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<button class="btn btn-blue btn-movetop js-btn-movetop" type="button">
    <i class="fa fa-arrow-up"></i>
</button>
<!-- footer-->
<!-- pros-->
<div class="bg-blue text-white">
    <div class="container">
        <div class="row gutter-20">
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="media">
                    <img class="mr-3" src="{{asset('/clients/themes/template/images/icon-pros-1.png')}}"
                         alt="Ship toàn quốc"/>
                    <div class="media-body">Giao hàng
                        <br/>Ship toàn quốc
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="media">
                    <img class="mr-3" src="{{asset('/clients/themes/template/images/icon-pros-2.png')}}"
                         alt="khuyến mại không ngừng"/>
                    <div class="media-body">Luôn luôn giá rẻ &
                        <br/>khuyến mại không ngừng
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="media">
                    <img class="mr-3" src="{{asset('/clients/themes/template/images/icon-pros-3.png')}}"
                         alt="Chăm sóc khách hàng uy tín"/>
                    <div class="media-body">Dịch vụ
                        <br/>taingheviet@gmail.com
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-3">
                <div class="media">
                    <img class="mr-3" src="{{asset('/clients/themes/template/images/icon-pros-4.png')}}"
                         alt="Tư vấn bán hàng"/>
                    <div class="media-body">Tư vấn bán hàng
                        <br/>
                        <strong>0932.347.414</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer-->
<footer class="footer"
        style="background: url('{{asset('/clients/themes/template/images/night-bg.png')}}') center/cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-4 col-md-3 mb-3">
                        <h2 class="footer__title">THÔNG TIN CÔNG TY</h2>
                        <nav class="mb-3">
                            <nav>
                                <a class="footer__link" href="gioi-thieu.html">Giới thiệu công ty</a>
                                <a class="footer__link" href="huong-dan-mua-hang.html">Hệ thống bán hàng</a>
                                <a class="footer__link" href="tuyen-dung.html">Tuyển dụng</a>
                                <a class="footer__link" href="contact.html">Liên hệ và góp ý</a>
                            </nav>
                        </nav>
                        <h2 class="footer__title footer__title--mt-80">HỖ TRỢ KHÁCH HÀNG</h2>
                        <nav class="mb-3">
                            <nav>
                                <a class="footer__link" href="huong-dan-mua-hang-online.html">Hướng dẫn mua hàng
                                    online</a>
                                <a class="footer__link" href="chinh-sach-bao-hanh-doi-tra.html">Chính sách bảo hành
                                    đổi trả</a>
                                <a class="footer__link"
                                   href="chinh-sach-bao-ve-thong-tin-ca-nhan-cua-nguoi-tie-dung.html">Chính sách
                                    bảo vệ thông tin cá nhân của người tiêu dùng</a>
                                <a class="footer__link" href="chinh-sach-van-chuyen.html">Chính sách vận chuyển</a>
                            </nav>
                        </nav>
                    </div>
                    <div class="col-xl-4 col-md-3 mb-3">
                        <h2 class="footer__title"></h2>
                        <nav class="mb-3">
                        </nav>
                        <h2></h2>
                        <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=53632">
                            <img src="{{asset('/clients/themes/template/images/registed-alert.png')}}" alt=""/>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-3">
                        <h2 class="footer__title">Thông tin liên hệ</h2>
                        <h3 class="footer__subtitle">Chi nhánh tại Hà Nội</h3>
                        <ul class="footer__contact mb-3">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Địa chỉ: La Casa Villa 25 Vũ Ngọc Phan. P Láng Hạ. Q Đống Đa. HN</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Hotline: 0948.121.389</span>
                            </li>
                            <!-- <li>
                <i class="fa fa-envelope"></i>
                <span>Email: </span>
            </li> -->
                            <li>
                                <a class="footer__link" href="https://maps.app.goo.gl/HukS5AN4k6zePrUa7"
                                   target="_blank">Xem bản đồ</a>
                            </li>
                        </ul>
                        <h3 class="footer__subtitle">Chi nhánh tại TP HCM</h3>
                        <ul class="footer__contact mb-3">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Địa chỉ: 56/1 Nguyễn Thông, Phường 9. Quận 3. HCM</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Hotline: 0938.730.620</span>
                            </li>
                            <!-- <li>
                <i class="fa fa-envelope"></i>
                <span>Email: </span>
            </li> -->
                            <li>
                                <a class="footer__link" href="https://maps.app.goo.gl/vVoVCyjnUaaG99EaA"
                                   target="_blank">Xem bản đồ</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="fb-page" data-href="https://www.facebook.com/SLaudio.Taingheviet/" data-tabs=""
                     data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/SLaudio.Taingheviet/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/SLaudio.Taingheviet/">SLaudio - TAI NGHE VIỆT Headphone
                            Store</a>
                    </blockquote>
                </div>


            </div>
        </div>
        <hr class="border-secondary"/>
        <div class="nav justify-content-between pb-4">
            <div class="mb-12 mr-4">Copyright © 2025 HỘ KINH DOANH TAI NGHE VIỆT - MST: 01G8020587 - Bản quyền thuộc
                SLaudio - TAI NGHE VIỆT .
            </div>
            <ul class="nav mb-12">
                <a class="mr-2 m-last-0" href="https://www.facebook.com/SLaudio.Taingheviet/">
                    <img src="{{asset('/clients/themes/template/images/icon-facebook-square.png')}}" alt="facebook"
                         style="height: 17px;"/>
                </a>
                <a class="mr-2 m-last-0" href="https://plus.google.com/">
                    <img src="{{asset('/clients/themes/template/images/icon-google-plus-square.png')}}"
                         alt="google-plus"
                         style="height: 17px;"/>
                </a>
                <a class="mr-2 m-last-0" href="#">
                    <img src="{{asset('/clients/themes/template/images/icon-twitter-square.png')}}" alt="twitter"
                         style="height: 17px;"/>
                </a>
                <a class="mr-2 m-last-0" href="#">
                    <img src="{{asset('/clients/themes/template/images/icon-pinterest-square.png')}}" alt="pinterest"
                         style="height: 17px;"/>
                </a>
                <a class="mr-2 m-last-0" href="https://www.youtube.com/channel/UCGluSKp0MzAuy0KZ9rQUnfw">
                    <img src="{{asset('/clients/themes/template/images/icon-youtube-square.png')}}" alt="youtube"
                         style="height: 17px;"/>
                </a>
            </ul>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<!-- end footer-->

<!-- Hotline  -->
<div id="button-contact-vr" class="">
    <div id="gom-all-in-one">

        <div id="zalo-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a target="_blank" href="https://www.facebook.com/SLaudio.Taingheviet/">
                        <img src="{{asset('/clients/themes/template/images/facebook.png')}}">
                    </a>
                </div>
            </div>
        </div>
        <div id="zalo-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a target="_blank" href="https://zalo.me/0396199836">
                        <img src="{{asset('/clients/themes/template/images/zalo.png')}}">
                    </a>
                </div>
            </div>
        </div>
        <div id="phone-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a href="tel:0396199836" rel="nofollow">
                        <img src="{{asset('/clients/themes/template/images/phone.png')}}">
                    </a>
                </div>
            </div>
        </div>
        <div id="zalo-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a target="_blank" href="https://discord.gg/Rp3X87RVJP">
                        <img src="{{asset('/clients/themes/template/images/icon_discord.webp')}}">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End --><!-- javascript library-->
<!-- vendor script-->
<script src="{{asset('/clients/themes/template/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/ripple/js/ripple.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/slick-carousel/js/slick.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/jquery-zoom/jquery.zoom.min.js')}}"></script>
<script src="{{asset('/clients/themes/template/vendor/easy-autocomplete/jquery.easy-autocomplete.min.js')}}"></script>
@yield('lib-script')

<!-- custom script-->
<script src="{{asset('/clients/themes/template/js/jquery_cookie.js')}}"></script>
<script src="{{asset('/clients/themes/template/js/cart.js')}}"></script>
<script src="{{asset('/clients/themes/template/js/publish.js')}}"></script>
<script src="{{asset('/clients/themes/template/js/globals.js')}}"></script>

@yield('script')
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=1584361578555350";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


</body>

</html>
