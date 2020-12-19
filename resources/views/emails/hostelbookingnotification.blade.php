@component('mail::message', ['color' =>'success'])
# New Booked:
<p>A new hostel is booked check about this:</p>

@component('mail::table')
|    Name       |   mobile      |  email     |
| ------------- |:-------------:| ----------:|
|    {{$name}}   | {{$mobile}}   | {{$email}} |

@endcomponent

@component('mail::button', ['url' => 'https://hostelconnect.in/room-details/'.{{$id}}, 'color' =>'success'])
 Hostel Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
