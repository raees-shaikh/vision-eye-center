@extends('layouts.app')
@section('pageTitle', 'Thankyou -')
@push('header-scripts')
<!-- Event snippet for Website Lead Form conversion page -->
<script>
    gtag('event', 'conversion', {'send_to': 'AW-965265600/andVCNes09kCEMCRo8wD'});
</script>
<!-- End Event snippet for Website Lead Form conversion page -->

<script>
    gtag('config', 'AW-965265600/VHDLCPmnofsCEMCRo8wD', {
      'phone_conversion_number': '+91-9867656060'
    });
</script>

<script>
    gtag('config', 'AW-965265600/n3J0CMG99voCEMCRo8wD', {
      'phone_conversion_number': '+91-9167055551'
    });
</script>
@endpush
@section('content')


<div class="jumbotron custom-jumbotron text-center">
  <span><i class="flaticon-check-mark thankyou-check-icon"></i></span>
  <h1 class="display-3 thankyou-font">Thank You!</h1>
  <p class="lead">Your Payment is Successfull. We will shortly confirm your appointment.</p>
  <hr>

  <p class="lead">
    <div class="more-services-btn pt-3">
      <a href="{{route('index')}}" class="btn btn-primary">Continue to Homepage<i
          class="flaticon-right-chevron"></i></a>
    </div>
  </p>
</div>



@endsection
