@component('mail::message')
As you have queries related to php, here are a few things to help you out. 

@component('mail::panel', ['url' => ''])
php tuts - Tutorial Point
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
