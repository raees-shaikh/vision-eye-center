<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')

</head>

<body>
    <style>
        html{
            scroll-behavior: smooth;
            scroll-margin-top: -200px;
        }
        .offer-header{
            background-color: #2d358b;
            color: white;
            transition: all .3s;
            padding: 0 !important;
            font-size: 0;
        }
        .offer-header.active{
            font-size: 1em;
            padding: .5rem!important;
        }
        .appointment-content form .form-group .nice-select{
            font-size: 13px;
        }
       .appointment-content form#appointment-form3 .form-group .nice-select{
            font-size: 17px;
        }
    </style>
    <!-- <div class="pageloader is-active"></div> -->
    @include('layouts.gtm')
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <img class="pt-4" src="{{ asset('img/eye-preloader.gif') }}" alt="image">
        </div>
    </div>
    <!-- End Preloader -->
       <!-- Modal -->
    <div class="modal fade" id="popupForm" tabindex="-1" role="dialog" aria-labelledby="popupFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style=" max-width: 650px; ">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="popupFormLabel">Get in touch</h5>
                <div class="btn btn-danger p-2 " data-dismiss="modal">Close</div>
            </div>
            <div class="appointment-content mr-0 shadow-none ">
                <span class="sub-title">Book Appointment</span>
                <h2>We are here for you</h2>

                <form id="appointment-form1" action="{{ url('appointment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="formid" value="2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                                <label>Your Name</label>
                                <input type="text" class="form-control" value="{{ old('name') }}"
                                    placeholder="Enter Your Name" id="name" name="name" required
                                    style="font-size:13px">
                                @if ($errors->has('name') && old('formid')=='2')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-envelope"></i>
                                </div>
                                <label>Your Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="Enter Email Address" id="email" name="email" required
                                    style="font-size:13px">
                                @if ($errors->has('email') && old('formid')=='2')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class=" col-md-6">
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
                                @if ($errors->has('service') && old('formid')=='2')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('service') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <label>Your Phone</label>
                                <input type="text" class="form-control" value="{{ old('phone') }}"
                                    placeholder="Enter Your Phone" id="text" name="phone" required
                                    style="font-size:13px">
                                @if ($errors->has('phone') && old('formid')=='2')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="submit-btn text-center">
                                <button id="appointment-submit1" class="btn btn-primary"
                                    onClick="_gaq.push(['_trackEvent', 'Makeappointment ', 'ButtonClick',,, false]);">Make
                                    Appointment <i class="flaticon-right-chevron"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </div>
    <div class="col-12 text-center offer-header text-lg ">
        <strong> 15% </strong> off on Consultation & LASIK. <small>T&C Apply</small>.
    </div>
    <!-- Start Header Area -->
    <header class="header-area">
        <div class="top-header mobtop-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <ul class="header-contact-info">
                            {{-- <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 19:00</li> --}}
                            <li class="mob-nav-number"><i class="fab fa-whatsapp whatsapp-nav"></i> <a
                                    href="https://api.whatsapp.com/send?phone=919867656060&text=Hi"
                                    target="_blank">+91-9867656060</a></li>
                            <li class="mob-nav-number phone-pl"><i class="fa fa-phone phone-rotate"></i> <a
                                    href="tel:+91-9167055551">+91-9167055551</a></li>
                            <li class="mob-nav-number phone-pl form-dis-li"><span class="formimg-bg formnav-index"><img
                                        class="pl-1 " src="{{ url('img/contact-form.png') }}" width="17px"
                                        alt=""></span>
                                <a href="{{ URL::current() }}#contact-info">Consult</a>
                            </li>
                            {{-- <li class="mob-nav-number"><i class="far fa-paper-plane"></i> <a
                                href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-4 mob-top-socailicon">
                        <div class="header-right-content">
                            <ul class="top-header-social">
                                <li><a href="https://www.facebook.com/thevissioneyecenter/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCgTyzIQmv-OIdweOH-U3_Mg"
                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://twitter.com/vissioneyes" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/vissioneye/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                {{-- <li><a href="https://www.linkedin.com/company/vission-eye-center/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="fovia-responsive-nav">
                <div class="container">
                    <div class="fovia-responsive-menu">
                        <div class="logo setmoblogo">
                            <a href="{{ URL::current() }}#demo">
                                <img src="{{ asset('img/logo.svg') }}" alt="vissioneyes - logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fovia-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand custom-navbar-brand" href="{{ URL::current() }}#contact-info">
                            <img class="setlogo" src="{{ asset('img/logo.svg') }}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav nav-height navcollapse-ipad">
                                <li class="nav-item nav-item-pl index-link"><a href="{{ URL::current() }}#demo"
                                        class="nav-link">Home</a></li>
                                <li class="nav-item nav-item-pl about-link"><a
                                        href="{{ URL::current() }}#about-info">About Us</a></li>
                                {{-- <li class="nav-item"><a href="" class="nav-link">Services</a></li> --}}
                                <li
                                    class="nav-item nav-item-pl service-link cataract-link Lensxcataract-link lasik-link cornea-link petry-link kera-link coulcer-link cotrans-link refraction-link dryeye-link retina-link retdeta-link reage-link rediabet-link laser-link vgefs-link reprmature-link repigmentosa-link glaucoma-link squint-link oculoplasty-link chalazion-link ptosis-link">
                                    <a href="{{ URL::current() }}#service-info" class="nav-link">Services </a>
                                </li>
                                <li class="nav-item nav-item-pl contact-link"><a
                                        href="{{ URL::current() }}#contact-info" class="nav-link">Contact Us</a></li>

                            </ul>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
    <!-- End Header Area -->




    </section>
    <div class="row mx-auto">
    <div class="col-12 col-lg-8 col-sm-12 col-md-12 d-none d-lg-block  p-0">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="desk-display-slider lazyload"
                    data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan-m.webp"
                    alt="Dr Himanshu Mehta with Amitabh Bachchan" width="100%" height="500">
                <img class="mob-display-slider lazyload"
                    data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan.webp"
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

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>
    <div class="col-12 col-lg-4 col-sm-12 col-md-12 p-3 d-flex align-items-center justify-content-center">
        <div class="appointment-content p-0 shadow-none mx-auto">
            <h4 class="text-center">Book Appointment</h4>
            {{-- <h2>We are here for you</h2> --}}

            <form id="appointment-form2" class="m-0 w-100" action="{{ url('appointment') }}" method="POST">
                <input type="hidden" name="formid" value="5">
                @csrf
                <div class="row m-0 w-100">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="flaticon-user"></i>
                            </div>
                            <label>Your Name</label>
                            <input type="text" class="form-control" value="{{ old('name') }}"
                                placeholder="Enter Your Name" id="name" name="name" required
                                style="font-size:13px">
                            @if ($errors->has('name') && old('formid')=='5')
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="flaticon-envelope"></i>
                            </div>
                            <label>Your Email</label>
                            <input type="email" class="form-control" value="{{ old('email') }}"
                                placeholder="Enter Email Address" id="email" name="email" required
                                style="font-size:13px">
                            @if ($errors->has('email') && old('formid')=='5')
                                <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class=" col-md-6">
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
                            @if ($errors->has('service') && old('formid')=='5')
                                <div class="alert alert-danger">
                                    {{ $errors->first('service') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <label>Your Phone</label>
                            <input type="text" class="form-control" value="{{ old('phone') }}"
                                placeholder="Enter Your Phone" id="text" name="phone" required
                                style="font-size:13px">
                            @if ($errors->has('phone') && old('formid')=='5')
                                <div class="alert alert-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="submit-btn text-center">
                            <button id="appointment-submit2" class="btn btn-primary"
                                onClick="_gaq.push(['_trackEvent', 'Makeappointment ', 'ButtonClick',,, false]);">Make
                                Appointment <i class="flaticon-right-chevron"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-lg-8 col-sm-12 col-md-12 d-lg-none p-0">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="desk-display-slider lazyload"
                        data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan-m.webp"
                        alt="Dr Himanshu Mehta with Amitabh Bachchan" width="100%" height="500">
                    <img class="mob-display-slider lazyload"
                        data-src="img/banners/dr-himanshu-mehta-&-amitabh-bachchan.webp"
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

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        </div>
    </div>

    <!-- End Main Banner Area -->


    <!-- Start About Area -->
    <section class="about-area pt-5" id="about-info">
        <div class="container p-0">
            <div class="row m-0">
                <div class=" col-md-6 p-0">
                    <div class="appointment-content mr-0 shadow-none">
                        <span class="sub-title">Book Appointment</span>
                        <h2>We are here for you</h2>

                        <form id="appointment-form2" action="{{ url('appointment') }}" method="POST">
                            <input type="hidden" name="formid" value="3">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" value="{{ old('name') }}"
                                            placeholder="Enter Your Name" id="name" name="name" required
                                            style="font-size:13px">
                                        @if ($errors->has('name') && old('formid')=='3')
                                            <div class="alert alert-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="icon">
                                            <i class="flaticon-envelope"></i>
                                        </div>
                                        <label>Your Email</label>
                                        <input type="email" class="form-control" value="{{ old('email') }}"
                                            placeholder="Enter Email Address" id="email" name="email" required
                                            style="font-size:13px">
                                        @if ($errors->has('email') && old('formid')=='3')
                                            <div class="alert alert-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class=" col-md-6">
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
                                        @if ($errors->has('service') && old('formid')=='3')
                                            <div class="alert alert-danger">
                                                {{ $errors->first('service') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <label>Your Phone</label>
                                        <input type="text" class="form-control" value="{{ old('phone') }}"
                                            placeholder="Enter Your Phone" id="text" name="phone" required
                                            style="font-size:13px">
                                        @if ($errors->has('phone') && old('formid')=='3')
                                            <div class="alert alert-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="submit-btn text-center">
                                        <button id="appointment-submit2" class="btn btn-primary"
                                            onClick="_gaq.push(['_trackEvent', 'Makeappointment ', 'ButtonClick',,, false]);">Make
                                            Appointment <i class="flaticon-right-chevron"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" col-md-6 p-0">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>The Vission Eye Center Since 1995</h2>
                        <p>Our commitment to clinical excellence is lead by our Senior Doctor, Himanshu Mehta, a
                            world-renowned optical surgeon, who has performed over 5,000 refractive treatments. His
                            wealth
                            of experience ensures that The Vission Eye Center stays at the forefront of corrective eye
                            surgery innovation and maintains the highest standards of patient care. The Vission Eye
                            Center
                            closely monitors the results of its specialist medical team.</p>
                        <a href="{{ URL::current() }}#contact-info" class="btn btn-primary setindexabbtn">Learn More <i
                                class="flaticon-right-chevron"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->


    <!-- Start Service Area -->
    <section class="shop-area py-0 mt-5" style="scroll-margin-top: 130px" id="service-info">
        <div class="container">
            <div class="section-title">
                <h1>Best Eye Doctor in Mumbai</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="{{ asset('img/services/1.webp') }}"
                                    alt="Cataract treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">Cataract</a></h3>
                            <p>Cataracts cannot be removed with a laser, only through surgical incision.
                                Cataract is considered as a normal process of aging.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="img/services/2.webp" alt="LASIK treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">LASIK</a></h3>
                            <p>Performed by ophthalmologists to correct glass numbers, myopia (near sightedness) and
                                hyperopia (far sightedness).</p>


                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="img/services/4.webp" alt="Dry eye treatment service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">Dry Eye Suite</a></h3>
                            <p>Dry eye is a common condition in which the eyes do not produce enough tears.
                                Dry eyes are caused by a lack of adequate tears.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="img/services/3.webp"
                                    alt="Cornea treatment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">Cornea</a></h3>
                            <p>We provide cutting edge treatment for most corneal disorders. Intacts and corneal
                                collagen
                                cross linking are being done to treat difficult conditions.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="img/services/5.webp" alt="Refraction - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">Refraction</a></h3>
                            <p>Light rays enter through the cornea where they are refracted and pass through the pupil
                                to
                                finally form a sharp focus or image on the retina.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-product-box">
                        <div class="product-image">
                            <a href="{{ URL::current() }}#contact-info">
                                <img class="lazyload" data-src="img/services/6.webp"
                                    alt="Retina detachment - Service">
                            </a>
                        </div>

                        <div class="product-content">
                            <h3><a href="{{ URL::current() }}#contact-info">Retina</a></h3>
                            <p>Retinal detachment is an emergency situation in which a thin layer of tissue at the back
                                of
                                the eye pulls away from its normal position.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- End Sparkleimg Area -->

    <!-- Start Doctor Area -->
    <section class="doctor-area bg-fefefe ptb-55">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>Our Happy Clients Says About Us</h2>

            </div>

            <div class="google-review-box mt-3"
                onclick="window.open('https://g.page/thevissioneyecenter?share','_blank')">

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

    <!-- Start Appointment Area -->
    <section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}' id="contact-info">
        <div class="container">
            <div class="appointment-content">
                <span class="sub-title">Book Appointment</span>
                <h2>We are here for you</h2>

                <form id="appointment-form3" action="{{ url('appointment') }}" method="POST">
                    <input type="hidden" name="formid" value="4">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                                <label>Your Name</label>
                                <input type="text" class="form-control" value="{{ old('name') }}"
                                    placeholder="Enter Your Name" id="name" name="name" required>
                                @if ($errors->has('name') && old('formid')=='4')
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
                                @if ($errors->has('email') && old('formid')=='4')
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
                                @if ($errors->has('service') && old('formid')=='4')
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
                                @if ($errors->has('phone') && old('formid')=='4')
                                    <div class="alert alert-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="submit-btn">
                                <button id="appointment-submit3" class="btn btn-primary"
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

   <!-- Start Footer Area -->
<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="{{ URL::current() }}#demo"><img class="lazyload" data-src="{{asset('img/whitelogo.svg')}}" width="240"
                                alt="Vissioneyes"></a>
                        <p>Our Commitment to clinical excellence is lead by our senior doctor, Dr.
                            Himanshu Mehta, a world renowned ophthalmic surgeon, who has performed
                            over 25000 refractive surgeries</p>
                    </div>

                    <ul class="social">
                        <li><a href="https://www.facebook.com/thevissioneyecenter/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCgTyzIQmv-OIdweOH-U3_Mg" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        <li><a href="https://twitter.com/vissioneyes" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/vissioneye/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            {{-- <li><a href="https://www.linkedin.com/company/vission-eye-center/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> --}}
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Useful Links</h3>

                    <ul class="departments-list">
                    <li><a href="{{ URL::current() }}#demo">Home</a></li>
                    <li><a href="{{ URL::current() }}#about-info">About Us</a></li>
                    <li><a href="{{ URL::current() }}#service-info">Services</a></li>
                    <li><a href="{{ URL::current() }}#contact-info">Contact Us</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget setfooter-widget pl-5">
                    <h3>Contact</h3>

                    <ul class="links-list contact-list-mob">
                        <img class="lazyload" data-src="{{asset('img/location.svg')}}" width="40" alt="image">
                        <li class="footer-addres">
                            <a target="_blank" href="https://g.page/thevissioneyecenter?share">The Vission Eye Centre
                                101, Hiralaya Building, N S Road No. 10, Near Laxmikant Chowk,
                                Juhu Scheme, Juhu, Mumbai-400049.</a>
                        </li>
                        {{-- <li><img class="lazyload" data-src="{{asset('img/phone.svg')}}" width="40" alt="image"><a class="footer-icon"
                                href="tel: +91-22-26186060">+91-2226186060</a> / <a href="tel: +91-22-26186161">
                                26186161 </a> / <a href="tel: +91-22-26186262"> 26186262</a></li> --}}
                        <li class="mobile-lipadd"><img class="lazyload mobile-ml" data-src="{{asset('img/mobile.png')}}" width="22" alt="image"><a class="footer-icon mob-a-pl"
                                href="tel: +91-9167055551">+91-9167055551</a></li>

                        <li><img class="lazyload" data-src="{{asset('img/whatsapp.svg')}}" width="40" alt="image"><a
                                href="https://api.whatsapp.com/send?phone=919867656060&text=Hi"
                                target="_blank">+91-9867656060 </a></li>
                        <li><img class="lazyload" data-src="{{asset('img/email.svg')}}" width="40" alt="image"><a class="footer-icon"
                                href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area copyright-pb">
            <p><i class="far fa-copyright"></i> <?php echo date("Y");?> All Rights Reserved Vission Eye Center | Design
                & Developed By <a href="https://www.acetrot.com/" target="_blank">Acetrot</a></p>
        </div>
    </div>
    <div class="fix-footer-btm footer-btm-dislay footer-boder-btm">
        <ul class="contact-ul-btm">
            <li class="set-col-4 br-right pt-li-wa"><a target="_blank" href="https://api.whatsapp.com/send?phone=919867656060&text=Hi"><img src="{{asset('img/wa-foo.png')}}" width="27px" alt="Whatsapp Icon"> </a> <p class="whatsp-btm text-white">WhatsApp</p></li>
            {{-- <span class="br-right-foo"></span> --}}
            <li class="set-col-4 br-right"><a target="_blank" href="tel: +91-9167055551"><img class="mobile-btm" src="{{asset('img/mob-foo.png')}}" alt="Phone Icon"></a><p class="call-btm text-white">Call</p></li>
            {{-- <span class="br-left-foo"></span> --}}
            <li class="set-col-4"><a href="{{ URL::current() }}#contact-info"><img class="form-btm" src="{{asset('img/form-foo.png')}}"alt="Form Icon"></a><p class="call-btm text-white">Consult</p></li>
        </ul>
     </div>
</section>
<!-- End Footer Area -->

<div class="go-top top-ico"><i class="fas fa-chevron-up setup-icon"></i></div>

<!-- jQuery Min JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper Min JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Slick Min JS -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- Mean Menu JS -->
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('js/odometer.min.js')}}"></script>
<!-- Parallax Min JS -->
<script src="{{asset('js/parallax.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- WOW Min JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- AjaxChimp Min JS -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('js/form-validator.min.js')}}"></script>
<!-- Contact Form Min JS -->
<script src="{{asset('js/contact-form-script.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/lazysizes.min.js')}}"></script>



<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js')}}"></script>
<script src="{{asset('https://f.vimeocdn.com/js/froogaloop2.min.js')}}"></script>



    <script>

        $(document).ready(function() {
            setTimeout(function() {
                $('.offer-header').addClass('active');
            }, 3000);
            setTimeout(() => {
                $('#popupForm').modal('show');
            }, 5000);
        });

        $(document).ready(function () {
            $("#appointment-form1").submit(function () {
                $('#appointment-submit1').attr("disabled", true);
                return true;
            });
            $("#appointment-form2").submit(function () {
                $('#appointment-submit2').attr("disabled", true);
                return true;
            });
            $("#appointment-form3").submit(function () {
                $('#appointment-submit3').attr("disabled", true);
                return true;
            });
        });
    </script>
</body>

</html>
