@if (!empty($postYoutube))
    @foreach($postYoutube as $key => $item)
    <div class="row align-center panel entry-content {{ $key == 0 ? 'active' : '' }}">
        <div class="large-20 col">
            <div class="row large-columns-3 medium-columns small-columns-1 has-shadow row-box-shadow-1" id="{{ $item->slug }}">
                @if ($item->serviceList)
                    @foreach($item->serviceList as $k => $v)
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="javascript:void(0)" class="plain item-youtube" id="youtube{{ $v->id }}" data-id-db="{{ $v->id }}">
                                <div class="box box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:56%;">
                                    <img width="300" height="135" src="{{$v->image}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                    sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                                <div class="box-text text-left">
                                    <div class="box-text-inner blog-post-inner">
                                    <h5 class="post-title is-large ">{{ $v->name }}</h5>
                                    </div>
                                </div>
                                </div>
                                <div id="vidBox{{ $v->id }}" style="display: none">
                                    <div id="videCont{{ $v->id }}" class="videCont">
                                        <div class="yt_video">
                                            <iframe id="example{{ $v->id }}" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/{{ $v->content }}?enablejsapi=1&version=3&playerapiid=ytplayer"></iframe>
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
    @endforeach
@endif
