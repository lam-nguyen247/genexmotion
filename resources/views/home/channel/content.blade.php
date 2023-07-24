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
            <table class="table-fill">
                <thead>
                    <tr>
                        <th class="text-left">Month</th>
                        <th class="text-left">Sales</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">January</td>
                        <td class="text-left">$ 50,000.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">February</td>
                        <td class="text-left">$ 10,000.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">March</td>
                        <td class="text-left">$ 85,000.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">April</td>
                        <td class="text-left">$ 56,000.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">May</td>
                        <td class="text-left">$ 98,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="counter">
            <div class="item">
                <h1 class="count" data-number="3+"></h1>
                <h3 class="text">year+ Eexperience</h3>
            </div>
            <div class="item">
                <h1 class="count" data-number="600+"></h1>
                <h3 class="text">project completed</h3>
            </div>
            <div class="item">
                <h1 class="count" data-number="300+"></h1>
                <h3 class="text">happy clients</h3>
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
