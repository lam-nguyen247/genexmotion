@extends('admin.layouts.app')

@section('title', __('New Service'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('service.store')}}" class="floating-labels mt-4" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="language" value="{{'vi'}}" />
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-xl-3">
                                <x-dropify name="file" class="mb-sm-4" required />
                            </div>
                            <div class="col-sm-12 col-md-8 col-xl-9 d-flex align-items-center mb-2">
                                <div class="card card-body px-0 mb-0">
                                    @if(Route::has('category.index'))
                                    <x-select name="category_id" label="Categories" :option-list="$categoryList" required />
                                    @endif
                                    <x-input name="name" label="Title" class="no" required />
                                    <br/>
                                    <x-input name="order_display" label="Order Display" class="no" value="0" required />
                                    <br/>
                                    <x-input  name="content"  label="ID Youtube" class="no" required />
                                </div>
                            </div>
                        </div>
                        @createseo
                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
