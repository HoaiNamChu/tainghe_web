@extends('clients.layout')


@section('content')
    <section class="mb-md-20">
        <div class="container banner-container">
            <div class="row gutter-20">
                <div class="col-xl-9 offset-xl-3">
                    <article class="id-banner carousel slide" data-ride="carousel" data-inverval="3000">
                        <ol class="carousel-indicators">
                            <li class="active" data-target=".id-banner" data-slide-to="0"></li>
                            <li class="" data-target=".id-banner" data-slide-to="1"></li>
                            <li class="" data-target=".id-banner" data-slide-to="2"></li>
                            <li class="" data-target=".id-banner" data-slide-to="3"></li>
                            <li class="" data-target=".id-banner" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="https://discord.gg/taingheviet">
                                    <img class="d-block w-100 h-100"
                                         src="{{asset('/clients/uploads/thamgiacdslaudiotd.png')}}" alt=""
                                         style="object-fit: cover;object-position: 50% 50%;">
                                </a>
                            </div>
                            <div class="carousel-item ">
                                <a
                                    href="https://docs.google.com/spreadsheets/d/1UfRH7lOHBoZK5nRDlAbK_Wvm__DgXvMhMo0xs05JaNI/edit?usp=sharing">
                                    <img class="d-block w-100 h-100"
                                         src="{{asset('/clients/uploads/z5875056221684_668a69de5cb0ca1fde42314627ef8cdd.jpg')}}"
                                         alt=""
                                         style="object-fit: cover;object-position: 50% 50%;">
                                </a>
                            </div>
                            <div class="carousel-item ">
                                <a
                                    href="https://docs.google.com/spreadsheets/d/1-oDz_2RzpbuGnDJNG94SBNGZbeda2cdR0Uff8lI38Ps/edit?gid=438971658#gid=438971658">
                                    <img class="d-block w-100 h-100"
                                         src="{{asset('/clients/uploads/Slider/Sale%20phu%20kien.jpg')}}"
                                         alt="" style="object-fit: cover;object-position: 50% 50%;">
                                </a>
                            </div>
                            <div class="carousel-item ">
                                <a href="javascript:;">
                                    <img class="d-block w-100 h-100"
                                         src="{{asset('/clients/uploads/Slider/HA2A%20-%202.jpg')}}" alt=""
                                         style="object-fit: cover;object-position: 50% 50%;">
                                </a>
                            </div>
                            <div class="carousel-item ">
                                <a href="javascript:;">
                                    <img class="d-block w-100 h-100"
                                         src="{{asset('/clients/uploads/Slider/Topping%20banner%20newS%202024.jpg')}}"
                                         alt=""
                                         style="object-fit: cover;object-position: 50% 50%;">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href=".id-banner" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href=".id-banner" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @foreach($productsOfCategory as $item)
        @if($item->products->count())
            <section>
                <div class="container">
                    <nav class="title-bar">
                        <h2 class="title-bar__title">
                            <a href="javascript:;">
                                <img src="{{asset('/clients/uploads/index.html')}}"
                                     onerror="this.src='{{asset('/clients/themes/template/images/icon-headphone-white.png')}}'"
                                     alt="Tai nghe"
                                     style="-webkit-filter: invert(100%);filter: invert(100%);">
                                <span>{{ $item->name }}</span>
                            </a>
                        </h2>
                        <ul class="title-bar__nav nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link js-ripple active" href="#san-pham-moi-{{$item->id}}"
                                   data-toggle="tab" role="tab">SẢN
                                    PHẨM MỚI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ripple " href="#san-pham-hot-{{$item->id}}" data-toggle="tab"
                                   role="tab">SẢN PHẨM
                                    HOT</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" role="tabpanel" id="san-pham-moi-{{$item->id}}">
                            <div class="mobile-slider owl-carousel js-mobile-slider">
                                @foreach($item->products as $pro)
                                    <div class="mobile-slider__item">
                                        <!-- product-->
                                        <div class="product card border-0 h-100 mx-auto shadow">

                                            <div class="product__body card-body d-flex flex-column p-2 pb-3">
                                                <a class="product__iwrap d-block link-unstyled border-0"
                                                   href="moondrop-meteor-pr12016.html">
                                                    <div class="iwrap-100 over-hidden">
                                                        <img
                                                            src="{{ $pro->image }}"
                                                            alt="Moondrop METEOR"
                                                            onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"/>
                                                    </div>
                                                    <div class="product__title text-center my-2">{{ $pro->name }}</div>
                                                </a>
                                                <div class="product__price text-center mb-4">
                                                    <span class="mx-1 text-16">{{ number_format($pro->productVariants[0]->price) }} VNĐ</span>
                                                </div>
                                                <div class="product__btn-wrap text-center mt-auto">
                                                    <a class="btn btn-blue"
                                                       href="javascript:addToCart('{{ $pro->id }}', {{$pro->productVariants[0]->price}}, '#listCartContent', false);">Thêm
                                                        vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" id="san-pham-hot-{{$item->id}}">
                            <div class="mobile-slider owl-carousel js-mobile-slider">
                                @foreach($item->products as $pro)
                                    <div class="mobile-slider__item">
                                        <!-- product-->
                                        <div class="product card border-0 h-100 mx-auto shadow">

                                            <div class="product__new">NEW</div>
                                            <div class="product__body card-body d-flex flex-column p-2 pb-3">
                                                <a class="product__iwrap d-block link-unstyled border-0"
                                                   href="kiwi-ears-atheia-pr12095.html">
                                                    <div class="iwrap-100 over-hidden">
                                                        <img
                                                            src="{{ $pro->image }}"
                                                            alt="kiwi ears atheia"
                                                            onerror="this.src='{{asset('/clients/themes/template/images/nopic.png')}}'"/>
                                                    </div>
                                                    <div class="product__title text-center my-2">{{ $pro->name }}</div>
                                                </a>
                                                <div class="product__price text-center mb-4">
                                                    <span class="mx-1 text-16">{{ number_format($pro->productVariants[0]->price) }} VNĐ</span>
                                                </div>
                                                <div class="product__btn-wrap text-center mt-auto">
                                                    <a class="btn btn-blue"
                                                       href="javascript:addToCart('{{ $pro->id }}', {{$pro->productVariants[0]->price}}, '#listCartContent', false);">Thêm
                                                        vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach

@endsection
