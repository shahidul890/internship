<x-mail::message>
Hello, Here is your OTP

@component('mail::panel')
<h1 style="font-size: 20px;text-align: center; margin: 0">Your OTP is: {{$otp}}</h1>
@endcomponent

<x-mail::button :url="''">
Send OTP
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
