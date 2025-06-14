@if($toPatient!==null)
@component('mail::message')
# Your payment was successful

Our team will contact you shortly

- **Order Id**: {{$toPatient[0][1]}}
- **Tracking Id**: {{$toPatient[1][1]}}
- **Service**: {{$toPatient[3][1]}}
- **Amount**: INR 1000.00
- **Payment Method**: {{$toPatient[2][1]}}

Thanks,<br>
{{ config('app.name') }}

@endcomponent
@endif
@if($toAdmin !==null )
@component('mail::message')
# Tele-consultation Request

Someone just contacted you on your website. Please find below details:

- **Name**: {{$toAdmin['name']}}
- **Email**: <{{$toAdmin['email']}}>
- **Mobile**: <a href="tel:{{$toAdmin['mobile']}}">{{$toAdmin['mobile']}}</a>
{{-- - **Address**: {{$toAdmin['billing_address'] ?? '--'}} --}}
{{-- - **City**: {{$toAdmin['billing_city']}}
- **State**: {{$toAdmin['billing_state']}}
- **Country**: {{$toAdmin['billing_country']}}
- **Pincode**: {{$toAdmin['billing_zip']}} --}}
- **Service**: {{$toAdmin['service']}}

{{-- - **Order Id**: {{$toAdmin['data'][0][1]}}
- **Tracking Id**: {{$toAdmin['data'][1][1]}}
- **Amount**: INR 1000.00
- **Payment Method**: {{$toAdmin['data'][2][1]}} --}}

Kindly follow up with the patient and confirm the appointment.
@endcomponent
@endif
