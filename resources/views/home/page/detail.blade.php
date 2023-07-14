@extends('home.layouts.app')

@section('title', $page->name)


@section('content')
    <div id="content" role="main" class="content-area">
        <div class="ladi-wraper">
            {{-- SECTION ONE --}}
            <div id="SECTION1" class="ladi-section">
                <div class="ladi-section-background"></div>
                <div class="ladi-container">
                    <div id="GROUP972" class="ladi-element ladi-animation">
                        <div class="ladi-group">
                            <div id="GROUP971" class="ladi-element">
                                <div class="ladi-group">
                                    <div id="BOX391" class="ladi-element">
                                        <div class="ladi-box"></div>
                                    </div>
                                    <div id="FORM392" data-config-id="60b8b3a76d94f20020f04602" class="ladi-element">
                                        <form method="post" class="ladi-form form-register-info">
                                            <div id="BUTTON393" class="ladi-element" onclick="clickContact()">
                                                <div class="ladi-button">
                                                    <div class="ladi-button-background"></div>
                                                    <div id="BUTTON_TEXT393" class="ladi-element">
                                                        <p class="ladi-headline" type="button">ĐĂNG KÝ</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="FORM_ITEM395" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item">
                                                        @csrf
                                                        <input tabindex="0" name="service" required=""
                                                               class="ladi-form-control" type="hidden"
                                                               value="{{$page->name}}">
                                                        <input tabindex="1" name="name" required=""
                                                               class="ladi-form-control" id="name" required type="text"
                                                               placeholder="Họ và tên" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="FORM_ITEM397" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item">
                                                        <input tabindex="3" name="phone" required="" id="phone"
                                                               class="ladi-form-control" required type="tel"
                                                               placeholder="Số điện thoại" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="FORM_ITEM399" class="ladi-element">
                                                <div class="ladi-form-item-container">
                                                    <div class="ladi-form-item-background"></div>
                                                    <div class="ladi-form-item">
                                                    <textarea tabindex="5" name="content" class="ladi-form-control"
                                                              required
                                                              placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP1209" class="ladi-element">
                        <div class="ladi-group">
                            <div id="SHAPE424" class="ladi-element ladi-animation">
                                <div class="ladi-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                         preserveAspectRatio="none" viewBox="0 0 300 300" fill="#000" class="">
                                        <path
                                            d="M12.1,195.1l-0.8,2.9L11,199l-0.8,2.9c-0.7,2.7,0.6,4.6,0.6,4.6c0,0,1.9-1.1,2.5-3.8l0.7-2.8l0.3-1l0.8-2.8 c0.8-2.6-0.3-4.5-0.3-4.5C15,191.5,12.9,192.4,12.1,195.1z"></path>
                                        <path
                                            d="M23.8,166l-1.3,2.7l-0.5,1l-1.3,2.7c-1.2,2.5-0.3,4.6-0.3,4.6c0,0,2.1-0.7,3.2-3.2l1.2-2.6l0.5-1l1.3-2.6   c1.2-2.4,0.5-4.5,0.5-4.5C27.2,163,25.1,163.5,23.8,166z"></path>
                                        <path
                                            d="M40.7,139.7l-1.8,2.3l-0.7,0.9l-1.8,2.4c-1.7,2.3-1.1,4.5-1.2,4.4c0,0,2.2-0.3,3.8-2.5l1.7-2.3l0.7-0.9   l1.8-2.3c1.7-2.1,1.5-4.3,1.5-4.3C44.7,137.4,42.5,137.5,40.7,139.7z"></path>
                                        <path
                                            d="M63.5,118c-2.3,1.6-2.4,1.8-2.4,1.8l-0.9,0.7l-2.3,1.9c-2.2,1.8-2.2,4-2.2,4c0,0,2.2,0.2,4.3-1.5l2.3-1.8 l0.9-0.7c0,0,0.1-0.1,2.3-1.7c2.2-1.6,2.6-3.7,2.6-3.7C67.9,116.9,65.7,116.4,63.5,118z"></path>
                                        <path
                                            d="M91.4,103.7c-2.7,0.9-2.8,1-2.8,1l-1,0.4c0,0-0.2,0-2.8,1.1c-2.6,1.1-3.3,3.2-3.3,3.2c0,0,2,0.8,4.5-0.2    c2.5-1,2.7-1,2.7-1.1l1-0.4c0,0,0.1-0.1,2.7-1C95,106,96,104,96,104C96,104,94.1,102.9,91.4,103.7z"></path>
                                        <path
                                            d="M119.4,98.4l-1.1,0.1l-3,0.3c-2.8,0.3-4.1,2.1-4.1,2.1c0,0,1.7,1.4,4.4,1.1l2.9-0.3l1.1-0.1l2.9-0.2 c2.7-0.1,4.2-1.7,4.2-1.7c0,0-1.5-1.6-4.3-1.5L119.4,98.4z"></path>
                                        <path
                                            d="M153.6,100.9c-2.7-0.6-2.9-0.6-2.9-0.6l-1.1-0.2c0,0-0.2-0.1-2.9-0.5c-2.8-0.4-4.5,1-4.5,1c0,0,1.3,1.8,4,2.2   c2.7,0.4,2.9,0.5,2.9,0.5l1.1,0.2c0,0,0.2,0,2.8,0.6c2.6,0.6,4.5-0.5,4.5-0.5C157.4,103.6,156.4,101.5,153.6,100.9z"></path>
                                        <path
                                            d="M179.6,112.8c-0.3-0.2-0.6-0.5-0.9-0.7c0,0-0.1-0.2-2.5-1.8c-2.4-1.6-4.6-0.9-4.5-0.9c0,0,0.5,2.1,2.7,3.6   c2.2,1.5,2.3,1.7,2.3,1.7c0.3,0.2,0.6,0.4,0.8,0.6c0,0,0.2,0.1,2.2,1.8c2,1.8,4.1,1.8,4.1,1.8c0,0,0.2-2.3-2-4.2    C179.8,112.9,179.6,112.8,179.6,112.8z"></path>
                                        <path
                                            d="M196.4,139.5l-0.2-1.1c0,0,0-0.2-0.8-2.9c-0.9-2.8-3-3.5-3-3.5c0,0-0.9,2-0.1,4.5c0.8,2.6,0.7,2.7,0.7,2.7 l0.2,1c0,0,0.1,0.2,0.5,2.8c0.4,2.6,2,4,2,4c0,0,1.6-1.6,1.2-4.5C196.5,139.7,196.4,139.5,196.4,139.5z"></path>
                                        <path
                                            d="M191,165.8c-1,2.5-1.2,2.6-1.1,2.6l-0.5,0.9c0,0,0,0.2-1.4,2.5c-1.4,2.3-1,4.4-1,4.4c0,0,2.3-0.2,3.8-2.7    c1.4-2.5,1.5-2.7,1.5-2.7l0.5-1c0,0,0.1-0.1,1.2-2.8c1.1-2.7-0.1-4.7-0.1-4.6C193.9,162.3,192,163.3,191,165.8z"></path>
                                        <path
                                            d="M170.9,186.4c-2.5,0.8-2.7,0.8-2.7,0.8l-1,0.2c0,0-0.1,0.1-2.7,0.4c-2.6,0.2-4.1,1.7-4.1,1.7    c0,0,1.5,1.8,4.4,1.5c2.9-0.3,3.1-0.5,3.1-0.4l1.1-0.2c0,0,0.2,0,3-0.9c2.8-1,3.4-3.3,3.4-3.2C175.3,186.2,173.3,185.5,170.9,186.4  z"></path>
                                        <path
                                            d="M142,178.6l-0.6-0.8c0,0-0.2-0.1-1.5-2.3c-1.3-2.2-3.3-3-3.3-3c0,0-1,2.1,0.5,4.6c1.5,2.5,1.7,2.6,1.7,2.6 c0.2,0.3,0.4,0.6,0.7,0.9c0,0,0,0.2,2.1,2.4c2.1,2.1,4.4,1.7,4.4,1.7c0,0-0.3-2.1-2.1-3.9C142,178.8,142,178.6,142,178.6z"></path>
                                        <path
                                            d="M132.3,145.9c-0.3,2.8-0.3,3-0.3,3l-0.1,1.1c0,0-0.1,0.2-0.1,3c-0.1,2.9,1.7,4.3,1.7,4.3c0,0,1.5-1.6,1.6-4.2  c0.1-2.7,0.1-2.9,0.1-2.9l0.1-1.1c0,0,0-0.2,0.3-2.9c0.3-2.7-0.9-4.4-1-4.4C134.6,141.8,132.7,143,132.3,145.9z"></path>
                                        <path
                                            d="M142.2,116c-1.3,2.5-1.4,2.7-1.4,2.7l-0.5,1c0,0-0.1,0.1-1.3,2.7c-1.2,2.6-0.2,4.6-0.2,4.6c0,0,2-0.8,3.1-3.3    c1.1-2.5,1.2-2.6,1.2-2.6l0.5-1c0,0,0-0.2,1.3-2.6c1.3-2.4,0.7-4.5,0.7-4.5C145.7,113,143.5,113.5,142.2,116z"></path>
                                        <path
                                            d="M162.1,96.2c0,0,0.1-0.1,2.2-1.8c2.1-1.6,2.5-3.8,2.5-3.8c0,0-2.2-0.5-4.5,1.2c-2.2,1.8-2.3,1.9-2.3,1.9   c-0.3,0.2-0.6,0.5-0.8,0.7c0,0-0.2,0.1-2.2,2c-2.1,2-1.9,4.2-1.9,4.2c0,0,2.2,0,4.1-1.9c2-1.9,2.1-1.9,2.1-1.9  C161.6,96.6,161.9,96.4,162.1,96.2z"></path>
                                        <path
                                            d="M188.9,82.9c0,0,0.2-0.1,2.8-0.5c2.6-0.4,4-2.1,4-2.1c0,0-1.7-1.5-4.5-1.1c-2.8,0.4-3,0.6-3,0.5l-1.1,0.2 c0,0-0.2,0-2.9,0.7c-2.8,0.8-3.7,2.9-3.6,2.8c0,0,1.9,1,4.5,0.3c2.6-0.7,2.8-0.7,2.8-0.7L188.9,82.9z"></path>
                                        <path
                                            d="M222.5,83.3c-2.6-1.2-2.8-1.2-2.8-1.2c-0.3-0.2-0.7-0.3-1-0.4c0,0-0.1-0.1-2.9-1c-2.8-0.8-4.6,0.5-4.6,0.5 c0,0,1.1,1.9,3.6,2.6c2.5,0.8,2.7,1,2.7,0.9c0.3,0.1,0.7,0.2,1,0.4c0,0,0.2,0,2.6,1.1c2.4,1.2,4.5,0.5,4.5,0.5  C225.6,86.8,225.1,84.6,222.5,83.3z"></path>
                                        <path
                                            d="M244.7,101.3l-0.7-0.8c0,0-0.1-0.2-2-2.3c-1.9-2.1-4.2-2-4.2-2c0,0-0.1,2.2,1.8,4.2c1.8,2,1.9,2.2,1.9,2.2    l0.7,0.8c0,0,0.1,0.1,1.8,2.3c1.6,2.1,3.8,2.4,3.8,2.4c0,0,0.5-2.2-1.3-4.4C244.8,101.5,244.7,101.4,244.7,101.3z"></path>
                                        <path
                                            d="M260.6,127.1l-1.3-2.7c-1.3-2.5-3.4-3.1-3.4-3.1c0,0-0.7,2.1,0.5,4.5l1.3,2.6l0.5,1l1.2,2.6   c1.1,2.5,3.2,3.3,3.2,3.3c0,0,0.9-2-0.2-4.6l-1.2-2.7L260.6,127.1z"></path>
                                        <path
                                            d="M268.1,149.9c0,0-1.1,1.9-0.2,4.6l0.9,2.8l0.3,1l0.8,2.8c0.8,2.6,2.7,3.7,2.7,3.7c0,0,1.2-1.9,0.4-4.6  l-0.8-2.8l-0.3-1l-0.9-2.8C270.1,150.8,268.1,149.9,268.1,149.9z"></path>
                                        <path
                                            d="M276.3,187.2l0.2,1.1l0.5,2.9c0.5,2.7,2.3,3.9,2.3,3.9c0,0,1.4-1.8,0.8-4.5l-0.6-2.9l-0.2-1.1l-0.6-2.9   c-0.6-2.7-2.5-3.9-2.5-3.8c0,0-1.3,1.8-0.7,4.5L276.3,187.2z"></path>
                                        <path
                                            d="M282.9,188l-2.2,16.6l-8.3-15.2c-9.6-17.5-17.3-25.8-17.3-25.8s2.9,10.9,12.5,28.4l12.2,22.2l4.1,7.4l1-7.3   l3.4-25.6c2.7-19.8,1.4-31,1.4-31S285.6,168.1,282.9,188z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="IMAGE1197" class="ladi-element ladi-animation">
                                <div class="ladi-image">
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH1199" class="ladi-element">
                                <p class="ladi-paragraph" style="color: #D4B639"
                                   data-cms="{{app()->getLocale()}}-service-index-1"> Giải Pháp Truyền Thông Tối Ưu !</p>
                            </div>
                            <div id="HEADLINE1200" class="ladi-element ladi-animation">
                                <h3 class="ladi-headline" data-cms="{{app()->getLocale()}}-service-index-3">VIDEO</h3>
                            </div>
                            <div id="HEADLINE1201" class="ladi-element ladi-animation">
                                <h3 class="ladi-headline" data-cms="{{app()->getLocale()}}-service-index-5">ANIMATION</h3>
                            </div>
                            <div id="LINE1202" class="ladi-element">
                                <div class="ladi-line">
                                    <div class="ladi-line-container"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH1203" class="ladi-element">
                                <p class="ladi-paragraph">{{ $postServices->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END SECTION ONE --}}

            {{-- SECTION TWO --}}

            @if ($page->content != null && trim($page->content) != '')
                <div class="ladi-section">
                    <div class="ladi-container">
                        {!!$page->content!!}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('js')

    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
    <script>
        function clickContact() {
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var validate = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
            var name = $('#name').val().trim();
            var phone = $('#phone').val().trim();
            if (name != "" && validate.test(phone)) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('create-contact') }}",
                    data: $('.form-register-info').serialize(),
                    success: function (res) {
                        if (res.success) {
                            alert("Đăng ký thành công");
                        }
                    }
                });
            } else {
                alert("Vui lòng nhập họ tên và số điện thoại");
            }
        }
    </script>
@endsection
