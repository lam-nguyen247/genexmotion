@if ($postServices)
<section class="section" id="SECTION195">
    <div class="bg section-bg fill bg-fill bg-loaded">
        <div class="section-bg-overlay absolute fill"></div>
    </div>
    <div class="section-content relative">
      <div class="row row-full-width" id="row-1377694405">
        <div id="col-916842809" class="col small-12 large-12">
            <div class="col-inner">
                <div id="HEADLINE197" class="text text-center">
                    <h3 class="ladi-headline">CÁC DỰ ÁN ĐÃ THỰC HIỆN&nbsp;</h3>
                </div>
                <section class="section" id="section_1186898118">
                    <div class="bg section-bg fill bg-fill bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="row row-collapse row-full-width align-center" id="row-1945039434">
                            <div class="large-20 col">
                                <div class="row large-columns-3 medium-columns small-columns-1 has-shadow row-box-shadow-1" style="margin: auto">
                                        @if ($postServices->postYoutube)
                                            @foreach ($postServices->postYoutube as $item)
                                                <div class="col post-item">
                                                    <div class="col-inner">
                                                        <a href="#" class="plain item-youtube" id="youtube{{ $item->id }}" data-id-db="{{ $item->id }}">
                                                            <div class="box box-text-bottom box-blog-post has-hover">
                                                            <div class="box-image">
                                                                <div class="image-cover" style="padding-top:56%;">
                                                                <img width="300" height="135" src="../../wp-content/uploads/2021/12/hp-equipment-to-start-vlog-or-podcast-hero1563557625959121-300x135.jpg" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" 
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
                                                                        <iframe id="example{{ $item->id }}" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/{{ $item->idyoutube }}?enablejsapi=1&version=3&playerapiid=ytplayer"></iframe>
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
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endif