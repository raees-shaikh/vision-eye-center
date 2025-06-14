@extends('layouts.app')
@section('pageTitle', '')
@section('content')




    <!-- Start Main Banner Area -->

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            {{-- <li data-target="#demo" data-slide-to="5"></li>
      <li data-target="#demo" data-slide-to="6"></li>
      <li data-target="#demo" data-slide-to="7"></li> --}}

        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="desk-display-slider lazyload" data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan-m.webp"
                    alt="Dr Himanshu Mehta with Amitabh Bachchan" width="100%" height="500">
                <img class="mob-display-slider lazyload" data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan.webp"
                    alt="Dr Himanshu Mehta with Amitabh Bachchan" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img class="desk-display-slider lazyload" data-src="img/banners/dr-himanshu-mehta.webp"
                    alt="Best Eye Surgeon in Mumbai - Dr. Himanshu Mehta" width="100%" height="500">
                <img class="mob-display-slider lazyload" data-src="img/banners/dr-himanshu-mehta-m.webp"
                    alt="Best Eye Surgeon in Mumbai - Dr. Himanshu Mehta" width="100%" height="500">

            </div>
            <div class="carousel-item">
                <img class="desk-display-slider lazyload" data-src="img/banners/symptoms-of-dry-eyes.webp"
                    alt="Symptoms of Dry Eyes" width="100%" height="500">
                <img class="mob-display-slider lazyload" data-src="img/banners/symptoms-of-dry-eyes-m.webp"
                    alt="Symptoms of Dry Eyes" width="100%" height="500">

            </div>
            <div class="carousel-item">
                <img class="desk-display-slider lazyload" data-src="img/banners/our-services.webp"
                    alt="Our Services of Vission eyes Center" width="100%" height="500">
                <img class="mob-display-slider lazyload" data-src="img/banners/our-services-m.webp"
                    alt="Our Services of Vission eyes Center" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img class="desk-display-slider lazyload" data-src="img/main-banner6.webp"
                    alt="Dr. Himanshu Mehta with Dalai Lama" width="100%" height="500">
                <img class="mob-display-slider lazyload" data-src="img/mobilebanner6.jpg"
                    alt="Dr. Himanshu Mehta with Dalai Lama" width="100%" height="500">

            </div>
            {{-- <div class="carousel-item">
        <img class="desk-display-slider lazyload" data-src="img/main-banner3.jpg" width="100%" height="500">
        <img class="mob-display-slider lazyload" data-src="img/mobilebanner3.jpg" width="100%" height="500">

      </div> --}}
            {{-- <div class="carousel-item">
        <img class="desk-display-slider lazyload" data-src="img/main-banner4.jpg" width="100%" height="500">
        <img class="mob-display-slider lazyload" data-src="img/mobilebanner4.jpg" width="100%" height="500">

      </div> --}}
            {{-- <div class="carousel-item">
        <img class="desk-display-slider lazyload" data-src="img/main-banner2.jpg" width="100%" height="500" alt="Best Ophthalmologist in Mumbai">
        <img class="mob-display-slider lazyload" data-src="img/mobilebanner2.jpg" width="100%" height="500">

      </div> --}}
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- End Main Banner Area -->


    <!-- Start About Area -->
    <section class="about-area pt-5">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-image">
                        <img class="lazyload" data-src="{{ asset('img/about-img1.jpg') }}"
                            alt="Eye Specialist Hospital in mumbai">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>The Vission Eye Center Since 1995</h2>
                        <p>Our commitment to clinical excellence is lead by our Senior Doctor, Himanshu Mehta, a
                            world-renowned optical surgeon, who has performed over 5,000 refractive treatments. His wealth
                            of experience ensures that The Vission Eye Center stays at the forefront of corrective eye
                            surgery innovation and maintains the highest standards of patient care. The Vission Eye Center
                            closely monitors the results of its specialist medical team.</p>
                        <a href="{{ route('about') }}" class="btn btn-primary setindexabbtn">Learn More <i
                                class="flaticon-right-chevron"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->


    <!-- Start Service Area -->
    <section class="shop-area py-0 mt-5">
        <div class="container">
            <div class="section-title">
                <h1>Best Eye Doctor in Mumbai</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('cataract-service') }}">
                                <img class="lazyload" data-src="{{ asset('img/services/1.webp') }}"
                                    alt="Cataract treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('cataract-service') }}">Cataract</a></h3>
                            <p>Cataracts cannot be removed with a laser, only through surgical incision.
                                Cataract is considered as a normal process of aging.</p>
                            <a href="{{ route('cataract-service') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('lasik-service') }}">
                                <img class="lazyload" data-src="img/services/2.webp" alt="LASIK treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('lasik-service') }}">LASIK</a></h3>
                            <p>Performed by ophthalmologists to correct glass numbers, myopia (near sightedness) and
                                hyperopia (far sightedness).</p>
                            <a href="{{ route('lasik-service') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('dry-eye') }}">
                                <img class="lazyload" data-src="img/services/4.webp" alt="Dry eye treatment service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('dry-eye') }}">Dry Eye Suite</a></h3>
                            <p>Dry eye is a common condition in which the eyes do not produce enough tears.
                                Dry eyes are caused by a lack of adequate tears.
                            </p>
                            <a href="{{ route('dry-eye') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('cornea-service') }}">
                                <img class="lazyload" data-src="img/services/3.webp" alt="Cornea treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('cornea-service') }}">Cornea</a></h3>
                            <p>We provide cutting edge treatment for most corneal disorders. Intacts and corneal collagen
                                cross linking are being done to treat difficult conditions.</p>
                            <a href="{{ route('cornea-service') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('refraction') }}">
                                <img class="lazyload" data-src="img/services/5.webp" alt="Refraction - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('refraction') }}">Refraction</a></h3>
                            <p>Light rays enter through the cornea where they are refracted and pass through the pupil to
                                finally form a sharp focus or image on the retina.</p>
                            <a href="{{ route('refraction') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ route('retina-service') }}">
                                <img class="lazyload" data-src="img/services/6.webp"
                                    alt="Retina detachment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ route('retina-service') }}">Retina</a></h3>
                            <p>Retinal detachment is an emergency situation in which a thin layer of tissue at the back of
                                the eye pulls away from its normal position.</p>
                            <a href="{{ route('retina-service') }}" class="read-more-btn">Read more <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="more-services-btn">
                        <a href="{{ route('services') }}" class="btn btn-primary">More Services <i
                                class="flaticon-right-chevron"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Sparkleimg Area -->
    {{-- <section class="ptb-55">
    <div class="container max-w-sparkle">
        <div class="row">
            <div class="wimg-mob-spark m-auto">
                <div class="text-center">
                    <a class="sparkle-desk" href="https://sparkleai.com/" target="_blank"><img class="lazyload" data-src="img/sparkle-banner.jpg" alt="Image">
                    </a>
                    <a class="sparkle-mob" href="https://sparkleai.com/" target="_blank"><img class="lazyload" data-src="img/sparkle-banner-mob.jpg" alt="Image">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
    <!-- End Sparkleimg Area -->

    <!-- Start Doctor Area -->
    <section class="doctor-area bg-fefefe ptb-55">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>Our Happy Clients Says About Us</h2>

            </div>

            <div class="google-review-box mt-3" onclick="window.open('https://g.page/thevissioneyecenter?share','_blank')">

                <div class="review-main ">
                    <img src="img/shape/google-review-icon.svg" height="100px" alt="">
                    <div class="stats">

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <strong> {{ $totalRating }}</strong> stars, {{ $totalReviews }} reviews
                        </div>
                    </div>
                </div>
                <div class="review-footer">
                    Google Reviews
                </div>
            </div>

            <div class="doctor-slides owl-carousel owl-theme">
                @foreach ($reviews as $review)
                    @if ($review['rating'] > 3)
                        <div class="single-doctor-box ">
                            <div class="single-feedback">
                                <img class="mx-auto rounded-circle shadow " style="width: 70px"
                                    src=" {{ $review['profile_photo_url'] }}" alt="client">
                                <h3> {{ $review['author_name'] }}</h3>

                                <div class="stars">
                                    @for ($i = 0; $i < ceil($review['rating']); $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - ceil($review['rating']); $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                </div>
                                <!-- <span> {{ $review['relative_time_description'] }} </span> -->
                                <p>{{ $review['text'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Doctor Area -->




    <!-- Start Blog Area -->
    <section class="blog-area pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Blog</h2>
            </div>

            <div class="row flex-wrap" >

                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6  h-100 ">
                        <div class="single-blog-post ">
                            <div class="post-image">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    @if ($post->featured_image !== null)
                                        <img class="lazyload blog-card-img" src="{{ asset($post->featured_image) }}"
                                            alt="image">
                                    @else
                                        <img class="lazyload blog-card-img" src="img/blog/1.jpg" alt="image">
                                    @endif
                                </a>
                            </div>

                            <div class="post-content  h-100 ">
                                <div class="post-meta">
                                    <ul>
                                        <li style="display:none">Posted on:
                                            {{ dd_format($post->publish_date, 'jS M Y') }}</li>
                                        <li>By: {{ $post->author->name }}</li>
                                    </ul>
                                </div>

                                <h3><a
                                        href="{{ route('blog.show', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a>
                                </h3>
                                <p >
                                    {!! $post->excerpt !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="more-services-btn pt-3">
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">View all<i
                            class="flaticon-right-chevron"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <div class="container ptb-55">
        <div class="section-title">
            <h2>Follow Us On Instagram</h2>
        </div>
        <div class="row" id="instagram-grid">

        </div>
    </div>





    <!-- Start Appointment Area -->
    <section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="appointment-content">
                <span class="sub-title">Book Appointment</span>
                <h2>We are here for you</h2>

                <form id="appointment-form" action="{{ url('appointment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="formid" value="1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                                <label>Your Name</label>
                                <input type="text" class="form-control" value="{{ old('name') }}"
                                    placeholder="Enter Your Name" id="name" name="name" required>
                                @if ($errors->has('name') && old('formid')=='1')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-envelope"></i>
                                </div>
                                <label>Your Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="Enter Email Address" id="email" name="email" required>
                                @if ($errors->has('email') && old('formid')=='1')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <label>Select Your Service</label>

                                <select name="service" required>
                                    <option>Cataract</option>
                                    <option>LASIK</option>
                                    <option>Cornea</option>
                                    <option>Dry Eye Suit</option>
                                    <option>Retina</option>
                                    <option>Glaucoma</option>
                                    <option>Squint</option>
                                </select>
                                @if ($errors->has('service') && old('formid')=='1')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('service') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <label>Your Phone</label>
                                <input type="text" class="form-control" value="{{ old('phone') }}"
                                    placeholder="Enter Your Phone" id="text" name="phone" required>
                                @if ($errors->has('phone') && old('formid')=='1')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="submit-btn">
                                <button id="appointment-submit" class="btn btn-primary"
                                    onClick="_gaq.push(['_trackEvent', 'Makeappointment ', 'ButtonClick',,, false]);">Make
                                    Appointment <i class="flaticon-right-chevron"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Appointment Area -->

    <!-- Start video Area -->
    {{-- <section class="services-area pt-5 pb-5">
    <div class="container">
        <div class="section-title mb-1">
            <h2>Talk's</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="7Gr3tBuoElc">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="DxwyrPxtVZ8">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="fXf1uAxblsw">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="U2sFef2YaZ0">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="kBjkQa6WUn0">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 testimonial-video">
                <div class="wrapper">
                    <div class="youtube" data-embed="sRlE0zPhkOI">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="more-services-btn pt-3">
                <a href="{{route('videos')}}" class="btn btn-primary">More Videos <i
                        class="flaticon-right-chevron"></i></a>
            </div>
        </div>
    </div>
    </div>
</section> --}}
    <!-- End video Area -->

    <style>
        .index-link>a {
            color: #19ce67 !important;
        }

        .pt-index {
            padding-top: 8px;
        }

        .formnav-index {
            position: relative;
            top: -4px;
        }

    </style>
@endsection

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

    .appointment-content form .form-group .form-control {
        border: none;
        height: auto;
        border-bottom: 1px solid #646363 !important;
        font-size: 17px;
        font-weight: 600;
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 8px;
    }

    .appointment-content form .form-group .nice-select {
        background-color: transparent;
        color: #121521;
        border-radius: 0;
        border: none;
        border-bottom: 1px solid #646363 !important;
    }

</style>

@section('js')
    <script>
        @if (Session::get('alert-type') == 'success')
            @if (Session::has('message'))
                toastr.success("{{ Session::get('message') }}");
            @endif
        @elseif(Session::get('alert-type') == 'info')
            @if (Session::has('message'))
                toastr.info("{{ Session::get('message') }}");
            @endif
        @elseif(Session::get('alert-type') == 'error')
            @if (Session::has('message'))
                toastr.error("{{ Session::get('message') }}");
            @endif
        @else
            @if (Session::has('message'))
                toastr.warning("{{ Session::get('message') }}");
            @endif
        @endif


            (function() {

                var youtube = document.querySelectorAll(".youtube");

                for (var i = 0; i < youtube.length; i++) {

                    var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/hqdefault.jpg";

                    var image = new Image();
                    image.src = source;
                    image.addEventListener("load", function() {
                        youtube[i].appendChild(image);
                    }(i));

                    youtube[i].addEventListener("click", function() {

                        var iframe = document.createElement("iframe");

                        iframe.setAttribute("frameborder", "0");
                        iframe.setAttribute("allowfullscreen", "");
                        iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed +
                            "?rel=0&showinfo=0&autoplay=1");

                        this.innerHTML = "";
                        this.appendChild(iframe);
                    });
                };

            })();
    </script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script async src="//www.instagram.com/embed.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script type="text/javascript">

        var userFeed = new Instafeed({
            get: 'user',
            limit: 6,
            target: "instagram-grid",
            resolution: 'low_resolution',
            template: '<div class="col col-lg-4 col-md-6 col-sm-12 col-12"><a href="@{{link}}" target="_blank"><img src="@{{image}}" /></a></div>',
            accessToken: 'IGQVJYcHpLeFNiS1J2V05CVEdtaUVmWDFGNVByYndaNEEyaExuVmZAlQ1VlNUtmX0lKT3pHeTJhZAEh6SF94cjdwUThQX2lkTjVwNXpkWkhpSVZA3QnprNzlCeks3eHdwQ01TMTczZAjZALYTdPMGJ6VXhhMAZDZD'
        });
        console.log(userFeed);
        userFeed.run();

        $(document).ready(function () {
            $("#appointment-form").submit(function () {
                $('#appointment-submit').attr("disabled", true);
                return true;
            });
        });
    </script>
@endsection
