<section id="section_508681512" style="margin-top: 30px;">
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
                        <div class="tabbed-content">
                            <ul class="nav nav-pills nav-normal nav-size-normal nav-center"
                                style="margin-bottom: 20px;">
                                <li class="tab active has-icon">
                                    <a href="#">
                                        <span>Sản xuất video theo yêu cầu</span>
                                    </a>
                                </li>
                            </ul>
                            @if (!empty($postYoutube))
                                <div class="row align-center  panel entry-content ">
                                    @foreach($postYoutube as $key => $item)
                                        <div class=" large-3  small-1 has-shadow row-box-shadow-1"
                                             id="{{ $item->slug }}">
                                            <div class="col post-item">
                                                <div class="col-inner">
                                                    <a href="javascript:void(0)" class="plain item-youtube"
                                                       id="youtube{{ $item->id }}"
                                                       data-id-db="{{ $item->id }}">
                                                        <div class="box box-text-bottom box-blog-post has-hover">
                                                            <div class="box-image">
                                                                <div class="image-cover" style="padding-top:56%;">
                                                                    <img width="300" height="135" src="{{$item->image}}"
                                                                         class="attachment-medium size-medium wp-post-image"
                                                                         alt=""
                                                                         loading="lazy"
                                                                         sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </div>
                                                            <div class="box-text text-left">
                                                                <div class="box-text-inner blog-post-inner">
                                                                    <h5 class="post-title is-large ">{{ $item->name }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="vidBox{{ $item->id }}" style="display: none">
                                                            <div id="videCont{{ $item->id }}" class="videCont">
                                                                <div class="yt_video">
                                                                    <iframe id="example{{ $item->id }}"
                                                                            allowfullscreen="" frameborder="0"
                                                                            src="https://www.youtube.com/embed/{{ $item->content }}?enablejsapi=1&version=3&playerapiid=ytplayer"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination">
                                    {{ $postYoutube->render('home.category.common.paginate') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
