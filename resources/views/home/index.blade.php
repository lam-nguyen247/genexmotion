@extends('home.layouts.app')

@section('title', 'Socmedia.vn ')
@section('description', '')
@section('content')
    @include('home.includes.banner')
    @include('home.contact.into')
    @include('home.service.banner-home')
    @include('home.contact.form')
@endsection

@section('js')
    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn-submit-info').click(function (e) {
                e.preventDefault();
                $('.eapps-form-error').removeClass('eapps-form-error-show');
                var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                var name = $('.eapps-form-element-input-text-name').val().trim();
                var email = $('.eapps-form-element-input-text-email').val().trim();
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
            });

            $('.btn-ok-form').click(function (e) {
                e.preventDefault();
                $('.form-register-info').trigger("reset");
                $('.eapps-form-spots .eapps-form-spot-inline .eapps-form').removeClass('eapps-form-sent');
            });

            $('.btn-button-register').click(function (e) {
                e.preventDefault();
                $('.eapps-form-actions .eapps-form-actions-button').addClass('eapps-form-actions-button-loading');
                $.ajax({
                    type: 'post',
                    url: "{{ route('create-contact') }}",
                    data: $('.form-register').serialize(),
                    success: function (res) {
                        if (res.success) {
                            $('.eapps-form-spots .eapps-form-spot-inline .eapps-form').addClass('eapps-form-sent');
                            $('.eapps-form-actions .eapps-form-actions-button').removeClass('eapps-form-actions-button-loading');
                        }
                    }
                });
            });

            $('.btn-close-model').click(function (e) {
                e.preventDefault();
                $('.form-register').trigger("reset");
                $('.eapps-form-spots .eapps-form-spot-inline .eapps-form').removeClass('eapps-form-sent');
            });
        });
    </script>
@endsection
