@component('mail::message')
As you have queries related to javascript, here are a few things to help you out. 

@component('mail::panel', ['url' => ''])
javascript tuts - Tutorial Point
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
