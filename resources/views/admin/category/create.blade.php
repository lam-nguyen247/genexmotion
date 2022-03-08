<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-5">@lang('New Category')</h4>
        <form method="POST" action="{{route('category.store')}}" class="floating-labels mt-2">
            @csrf
            <input type="hidden" name="master_category_id" value="{{$masterCategory->id}}" />
            <input type="hidden" name="master_category_name" value="{{$masterCategory->name}}" />
            <input type="hidden" name="language" value="{{'vi'}}" />
            <x-input name="name" label="Category Name" required />
            <x-select name="category_id" label="Parent Category" :option-list="$categoryFlatList" />
            <x-summernote name="content" label="Description" />
            <button type="submit" class="btn btn-success waves-effect waves-light mr-2">@lang('Save')</button>
        </form>
    </div>
</div>
