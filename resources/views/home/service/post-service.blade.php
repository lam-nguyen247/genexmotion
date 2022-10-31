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
                    <h3 class="ladi-headline" data-cms="ladi-headline1">CÁC DỰ ÁN ĐÃ THỰC HIỆN&nbsp;</h3>
                </div>
                <section class="section" id="section_1186898118">
                    <div class="bg section-bg fill bg-fill bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="row row-collapse row-full-width align-center" id="row-1945039434">
                            <div class="large-20 col">
                                <div class="row large-columns-3 medium-columns small-columns-1 has-shadow row-box-shadow-1" style="margin: auto">
                                        @if ($postServices->serviceList)
                                            @foreach ($postServices->serviceList as $item)
                                                <div class="col post-item">
                                                    <div class="col-inner">
                                                        <a href="javascript:void(0)" class="plain item-youtube" id="youtube{{ $item->id }}" data-id-db="{{ $item->id }}">
                                                            <div class="box box-text-bottom box-blog-post has-hover">
                                                                <div class="box-image">
                                                                    <div class="image-cover" style="padding-top:56%;">
                                                                    <img width="300" height="135" src="{{$item->image}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                    </div>
                                                                </div>
                                                                <div class="box-text text-left">
                                                                    <div class="box-text-inner blog-post-inner">
                                                                        <h5 class="post-title is-large ">{{ $item->name }}</h5>
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

