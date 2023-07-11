<section style="padding: 60px 0px; margin-top: 10px;">
    <div class="row row-collapse row-full-width">
        <div class="col small-12 large-12">
            <div class="col-inner">
                <div class="text-center uppercase">
                    <h3><strong><span style="color: #282828;" data-cms="{{app()->getLocale()}}-service-home-1">NHỮNG DỊCH VỤ MÀ SOCMEDIA ĐANG CÓ </span></strong>
                    </h3>
                </div>
                <div class="row row-collapse row-full-width align-center">
                    @if ($categoryFlatList)
                            <?php
                            $arrIds = ['banner-775166436', 'banner-1702831144', 'banner-956890562', 'banner-1671117404'];
                            $index = 0;
                            $i = 0;
                            ?>
                        @foreach($categoryFlatList as  $item)
                            @if ($item->category_id == '')
                                @foreach ( $item->child as $key => $value)
                                    @php
                                        if($i++ === 3) break;
                                    @endphp
                                    <a href="{{ route('service-detail', [$value->slug]) }}">
                                        <div id="col-287909432" class="col medium-4 small-6 large-4">
                                            <div class="text-inner text-center">
                                                <div id="text-491937592" class="text service-box">
                                                    <p class="uppercase">{{ $value->name }}</p>
                                                    <h3 class="uppercase service-name">
                                                        <strong>{{ $value->name }}</strong></h3>
                                                </div>

                                                <a href="{{ route('service-detail', [$value->slug]) }}"
                                                   target="_self"
                                                   class="button success is-gloss">
                                                    <span>Xem ngay</span>
                                                    <i class="icon-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

</section>
