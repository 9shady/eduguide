@component('mail::message')
As you have queries related to python, here are a few things to help you out. 

@component('mail::panel', ['url' => ''])
Python tuts - Tutorial Point 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
