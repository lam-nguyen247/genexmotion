@extends('home.layouts.app')

@section('title', 'SocMedia - '. $seo->name)
@section('description', $seo->name)
@section('css')
    <link href="/css/home/form.css" rel="stylesheet"/>
    <link href="/css/home/support.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        @include('home.channel.content')
    </div>
@endsection

@section('js')

    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
    <script>
        let count = document.querySelectorAll(".count")
        let arr = Array.from(count)


        arr.map(function (item) {
            let startnumber = 0

            function counterup() {
                startnumber++
                item.innerHTML = startnumber

                if (startnumber == item.dataset.number) {
                    clearInterval(stop)
                }
            }

            let stop = setInterval(function () {
                counterup()
            }, 50)

        })

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
