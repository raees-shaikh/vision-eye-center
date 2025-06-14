@extends('layouts.app')
@section('pageTitle', 'Testimonial -')
@section('content')




 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Testimonial</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Testimonial</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Services Area -->
<section class="services-area ptb-100 bg-f4f9fd section-padd pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kBjkQa6WUn0?autoplay=1" allowfullscreen></iframe>
                  </div> -->
                  <div class="wrapper">
                    <div class="youtube" data-embed="kBjkQa6WUn0">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 ">
                  <div class="wrapper">
                    <div class="youtube" data-embed="sRlE0zPhkOI">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 ">
                  <div class="wrapper">
                    <div class="youtube" data-embed="U2sFef2YaZ0">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <div class="wrapper">
                    <div class="youtube" data-embed="o5teKvDntJk">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <div class="wrapper">
                    <div class="youtube" data-embed="2rJtgtCktjo">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 ">

               <div class="wrapper">
                    <div class="youtube" data-embed="anAxURCzV-0">
                        <div class="play-button"></div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<style>
    .testimonial-link > a {
        color: #19ce67 !important;
    }
    .form-dis-li{
        display: none !important;
    }
</style>
<style>
    .wrapper {
        max-width: 680px;
        margin: 0 auto;
        padding: 0 0px;
    }

    .youtube {
        /* background-color: #000; */
        margin-bottom: 30px;
        position: relative;
        padding-top: 56.25%;
        overflow: hidden;
        cursor: pointer;
    }

    .youtube img {
        width: 100%;
        top: -16.82%;
        left: 0;
        /* opacity: 0.7; */
    }

    .youtube .play-button {
        width: 90px;
        height: 60px;
        background-color: #333;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
        z-index: 1;
        opacity: 0.8;
        border-radius: 6px;
    }

    .youtube .play-button:before {
        content: "";
        border-style: solid;
        border-width: 15px 0 15px 26.0px;
        border-color: transparent transparent transparent #fff;
    }

    .youtube img,
    .youtube .play-button {
        cursor: pointer;
    }

    .youtube img,
    .youtube iframe,
    .youtube .play-button,
    .youtube .play-button:before {
        position: absolute;
    }

    .youtube .play-button,
    .youtube .play-button:before {
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
    }

    .youtube iframe {
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }
</style>
@endsection

@section('js')
<script>
( function() {

var youtube = document.querySelectorAll( ".youtube" );

for (var i = 0; i < youtube.length; i++) {

    var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";

    var image = new Image();
            image.src = source;
            image.addEventListener( "load", function() {
                youtube[ i ].appendChild( image );
            }( i ) );

            youtube[i].addEventListener( "click", function() {

                var iframe = document.createElement( "iframe" );

                        iframe.setAttribute( "frameborder", "0" );
                        iframe.setAttribute( "allowfullscreen", "" );
                        iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

                        this.innerHTML = "";
                        this.appendChild( iframe );
            } );
};

} )();
</script>
@endsection


