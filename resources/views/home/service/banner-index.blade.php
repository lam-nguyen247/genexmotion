<div id="content" role="main" class="content-area relative">
    <img class="absolute socmedia_service_5" src="/images/socmedia_service_5.png" title="socmedia_service_5" alt="socmedia_service_5"/>
    <div class="service-wrapper">
        {{-- SECTION ONE --}}
        <div class="service-left relative">
            <h1>{{$postServices->name}}</h1>
            @if ($postServices->content != null && trim($postServices->content) != '')
                <div class="service-content">
                    {!!$postServices->content!!}
                </div>
            @endif
            <img class="absolute socmedia_service_1" src="/images/socmedia_service_1.png" title="socmedia_service_1" alt="socmedia_service_1"/>
            <img class="absolute socmedia_service_4" src="/images/socmedia_service_4.png" title="socmedia_service_4" alt="socmedia_service_4"/>
        </div>
        <div class="service-right">
            <div class="service-element relative">
                <form method="post" class="service-form ">
                    <img class="absolute socmedia_service_3" src="/images/socmedia_service_3.png" title="socmedia_service_3" alt="socmedia_service_3"/>
                    <div  class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                @csrf
                                <input tabindex="0" name="service"
                                       class="ladi-form-control" type="hidden"
                                       value="{{$postServices->name}}">
                                <input tabindex="1" name="name" required=""
                                       id="name" required type="text"
                                       placeholder="Họ và tên" value="">
                            </div>
                        </div>
                    </div>
                    <div  class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                <input tabindex="3" name="phone" required="" id="phone"
                                       required type="tel"
                                       placeholder="Số điện thoại" value="">
                            </div>
                        </div>
                    </div>
                    <div  class="service-control">
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


        {{-- SECTION POST SERVICES --}}
    </div>
    @include('home.service.post-service')
    <img class="absolute socmedia_service_2" src="/images/socmedia_service_2.png" title="socmedia_service_2" alt="socmedia_service_2"/>
    <img class="absolute socmedia_service_8" src="/images/socmedia_service_8.png" title="socmedia_service_8" alt="socmedia_service_8"/>
</div>
