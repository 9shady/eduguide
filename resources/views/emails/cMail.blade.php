@component('mail::message')
As you have queries related to C/C++, here are a few things to help you out. 

@component('mail::panel', ['url' => ''])
C Tuts - Tutorial Point
@endcomponent
@component('mail::panel', ['url' => ''])
C++ Tuts - Tutorial Point
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
