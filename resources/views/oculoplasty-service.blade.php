@extends('layouts.app')
@section('pageTitle', 'Oculoplasty -')
@section('content')




 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Oculoplasty</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li> <a href="{{route('services')}}">Services</a></li>
                        <li>Oculoplasty</li>

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
                        <a href="{{route('chalazion')}}">
                            <img class="lazyload" data-src="img/services/chalazion.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('chalazion')}}">Chalazion </a></h3>
                       <p>A chalazion is a small painless bump on the eyelid. It happens when the eyelids oil glands clog up.</p>
                        <a href="{{route('chalazion')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('ptosis')}}">
                            <img class="lazyload" data-src="img/services/ptosis.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('ptosis')}}">Ptosis </a></h3>
                        <p>Ptosis is when the upper eyelid droops over the eye. This droop may be a little or might cover your pupil. </p>
                        <a href="{{route('ptosis')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

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




