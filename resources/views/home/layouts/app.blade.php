<html class="js js csstransforms3d csstransitions">
<head>
    <meta charset="UTF-8"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="pingback" href="xmlrpc.html"/>

    <script>
        (function (html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:image" content="@yield('cover',url('/'). '/images/socmedia_share.png')"/>
    <meta property="og:image:secure_url" content="@yield('cover',url('/'). '/images/socmedia_share.png')" />
    <meta property="og:type" content="website"/>
    <meta property="og:image:alt" content="Socmedia sharing" />
    <meta name="twitter:image" content="@yield('cover', '/images/socmedia_share.png')"/>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:site_name" content="Socmedia" />
    <meta property="og:image:width" content="900" />
    <meta property="og:image:height" content="560" />
    @isset($seo)
        <title>{{$seo->title}}</title>
        <meta name="description" content="{{$seo->description}}">
        <meta property="og:image:alt" content="{{$seo->title}}"/>
        <meta property="og:title" content="{{$seo->description}}">
        <meta property="og:description" content="{{$seo->description}}">
        <meta name="robots" content="{{$seo->robots}}"/>
    @else
        <title>@yield('title') </title>
        <meta property="og:title" content="@yield('title')">
        <meta property="og:image:alt" content="@yield('title')"/>
        <meta property="og:description" content="@yield('description')">
        <meta name="description" content="@yield('description') ">
    @endif
    @cms

    <link href="/css/home/app.min.css" rel="stylesheet">

    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/jquery.minaf6c.js') }}"
            id='jquery-core-js'></script>
    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/jquery-migrate.mind617.js') }}"
            id='jquery-migrate-js'></script>
    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/ui/core.min35d0.js') }}"
            id='jquery-ui-core-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/plugins/gallery-videos/JS/modernizr.customc8d8.js') }}"
            id='cwp-main-js'></script>
    <link rel="icon" href="/images/socmedia_icon.png" sizes="32x32"/>
    <link rel="icon" href="/images/socmedia_icon.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="/images/socmedia_icon.png"/>
    <style type='text/css'>
        @font-face {
            font-family: "fl-icons";
            font-display: block;
            src: url(/icons/fl-icons8af9.eot?v=3.15.3);
            src: url(/icons/fl-icons.eot#iefix?v=3.15.3) format("embedded-opentype"),
            url(/icons/fl-icons8af9.woff2?v=3.15.3) format("woff2"),
            url(/icons/fl-icons8af9.ttf?v=3.15.3) format("truetype"),
            url(/icons/fl-icons8af9.woff?v=3.15.3) format("woff"),
            url(/icons/fl-icons8af9.svg?v=3.15.3#fl-icons) format("svg");
        }

        .icon-search, .icon-angle-up {
            margin-top: 7px !important;
        }

        .icon-angle-right {
            margin-top: 3px !important;
        }
    </style>
    @yield('css')

</head>
<body id="body-site" data-rsssl=1
      class="home page-template page-template-page-blank page-template-page-blank-php page page-id-1255 full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow">
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="wrapper">
    {{-- app header --}}
    @include('home.includes.header')
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            @yield('content')
        </div>
    </main>
    @include('home.includes.footer')
</div>

<script src="/js/home/jquery-3.6.0.min.js"></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var APP_URL = "{{ env('APP_URL') }}";
    var flatsomeVars = {
        "theme": {
            "version": "3.15.3"
        },
        "ajaxurl": "#",
        "rtl": "",
        "sticky_height": "70",
        "assets_url": APP_URL + "wp-content\/themes\/flatsome\/assets\/js\/",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {
            "can_edit_pages": false
        },
        "i18n": {
            "mainMenu": "Main Menu"
        },
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src="{{ asset('wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.minbb49.js?ver=5.2.2') }}"
        id='kk-star-ratings-js'></script>
<script type='text/javascript' src="{{ asset('wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7') }}"
        id='regenerator-runtime-js'></script>
<script type='text/javascript' src="{{ asset('wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0') }}"
        id='wp-polyfill-js'></script>
<script type='text/javascript' src="{{ asset('wp-content/plugins/contact-form-7/includes/js/indexd03b.js?ver=5.5.1') }}"
        id='contact-form-7-js'></script>
<script type='text/javascript'
        src="{{ asset('wp-content/plugins/tabs-responsive/assets/js/tabs-customc8d8.js?ver=5.8.3') }}"
        id='wpsm_tabs_r_custom-js-front-js'></script>
<script type='text/javascript'
        src="{{ asset('wp-content/plugins/tabs-responsive/assets/js/bootstrapc8d8.js?ver=5.8.3') }}"
        id='wpsm_tabs_r_bootstrap-js-front-js'></script>
<script type='text/javascript' src="{{ asset('wp-includes/js/hoverIntent.min73b9.js?ver=1.10.1') }}"
        id='hoverIntent-js'></script>
<script type='text/javascript' src="{{ asset('wp-content/themes/flatsome/assets/js/flatsome0cdc.js') }}"
        id='flatsome-js-js'></script>
<script type='text/javascript' src="{{ asset('wp-includes/js/wp-embed.minc8d8.js?ver=5.8.3') }}"
        id='wp-embed-js'></script>
<script type='text/javascript'
        src="{{ asset('wp-content/plugins/elfsight-contact-form-cc/assets/elfsight-contact-form254d.js?ver=2.3.1') }}"
        id='elfsight-contact-form-js'></script>
<script type='text/javascript'
        src="{{ asset('wp-content/plugins/elfsight-youtube-gallery-cc/assets/elfsight-youtube-gallery3b71.js?ver=3.5.0') }}"
        id='elfsight-youtube-gallery-js'></script>
<script type="text/javascript" src="/js/home/videopopup.js"></script>
<script async defer crossorigin="anonymous" type="text/javascript" src="/js/home/app.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=2174410252844536&autoLogAppEvents=1"
        nonce="tSrCDwqH"></script>
@yield('js')

</body>
</html>
