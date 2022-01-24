<footer id="footer" class="footer-wrapper">
    <section class="section dark" id="section_357506014">
      <div class="bg section-bg fill bg-fill  ">
        <div class="section-bg-overlay absolute fill"></div>
      </div>
      <div class="section-content relative">
        <div id="gap-1927004136" class="gap-element clearfix" style="display:block; height:auto;">
        </div>
        <div class="row" id="row-266082785">
          <div id="col-1337534983" class="col medium-12 small-12 large-4">
            <div class="col-inner">
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1962059759">
                <div class="img-inner dark">
                  <img width="1020" height="103" @src="/images/2021/10/Logo_genex_convert24-1024x103.png"
                    class="attachment-large size-large" alt="" loading="lazy"
                    sizes="(max-width: 1020px) 100vw, 1020px" />
                </div>
              </div>
              <div id="gap-2084098871" class="gap-element clearfix" style="display:block; height:auto;">
              </div>
              <div id="text-574663578" class="text">
                <p data-cms="{{app()->getLocale()}}-footer-text-1">Tầng 3, Tòa nhà Biển Bắc <br />Số 278 Tôn Đức Thắng<br />Đống Đa, Hà Nội</p>
              </div>

              <a class="button primary is-link is-small lowercase">
                <i class="icon-phone"></i> <span>Liên Hệ</span>
              </a>

              <a class="button success is-link is-small lowercase">
                <i class="icon-envelop"></i> <span>E-mail</span>
              </a>

            </div>
          </div>

          <div id="col-1572778812" class="col medium-12 small-12 large-8">
            <div class="col-inner">
              <div class="row row-small" id="row-751630850">
                <div id="col-1651846005" class="col medium-7 small-12 large-4">
                  <div class="col-inner">
                    <h4>Về Chúng Tôi</h4>
                    <ul>
                      <li class="bullet-arrow"><span style="font-size: 90%;"><a href="{{ route('index') }}" target="_blank"
                            rel="noopener">Trang Chủ</a></span></li>
                      <li class="bullet-arrow"><a href="#" target="_blank" rel="noopener"><span
                            style="font-size: 12.96px;">Giới Thiệu</span></a></li>
                      <li class="bullet-arrow"><a href="#" target="_blank" rel="noopener"><span
                            style="font-size: 12.96px;">Tuyển Dụng</span></a></li>
                      <li class="bullet-arrow"><a href="#" target="_blank" rel="noopener"><span
                            style="font-size: 12.96px;">Liên Hệ</span></a></li>
                    </ul>
                  </div>
                </div>
                @if (!empty($categories))
                  @foreach ($categories as $item)
                  <div id="col-1267749942" class="col medium-5 small-12 large-4">
                    <div class="col-inner">
                      <div id="text-141019792" class="text">
                        <h4>{{ $item->name }}</h4>
                        <ul>
                          @foreach ($item->parentList as $value)
                            <li class="bullet-arrow">
                              <a href="{{ route('service-detail', [$item->slug, $value->slug]) }}">
                                <span style="font-size: 12.96px;">
                                  {{ $value->name }}
                                </span>
                              </a>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="row-377746471">
          <div id="col-2114349370" class="col small-12 large-12">
            <div class="col-inner">
              <div class="is-divider divider clearfix"
                style="max-width:100%;height:2px;background-color:rgb(255, 255, 255);">
            </div>
            </div>
          </div>
        </div>
        <div class="row hide-for-small" id="row-1048049302">
          <div id="col-450650010" class="col medium-4 small-12 large-4">
            <div class="col-inner text-left">
              <p>© 2022 GeneX Motion</p>
            </div>
          </div>
        </div>
        <div class="row show-for-small" id="row-422934819">
          <div id="col-1882873573" class="col small-12 large-12">
            <div class="col-inner text-center">
              <div class="social-icons follow-icons full-width text-center"><a href="#" target="_blank"
                  data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip"
                  title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a><a
                  href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram"
                  class="icon plain  instagram tooltip" title="Follow on Instagram"
                  aria-label="Follow on Instagram"><i class="icon-instagram"></i></a><a href="#" target="_blank"
                  data-label="Twitter" rel="noopener noreferrer nofollow" class="icon plain  twitter tooltip"
                  title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter"></i></a><a href="#"
                  target="_blank" rel="noopener noreferrer nofollow" data-label="LinkedIn"
                  class="icon plain  linkedin tooltip" title="Follow on LinkedIn" aria-label="Follow on LinkedIn"><i
                    class="icon-linkedin"></i></a>
                </div>

              <div id="gap-1363525218" class="gap-element clearfix" style="display:block; height:auto;">
              </div>


              <p>©<br />
                2022 UX Themes</p>
              <a class="button white is-link is-small">
                <span>Terms</span>
              </a>


              <a class="button white is-link is-small">
                <span>Privacy</span>
              </a>


              <a class="button white is-link is-small">
                <span>Cookies</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="absolute-footer dark medium-text-center text-center">
      <div class="container clearfix">
        <div class="footer-primary pull-left">
          <div class="menu-footer-container">
            <ul id="menu-footer" class="links footer-nav uppercase">
              <li id="menu-item-282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282"><a
                  href="lien-he/index.html">Liên Hệ</a></li>
              <li id="menu-item-283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283"><a
                  href="dich-vu/index.html">Dịch Vụ</a></li>
              <li id="menu-item-284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284"><a
                  href="tuyen-dung/index.html">Tuyển Dụng</a></li>
              <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a
                  href="gioi-thieu/index.html">Giới Thiệu</a></li>
            </ul>
          </div>
          <div class="copyright-footer">
            Copyright 2022 © <strong>GeneXMotion</strong> </div>
        </div>
      </div>
    </div>

    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle" id="top-link"
      aria-label="Go to top"><i class="icon-angle-up"></i></a>
  </footer>