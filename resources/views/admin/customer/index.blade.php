@extends('admin.layouts.app')

@section('title', __('Customer'))

@section('content')
    @php
        $arStatus = ['Chưa xử lý','Không liên lạc được', 'Đã liên hệ', 'Hẹn liên lạc lại', 'Đã xử lý'];
        $colors = ['red','green', 'blue', 'pink', 'black'];
    @endphp
    @includeWhen(isset($customer), 'admin.customer.edit')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Danh sách</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered display js-datatable w-100">
                            <thead>
                            <tr>
                                <th></th>

                                <th>@lang('Service')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('Phone number')</th>
                                <th>@lang('E-Mail Address')</th>
                                <th>@lang('Address')</th>
                                <th>@lang('Content')</th>
                                <th>@lang('Creation date')</th>
                                <th>@lang('Status')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($customerList as $customer)
                                <tr>
                                    <td>{{$customer->id}}</td>
                                    <td>{{$customer->service}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{$customer->content}}</td>
                                    <td>{{$customer->created_at}}</td>
                                    <td style="color:{{$colors[$customer->status??0]}}">{{$arStatus[$customer->status??0]}}</td>
                                    <td><x-action route="customer" id="{{$customer->id}}" /></td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
