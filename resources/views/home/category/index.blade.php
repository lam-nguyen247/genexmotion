<section class="section" id="section_508681512">
  <div class="bg section-bg fill bg-fill  bg-loaded">
  </div>
  <div class="section-content relative">
    <div class="row row-full-width" id="row-1377694405">
      <div id="col-916842809" class="col small-12 large-12">
          <div class="col-inner">
          <div id="text-4214745138" class="text">
            <h3><span style="color: #282828;" data-cms="{{app()->getLocale()}}-text-index-1">CÁC DỰ ÁN ĐÃ THỰC HIỆN </span></h3>
            <p><span style="color: #282828;" data-cms="{{app()->getLocale()}}-title-index-2">Cùng khám phá các dự án đã được GeneX Media triển khai trong thời gian qua.</span></p>
          </div>
          <section class="section" id="section_1186898118">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
              <div class="row row-collapse row-full-width align-center" id="row-1945039434">
                <div id="col-23984745" class="col medium-10 small-12 large-10">
                  <div class="col-inner">
                    @if ($catagoryPost)
                      <div class="tabbed-content">
                        <ul class="nav nav-pills nav-normal nav-size-normal nav-center">
                            @foreach($catagoryPost as $key => $item)
                            <li class="tab {{ $key == 0 ? 'active' : '' }} has-icon">
                              <a href="#{{ $item->slug }}">
                                <span>{{ $item->name }}</span>
                              </a>
                            </li>
                            @endforeach
                        
                        </ul>
                        <div class="tab-panels">
                          @include('home.category.common.tab-post')
                        </div>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>