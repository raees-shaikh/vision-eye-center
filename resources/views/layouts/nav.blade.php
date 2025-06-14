<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <img class="pt-4" src="{{asset('img/eye-preloader.gif')}}" alt="image">
    </div>
</div>
<!-- End Preloader -->

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
                        <li class="mob-nav-number phone-pl form-dis-li"><span class="formimg-bg formnav-index" ><img class="pl-1 pt-index" src="{{ url('img/contact-form.png') }}" width="17px" alt=""></span>
                            <a href="{{route('contact')}}">Consult</a></li>
                        {{-- <li class="mob-nav-number"><i class="far fa-paper-plane"></i> <a
                                href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-4 mob-top-socailicon">
                    <div class="header-right-content">
                        <ul class="top-header-social">
                            <li><a href="https://www.facebook.com/thevissioneyecenter/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCgTyzIQmv-OIdweOH-U3_Mg" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
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
                        <a href="{{route('index')}}">
                            <img src="{{asset('img/logo.svg')}}" alt="vissioneyes - logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fovia-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand custom-navbar-brand" href="{{route('index')}}">
                        <img class="setlogo" src="{{asset('img/logo.svg')}}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-height navcollapse-ipad">
                            <li class="nav-item nav-item-pl index-link"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                            <li class="nav-item nav-item-pl about-link"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                            {{-- <li class="nav-item"><a href="" class="nav-link">Services</a></li> --}}
                            <li class="nav-item nav-item-pl service-link cataract-link Lensxcataract-link lasik-link cornea-link petry-link kera-link coulcer-link cotrans-link refraction-link dryeye-link retina-link retdeta-link reage-link rediabet-link laser-link vgefs-link reprmature-link repigmentosa-link glaucoma-link squint-link oculoplasty-link chalazion-link ptosis-link">
                                <a href="{{route('services')}}" class="nav-link">Services <i
                                        class="fas fa-plus  service-name-fab"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item cataract-link Lensxcataract-link"><a
                                            href="{{route('cataract')}}" class="nav-link"> Cataract <i
                                                class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{route('femtosecond-laser')}}" class="nav-link">Femtosecond Laser
                                                    Correction</a></li>
                                            <li class="nav-item"><a href="{{route('multifocal-trifocal')}}" class="nav-link">Multifocal-Trifocal Lenses
                                                    </a></li>

                                            <li class="nav-item Lensxcataract-link"><a
                                                    href="{{route('lensex-cataract-surgery')}}" class="nav-link">LenSx
                                                    Cataract Surgery</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item lasik-link"><a href="{{route('lasik')}}" class="nav-link">LASIK
                                            <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item"><a href="{{route('bladefree-lasik')}}" class="nav-link">Bladefree Lasik</a></li>
                                            <!-- <li class="nav-item"><a href="{{route('femtosecond-laser')}}" class="nav-link">Femtosecond Laser
                                                    Correction</a></li> -->
                                        </ul>
                                    </li>

                                    <li class="nav-item dryeye-link"><a href="{{route('dry-eye')}}" class="nav-link">Dry
                                        Eye Suite</a>
                                    </li>
                                    <li class="nav-item cornea-link petry-link kera-link coulcer-link cotrans-link"><a
                                            href="" class="nav-link">Cornea <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item petry-link"><a href="{{route('pterygium')}}"
                                                    class="nav-link">Pterygium</a></li>
                                            <li class="nav-item kera-link"><a href="{{route('kearatocnus')}}"
                                                    class="nav-link">Keratoconus</a></li>
                                            <li class="nav-item coulcer-link"><a href="{{route('cornea-ulcer')}}"
                                                    class="nav-link">Ulcers</a></li>
                                            <li class="nav-item cotrans-link"><a href="{{route('corneal-transplant')}}"
                                                    class="nav-link">Corneal Transplant </a></li>
                                        </ul>
                                    </li>


                                    <li class="nav-item refraction-link"><a href="{{route('refraction')}}"
                                            class="nav-link">Refraction</a></li>

                                    <li class="nav-item retina-link retdeta-link reage-link rediabet-link laser-link vgefs-link reprmature-link repigmentosa-link">
                                        <a href="" class="nav-link">Retina <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu retina-dropdown">
                                            <li class="nav-item retdeta-link"><a href="{{route('retinal-detachment')}}"
                                                    class="nav-link">Retinal Detachment </a>
                                            </li>
                                            <li class="nav-item reage-link"><a href="{{route('age-related')}}"
                                                    class="nav-link">Age Related Macular Degeneration </a>
                                            </li>
                                            <li class="nav-item rediabet-link"><a
                                                    href="{{route('diabetic-retinopathy')}}" class="nav-link">Diabetic
                                                    Retinopathy </a>
                                            </li>
                                            <li class="nav-item laser-link"><a href="{{route('laser')}}"
                                                    class="nav-link">Lasers </a>
                                            </li>
                                            <li class="nav-item vgefs-link"><a href="{{route('anti-vgefs')}}"
                                                    class="nav-link"> Anti-VGEF’s </a>
                                            </li>

                                            <li class="nav-item reprmature-link"><a
                                                    href="{{route('retinopathy-prematurity')}}"
                                                    class="nav-link">Retinopathy of Prematurity</a>
                                            </li>
                                            <li class="nav-item repigmentosa-link"><a
                                                    href="{{route('retinits-pigmentosa')}}" class="nav-link">Retinits
                                                    Pigmentosa</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item glaucoma-link"><a href="{{route('glaucoma')}}"
                                            class="nav-link">Glaucoma</a>
                                    </li>
                                    <li class="nav-item squint-link"><a href="{{route('squint')}}"
                                            class="nav-link">Squint</a>
                                    </li>
                                    <li class="nav-item oculoplasty-link chalazion-link ptosis-link"><a href=""
                                            class="nav-link">Oculoplasty <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item chalazion-link"><a href="{{route('chalazion')}}"
                                                    class="nav-link">Chalazion</a></li>
                                            <li class="nav-item ptosis-link"><a href="{{route('ptosis')}}"
                                                    class="nav-link">ptosis</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item nav-item-pl hometest-link video-link blog-link photo-link"><a>Resources <i
                                class="fas fa-plus  service-name-fab"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item video-link"><a href="{{route('mirror-wisdom-reflected')}}" class="nav-link">Mirror Wisdom Reflected</a></li>
                                    <li class="nav-item photo-link"><a href="{{route('photos')}}" class="nav-link">Photos</a></li>
                                    <li class="nav-item blog-link"><a href="{{route('blog.index')}}" class="nav-link">Blogs</a></li>
                                    <!-- <li class="nav-item"><a href="" class="nav-link">Reviews</a></li> -->
                                    <li class="nav-item hometest-link"><a href="{{route('home-test')}}" class="nav-link">Home Test</a></li>
                                </ul>
                                </li>
                        <li class="nav-item nav-item-pl contact-link"><a href="{{route('contact')}}" class="nav-link">Contact Us</a></li>

                        {{-- <li class="nav-item medical-link"><a href="{{route('medical-tourism')}}" class="nav-link">Medical Tourism</a></li> --}}
                        {{-- <li class="nav-item photo-link video-link"><a>Gallery<i
                            class="fas fa-plus  service-name-fab"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item photo-link"><a href="{{route('photos')}}" class="nav-link">Photos</a></li>
                            <li class="nav-item video-link"><a href="{{route('videos')}}" class="nav-link">Videos</a></li>
                        </ul>
                        </li> --}}
                        {{-- <li class="nav-item hometest-link"><a href="{{route('home-test')}}" class="nav-link">Home Test</a></li> --}}
                        {{-- <li class="nav-item testimonial-link"><a href="{{route('testimonial')}}" class="nav-link">Vission Wall</a></li> --}}
                        {{-- <li class="nav-item contact-display contact-link nav-link"><a href="{{route('contact')}}">Teleconsultation</a></li> --}}
                        </ul>

                        {{-- <div class="others-options set-navbtn">
                            <a href="{{route('contact')}}"  class="btn btn-primary"   onClick="_gaq.push(['_trackEvent', 'Teleconsultation', 'ButtonClick',,, false]);" >Teleconsultation </a>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
