@extends('admin.layouts.app')

@section('title', __('Edit Service'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('service.update', $service->id)}}" class="floating-labels mt-4"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$service->id}}">
                        <input type="hidden" name="language" value="{{'vi'}}"/>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-xl-3">
                                <x-dropify name="file" value="{{$service->image}}" class="mb-sm-4"/>
                            </div>
                            <div class="col-sm-12 col-md-8 col-xl-9 d-flex align-items-center mb-2">
                                <div class="card card-body px-0 mb-0">
                                    @if(Route::has('category.index'))
                                        <x-select name="category_id" value="{{$service->category->first()->id}}"
                                                  label="Categories" :option-list="$categoryList" required/>
                                    @endif
                                    <x-input name="name" value="{{$service->name}}" label="Title" class="no mb-2"
                                             required/>
                                    <br/>
                                    <x-input name="order_display" value="{{$service->order_display}}" label="Vị trí"
                                             class="no" required/>
                                    <br/>
                                    <x-input name="content" value="{{$service->content}}" label="ID Youtube" class="no"
                                             required/>
                                </div>
                            </div>
                        </div>

                        @editseo
                        <button type="submit"
                                class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
