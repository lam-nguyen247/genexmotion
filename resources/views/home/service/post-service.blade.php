@if ($postServices)
    <section>
        <div class="section-content" style="padding-bottom: 100px;">
            <div id="HEADLINE197" class="text text-center">
                <h3 class="ladi-headline" data-cms="ladi-headline1">CÁC DỰ ÁN ĐÃ THỰC HIỆN&nbsp;</h3>
            </div>
            <div class="row row-collapse row-full-width align-center" id="row-1945039434">
                <div class="large-20 col">
                    <div
                        class="row large-columns-3 medium-columns small-columns-1 has-shadow row-box-shadow-1"
                        style="margin: auto">
                        @if ($postServices->serviceList)
                            @foreach ($postServices->serviceList as $item)
                                <div class="col post-item">
                                    <div class="col-inner example-item">
                                        <a href="javascript:void(0)" class="plain item-youtube"
                                           id="youtube{{ $item->id }}" data-id-db="{{ $item->id }}">
                                            <div
                                                class="box box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-cover"
                                                         style="padding-top:56%;">
                                                        <img width="300" height="135"
                                                             src="{{$item->image}}"
                                                             class="attachment-medium size-medium wp-post-image"
                                                             alt="" loading="lazy"
                                                             sizes="(max-width: 300px) 100vw, 300px">
                                                    </div>
                                                </div>
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">
                                                        <h5 class="post-title is-large ">{{ $item->name }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="vidBox{{ $item->id }}">
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
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
    </section>
@endif

