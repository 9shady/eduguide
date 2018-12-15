@component('mail::message')
As you have queries related to java, here are a few things to help you out. 

@component('mail::panel', ['url' => 'https://www.tutorialspoint.com/java/'])
Java Tuts
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
