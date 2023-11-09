@extends('home.layouts.app')

@section('title', $post->name)
@section('cover', url($post->image))
@section('css')
    <<link href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css" rel="stylesheet" />
    <style>
        .post-detail {
            display: grid;
            grid-template-columns: 75% 24%;
            column-gap: 30px;
        }
    </style>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js" defer init></script>
    <script>
        Shareon.init();
    </script>
@endsection
@section('content')
    <div class="page-wrapper new-detail">
        {{-- Block hero --}}
        <section class="tour" id="grid-hero">
            <div class="container">
                <div class="post-detail">
                    <div class="tour-content">
                        <h2>{{ $post->name }}</h2>
                        <img @src="{{ $post->image }}" alt="{{ $post->name }}" class="tour-image" />
                        <div class="tour-subtitle-wrapper wrapper-content">
                            {!! $post->content !!}
                        </div>
                        <div class="shareon">
                            <a class="facebook"></a>
                            <a class="linkedin"></a>
                            <a class="mastodon"></a>
                            <a class="odnoklassniki"></a>
                            <a class="pinterest"></a>
                            <a class="pocket"></a>
                            <a class="reddit"></a>
                            <a class="teams"></a>
                            <a class="telegram"></a>
                            <a class="twitter"></a>
                            <a class="viber"></a>
                            <a class="vkontakte"></a>
                            <a class="whatsapp"></a>
                            <a class="copy-url"></a>
                        </div>
                    </div>
                    <div class="tour-list-item">
                        <h4>@lang('News')</h4>
                        <div class="tour-search-wrapper">
                            <img @src="/images/home/icon-search.png" alt="icon-search" class="tour-search-icon" />
                            <input type="text" name="search" id="search" placeholder="Search now"
                                class="tour-search" />
                        </div>
                        <div class="tour-suggest-wrapper">
                            <h4>Gợi ý cho bạn</h4>
                            @foreach ($postList as $item)
                                <a href="{{ $item->href }}" class="tour-suggest-item">
                                    <img @src="{{ $item->image }}" alt="{{ $item->name }}" class="tour-image-item" />
                                    <div>
                                        <h6 class="tour-suggest-title" style="text-transform: unset !important ; ">
                                            {{ $item->name }}</h6>
                                        <p class="tour-suggest-description">{{ $item->excerpt }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Block action --}}
        {{-- @include('home.includes.consultation') --}}
    </div>

@endsection
@section('js')
    <script>
        function copy(id) {
            /* Get the text field */
            var copyText = document.getElementById(id);
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(copyText.value).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
@endsection
