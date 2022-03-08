@extends('home.layouts.app')

@section('title', 'SocMedia Animation - SocMedia Motion')
@section('description', 'SocMedia Animation ĐĂNG KÝ Đăng ký Làm Video Motion Graphic Chuyên Nghiệp 00 00 00 00 Ngày Giờ Phút Giây Đăng ký ngay để nhận ưu đãi 300.000VNĐ THU HÚT VÀ ĐÁNH TRÚNG TÂM LÝKHÁCH HÀNG NHỜ VIDEO ANIMATION BỪNG SÁNG THƯƠNG HIỆU – BÙNG NỔ DOANH SỐ Nhờ chuyển động đẹp mắt')
@section('css')
@endsection

@section('content')
@include('home.contact.form')
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#btn-submit-info').click(function (e) {
            e.preventDefault();
            $('.eapps-form-error').removeClass('eapps-form-error-show');
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var name = $('.eapps-form-element-input-text-name').val().trim();
            var email = $('.eapps-form-element-input-text-email').val().trim();
            if (name == "" || !pattern.test(email)) {
                $('.eapps-form-error').addClass('eapps-form-error-show');
            } else {
                $('.eapps-form-error').removeClass('eapps-form-error-show');
                $('.eapps-form-actions .eapps-form-actions-button').addClass('eapps-form-actions-button-loading');
                $.ajax({
                    type: 'post',
                    url: "{{ route('create-contact') }}",
                    data: $('.form-register-info').serialize(),
                    success: function (res) {
                        if (res.success) {
                            $('.eapps-form-spots .eapps-form-spot-inline .eapps-form').addClass('eapps-form-sent');
                            $('.eapps-form-actions .eapps-form-actions-button').removeClass('eapps-form-actions-button-loading');
                        }
                    }
                });
            }
        });

        $('.btn-ok-form').click(function (e) {
            e.preventDefault();
            $('.form-register-info').trigger("reset");
            $('.eapps-form-spots .eapps-form-spot-inline .eapps-form').removeClass('eapps-form-sent');
        });

    });
</script>
@endsection
