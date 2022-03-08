@extends('home.layouts.app')

@section('title', 'SocMedia Animation  - SocMedia Motion')
@section('description', 'SocMedia Animation ĐĂNG KÝ Đăng ký Làm Video Motion Graphic Chuyên Nghiệp 00 00 00 00 Ngày Giờ Phút Giây Đăng ký ngay để nhận ưu đãi 300.000VNĐ THU HÚT VÀ ĐÁNH TRÚNG TÂM LÝKHÁCH HÀNG NHỜ VIDEO ANIMATION BỪNG SÁNG THƯƠNG HIỆU – BÙNG NỔ DOANH SỐ Nhờ chuyển động đẹp mắt')
@section('css')
@endsection

@section('content')
@include('home.service.banner-index')
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
