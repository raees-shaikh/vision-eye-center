@extends('layouts.app')
@section('pageTitle', 'Teleconsultation -')
@section('content')
<script>
    window.onload = function() {
            var d = new Date().getTime();
            document.getElementById("tid").value = d;
        };
</script>



<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Teleconsultation</h2>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Teleconsultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100 section-padd">
    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                @include('CC.IFRAME_KIT.ccavResponseHandler')
            </div>
        </div>
        <div class="jumbotron custom-jumbotron text-center">                    
            <p class="lead">
              <div class="more-services-btn pt-3">
                <a href="{{route('index')}}" class="btn btn-primary">Continue to Homepage<i
                    class="flaticon-right-chevron"></i></a>
              </div>
            </p>
        </div>
    </div>
    <div class="bg-map"><img src="{{asset('img/bg-map.png')}}" alt="image"></div>
</section>




<style>
    .contact-link a {
        color: #19ce67 !important;
    }
</style>
<!-- End Contact Area -->
@endsection