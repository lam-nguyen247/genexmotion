@extends('home.layouts.app')

@section('title', __('About Us'))

@section('css')
<link rel="stylesheet" type="text/css" href="/css/home/about.css">
@endsection

@section('content')

    <section class="about">
        <div class="section-title">
            <h2>Về chúng tôi</h2>
        </div>

        <div class="row content">
            <div class="content-left">
              <p>
                Với đội ngũ kỹ thuật chuyên nghiệp, kinh nghiệm SOC MEDIA luôn hướng tới gia tăng hiệu quả cho những ý tưởng đồng thời rút ngắn thời gian lên kịch bản, tạo ra những thông điệp truyền thông nhanh chóng, chính xác, đánh trúng tâm lý khách hàng, giúp nâng tầm thương hiệu cho doanh nghiệp của bạn.
              </p>
              <ul>
                <li>
                     Chuyên sản xuất Video Marketing theo yêu cầu của khách hàng  với mức chi phí hợp lý nhất - Chất lượng nhất - Hiệu quả nhất. 
                </li>
                <li>
                    Chuyên cung cấp các dịch vụ mạng xã hội phục vụ Marketing truyền thông như: Facebook, Tiktok, Google, Youtube,...
                </li>
                <li>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat<
                    /li>
              </ul>
            </div>
            <div class="content-right">
              <p>
                SOC MEDIA luôn đưa ra cho khách hàng những giải pháp truyền thông tối ưu, những ý tưởng đột phá tạo ra  thông điệp truyền thông nhanh chóng và chính xác, đánh trúng tâm lý khách hàng. Giúp nâng tầm thương hiệu cho doanh nghiệp của bạn.
              </p>
              <a href="#" class="btn-learn-more">Liên hệ ngay</a>
            </div>
        </div>
    </section>

    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
  
          <div class="row">
  
            <div class="large-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
  
              <div class="content">
                <h3>Vì sao nên chọn <strong>SOC MEDIA</strong></h3>
              </div>
  
              <div class="accordion-list">
                <ul>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed" aria-expanded="false"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list" style="">
                            <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed" aria-expanded="false"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list" style="">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="" aria-expanded="true"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse show" data-bs-parent=".accordion-list" style="">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>
  
                </ul>
              </div>
  
            </div>
  
            <div class="large-5 align-items-stretch order-1 order-lg-2 img aos-init aos-animate" style="background-image: url('/images/upload/cms/4-ul9.png');" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          </div>
  
        </div>
    </section>

    @include('home.category.index')
@endsection
@section('js')
    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
@endsection
