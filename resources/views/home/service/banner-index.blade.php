@section('css')
    <style>
        .service-wrapper{
            display: grid;
            grid-template-columns: auto 400px;
        }
        .service-left, .service-right{
            position: relative;
        }
        .service-left h1{
            color: #F0BB3F;
            font-family: Montserrat;
            font-size: 64px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-transform: uppercase;
            margin-bottom: 32px;
        }
        .service-left .service-content *{
            color: #F0BB3F;
            font-family: Montserrat;
            font-size: 64px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-transform: uppercase;
        }

        .service-right .service-element{
            border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
            padding: 32px;
        }
        .service-form input{
            height: 50px;
            padding: 10px 10px 10px 16px;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            border-radius: 20px;
            border: 1px solid #535353;
        }
        .service-form textarea{
            padding: 10px 10px 10px 16px;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            border-radius: 20px;
            border: 1px solid #535353;
        }
        .service-form button{
            border-radius: 20px;
            background: linear-gradient(134deg, #EDB739 0%, #FFD061 100%);
            text-align: center;
            display: block;
        }
    </style>
@endsection

<div id="content" role="main" class="content-area">
    <div class="service-wrapper">
        {{-- SECTION ONE --}}
        <div class="service-left">
            <h1>{{$postServices->name}}</h1>
            @if ($postServices->content != null && trim($postServices->content) != '')
                <div class="service-content">
                    {!!$postServices->content!!}
                </div>
            @endif
        </div>
        <div class="service-right">
            <div class="service-element">
                <form method="post" class="service-form">

                    <div  class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                @csrf
                                <input tabindex="0" name="service"
                                       class="ladi-form-control" type="hidden"
                                       value="{{$postServices->name}}">
                                <input tabindex="1" name="name" required=""
                                       id="name" required type="text"
                                       placeholder="Họ và tên" value="">
                            </div>
                        </div>
                    </div>
                    <div  class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                <input tabindex="3" name="phone" required="" id="phone"
                                       required type="tel"
                                       placeholder="Số điện thoại" value="">
                            </div>
                        </div>
                    </div>
                    <div  class="service-control">
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item">
                                                    <textarea tabindex="5" name="content"
                                                              required
                                                              placeholder="Để lại lời nhắn cho chúng tôi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="service-button" onclick="clickContact()">
                        <button class="ladi-headline" type="button">ĐĂNG KÝ</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- END SECTION ONE --}}


        {{-- SECTION POST SERVICES --}}
    </div>
    @include('home.service.post-service')
</div>
