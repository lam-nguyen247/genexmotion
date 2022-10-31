@extends('home.layouts.app')

@section('title', 'SocMedia - '. $postServices->name)
@section('description', $postServices->name)

@section('content')
<div class="row align-center page-wrapper">
    <div class="large-20 col">
        <div class="row large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-1">

        </div>
    </div>
</div>
    {{-- @include('home.service.banner-index') --}}
@endsection

@section('js')

    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
    <script>
       function clickContact(){
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
        }else{
            alert("Vui lòng nhập họ tên và số điện thoại");
        }
       }
    </script>
@endsection
