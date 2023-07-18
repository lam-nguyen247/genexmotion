@extends('home.layouts.app')

@section('title', $page->name)
@section('css')
    <link href="/css/home/form.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="container">
        <div class="service-wrapper">
            {{-- SECTION ONE --}}
            <div class="service-left">
                <h1>{{$page->name}}</h1>
            </div>
            <div class="service-right">
                <div class="service-element">
                    <form method="post" class="service-form">

                        <div  class="service-control">
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
        <div style="clear: both"></div>
        @if ($page->content != null && trim($page->content) != '')
            <div class="ladi-section">
                {!!$page->content!!}
            </div>
        @endif
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
