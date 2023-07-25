<div id="content" role="main" class="content-area relative">
    <img class="absolute socmedia_service_5" src="/images/socmedia_service_5.png" title="socmedia_service_5"
         alt="socmedia_service_5"/>
    <div class="service-wrapper">
        {{-- SECTION ONE --}}
        <div class="service-left relative">
            <h1>{{$page->name}}</h1>
            @if ($page->content != null && trim($page->content) != '')
                <div class="service-content">
                    {!!$page->content!!}
                </div>
            @endif
            <img class="absolute socmedia_service_1" src="/images/socmedia_service_1.png" title="socmedia_service_1"
                 alt="socmedia_service_1"/>
            <img class="absolute socmedia_service_4" src="/images/socmedia_service_4.png" title="socmedia_service_4"
                 alt="socmedia_service_4"/>
        </div>
        <div class="service-right">
            <div class="service-element relative">
                <form method="post" class="service-form ">
                    <img class="absolute socmedia_service_3" src="/images/socmedia_service_3.png"
                         title="socmedia_service_3" alt="socmedia_service_3"/>
                    <div class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                @csrf
                                <input tabindex="0" name="service"
                                       class="ladi-form-control" type="hidden"
                                       value="{{$page->name}}">
                                <input tabindex="1" name="name" required=""
                                       id="name" required type="text"
                                       placeholder="Họ và tên" value="">
                            </div>
                        </div>
                    </div>
                    <div class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                <input tabindex="3" name="phone" required="" id="phone"
                                       required type="tel"
                                       placeholder="Số điện thoại" value="">
                            </div>
                        </div>
                    </div>
                    <div class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                                    <textarea tabindex="5" name="content"
                                                              required
                                                              placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="service-button" onclick="clickContact()">
                        <button class="ladi-headline" type="button">Gửi thông tin</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- END SECTION ONE --}}
        <div style="clear: both;"></div>
        <div>
           <div class="price">
                <div class="price-left">
                    <h3>Bảng giá dịch vụ tăng tương tác Facebook </h3>
                    <ul class="price-items">
                        <li>
                            Tăng lượt thích (Like): Xây dựng mạng lưới người theo dõi trung thành và tăng tích cực lượt thích cho các bài đăng của bạn, giúp tăng cường sự thú vị và giá trị của nội dung.
                        </li>
                        <li>Tăng lượt chia sẻ (Share): Lan tỏa thông tin nhanh chóng và rộng rãi thông qua việc tăng số lượt chia sẻ bài viết, giúp tăng tầm vọng của thông điệp và thu hút thêm người tiềm năng.</li>
                        <li>Tăng lượt bình luận (Comment): Thúc đẩy cuộc trò chuyện và tương tác tích cực qua việc tăng số lượt bình luận, giúp tạo dựng môi trường giao tiếp năng động và thú vị.</li>
                        <li>Tăng lượt theo dõi (Follow): Xây dựng cộng đồng người hâm mộ và tăng lượng người theo dõi trên trang của bạn, giúp bạn có thêm tiềm năng tiếp cận đối tượng khách hàng rộng lớn.</li>
                    </ul>
                    <div id="counter">
                        <div class="item">
                            <h1 class="count" data-number="3"></h1>
                            <h3 class="text">Kinh nghiệm</h3>
                        </div>
                        <div class="item">
                            <h1 class="count" data-number="600"></h1>
                            <h3 class="text">Sản phẩm</h3>
                        </div>
                        <div class="item">
                            <h1 class="count" data-number="300"></h1>
                            <h3 class="text">Khách hàng</h3>
                        </div>
            
                    </div>
                </div>
                <div class="price-right">
                    <table class="table-fill">
                        <thead>
                            <tr>
                                @foreach ($values[0] as $key => $title)
                                    @if ($key % 2 == 1)
                                        <th class="txt-left">{{$title}}</th>
                                    @endif
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            @foreach ($values as $key => $items)
                                @if ($key > 0)
                                <tr>
                                    @foreach ($items as $key => $item)
                                        @if ($key % 2 == 1)
                                            <td class="text-left">{{$item}}</td>
                                        @endif
                                    @endforeach
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
      
    </div>
    {{-- SECTION POST SERVICES --}}
</div>
<img class="absolute socmedia_service_2" src="/images/socmedia_service_2.png" title="socmedia_service_2"
     alt="socmedia_service_2"/>
<img class="absolute socmedia_service_8" src="/images/socmedia_service_8.png" title="socmedia_service_8"
     alt="socmedia_service_8"/>
</div>
