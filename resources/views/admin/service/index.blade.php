@extends('admin.layouts.app')

@section('title', __('All Services'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-sm btn-outline-success float-right" href="{{ route('service.create') }}">
                        <i class="fas fa-plus-circle"></i> @lang('Add New')</a>
                    <h4 class="card-title mb-4">@lang('All Services')</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered display js-datatable w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                @if(Route::has('category.index'))<th>@lang('Categories')</th>@endif
                                <th>@lang('Title')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($serviceList as $service)
                                <tr>
                                    <td>{{$service->order_display}}</td>
                                    <td><img @src="{{$service->image}}" width="80" /></td>
                                    @if(Route::has('category.index'))<td>{{$service->category->first()->name}}</td>@endif
                                    <td>{{$service->name}}</td>
                                    <td><x-action route="service" id="{{$service->id}}" /></td>
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
