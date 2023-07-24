<section class="section" id="section_508681512">
    <div class="section-content relative">
        <div id="text-4214745138" class="text">
            <h3><span style="color: #282828;"
                      data-cms="{{'vi'}}-text-index-1">CÁC DỰ ÁN ĐÃ THỰC HIỆN </span></h3>
            <p><span style="color: #282828;" data-cms="{{'vi'}}-title-index-2">Cùng khám phá các dự án đã được SocMedia triển khai trong thời gian qua.</span>
            </p>
        </div>
        <div class="section-content relative">
            <div class="row row-collapse row-full-width align-center" id="row-1945039434">
                <div id="col-23984745" class="col medium-10 small-12 large-10">
                    <div class="col-inner">
                        @if ($categoryFlatList)
                            <div class="tabbed-content">
                                <ul class="nav nav-pills nav-normal nav-size-normal nav-center">
                                    @php
                                        $stt = false;
                                        $isUpdate = false;
                                    @endphp
                                    @foreach($categoryFlatList as $key => $item)
                                        @if($item->category_id > 0)
                                            @php
                                                if(!$isUpdate) { $stt = true; $isUpdate = true; }
                                            @endphp
                                            <li class="tab {{ $stt ? 'active' : '' }} has-icon">
                                                <a href="#{{ $item->slug }}">
                                                    <span>{{ $item->name }}</span>
                                                </a>
                                            </li>
                                        @endif
                                        @php
                                            $stt = false;
                                        @endphp
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
    </div>
</section>
