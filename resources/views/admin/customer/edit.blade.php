<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Thông tin liên hệ</h4>
                @php
                    $arStatus = [
                        (object)[
                            'id'=>0,
                            'name' => 'Chưa xử lý'
                        ],
                        (object)[
                            'id'=>1,
                            'name' => 'Không liên lạc được'
                        ],
                        (object)[
                            'id'=>2,
                            'name' =>  'Đã liên hệ'
                        ],
                        (object)[
                            'id'=>3,
                            'name' =>  'Hẹn liên lạc lại'
                        ],
                        (object)[
                            'id'=>3,
                            'name' =>  'Đã xử lý'
                        ],
                    ];
                    $colors = ['red','green', 'blue', 'pink', 'black'];
                @endphp
                <form method="POST" action="{{route('customer.update', $customer->id)}}" class="floating-labels mt-4">
                    @csrf
                    @method('PUT')
                    <x-input name="service" value="{{$customer->service}}" label="Service"/>
                    <x-input name="name" value="{{$customer->name}}" label="Name"/>
                    <x-input name="phone" value="{{$customer->phone}}" label="Phone number"/>
                    <x-input name="email" value="{{$customer->email}}" type="email" label="E-Mail Address"/>
                    <x-input name="address" value="{{$customer->address}}" label="Address"/>
                    <x-input name="content" value="{{$customer->content}}" label="Content"/>
                    <x-select name="status" label="Trạng thái" :option-list="$arStatus"/>
                    <button type="submit" class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
                </form>
            </div>
        </div>
    </div>
</div>
