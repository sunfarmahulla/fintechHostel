@component('mail::message', ['color' =>'success'])
# Welcome to Hostel Connect

Thank you for booking, we will contact you.

@component('mail::button', ['url' => 'https://hostelconnect.in', 'color' => 'orange'])
Explore Hostel Connect
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
