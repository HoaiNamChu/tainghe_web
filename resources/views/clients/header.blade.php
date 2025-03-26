<header class="header text-white"
        style="background: url('{{asset('/clients/themes/template/images/night-bg.png')}}') center/cover no-repeat;">
    <div class="container">
        <div class="position-relative">
            <div class="row gutter-20 align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <a class="link-unstyled d-flex align-items-center py-12" href="{{ route('home.index') }}">
                        <div class="media"></div>
                        <img class="mr-3" src="{{asset('/clients/uploads/logo.png')}}" alt="logo"
                             onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"/>
                        <div class="media-body d-flex">
                            <div class="text-center">
                                <p class="text-24 font-avobold text-uppercase mb-2">CHU HOÀI NAM</p>
                                <p class="text-16 mb-0">Headphone Shop</p>
                                <p class="d-md-none text-16 font-weight-700 text-center mt-2">
                                    <i class="fa fa-phone mr-2"></i>
                                    <span>Hotline: 0123.456.789</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-7 col-md-6">
                    <form class="search" action="https://taingheviet.com/tim-kiem.html" method="GET">
                        <div class="input-group text-white">
                            <input class="form-control search-input" type="text" placeholder="Tìm kiếm sản phẩm"
                                   value="" autocomplete="Off" name="key" required/>
                            <span class="input-group-append">
                                    <button class="input-group-text" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            <div class="search_result"></div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="text-20 font-weight-800 my-12 text-center text-md-right">
                        <i class="fa fa-phone"></i>
                        <span>Hotline: 0123.456.789</span>
                    </div>
                </div>
                <div class="col-12 position-static">
                    <div class="header-links text-white d-flex justify-content-between py-2">
                        <a class="m-last-0 link-unstyled" href=".md-cart" data-toggle="modal"
                           onclick="showCartContent(this);" data-toid="#listCartContent">
                            <i class="fa fa-shopping-cart mr-1"></i>
                            <span class="d-none d-md-inline">Giỏ hàng</span>
                            <span>(<span class="total_cart_item"
                                         id="total_cart_item">{{ session('cart') ? count(session('cart')) : 0 }}</span>)</span>
                        </a>
                        @if(auth()->check())
                            <a class="m-last-0 link-unstyled" href="#!">
                                <i class="fa fa-user-o mr-1"></i>
                                <span>{{ \Illuminate\Support\Facades\Auth::user()->username }}</span>
                            </a>
                            <a class="d-none d-md-block m-last-0 link-unstyled" href="{{ route('logout') }}">
                                <i class="fa fa-sign-out mr-1"></i>
                                <span>Đăng xuất</span>
                            </a>
                        @else
                            <a class="d-none d-md-block m-last-0 link-unstyled" href="{{ route('register') }}">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                <span>Đăng ký</span>
                            </a>
                            <a class="d-none d-md-block m-last-0 link-unstyled" href="{{ route('login') }}">
                                <i class="fa fa-lock mr-1"></i>
                                <span>Đăng nhập</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="bg-blue text-white js-navigation">
        <div class="container">
            <div class="d-flex justify-content-between d-xl-none align-items-baseline">
                <button class="border-0 bg-transparent text-white text-16 py-2 js-mb-menu-btn">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                </button>
                <div class="text-16 font-weight-700 text-center text-md-right d-none d-md-block">
                    <i class="fa fa-phone"></i>
                    <span>Hotline: 0932.347.414</span>
                </div>
                <div class="d-md-none py-1 px-2 js-search-btn">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="navbar-backdrop js-mb-filter"></div>
            <div class="navbar navbar-mobile navbar-expand-xl p-0 js-mb-menu">
                <div class="row gutter-20">
                    <div class="col-xl-3">
                        <div class="navbar-nav">
                            <div class="dropdown py-1 w-100 position-static">
                                <div class="dropdown-btn px-20 py-2 cursor-pointer js-dropdown-toggle">
                                    <i class="fa fa-bars mr-3"></i>
                                    <strong>DANH MỤC SẢN PHẨM</strong>
                                </div>
                                <div
                                    class="w-100 dropdown-menu bg-transparent py-0 px-10 rounded-0 js-product-menu js-dropdown-menu">
                                    <div class="px-10 bg-gray-200 shadow">
                                        @foreach($categories as $category)
                                            <div class="dropdown dropright dropdown-hover-lg position-static">
                                                <a class="d-block link-unstyled border-bottom-dashed border-secondary border-last-0 js-ripple"
                                                   href="category/tai-nghe2.html">
                                                    <div class="media align-items-center">
                                                        <div class="d-flex align-items-center justify-content-center"
                                                             style="width: 55px; height: 60px;">
                                                            <img
                                                                src="{{asset('/clients/themes/template/images/icon-headphone.png')}}"
                                                                alt="Tai nghe"/>
                                                        </div>
                                                        <div class="media-body text-uppercase">{{ $category->name }}</div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mega-menu">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="text-14 font-weight-bold text-uppercase border-bottom-dashed mb-2 py-20">
                                                                <a href="category/tai-nghe2.html"
                                                                   class="link-unstyled">Tai nghe</a>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a class="link-unstyled d-block mb-6"
                                                                       href="category/tai-nghe-1more4.html">Tai nghe
                                                                        1More</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="link-unstyled d-block mb-6"
                                                                       href="category/tai-nghe-64-audio.html">Tai nghe
                                                                        64 Audio</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="link-unstyled d-block mb-6"
                                                                       href="category/tai-nghe-7hz.html">Tai nghe
                                                                        7Hz</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="link-unstyled d-block mb-6"
                                                                       href="category/tai-nghe-aaw.html">Tai nghe
                                                                        AAW</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="link-unstyled d-block mb-6"
                                                                       href="category/tai-nghe-abyss.html">Tai Nghe
                                                                        Abyss</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <ul class="navbar-nav">
                            <li>
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('shop.index') }}">
                                    <span class="d-block px-30 py-1 my-2">Sản phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('about') }}">
                                    <span class="d-block px-30 py-1 my-2">Giới thiệu</span>
                                </a>
                            </li>
                            <li>
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('repair_service') }}">
                                    <span class="d-block px-30 py-1 my-2">Dịch vụ Sửa chữa</span>
                                </a>
                            </li>
                            <li>
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('shopping_guide') }}">
                                    <span class="d-block px-30 py-1 my-2">Hướng dẫn mua hàng</span>
                                </a>
                            </li>
                            <li>
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('blog') }}">
                                    <span class="d-block px-30 py-1 my-2">Tin tức</span>
                                </a>
                            </li>
                            <li class="dropdown dropdown-hover-xl">
                                <a class=" link-unstyled d-block js-ripple" href="{{ route('contact') }}">
                                    <span class="d-block px-30 py-1 my-2">Liên hệ</span>
                                </a>
                                <span class="dropdown-caret dropdown-caret-light js-dropdown-toggle"></span>
                                <div class="dropdown-menu dropdown-menu-right js-dropdown-menu">
                                    <div class="dropdown-item">Chi nhánh 1 : Lai xá, Hoài Đức, Hà Nội.
                                    </div>
                                    <div class="dropdown-item">Hotline: 0987.654.321.</div>
                                    <div class="dropdown-item">Email: chunam2606@gmail.com</div>
                                    <div class="dropdown-item">Chi nhánh 2 : Lai xá, Hoài Đức, Hà Nội.
                                    </div>
                                    <div class="dropdown-item">Hotline: 0987.654.321.</div>
                                    <div class="dropdown-item">Email: chunam2606@gmail.com.</div>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 d-xl-none">
                        <div class="border-light border-top my-2"></div>
                        <ul class="navbar-nav">
                            <li>
                                <a class="link-unstyled d-block js-ripple" href="{{ route('register') }}">
                                        <span class="d-block px-30 py-1 my-2">
                                            <i class="fa fa-pencil-square-o mr-1"></i>
                                            <span>Đăng ký</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="link-unstyled d-block js-ripple" href="{{ route('login') }}">
                                        <span class="d-block px-30 py-1 my-2">
                                            <i class="fa fa-lock mr-1"></i>
                                            <span>Đăng nhập</span>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


