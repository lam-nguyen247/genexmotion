@extends('home.layouts.app')

@section('title', __('About Us'))

@section('css')
<link rel="stylesheet" type="text/css" href="/css/home/about.css">
@endsection

@section('content')

    <div class="container">
        <section class="about">
            <div class="section-title">
                <h2>Về chúng tôi</h2>
            </div>
    
            <div class="content">
                <div class="content-left">
                  <p data-cms="">
                    Với đội ngũ kỹ thuật chuyên nghiệp, kinh nghiệm SOC MEDIA luôn hướng tới gia tăng hiệu quả cho những ý tưởng đồng thời rút ngắn thời gian lên kịch bản, tạo ra những thông điệp truyền thông nhanh chóng, chính xác, đánh trúng tâm lý khách hàng, giúp nâng tầm thương hiệu cho doanh nghiệp của bạn.
                  </p>
                  <ul>
                    <li>
                         Chuyên sản xuất Video Marketing theo yêu cầu của khách hàng  với mức chi phí hợp lý nhất - Chất lượng nhất - Hiệu quả nhất. 
                    </li>
                    <li>
                        Chuyên cung cấp các dịch vụ mạng xã hội phục vụ Marketing truyền thông như: Facebook, Tiktok, Google, Youtube,...
                    </li>
                   
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
      
              <div class="content">
      
                <div class="content-left d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      
                  <div class="content">
                    <h3>Vì sao nên chọn <strong>SOC MEDIA</strong></h3>
                  </div>
      
                  <div class="accordion-list">
                    <ul>
                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"  aria-expanded="false">
                                <span>01</span> Chuyên môn và kỹ năng chất lượng cao
                                 </a>
                            <div id="accordion-list-2"  data-bs-parent=".accordion-list" style="">
                                <p>
                                    SOC Media tập trung vào sản xuất video 2D, 3D, TVC và các dịch vụ liên quan đến mạng xã hội như Facebook và TikTok. Điều này đảm bảo rằng họ có chuyên môn và kỹ năng chất lượng cao trong lĩnh vực này. Đội ngũ sản xuất video của họ có thể tạo ra nội dung hấp dẫn, chuyên nghiệp và đáp ứng yêu cầu của bạn.
                                </p>
                            </div>
                        </li>
      
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" aria-expanded="false"><span>02</span> Kinh nghiệm và danh tiếng</a>
                        <div id="accordion-list-2"  data-bs-parent=".accordion-list" style="">
                          <p>
                            Công ty SOC Media có thể đã hoạt động trong lĩnh vực này trong một thời gian dài, tích lũy kinh nghiệm và xây dựng danh tiếng tốt. Bạn có thể tìm hiểu về các dự án trước đây mà họ đã thực hiện để đánh giá chất lượng và hiệu quả của công việc của họ.
                          </p>
                        </div>
                      </li>
      
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="" aria-expanded="true"><span>03</span>Dịch vụ đa dạng và tích hợp</a>
                        <div id="accordion-list-3"  data-bs-parent=".accordion-list" style="">
                          <p>
                            SOC Media không chỉ chuyên về sản xuất video mà còn cung cấp nhiều dịch vụ khác nhau liên quan đến mạng xã hội, như mua bán group, fanpage Facebook và tăng tương tác cho các trang mạng xã hội như Facebook và TikTok. Việc lựa chọn một công ty cung cấp nhiều dịch vụ có thể giúp bạn tiết kiệm thời gian và công sức, đồng thời tăng cường hiệu quả của chiến lược marketing trên mạng xã hội.
                          </p>
                        </div>
                      </li>
      
                    </ul>
                  </div>
      
                </div>
      
                <div class="content-right display-desktop align-items-stretch order-1 order-lg-2 img aos-init aos-animate" 
                data-aos="zoom-in" data-aos-delay="150" style="position: relative">
                    <img width="545"  height="291" data-cms="about-0"
                    @src="/images/2021/11/trang-gioi-thieu2.png" class="attachment-large size-large" alt=""
                    loading="lazy" sizes="(max-width: 545px) 100vw, 545px">
                </div>
              </div>
      
            </div>
        </section>
    
        @include('home.category.index')
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
@endsection
