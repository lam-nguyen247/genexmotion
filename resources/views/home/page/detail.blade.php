@extends('home.layouts.app')

@section('title', $page->name)

@section('content')
    <div class="page-wrapper new-detail">
        {{-- Block hero --}}
        <section class="tour" id="grid-hero">
            <div class="container">
                <div class="row">
                    <div class="large-12 tour-content">
                        <h2>{{$page->name}}</h2>
                        <div class="tour-subtitle-wrapper wrapper-content">
                            {!!$page->content!!}
                        </div>
                    </div>
                    @include('home.includes.consultation')
                </div>
            </div>
        </section>
        {{-- Block action --}}

    </div>

@endsection
