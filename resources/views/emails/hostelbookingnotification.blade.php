@component('mail::message')
# Introduction

A new hostel booking is available

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
