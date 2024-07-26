@component('mail::message')
First Name: {{ $AllData['firstname'] }}
<br><br>
Last Name: {{ $AllData['lastname'] }}
<br><br>
Email: {{ $AllData['email'] }}
<br><br>
Message: {{ $AllData['message'] }}
<br><br>
Url: {{ $AllData['url'] }}
<br><br>
Created_at: {{ $AllData['created_at'] }}
<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
