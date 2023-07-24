@extends('home.layouts.app')

@section('title', 'SocMedia - '. $seo->name)
@section('description', $seo->name)
@section('css')
    <link href="/css/home/form.css" rel="stylesheet"/>
    <style>
        #counter{
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e6e6e7;
            padding: 40px 0px;
            width: 100%;
        }
        #counter .item{
            background: #fff;
            width: 200px;
            padding: 35px 40px;
            margin: 10px;
            text-align: center;
            border-radius: 20px;
            -webkit-box-shadow: 0px 0px 38px -8px rgba(0,0,0,0.34);
            -moz-box-shadow: 0px 0px 38px -8px rgba(0,0,0,0.34);
            box-shadow: 0px 0px 38px -8px rgba(0,0,0,0.34);
        } 
        #counter .item .count{
            color: #e8b12d;
            margin-bottom: 5px;
            font-size: 40px;
        }
        #counter .item h3{
            color: #4f4e28;
            text-transform: capitalize;
        }
    </style>
@endsection

@section('content')
   <div class="container">
       @include('home.channel.content')
   </div>
@endsection

@section('js')

    <script type="text/javascript" src="/js/home/servicesHome.js"></script>
    <script>
        let count = document.querySelectorAll(".count")
        let arr = Array.from(count)



        arr.map(function(item){
        let startnumber = 0

        function counterup(){
        startnumber++
        item.innerHTML= startnumber
        
        if(startnumber == item.dataset.number){
            clearInterval(stop)
        }
        }

        let stop =setInterval(function(){
        counterup()
        },50)

        })
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
