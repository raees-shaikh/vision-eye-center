@component('mail::message')
# Consultation Request

Someone just contacted you on your website. Please find below details:
{{-- @php
$data = (object) array();
$data->name = 'Rishab';
$data->email = 'test@gmail.com';
$data->phone = '1234567890';
$data->service = 'Cataract';

@endphp --}}
- **Name**: {{$data->name}}
- **Service**: {{$data->service}}
- **Email**: <{{$data->email}}>
- **Phone**: <a href="tel:{{$data->phone}}">{{$data->phone}}</a>

Kindly follow up with the patient and confirm the appointment.
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent