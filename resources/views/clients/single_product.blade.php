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
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/9200000f818b02798bbdba51db9982f4_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/e7258e40807e8f3fa61dea1b4d348111_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/4d3b1abe15d1c1d3afa9dffcf4de57e6_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/1bdfc45e06b669791d0ba65118abd495_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/6994c711fb40e25a88b03741a3135b65_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="preview__thumb-wrap">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/7231a848ed6c84b063372d7aa55244d5_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="preview__frame js-preview">
                                <div class="preview__frame-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/9200000f818b02798bbdba51db9982f4_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/9200000f818b02798bbdba51db9982f4_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/e7258e40807e8f3fa61dea1b4d348111_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/e7258e40807e8f3fa61dea1b4d348111_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/4d3b1abe15d1c1d3afa9dffcf4de57e6_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/4d3b1abe15d1c1d3afa9dffcf4de57e6_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/1bdfc45e06b669791d0ba65118abd495_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/1bdfc45e06b669791d0ba65118abd495_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/6994c711fb40e25a88b03741a3135b65_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/6994c711fb40e25a88b03741a3135b65_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- nếu dùng 1 ảnh to 1 ảnh nhỏ thì thêm data-zoom-image, còn ảnh to sẵn rồi thì ko cần-->
                                                <div class="preview__iwrap zoom"
                                                     data-zoom-image="https://{{ asset('/clients/taingheviet.com/uploads') }}/Moondrop/Moondrop METEOR/7231a848ed6c84b063372d7aa55244d5_800x800.png">
                                                    <img
                                                        src="{{ asset('/clients/uploads/Moondrop/Moondrop%20METEOR/7231a848ed6c84b063372d7aa55244d5_800x800.png') }}"
                                                        alt="Moondrop METEOR"
                                                        onerror="this.src='{{ asset('/clients/themes/template/images/nopic.png') }}'"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-5 mb-20">
                    <h1 class="text-20 text-uppercase font-weight-500 border-bottom mb-12 pb-10">Moondrop METEOR
                    </h1>
                    <p class="text-24 font-weight-bold text-red mb-12">12.950.000VNĐ
                        <del
                            class="text-16 text-muted ml-3">0VNĐ
                        </del>
                    </p>
                    <div class="nav align-items-center">
                        <span class="mr-1 mb-12">Tình trạng: </span>
                        <span class="text-red mr-3 mb-12">Còn hàng</span>
                        <!--<div class="agency dropdown mb-12">
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
                </div>-->
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
                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Model: Meteor</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Driver: 1 DD+2BA+4Planar with</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Three-way Frequency Crossover</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Sensitivity: 120dBNrms (@1 kHz)</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">THD+N: THD&lt;0.6% (@1kHz, 94dB)</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Connector: 0.78mm-2pin</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Impedance: 18.5+15% (@1kHz)</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Frequency Response: 9Hz-35kHz</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Effective Frequency Response:
                        20Hz-20kHz (IEC603184, 3dB)</p>

                    <p style="margin:0in;font-family:Calibri;font-size:11.0pt">Plugs: 3.5mm SE + 4.4mm BAL</p>
                </div>
                <div class="tab-pane fade" id="video" role="tabpanel">
                    <p>Đang cập nhật</p>
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel">
                    <div class="flex-1 overflow-hidden @container/thread">
                        <div class="h-full">
                            <div class="react-scroll-to-bottom--css-cqbfy-79elbk h-full">
                                <div class="react-scroll-to-bottom--css-cqbfy-1n7m0yu">
                                    <div class="flex flex-col text-sm md:pb-9">
                                        <article
                                            class="w-full scroll-mb-[var(--thread-trailing-height,150px)] text-token-text-primary focus-visible:outline-2 focus-visible:outline-offset-[-4px]"
                                            data-scroll-anchor="true" data-testid="conversation-turn-7" dir="auto">
                                            <div
                                                class="m-auto text-base py-[18px] px-3 md:px-4 w-full md:px-5 lg:px-4 xl:px-5">
                                                <div
                                                    class="mx-auto flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md:max-w-3xl">
                                                    <div
                                                        class="group/conversation-turn relative flex w-full min-w-0 flex-col agent-turn">
                                                        <div class="flex-col gap-1 md:gap-3">
                                                            <div class="flex max-w-full flex-col flex-grow">
                                                                <div data-message-author-role="assistant"
                                                                     data-message-id="b3908018-354c-4bfc-a3fd-2c46505d878a"
                                                                     data-message-model-slug="gpt-4o-mini">
                                                                    <p><br/>
                                                                        Meteor ấn tượng n&agrave;y sở hữu một driver
                                                                        động, hai balanced armature cho dải trung,
                                                                        v&agrave; bốn driver planar cho dải
                                                                        treble.&nbsp;</p>

                                                                    <p>Meteor l&agrave; một tai nghe tribrid đa
                                                                        driver đ&aacute;ng ch&uacute; &yacute;,
                                                                        t&iacute;ch hợp c&ocirc;ng nghệ v&agrave;
                                                                        thiết kế s&aacute;ng tạo. Tai nghe
                                                                        n&agrave;y c&oacute; cấu h&igrave;nh driver
                                                                        chất lượng cao với một driver động cho
                                                                        &acirc;m bass, hai balanced armature cho dải
                                                                        trung, v&agrave; bốn driver planar cho dải
                                                                        treble. Tuy nhi&ecirc;n, hiệu suất của
                                                                        n&oacute; vượt xa c&aacute;c th&ocirc;ng số
                                                                        n&agrave;y.</p>

                                                                    <p><strong>C&ocirc;ng nghệ XTM phức
                                                                            tạp</strong><br/>
                                                                        D&ograve;ng c&ocirc;ng nghệ XTM sử dụng một
                                                                        cấu tr&uacute;c ph&acirc;n tần tần số tinh
                                                                        vi, gi&uacute;p t&iacute;ch hợp th&agrave;nh
                                                                        c&ocirc;ng bảy driver v&agrave;o trong
                                                                        Meteor. Đặc biệt, n&oacute; bao gồm một
                                                                        driver động bass cỡ lớn, n&acirc;ng cao trải
                                                                        nghiệm &acirc;m thanh tổng thể.</p>

                                                                    <p><strong>Cấu tr&uacute;c ph&acirc;n tần tần số
                                                                            đa driver độc đ&aacute;o</strong><br/>
                                                                        Cấu tr&uacute;c &acirc;m học ph&acirc;n tần
                                                                        tần số đa driver được thiết kế độc
                                                                        đ&aacute;o, cho ph&eacute;p vị tr&iacute;
                                                                        của driver động bass cỡ lớn 13mm. Driver
                                                                        n&agrave;y được trang bị nam ch&acirc;m N52
                                                                        neodymium v&agrave; m&agrave;ng composite
                                                                        dome, mang đến dải động cực lớn v&agrave;
                                                                        giảm thiểu độ m&eacute;o tiếng đ&aacute;ng
                                                                        kể so với c&aacute;c cấu h&igrave;nh truyền
                                                                        thống của balanced armatures v&agrave;
                                                                        driver động mini.</p>

                                                                    <p><strong>Tấm meteorite trong khoang
                                                                            bass</strong><br/>
                                                                        Meteor c&ograve;n được trang bị một tấm
                                                                        meteorite được ch&egrave;n v&agrave;o khoang
                                                                        ph&iacute;a sau driver động bass. Tấm
                                                                        n&agrave;y hoạt động như một bộ giảm chấn,
                                                                        kết hợp ảnh hưởng cổ xưa của c&aacute;c
                                                                        thi&ecirc;n thạch, vốn h&igrave;nh
                                                                        th&agrave;nh qua h&agrave;ng tỷ năm,
                                                                        v&agrave;o khoang &acirc;m thanh,
                                                                        gi&uacute;p cải thiện th&ecirc;m trải nghiệm
                                                                        &acirc;m thanh.</p>

                                                                    <p><strong>Bốn driver planar mini cho dải
                                                                            treble</strong><br/>
                                                                        Meteor trang bị bốn driver planar mini mới
                                                                        ho&agrave;n to&agrave;n ở mỗi b&ecirc;n tai
                                                                        nghe. Mặc d&ugrave; độ ch&iacute;nh
                                                                        x&aacute;c sản xuất của ch&uacute;ng tương
                                                                        đương với balanced armatures, nhưng
                                                                        c&aacute;c driver planar mini tr&aacute;nh
                                                                        được những vấn đề về băng th&ocirc;ng hẹp
                                                                        v&agrave; m&eacute;o tiếng cao do c&aacute;c
                                                                        ch&acirc;n drive của balanced armature
                                                                        g&acirc;y ra. Bốn driver planar mini
                                                                        n&agrave;y mang lại &iacute;t m&eacute;o
                                                                        tiếng hơn, chi tiết hơn v&agrave; dải treble
                                                                        mượt m&agrave; hơn so với c&aacute;c
                                                                        balanced armature tương đương, đồng thời dễ
                                                                        l&aacute;i hơn so với tai nghe sử dụng
                                                                        driver điện dung.</p>

                                                                    <p><strong>Balanced armature k&eacute;p
                                                                            composite cho dải trung</strong><br/>
                                                                        C&aacute;c balanced armature k&eacute;p
                                                                        composite được thiết kế ri&ecirc;ng cho dải
                                                                        trung, mang lại chất lượng &acirc;m thanh
                                                                        xuất sắc v&agrave; sự đầy đặn động,
                                                                        ho&agrave;n to&agrave;n ph&ugrave; hợp với
                                                                        mục ti&ecirc;u thiết kế. Điều n&agrave;y đạt
                                                                        được th&ocirc;ng qua một v&ograve;i &acirc;m
                                                                        học đặc biệt, cấu h&igrave;nh giảm chấn
                                                                        v&agrave; mạch ph&acirc;n tần tần số, mang
                                                                        đến &acirc;m sắc tự nhi&ecirc;n, mở rộng với
                                                                        hiệu suất treble v&agrave; bass được cải
                                                                        thiện.</p>

                                                                    <p><strong>Cấu tr&uacute;c lọc &acirc;m thụ động
                                                                            ch&iacute;nh x&aacute;c</strong><br/>
                                                                        Một cấu tr&uacute;c lọc &acirc;m thụ động
                                                                        ch&iacute;nh x&aacute;c được tạo ra bằng
                                                                        c&aacute;ch kết hợp c&aacute;c th&agrave;nh
                                                                        phần kim loại với c&ocirc;ng nghệ khoang
                                                                        trước in 3D trong đường dẫn của v&ograve;i
                                                                        &acirc;m học của driver động. Cấu
                                                                        h&igrave;nh n&agrave;y hiệu quả trong việc
                                                                        loại bỏ dao động g&acirc;y ra bởi sự cộng
                                                                        hưởng của driver động tại c&aacute;c tần số
                                                                        4.7 kHz v&agrave; 7.2 kHz, từ đ&oacute; mang
                                                                        lại &acirc;m thanh trong trẻo v&agrave; mượt
                                                                        m&agrave; hơn.</p>

                                                                    <p><strong>Cổng kết nối 2-pin 0.78mm c&oacute;
                                                                            thể thay đổi</strong><br/>
                                                                        Meteor sử dụng cổng kết nối 2-pin 0.78mm
                                                                        c&oacute; thể thay thế, mở rộng chức năng
                                                                        của n&oacute; bằng c&aacute;ch thay đổi
                                                                        c&aacute;c c&aacute;p hoặc phụ kiện
                                                                        kh&aacute;c nhau, chẳng hạn như LittleWhite
                                                                        hoặc FreeDSP.</p>

                                                                    <p><strong>C&aacute;p thiết kế
                                                                            mới</strong><br/>
                                                                        C&aacute;p mới được thiết kế từ đồng
                                                                        v&agrave; bạc mạ, với cấu tr&uacute;c Litz,
                                                                        c&oacute; đầu cắm được gắn chặt bằng
                                                                        v&iacute;t mới. Thiết kế n&agrave;y
                                                                        kh&ocirc;ng chỉ n&acirc;ng cao t&iacute;nh
                                                                        thẩm mỹ m&agrave; c&ograve;n mang lại
                                                                        t&iacute;nh thực tế, cho ph&eacute;p thay
                                                                        thế dễ d&agrave;ng<span
                                                                            data-state="closed"><button
                                                                                class="btn relative btn-secondary btn-small shadow-lg"></button></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>&nbsp;</p>
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
                                    <img src="{{ asset('/clients/uploads/moondrop/Moondrop%20Echo%20B/Ech%20(1).png') }}"
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
                                    <img src="{{ asset('/clients/uploads/moondrop/Moondrop%20Echo%20A/Echo%203%20(1).png') }}"
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
                                    <img src="{{ asset('/clients/uploads/moondrop/Moondrop%20Psyche/Moondrop%20Pysche%20(1).jpg') }}"
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
