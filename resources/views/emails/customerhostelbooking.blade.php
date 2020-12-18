@component('mail::message')
# Introduction

Thank you for booking, we will contact you.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
