@extends('home.layouts.app')

@section('title', 'SocMedia - '. $postServices->name)
@section('description', $postServices->name)
@section('css')
@endsection
<style>
    .service-wrapper{
        display: grid;
        grid-template-columns:  400px;
        padding-top: 60px;

    }
    .service-left{
        width: auto;
        max-width: 730px;
        float:left;
    }
    .service-right{
        width: auto;
        max-width: 400px;
        float:right;
    }
    .service-left, .service-right{
        position: relative;
    }
    .service-left h1{
        color: #F0BB3F;
        font-family: Montserrat;
        font-size: 64px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-transform: uppercase;
        margin-bottom: 32px;
    }
    .service-left .service-content *{
        color: #F0BB3F;
        font-family: Montserrat;
        font-size: 64px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-transform: uppercase;
    }

    .service-right .service-element{
        border-radius: 10px;
        background: #FFF;
        box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
        padding: 32px;
    }
    .service-form input{
        height: 50px !important;
        padding: 10px 10px 10px 16px !important;
        text-align: center !important;
        gap: 10px !important;
        align-self: stretch !important;
        border-radius: 20px !important;
        border: 1px solid #535353 !important;
    }
    .service-control textarea{
        padding: 10px 10px 10px 16px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 20px;
        border: 1px solid #535353;
    }
    .service-form button{
        border-radius: 20px;
        background: linear-gradient(134deg, #EDB739 0%, #FFD061 100%);
        text-align: center;
        display: block;
    }
</style>
@section('content')
   <div class="container">
       @include('home.service.banner-index')
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
