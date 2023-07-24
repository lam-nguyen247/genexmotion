@extends('home.layouts.app')

@section('css')
<style>
    .intro-banner__left{
        position: absolute; 
        left: 0px;
        top: 10px; 
        z-index: -1;
    }
    .intro-banner__right{
        position: absolute; 
        bottom: -80px; 
        right: 60px;  
        z-index: -1
    }
    .intro-txt{
        width: 50%;
        margin: 0px auto;
    }

    @media screen and (max-width: 768px){
        .intro-txt{
        width: 100%;
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
