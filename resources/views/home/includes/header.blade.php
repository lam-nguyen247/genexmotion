<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
      <div id="top-bar" class="header-top hide-for-sticky nav-dark flex-has-center">
        <div class="flex-row container">
          <div class="flex-col hide-for-medium flex-left">
            <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
              <li class="html header-social-icons ml-0">
                <div class="social-icons follow-icons">
                  <a href="https://www.facebook.com/SOC-MEDIA-100634065860280/" target="_blank" data-label="Facebook"
                    rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook"
                    aria-label="Follow on Facebook">
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="mailto:info.socmedia.vn@gmail.com" data-label="E-mail" rel="nofollow"
                    class="icon plain  email tooltip" title="Send us an email" aria-label="Send us an email"><i
                      class="icon-envelop"></i></a><a href="tel:+84964962769" target="_blank" data-label="Phone"
                    rel="noopener noreferrer nofollow" class="icon plain  phone tooltip" title="Call us"
                    aria-label="Call us"><i class="icon-phone"></i></a></div>
              </li>
            </ul>
          </div>

          <div class="flex-col hide-for-medium flex-center">
            <ul class="nav nav-center nav-small  nav-divided">
              <li class="html custom html_topbar_left">

              </li>
            </ul>
          </div>

          <div class="flex-col hide-for-medium flex-right">
            <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
              <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                  <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                    <form method="get" class="searchform" action="https://genexmotion.com/" role="search">
                      <div class="flex-row relative">
                        <div class="flex-col flex-grow">
                          <input type="search" class="search-field mb-0" name="s" value="" id="s"
                            placeholder="Tìm kiếm" />
                        </div>
                        <div class="flex-col">
                          <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0"
                            aria-label="Submit">
                            <i class="icon-search"></i>
                          </button>
                        </div>
                      </div>
                      <div class="live-search-results text-left z-top"></div>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div class="flex-col show-for-medium flex-grow">
            <ul class="nav nav-center nav-small mobile-nav  nav-divided">

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
                class="header_logo header-logo" alt="SocMedia Motion" /><img width="1020" height="103"
                @src="/images/socmedia_logo.png" class="header-logo-dark"
                alt="SocMedia Motion" /></a>
          </div>

          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
            <ul class="mobile-nav nav nav-left ">
              <li class="nav-icon has-icon">
                <a href="javascript:void(0)" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color=""
                  class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                  <i class="icon-menu"></i>
                </a>
              </li>
            </ul>
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
                <a href="{{ route('index')}}" aria-current="page" class="nav-top-link">Trang chủ</a></li>
                @if (!empty($categoryFlatList))
                    @foreach ($categoryFlatList as $item)
                    @if ($item->category_id == null)
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1069 menu-item-design-default has-dropdown {{ request()->is($item->slug . '*') ? 'active' : '' }} ">
                            <a class="nav-top-link">{{ $item->name }}<i class="icon-angle-down"></i></a>
                            @if (!empty($item->child))
                            <ul class="sub-menu nav-dropdown nav-dropdown-default">
                                @foreach ($item->child as $value)
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1514"><a
                                href="{{ route('service-detail', [$item->slug, $value->slug]) }}">{{ $value->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                    @endif
                    @endforeach
                @endif
              <li id="menu-item-578"
                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-578 menu-item-design-default {{ request()->is('bai-viet*') ? 'active' : '' }}">
                <a href="{{ route('list-post') }}" class="nav-top-link">Bài Viết</a></li>
              <li id="menu-item-1115"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1115 menu-item-design-default {{ request()->is('lien-he') ? 'active' : '' }}">
                <a href="{{ route('index-contact') }}" class="nav-top-link">Liên Hệ</a></li>
              <li id="menu-item-1503"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1503 menu-item-design-default {{ request()->is('gioi-thieu') ? 'active' : '' }}">
                <a href="{{ route('about-us') }}" class="nav-top-link">Giới Thiệu</a></li>
            </ul>
          </div>

          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
            <ul class="mobile-nav nav nav-right ">
              <li class="header-search header-search-lightbox has-icon">
                <div class="header-button"> <a href="#search-lightbox" aria-label="Search"
                    data-open="#search-lightbox" data-focus="input.search-field"
                    class="icon button circle is-outline is-small">
                    <i class="icon-search" style="font-size:16px;"></i></a>
                </div>

                <div id="search-lightbox" class="mfp-hide dark text-center">
                  <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                    <form method="get" class="searchform" action="https://genexmotion.com/" role="search">
                      <div class="flex-row relative">
                        <div class="flex-col flex-grow">
                          <input type="search" class="search-field mb-0" name="s" value="" id="s"
                            placeholder="Tìm kiếm" />
                        </div>
                        <div class="flex-col">
                          <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0"
                            aria-label="Submit">
                            <i class="icon-search"></i> </button>
                        </div>
                      </div>
                      <div class="live-search-results text-left z-top"></div>
                    </form>
                  </div>
                </div>
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


        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-578"><a
            href="{{ route('list-post') }}">Bài Viết</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1115"><a
            href="lien-he">Liên Hệ</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1503"><a
            href="gioi-thieu">Giới Thiệu</a></li>
        <li class="header-divider"></li>
      </ul>
    </div>
  </div>
