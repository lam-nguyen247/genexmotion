<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky nav-dark flex-has-center">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li class="html header-social-icons ml-0">
                            <div class="social-icons follow-icons">
                                <a href="https://www.facebook.com/SOC-MEDIA-100634065860280/" target="_blank"
                                   data-label="Facebook"
                                   rel="noopener noreferrer nofollow" class="icon plain facebook tooltip"
                                   title="Follow on Facebook"
                                   aria-label="Follow on Facebook">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="mailto:info.socmedia.vn@gmail.com" data-label="E-mail" rel="nofollow"
                                   class="icon plain  email tooltip" title="Send us an email"
                                   aria-label="Send us an email"><i
                                        class="icon-envelop"></i></a><a href="tel:+84{{(int)$config->zalo}}"
                                                                        target="_blank" data-label="Phone"
                                                                        rel="noopener noreferrer nofollow"
                                                                        class="icon plain  phone tooltip"
                                                                        title="Call us"
                                                                        aria-label="Call us"><i class="icon-phone"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">

                    <!-- Header logo -->
                    <a href="/" title="SocMedia Motion - Đơn vị sản xuất Video quảng cáo số 1" rel="home">
                        <img width="1020" height="103" @src="/images/socmedia_logo.png"
                             class="header_logo header-logo" alt="SocMedia Motion"/><img width="1020" height="103"
                                                                                         @src="/images/socmedia_logo.png"
                                                                                         class="header-logo-dark"
                                                                                         alt="SocMedia Motion"/></a>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
          flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-size-large nav-spacing-xlarge">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-size-large nav-spacing-xlarge">
                        <li id="menu-item-1353"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1255 current_page_item menu-item-1353 {{ request()->is('/') ? 'active' : '' }} menu-item-design-default">
                            <a href="{{ route('index')}}" aria-current="page" class="nav-top-link">Trang chủ</a>
                        </li>
                        <li id="menu-item-1503"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1503 menu-item-design-default {{ request()->is('gioi-thieu') ? 'active' : '' }}">
                            <a href="{{ route('about-us') }}" class="nav-top-link">Giới Thiệu</a>
                        </li>
                      
                        @if (!empty($categoryFlatList))
                            @foreach ($categoryFlatList as $item)
                                @if ($item->category_id == null)
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069 menu-item-design-default has-dropdown {{ request()->is($item->slug . '*') ? 'active' : '' }} ">
                                        <a class="nav-top-link">{{ $item->name }}<i class="icon-angle-down"></i></a>
                                        @if (!empty($item->child))
                                            <ul class="sub-menu nav-dropdown nav-dropdown-default">
                                                @foreach ($item->child as $value)
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                                                        <a
                                                            href="{{ route('service-detail', [$value->slug]) }}">{{ $value->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        @endif
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069 menu-item-design-default has-dropdown">
                            <a class="nav-top-link">Dịch vụ Facebook<i class="icon-angle-down"></i></a>
                            <ul class="sub-menu nav-dropdown nav-dropdown-default" style="">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                        href="https://socmedia.vn/dich-vu-cung-cap-group-facebook">Cung cấp Group
                                        Facebook</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                        href="https://socmedia.vn/dich-vu-cung-cap-fanpage-facebook">Cung cấp Fanpage
                                        Facebook</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                        href="https://socmedia.vn/dich-vu-tuong-tac-facebook">Tương tác Facebook</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069 menu-item-design-default has-dropdown">
                            <a class="nav-top-link">Dịch vụ Tiktok<i class="icon-angle-down"></i></a>
                            <ul class="sub-menu nav-dropdown nav-dropdown-default" style="">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                        href="https://socmedia.vn/dich-vu-cung-cap-kenh-tiktok">Cung cấp kênh Tiktok</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                        href="https://socmedia.vn/dich-vu-tuong-tac-tiktok">Tương tác Tiktok</a></li>
                            </ul>
                        </li>

                        <li id="menu-item-578"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-578 menu-item-design-default {{ request()->is('bai-viet*') ? 'active' : '' }}">
                            <a href="{{ route('list-post') }}" class="nav-top-link">Blog</a></li>
                        <li id="menu-item-1115"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1115 menu-item-design-default {{ request()->is('lien-he') ? 'active' : '' }}">
                            <a href="{{ route('index-contact') }}" class="nav-top-link">Liên Hệ</a></li>

                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="nav-icon has-icon">
                            <a href="javascript:void(0)" data-open="#main-menu" data-pos="left"
                               data-bg="main-menu-overlay" data-color=""
                               class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>

<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
            <li
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1255 current_page_item menu-item-1353">
                <a href="{{ route('index') }}" aria-current="page">Trang chủ</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1503"><a
                    href="gioi-thieu">Giới Thiệu</a>
            </li>
           
            @if (!empty($categoryFlatList))
                @foreach ($categoryFlatList as $item)
                    @if ($item->category_id == null)
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069">
                            <a>{{ $item->name }}</a>
                            @if (!empty($item->child))
                                <ul class="sub-menu nav-sidebar-ul children">
                                    @foreach ($item->child as $value)
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                                            <a href="{{ route('service-detail', [$value->slug]) }}">{{ $value->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
            @endif
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069" aria-expanded="true">
                <a>Dịch vụ Facebook</a>
                <ul class="sub-menu nav-sidebar-ul children">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                        <a href="https://socmedia.vn/dich-vu-cung-cap-group-facebook">Cung cấp Group Facebook</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                        <a href="https://socmedia.vn/dich-vu-cung-cap-fanpage-facebook">Cung cấp FanPage Facebook</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                        <a href="https://socmedia.vn/dich-vu-tuong-tac-facebook">Tương tác Facebook</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069" aria-expanded="true">
                <a>Dịch vụ Tiktok</a>
                <ul class="sub-menu nav-sidebar-ul children">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                        <a href="https://socmedia.vn/dich-vu-cung-cap-kenh-tiktok">Cung cấp kênh Tiktok</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514">
                        <a href="https://socmedia.vn/dich-vu-tuong-tac-tiktok">Tương tác Tiktok</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-578"><a
                    href="{{ route('list-post') }}">Blog</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1115"><a
                    href="lien-he">Liên Hệ</a></li>

            <li class="header-divider"></li>
        </ul>
    </div>
</div>
