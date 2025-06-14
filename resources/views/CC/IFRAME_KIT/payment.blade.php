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
        <div class="section-title">
            {{-- <span>Send Message</span> --}}
            <h2>Schedule your appointment now!</h2>
            {{-- <p>If you have an idea, we would love to hear about it.</p> --}}
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-8 col-md-12">

                @if(Str::of(url()->current())->contains('test'))
                <x-test-payment></x-test-payment>
                @else
                <x-secure-payment></x-secure-payment>
                @endif
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-info mt-2 contact-info-icon">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span>
                            The Vission Eye Centre 101, Hiralaya Building, N S Road No. 10, Near Laxmikant Chowk, Juhu
                            Scheme, Juhu, Mumbai-400049.
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            <a href="tel: +91-22-26186060">+91-2226186060</a>
                            <a href="tel: +91-22-26186161">+91-2226186161</a>
                            <a href="tel: +91-22-26186262">+91-2226186262</a>
                        </li>
                    </ul>
                </div>
            </div>
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
