@component('mail::message')
# Sorry! Payment Failed

We saw that you tried to make a payment for tele-consultation, but your payment was unsuccessful.
Try again or contact us on <a href="tel:+91-9867656060">+91-9867656060</a> or <a href="mailto:info@vissioneyes.com">info@vissioneyes.com</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
