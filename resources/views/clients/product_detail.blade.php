@extends('clients.layout')

@section('content')
    <div class="container">
        <nav>
            <ol class="breadcrumb border-bottom border-secondary rounded-0 px-0 mb-20">
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="link-unstyled" href="category/tai-nghe-moondrop2.html">Tai nghe Moondrop</a>
                </li>
                <li class="breadcrumb-item active">Moondrop METEOR</li>
            </ol>
        </nav>
        <div class="card card-body mb-50">
            <div class="row gutter-20">
                <div class="col-lg-7 mb-20">
                    <div class="position-relative h-100">
                        <article class="preview">
                            <div class="preview__thumbs js-thumbs">
                                <div class="preview__thumbs-float">
                                    <div class="preview__thumb-prev"><i class="fa fa-angle-up"></i></div>
                                    <div class="preview__thumb-next"><i class="fa fa-angle-down"></i></div>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            @if($product->image)
                                                <div class="swiper-slide">
                                                    <div class="preview__thumb-wrap">
                                                        <img
                                                            src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}"
                                                            alt="{{ $product->name }}"
                                                            onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                    </div>
                                                </div>
                                            @endif
                                                @if($product->productMedias->count())
                                                    @foreach($product->productMedias as $item)
                                                        @if($item->mediat_type == 'image')
                                                            <div class="swiper-slide">
                                                                <div class="preview__thumb-wrap">
                                                                    <img
                                                                        src="{{ \Illuminate\Support\Facades\Storage::url($item->url) }}"
                                                                        alt="{{ $product->name }}"
                                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="preview__frame js-preview">
                                <div class="preview__frame-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            @if($product->image)
                                                <div class="swiper-slide">
                                                    <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                    <div class="preview__iwrap zoom"
                                                         data-zoom-image="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}">
                                                        <img
                                                            src="{{ \Illuminate\Support\Facades\Storage::url($product->image) }}"
                                                            alt="{{ $product->name }}"
                                                            onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($product->productMedias->count())
                                                @foreach($product->productMedias as $item)
                                                    <div class="swiper-slide">
                                                        <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                        <div class="preview__iwrap zoom"
                                                             data-zoom-image="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}">
                                                            <img
                                                                src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}"
                                                                alt="{{ $product->name }}"
                                                                onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-5 mb-20">
                    <h1 class="text-20 text-uppercase font-weight-500 border-bottom mb-12 pb-10">
                        {{$product->name}}
                    </h1>
                    <p class="text-24 font-weight-bold text-red mb-12">{{ $product->formatted_price }}
                        <del
                            class="text-16 text-muted ml-3">0VNĐ
                        </del>
                    </p>
                    <div class="nav align-items-center">
                        <span class="mr-1 mb-12">Tình trạng: </span>
                        <span class="text-red mr-3 mb-12">Còn hàng</span>
                        <div class="agency dropdown mb-12">
                            <div class="agency__box dropdown-toggle" data-toggle="dropdown">Đang có tại
                                <span class="agency__number">2</span>
                                cửa hàng
                            </div>
                            <div class="agency__menu dropdown-menu">
                                <div class="agency__item">
                                    <div class="agency__place">69 Láng Hạ, Đống Đa, Hà Nội</div>
                                    <div class="agency__desc">
                                        <span>Hiện có màu</span>
                                        <span class="agency__color" style="background-color: #f00;"></span>
                                    </div>
                                </div>
                                <div class="agency__item">
                                    <div class="agency__place">69 Láng Hạ, Đống Đa, Hà Nội</div>
                                    <div class="agency__desc">
                                        <span>Hiện có màu</span>
                                        <span class="agency__color" style="background-color: #f00;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mb-12">Bảo hành: 12 Tháng</p>
                    <a class="btn btn-pink btn-block btn-lg mb-10 rounded-0"
                       href="javascript:order('?mod=cart&act=addcart&temp_id=12016',12950000);">MUA
                        NGAY</a>
                    <div class="product-intro js-product-intro">

                        <div class="product-intro__btn js-product-intro-btn">
                            <span>Xem thêm</span>
                            <i class="fa fa-angle-double-down"></i>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs mb-20 detail-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#specifications" role="tab" data-toggle="tab">THÔNG SỐ KỸ
                        THUẬT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#video" role="tab" data-toggle="tab">VIDEO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#review" role="tab" data-toggle="tab">REVIEW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#comment" role="tab" data-toggle="tab">BÌNH LUẬN</a>
                </li>
            </ul>
            <div class="post-content tab-content mb-20" style="overflow: hidden;">
                <div class="tab-pane fade active show" id="specifications" role="tabpanel">
                    {!! $product->technical_specs !!}
                </div>
                <div class="tab-pane fade" id="video" role="tabpanel">
                    @if($product->productMedias->count())
                        @foreach($product->productMedias as $item)
                            @if($item->media_type == 'video')
                                <video src="{{ \Illuminate\Support\Facades\Storage::url($item->url) }}"></video>
                            @endif
                        @endforeach
                    @else
                        <p>Đang cập nhật</p>
                    @endif
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel">
                    {!! $product->description !!}
                </div>
                <div class="tab-pane fade" id="comment" role="tabpanel">
                    <div class="fb-comments" data-href="https://taingheviet.com/moondrop-meteor-pr12016.html"
                         data-width="100%" data-numposts="25"></div>
                </div>
            </div>
            <section>
                <nav class="d-flex rounded mb-20 bg-blue">
                    <h2 class="heading rounded-left">
                        <a class="media link-unstyled py-2 pr-20 js-title-tab pl-20" href="#section-1-tab-1">
                            <div class="media-body">SẢN PHẨM Liên quan</div>
                        </a>
                    </h2>
                </nav>
                <div class="product-slider owl-carousel js-product-slider">
                    <!-- product-->
                    <div class="product card border-0 h-100 mx-auto">

                        <div class="product__new">NEW</div>
                        <div class="product__body card-body d-flex flex-column p-2 pb-3">
                            <a class="product__iwrap d-block link-unstyled"
                               href="moondrop-echo-b-bl44-pr12045.html">
                                <div class="iwrap-100 over-hidden">
                                    <img
                                        src="{{ asset('/clients/uploads/moondrop/Moondrop%20Echo%20B/Ech%20(1).png') }}"
                                        alt="Moondrop Echo B ( BL44 )"
                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                </div>
                                <div class="product__title text-center my-2">Moondrop Echo B ( BL44 )</div>
                            </a>
                            <div class="product__price text-center mb-4">
                                <span class="mx-1 text-16">520.000 VNĐ</span>
                            </div>
                            <div class="product__btn-wrap text-center mt-auto">
                                <a class="btn btn-blue"
                                   href="javascript:addToCart('?mod=cart&act=addcart&temp_id=12045',520000);">Thêm
                                    vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <!-- product-->
                    <div class="product card border-0 h-100 mx-auto">

                        <div class="product__new">NEW</div>
                        <div class="product__body card-body d-flex flex-column p-2 pb-3">
                            <a class="product__iwrap d-block link-unstyled" href="moondrop-echo-a-pr12046.html">
                                <div class="iwrap-100 over-hidden">
                                    <img
                                        src="{{ asset('/clients/uploads/moondrop/Moondrop%20Echo%20A/Echo%203%20(1).png') }}"
                                        alt="Moondrop Echo A"
                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                </div>
                                <div class="product__title text-center my-2">Moondrop Echo A</div>
                            </a>
                            <div class="product__price text-center mb-4">
                                <span class="mx-1 text-16">470.000 VNĐ</span>
                            </div>
                            <div class="product__btn-wrap text-center mt-auto">
                                <a class="btn btn-blue"
                                   href="javascript:addToCart('?mod=cart&act=addcart&temp_id=12046',470000);">Thêm
                                    vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <!-- product-->
                    <div class="product card border-0 h-100 mx-auto">

                        <div class="product__body card-body d-flex flex-column p-2 pb-3">
                            <a class="product__iwrap d-block link-unstyled" href="moondrop-psyche-pr12038.html">
                                <div class="iwrap-100 over-hidden">
                                    <img
                                        src="{{ asset('/clients/uploads/moondrop/Moondrop%20Psyche/Moondrop%20Pysche%20(1).jpg') }}"
                                        alt="MOONDROP Psyche"
                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                </div>
                                <div class="product__title text-center my-2">MOONDROP Psyche</div>
                            </a>
                            <div class="product__price text-center mb-4">
                                <span class="mx-1 text-16">52.500.000 VNĐ</span>
                            </div>
                            <div class="product__btn-wrap text-center mt-auto">
                                <a class="btn btn-blue"
                                   href="javascript:addToCart('?mod=cart&act=addcart&temp_id=12038',52500000);">Thêm
                                    vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
