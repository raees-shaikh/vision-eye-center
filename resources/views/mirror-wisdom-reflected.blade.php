@extends('layouts.app')
@section('pageTitle', 'Mirror Wisdom Reflected -')
@section('content')




 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Mirror Wisdom Reflected</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Mirror Wisdom Reflected</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Services Area -->
<section class="services-area ptb-100 bg-f4f9fd">
    <div class="container">
        <div class="row">
            @forelse($iframelinks as $iframelink)
                <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$iframelink->link}}" allowfullscreen></iframe>
                    </div>
                </div>
            @empty
                <div>
                    <div>
                        No Data
                    </div>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4 mx-auto d-flex justify-content-center">
            {{ $iframelinks->links() }}
        </div>
    </div>
</section>
<!-- End Services Area -->

<style>
    .video-link > a {
        color: #19ce67 !important;
    }
</style>
@endsection


