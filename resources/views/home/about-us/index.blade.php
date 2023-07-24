@extends('home.layouts.app')

@section('title', __('About Us'))

@section('css')
    <style>
        #section_1209655752 {
            padding-top: 131px;
            padding-bottom: 131px;
        }

        #section_1209655752 .section-bg.bg-loaded {
            background-image: url(images/banner.png);
        }

        #section_1209655752 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_1209655752 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }

        #text-2901959351 {
            font-size: 1.5rem;
            line-height: 2.55;
        }

        #text-1541923464 {
            font-size: 1rem;
            line-height: 1.15;
        }

        #text-4060200431 {
            font-size: 1rem;
            line-height: 1.4;
            text-align: center;
        }

        .image_521163600 {
            width: 100%;
        }

        #text-3767729848 {
            font-size: 0.75rem;
            line-height: 1.6;
            text-align: center;
        }

        #text-678851135 {
            font-size: 0.75rem;
            line-height: 0.75;
            text-align: center;
        }

        #text-3252950443 {
            font-size: 0.75rem;
            line-height: 1.6;
            text-align: center;
        }

        #section_474277286 {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: rgb(36, 38, 42);
        }

        #section_474277286 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_474277286 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }

        #text-1186976077 {
            font-size: 1rem;
            line-height: 1.55;
        }

        #text-3261000050 {
            font-size: 1.5rem;
        }

        @media screen and (max-width: 768px){
            #section_1209655752 .section-bg.bg-loaded {
                background-image: url(images/banner-mobile.png);
            }
        }

        @media (min-width: 550px) {
            #text-3261000050 {
                font-size: 1.2rem;
            }
        }
    </style>
@endsection

