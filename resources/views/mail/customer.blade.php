@component('mail::message')

@component('mail::table')
|                                                    |                         |
| -------------------------------------------------- |-------------------------|
@isset($customer->service)|  @lang('Service')        | {{$customer->service}}  |
@endisset
@isset($customer->name)|     @lang('Name')           | {{$customer->name}}     |
@endisset
@isset($customer->phone)|    @lang('Phone number')   | {{$customer->phone}}    |
@endisset
@isset($customer->email)|    @lang('E-Mail Address') | {{$customer->email}}    |
@endisset
@isset($customer->address)|  @lang('Address')        | {{$customer->address}}  |
@endisset
@isset($customer->content)|  @lang('Content')        | {{$customer->content}}  |
@endisset
@endcomponent

@endcomponent
