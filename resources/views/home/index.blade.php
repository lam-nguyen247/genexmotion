@extends('home.layouts.app')

@section('title', 'ShopGroup.vn Đơn Vị Mua Bán Chuyển Nhượng Group Facebook Uy Tín')
@section('description', 'Bạn đang có nhu cầu mua bán Group Facebook chất lượng? ShopGroup.vn - đơn vị mua bán chuyển nhượng Group Facebook uy tín tại Việt Nam sẽ giúp bạn làm điều đó.')
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
.card .card-image{
    overflow: hidden;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}


.card{
    margin-top: 10px;
    position: relative;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card .card-content {
    padding: 10px;
  
}

.card .card-content .card-title, .card-reveal .card-title{
    font-size: 20px;
    font-weight: 100;
  margin-bottom:10px;
}


</style>
@endsection
@section('content')
@include('home.includes.banner')
@include('home.category.index')
@include('home.service.index')
@include('home.includes.banner-mid')
@include('home.contact.into')
@include('home.contact.form')
@endsection

@section('js')
<script>
//   var splide = new Splide( '.splide', {
//   direction: 'rtl',
//   perPage  : 3,
// } );

// splide.mount();
</script>
@endsection
