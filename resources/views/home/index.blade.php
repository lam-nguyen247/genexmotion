@extends('home.layouts.app')

@section('title', 'Socmedia.vn ')
@section('description', '')
@section('css')

    <style>
        #text-4214745138 {
            text-align: center;
        }

        #section_1186898118 {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        #section_1186898118 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_1186898118 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }

        #section_508681512 {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        #section_508681512 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_508681512 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }

        .card .card-image {
            overflow: hidden;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }


        .card {
            margin-top: 10px;
            position: relative;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .card .card-content {
            padding: 10px;

        }

        .card .card-content .card-title, .card-reveal .card-title {
            font-size: 20px;
            font-weight: 100;
            margin-bottom: 10px;
        }

        .tab-panels .entry-content {
            margin: auto !important;
        }

        .service-box {
            height: 70px !important;
        }

        @media screen and (max-width: 768px) {
            .service-name {
                font-size: 1.5em !important;

            }

            .service-box {
                height: 125px !important;
            }

        }

    </style>
@endsection
@section('content')
    @include('home.includes.banner')
    @include('home.service.banner-home')
    @include('home.contact.into')

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