@section('content')

    <section class="section" id="section_1209655752">
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
        </div>
    </section>

    <div class="row">
        <div class="col medium-6 small-12 large-6 col-divided">
            <div class="col-inner text-left">
                <div class="is-border" style="border-width:0px 0px 0px 0px;">
                </div>

                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1253932511">
                    <div class="img-inner dark">
                        <img width="545" style="max-height: 291px;" height="291" data-cms="about-0"
                             @src="/images/2021/11/trang-gioi-thieu2.png" class="attachment-large size-large" alt=""
                             loading="lazy" sizes="(max-width: 545px) 100vw, 545px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col medium-6 small-12 large-6">
            <div class="col-inner">
                <div class="row row-collapse" id="row-1384267369">
                    <div class="col small-12 large-12" data-animate="bounceInRight" data-animated="true">
                        <div class="col-inner text-center">
                            <div id="text-2901959351" class="text">
                                <h1><span style="font-size: 75%; color: #EFDD5A;" data-cms="{{'vi'}}-about-index-9">GIỚI THIỆU TỔNG QUAN</span>
                                </h1>
                            </div>
                            <div class="row row-collapse" id="row-1418744503">
                                <div id="col-2036006261" class="col medium-10 small-12 large-10">
                                    <div class="col-inner">
                                        <div id="text-1541923464" class="text">
                                            <p class="lead" data-cms="{{'vi'}}-about-index-14">SocMedia Motion là đơn vị
                                                sáng tạo video phục vụ 3 nhu cầu chính của doanh nghiệp</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-collapse">
                    <div class="col small-12 large-12" data-animate="bounceInLeft" data-animated="true">
                        <div class="col-inner">
                            <div id="text-4060200431" class="text">
                                <p data-cms="{{'vi'}}-about-index-19">Bằng việc sử dụng công cụ video hoạt hình Motion
                                    Graphic và 2D (3D) Animation. SocMedia luôn tìm kiếm những giải pháp thiết kế video
                                    hiệu quả nhằm phục vụ cho các doanh nghiệp trong các chương trình truyền thông đánh
                                    trúng nhu cầu tiềm ẩn của đối tượng (Insight), đảm bảo mục tiêu cuối cùng là doanh
                                    thu và sự phát triển của doanh nghiệp khách hàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-small align-middle align-center">
        <div id="col-156583252" class="col medium-3 small-12 large-3">
            <div class="col-inner">
                <div class="img has-hover x md-x lg-x y md-y lg-y image_521163600">
                    <div class="img-inner dark">
                        <img width="617" data-cms="about-1" height="399" @src="/images/2021/11/3-anh-web-01.png"
                             class="attachment-large size-large" alt="" loading="lazy"
                             sizes="(max-width: 617px) 100vw, 617px">
                    </div>
                </div>
                <div class="row">
                    <div id="col-1635569989" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-3767729848" class="text">
                                <h3 data-cms="{{'vi'}}-about-index-30">Sản xuất video theo yêu cầu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="col-1636851046" class="col medium-3 small-12 large-3">
            <div class="col-inner">
                <div class="img has-hover x md-x lg-x y md-y lg-y image_521163600">
                    <div class="img-inner dark">
                        <img width="617" height="399" data-cms="about-2" @src="/images/2021/10/3-anh-web-02.png"
                             class="attachment-large size-large" alt="" loading="lazy"
                             sizes="(max-width: 617px) 100vw, 617px">
                    </div>
                </div>
                <div class="row">
                    <div id="col-827869582" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-678851135" class="text">
                                <h3 data-cms="{{'vi'}}-about-index-40">Video Anmiation 2D</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col medium-3 small-12 large-3">
            <div class="col-inner">
                <div class="img has-hover x md-x lg-x y md-y lg-y image_521163600">
                    <div class="img-inner dark">
                        <img width="617" height="399" data-cms="about-3" @src="/images/2021/10/3-anh-web-03.png"
                             class="attachment-large size-large" alt="" loading="lazy"
                             sizes="(max-width: 617px) 100vw, 617px">
                    </div>
                </div>
                <div class="row" id="row-1849500757">
                    <div id="col-1204380393" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-3252950443" class="text">
                                <h3 data-cms="{{'vi'}}-about-index-51">Video Anmiation 3D</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section dark" id="section_474277286">
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative" style="z-index: auto;">
            <div class="row row-collapse row-full-width align-middle" id="row-2000811393">
                <div id="col-2122624723" class="col medium-12 small-12 large-6">
                    <div class="col-inner text-left">
                        <div class="row align-center" id="row-2057224049">
                            <div id="col-710186185" class="col medium-10 small-10 large-8">
                                <div class="col-inner">
                                    <div class="is-divider divider clearfix"
                                         style="max-width:100px;height:4px;background-color:#EFDD5A;"></div>
                                    <div id="text-3261000050" class="text">

                                        <h1 class="uppercase" data-cms="{{'vi'}}-about-index-63">sự khác biệt của
                                            SocMedia</h1>
                                    </div>
                                    <div id="text-1186976077" class="text">
                                        <p data-cms="{{'vi'}}-about-index-65">Tự tin là đơn vị Motion Graphic Agency với
                                            mức chi phí hợp lý nhất đồng thời gia tăng chất
                                            lượng truyền thông nhờ việc ứng dụng “Lean Creative Marketing” vào quy trình
                                            sản xuất ý
                                            tưởng và ứng dụng “One-piece Flow” trong quy trình sản xuất video.</p>
                                        <p data-cms="{{'vi'}}-about-index-66">“Learn Creative Marketing”<br>
                                            Là một bộ công cụ siêu tinh gọn hiệu quả giúp SocMedia gia tăng hiệu quả cho
                                            những ý tưởng đồng
                                            thời rút ngắn thời gian lên kịch bản chủ đạo; tạo ra những thông điệp truyền
                                            thông nhanh
                                            chóng, chính xác, đánh trúng tâm lý khách hàng.</p>
                                        <p data-cms="{{'vi'}}-about-index-67">Đồng thời, SocMedia áp dụng “One-piece
                                            Flow” để giảm giá thành sản xuất xuống còn 50% so với
                                            các đơn vị Motion Graphic Agency khác trên thị trường mà vẫn giữ nguyên chất
                                            lượng video
                                            thành phẩm.<br>
                                        </p></div>
                                    <div id="gap-1057699983" class="gap-element clearfix"
                                         style="display:block; height:auto;">
                                        <style>
                                            #gap-1057699983 {
                                                padding-top: 10px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-1381582237" class="col medium-12 small-12 large-5 medium-col-first">
                    <div class="col-inner">
                        <div class="img has-hover x md-x lg-x y md-y lg-y image_521163600">
                            <div class="img-inner dark">
                                <img width="658" height="638" data-cms="img-inner-dark" loading="lazy"
                                     @src="/images/2021/11/one-peace-flow-png-2.png" class="attachment-large size-large"
                                     alt="" sizes="(max-width: 658px) 100vw, 658px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('home.category.index')
@endsection
@section('js')
    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
@endsection
