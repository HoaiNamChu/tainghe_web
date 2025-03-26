@extends('clients.layout')

@section('title', 'Sản phẩm')

@section('content')
    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="{{ route('home.index') }}">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Tai nghe</li>
            </ol>
        </nav>
        <div class="row gutter-20">
            <div class="col-xl-9 col-lg-8 order-lg-1 mb-20">
                <div class="product-panel card card-body">
                    <div class="d-flex flex-wrap justify-content-between border-bottom align-items-center">
                        <h1 class="text-18 font-weight-600 mr-30 mb-20">Tai nghe</h1>
                        <form class="form-inline" method="get">
                            <div class="mr-40 m-last-0">
                                <select name="sortBy" class="form-control mb-20" onchange="this.form.submit();">
                                    <option value="">Sắp xếp</option>
                                    <option value="name">Theo tên</option>
                                    <option value="view">Lượt xem</option>
                                    <option value="new">Ngày đăng</option>
                                    <option value="price_up">Giá tăng dần</option>
                                    <option value="price_down">Giá giảm dần</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="row gutter-20 gutter-sm-10">
                        @foreach($products as $item)
                            <div class="col-4 col-sm-4 col-lg-3 mb-20">
                                <!-- product-->
                                <div class="product card border-0 h-100 mx-auto">

                                    <div class="product__body card-body d-flex flex-column p-2 pb-3">
                                        <a class="product__iwrap d-block link-unstyled"
                                           href="../audio-technica-ath-m50x-pr4921.html">
                                            <div class="iwrap-100 over-hidden">
                                                <img src="{{ $item->image }}"
                                                     alt="{{ $item->name }}"
                                                     onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"/>
                                            </div>
                                            <div class="product__title text-center my-2">{{ $item->name }}</div>
                                        </a>
                                        <div class="product__price text-center mb-4">
                                            @if($item->productVariants->count() == 1)
                                                <span class="mx-1 text-16">{{ number_format($item->productVariants[0]->price) }} VND</span>
                                            @endif
                                        </div>
                                        <div class="product__btn-wrap text-center mt-auto">
                                            <a class="btn btn-blue"
                                               href="javascript:addToCart('{{ $item->id }}', {{$item->productVariants[0]->price}}, '#listCartContent', false);">Thêm
                                                vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination mb-0">
                            <li class='page-item disabled '><a class='page-link '><i
                                        class="fa fa-angle-double-left"></i></a></li>
                            <li class='active page-item '><a class='page-link '>1</a></li>
                            <li class='page-item '><a class='page-link ' href='tai-nghe22679.html?page=1'
                                                      title='2'>2</a></li>
                            <li class='page-item '><a class='page-link ' href='tai-nghe24658.html?page=2'
                                                      title='3'>3</a></li>
                            <li class='page-item '><a class='page-link ' href='tai-nghe29ba9.html?page=3'
                                                      title='4'>4</a></li>
                            <li class='page-item '><a class='page-link ' href='tai-nghe2fdb0.html?page=4'
                                                      title='5'>5</a></li>
                            <li class='page-item '><a class='page-link ' href='tai-nghe2af4d.html?page=5'
                                                      title='6'>...</a></li>
                            <li class='page-item m-paging__item'><a class='page-link '
                                                                    href='tai-nghe22679.html?page=1' title='2'><i
                                        class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 mb-20">
                <aside>
                    <section class="card mb-20">
                        <h2 class="card-header text-14 bg-blue text-white py-10 pl-0 d-flex">
                                <span class="d-inline-flex justify-content-center align-items-center"
                                      style="width: 50px; height: 18px;">
                                    <img class="mw-100 mh-100"
                                         src="{{asset('/clients/themes/template/images/icon-star-white.png')}}"
                                         alt=""/>
                                </span>
                            <span class="text-uppercase font-weight-600">DANH MỤC</span>
                        </h2>
                        <div class="card-body">
                            <ul class="navbar-aside list-unstyled mb-0">
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="tai-nghe2.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Tai nghe</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe-earbud.html">Tai Nghe
                                                Earbud</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="phu-kien-tai-nghe-earbud.html">Phụ
                                                    kiện tai nghe Earbud</a>
                                                <a class="dropdown-item" href="tai-nghe-1more2.html">Tai nghe
                                                    1More</a>
                                                <a class="dropdown-item" href="tai-nghe-edifier2.html">Tai nghe
                                                    Edifier</a>
                                                TGXEAR</a>
                                                <a class="dropdown-item" href="tai-nghe-fidue2.html">Tai Nghe
                                                    Fidue</a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="phu-kien-ddhifi.html">Phụ kiện DDHiFi</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="may-nghe-nhac.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Máy nghe nhạc</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="may-nghe-nhac-sony.html">Máy nghe
                                                nhạc Sony</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="sony-ps.html">Sony PlayStation 5</a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="phu-kien-ddhifi.html">Phụ kiện DDHiFi</a>
                                        <a class="dropdown-item" href="may-nghe-nhac-f-audio.html">Máy nghe nhạc
                                            F.AUDIO</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="amps-dacs.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Amps &amp; DACS</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="fosi-audio.html">Fosi Audio</a>
                                        <a class="dropdown-item" href="soundaware.html">SOUNDAWARE</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="loa.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Loa</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="loa-ultimate-ears.html">Loa Ultimate Ears</a>
                                        <a class="dropdown-item" href="loa-kanto.html">Loa Kanto</a>
                                        <a class="dropdown-item" href="loa-kef.html">Loa KEF</a>
                                        <a class="dropdown-item" href="loa-moondrop.html">Loa Moondrop</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="phu-kien.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Phụ kiện</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="cap-tai-nghe-4pin.html">Cáp tai nghe 4pin</a>
                                        <a class="dropdown-item" href="cap-tai-nghe-yongse.html">Cáp Tai Nghe
                                            YongSe</a>
                                        <a class="dropdown-item" href="cap-tai-nghe-meze-audio.html">Cáp tai nghe
                                            Meze Audio</a>
                                        <a class="dropdown-item" href="cap-tai-nghe-crystal.html">Cap Tai Nghe
                                            Crystal</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="dich-vu-sua-chua-tai-ha-noi.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Dịch vụ Sửa chữa ( Tại Hà Nội )</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="thay-connector-tai-nghe.html">Thay Connector
                                            tai nghe</a>
                                        <a class="dropdown-item" href="thay-giac-furutech.html">Thay giắc
                                            Furutech</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block"
                                       href="di-ch-vu-su-a-chu-a-ta-i-ho-chi-minh.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Dịch Vụ Sửa Chữa ( Tại Hồ Chí Minh )</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="thay-giac-oyaide.html">Thay giắc Oyaide</a>
                                        <a class="dropdown-item" href="thay-giac-nobunaga.html">Thay giắc
                                            Nobunaga</a>
                                        <a class="dropdown-item" href="thay-connector-cao-ca-p.html">Thay Connector
                                            Cao Cấp</a>
                                        <a class="dropdown-item" href="thay-day-tai-nghe2.html">Thay dây tai
                                            nghe</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="sim-racing.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Sim Racing</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="moza-racing.html">Moza Racing</a>
                                        <a class="dropdown-item" href="vnm-simulation.html">VNM Simulation</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="card mb-20">
                        <h2 class="card-header text-14 bg-blue text-white py-10 pl-0 d-flex">
                                <span class="d-inline-flex justify-content-center align-items-center"
                                      style="width: 50px; height: 18px;">
                                    <img class="mw-100 mh-100"
                                         src="{{asset('/clients/themes/template/images/icon-star-white.png')}}"
                                         alt=""/>
                                </span>
                            <span class="text-uppercase font-weight-600">THƯƠNG HIỆU</span>
                        </h2>
                        <div class="card-body">
                            <ul class="navbar-aside list-unstyled mb-0">
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="tai-nghe2.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Tai nghe</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe-earbud.html">Tai Nghe
                                                Earbud</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="tai-nghe-sivga2.html">Tai nghe
                                                    Sivga</a>
                                                <a class="dropdown-item" href="tai-nghe-ucotech.html">Tai Nghe
                                                    Ucotech</a>
                                                <a class="dropdown-item" href="tai-nghe-tgxear.html">Tai Nghe
                                                    TGXEAR</a>
                                                <a class="dropdown-item" href="tai-nghe-fidue2.html">Tai Nghe
                                                    Fidue</a>
                                            </div>
                                        </div>
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe-bluetooth.html">Tai Nghe
                                                Bluetooth</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="phu-kien-tai-nghe-bluetooth.html">Phụ
                                                    kiện tai nghe Bluetooth</a>
                                                <a class="dropdown-item" href="tai-nghe-cleer-audio.html">Tai Nghe
                                                    CLEER AUDIO</a>
                                                <a class="dropdown-item" href="tai-nghe-jlab.html">Tai Nghe JLab</a>
                                            </div>
                                        </div>
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe2.html">Tai nghe</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="tai-nghe-toneking2.html">Tai nghe
                                                    Toneking</a>
                                                <a class="dropdown-item" href="tai-nghe-trn.html">Tai nghe TRN</a>
                                                <a class="dropdown-item" href="tai-nghe-epz.html">tai nghe EPZ</a>
                                                <a class="dropdown-item" href="tai-nghe-ziigaat.html">tai nghe
                                                    ZiiGaat</a>
                                                <a class="dropdown-item" href="tai-nghe-aoshida.html">Tai nghe
                                                    AOSHIDA</a>
                                            </div>
                                        </div>
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe-true-wireless.html">Tai
                                                nghe True Wireless</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="tai-nghe-jabees.html">Tai nghe
                                                    Jabees</a>
                                                <a class="dropdown-item" href="tai-nghe-bboooll.html">Tai Nghe
                                                    Bboooll</a>
                                                <a class="dropdown-item" href="tai-nghe-final-audio.html">Tai Nghe
                                                    Final Audio</a>
                                                <a class="dropdown-item" href="tai-nghe-tribit.html">Tai Nghe
                                                    Tribit</a>
                                                <a class="dropdown-item" href="tai-nghe-fiio4.html">tai nghe
                                                    Fiio</a>
                                                <a class="dropdown-item" href="tai-nghe-freedots.html">tai nghe
                                                    FREEDOTS</a>
                                                <a class="dropdown-item" href="tai-nghe-tanchjim2.html">tai nghe
                                                    tanchjim</a>
                                                <a class="dropdown-item" href="tai-nghe-earfun.html">Tai nghe
                                                    EarFun</a>
                                            </div>
                                        </div>
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="tai-nghe-noise-cancelling.html">Tai
                                                nghe Noise Cancelling</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="edifier.html">Edifier</a>
                                                <a class="dropdown-item" href="beats.html">Beats</a>
                                                <a class="dropdown-item" href="sony2.html">Sony</a>
                                                <a class="dropdown-item" href="skullcandy.html">Skullcandy</a>
                                                <a class="dropdown-item" href="sennheiser.html">Sennheiser</a>
                                                <a class="dropdown-item" href="hp.html">HP</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="may-nghe-nhac.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Máy nghe nhạc</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="may-nghe-nhac-astell-kern.html">Máy nghe nhạc
                                            Astell&amp;Kern</a>
                                        <a class="dropdown-item" href="may-nghe-nhac-aune.html">Máy nghe nhạc
                                            Aune</a>
                                        <div class="dropdown js-dropdown-menu">
                                            <a class="pr-5 dropdown-item" href="may-nghe-nhac-sony.html">Máy nghe
                                                nhạc Sony</a>
                                            <span class="dropdown-caret js-dropdown-toggle"></span>
                                            <div class="dropdown-menu js-dropdown-menu">
                                                <a class="dropdown-item" href="sony-ps.html">Sony PlayStation 5</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="amps-dacs.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Amps &amp; DACS</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="astell-kern.html">Astell&amp;Kern</a>
                                        <a class="dropdown-item" href="audeze.html">Audeze</a>
                                        <a class="dropdown-item" href="bgvp.html">BGVP</a>
                                        <a class="dropdown-item" href="blue-hawaii.html">Blue Hawaii</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="loa.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Loa</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="loa-kef.html">Loa KEF</a>
                                        <a class="dropdown-item" href="loa-moondrop.html">Loa Moondrop</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="phu-kien.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Phụ kiện</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="cap-tai-nghe-meze-audio.html">Cáp tai nghe
                                            Meze Audio</a>
                                        <a class="dropdown-item" href="cap-tai-nghe-crystal.html">Cap Tai Nghe
                                            Crystal</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="dich-vu-sua-chua-tai-ha-noi.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Dịch vụ Sửa chữa ( Tại Hà Nội )</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="thay-connector-tai-nghe.html">Thay Connector
                                            tai nghe</a>
                                        <a class="dropdown-item" href="thay-giac-tai-nghe.html">Thay giắc tai
                                            nghe</a>
                                        <a class="dropdown-item" href="thay-day-tai-nghe-diy2.html">Thay dây tai
                                            nghe DIY</a>
                                        <a class="dropdown-item" href="thay-day-tai-nghe.html">Thay dây tai nghe</a>
                                        <a class="dropdown-item" href="thay-giac-pentaconn.html">Thay giắc
                                            Pentaconn</a>
                                        <a class="dropdown-item" href="thay-giac-furutech.html">Thay giắc
                                            Furutech</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block"
                                       href="di-ch-vu-su-a-chu-a-ta-i-ho-chi-minh.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Dịch Vụ Sửa Chữa ( Tại Hồ Chí Minh )</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="thay-giac-oyaide.html">Thay giắc Oyaide</a>
                                        <a class="dropdown-item" href="thay-giac-nobunaga.html">Thay giắc
                                            Nobunaga</a>
                                        <a class="dropdown-item" href="thay-connector-cao-ca-p.html">Thay Connector
                                            Cao Cấp</a>
                                        <a class="dropdown-item" href="thay-day-tai-nghe2.html">Thay dây tai
                                            nghe</a>
                                    </div>
                                </li>
                                <li class="py-2 dropdown">
                                    <a class="pr-5 link-unstyled d-block" href="sim-racing.html">
                                        <i class="fa fa-th-large text-10 mr-12"></i>
                                        <span>Sim Racing</span>
                                    </a>
                                    <span class="dropdown-caret js-dropdown-toggle"></span>
                                    <div class="dropdown-menu js-dropdown-menu">
                                        <a class="dropdown-item" href="moza-racing.html">Moza Racing</a>
                                        <a class="dropdown-item" href="vnm-simulation.html">VNM Simulation</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <form action="#" method="POST">
                        <section class="card mb-20">
                            <h2 class="card-header text-14 bg-blue text-white py-10 pl-0 d-flex">
                                    <span class="d-inline-flex justify-content-center align-items-center"
                                          style="width: 50px; height: 18px;">
                                        <img class="mw-100 mh-100"
                                             src="{{asset('/clients/themes/template/images/icon-star-white.png')}}"
                                             alt="giá"/>
                                    </span>
                                <span class="text-uppercase font-weight-600">giá</span>
                            </h2>
                            <div class="card-body">
                                <label class="form-check mb-1 m-last-0">
                                    <input class="form-check-input gia" id="f3" type="checkbox" name="f_filter[]"
                                           data-groupname="gia" data-checked="0" value="3"
                                           onclick="selectFilter(this); this.form.submit();"/>
                                    <span class="form-check-label ml-2">100000-300000</span>
                                </label>
                                <label class="form-check mb-1 m-last-0">
                                    <input class="form-check-input gia" id="f4" type="checkbox" name="f_filter[]"
                                           data-groupname="gia" data-checked="0" value="4"
                                           onclick="selectFilter(this); this.form.submit();"/>
                                    <span class="form-check-label ml-2">300000-1000000</span>
                                </label>
                                <label class="form-check mb-1 m-last-0">
                                    <input class="form-check-input gia" id="f5" type="checkbox" name="f_filter[]"
                                           data-groupname="gia" data-checked="0" value="5"
                                           onclick="selectFilter(this); this.form.submit();"/>
                                    <span class="form-check-label ml-2">300000-1000000</span>
                                </label>
                            </div>
                        </section>
                    </form>
                </aside>
            </div>
        </div>
    </div>
@endsection
