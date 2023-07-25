@extends('home.layouts.app')

@section('css')
<style>
    .intro-banner__left{
        position: absolute; 
        left: 0px;
        top: 10px; 
        z-index: -1;
    }
    .intro-banner__left img{
        opacity: 0.5;
    }
    .intro-banner__right{
        position: absolute; 
        bottom: -80px; 
        right: 60px;  
        z-index: -1
    }
    .intro-banner__center{
        position: absolute; 
        right: 10px; 
        top: 0px;
    }

    .intro-txt{
        width: 60%;
        margin: 0px auto;
    }

    @media screen and (max-width: 768px){
        .intro-txt{
        width: 100%;
        }
        .intro-banner__left{
            left: -20px;
            top: 77px;
        }
        .intro-banner__right{
            bottom: -60px;
            right: 20px;
        }
        .intro-banner__center{
            right: -140px;
            top: 0px;
        }
    }
</style>
@endsection

@section('title', 'Socmedia.vn ')
@section('description', '')
@section('content')
    @include('home.includes.banner')
    @include('home.contact.into')
    @include('home.service.banner-home')
    @include('home.contact.form')
@endsection
