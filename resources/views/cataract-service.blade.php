@extends('layouts.app')
@section('pageTitle', 'Cataract -')
@section('content')




 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Cataract</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li> <a href="{{route('services')}}">Services</a></li>
                        <li>Cataract</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Service Area -->
<section class="shop-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('cataract')}}">
                            <img class="lazyload" data-src="img/services/phacoemulsification.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('cataract')}}">Phacoemulsification</a></h3>
                        <p>Phacoemulsification is a modern cataract
                            surgery method in which the eyes internal lens
                            is emulsified with an ultrasonic handpiece and
                            aspirated from the eye. Aspirated fluids are
                            replaced with irrigation of balanced salt solution
                            to maintain the anterior chamber.</p>
                        <a href="{{route('cataract')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('cataract')}}">
                            <img class="lazyload" data-src="img/services/lensx-cataract.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('cataract')}}">LenSx Cataract Surgery</a></h3>
                        <p>The LenSx Laser is for use in patients
                            undergoing cataract surgery. The laser is used as
                            a tool to break up a cataract and to create
                            incisions in the cornea as part of a cataract
                            surgery. The LenSx femtosecond laser is
                            designed to improve precision and
                            reproducibility</p>
                        <a href="{{route('cataract')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Area -->












<style>
    .service-link > a{
        color: #19ce67 !important;
    }
</style>

@endsection




