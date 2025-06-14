@extends('layouts.app')
@section('pageTitle', 'Services -')
@section('content')




 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                   <h1 class="h2"> Best Eye Doctor in Mumbai</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Service Area -->
<section class="shop-area ptb-100 section-padd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('cataract-service')}}">
                            <img class="lazyload" data-src="img/services/1.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('cataract-service')}}">Cataract</a></h3>
                        <p>Cataracts cannot be removed with a laser, only through surgical incision.
                            Cataract is considered as a normal process of aging.</p>
                        <a href="{{route('cataract-service')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('lasik-service')}}">
                            <img class="lazyload" data-src="img/services/2.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('lasik-service')}}">LASIK</a></h3>
                        <p>Performed by ophthalmologists to correct glass numbers, myopia (near sightedness) and hyperopia (far sightedness).</p>
                        <a href="{{route('lasik-service')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('dry-eye')}}">
                            <img class="lazyload" data-src="img/services/4.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('dry-eye')}}">Dry Eye Suite</a></h3>
                        <p>Dry eye is a common condition in which the eyes do not produce enough tears.
                            Dry eyes are caused by a lack of adequate tears.
                        </p>
                        <a href="{{route('dry-eye')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                       </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('cornea-service')}}">
                            <img class="lazyload" data-src="img/services/3.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('cornea-service')}}">Cornea</a></h3>
                        <p>We provide cutting edge treatment for most corneal disorders.  Intacts and corneal collagen cross linking are being done to treat difficult conditions.</p>
                        <a href="{{route('cornea-service')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('refraction')}}">
                            <img class="lazyload" data-src="img/services/5.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                        <h3><a href="{{route('refraction')}}">Refraction</a></h3>
                        <p>Light rays enter through the cornea where they are refracted and pass through the pupil to finally form a sharp focus or image on the retina.</p>
                        <a href="{{route('refraction')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('retina-service')}}">
                            <img class="lazyload" data-src="img/services/6.webp" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                    <h3><a href="{{route('retina-service')}}">Retina</a></h3>
                    <p>Retinal detachment is an emergency situation in which a thin layer of tissue at the back of the eye pulls away from its normal position.</p>
                    <a href="{{route('retina-service')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('glaucoma')}}">
                            <img class="lazyload" data-src="img/services/7.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                    <h3><a href="{{route('glaucoma')}}">Glaucoma</a></h3>
                    <p>Glaucoma or kaach-bindu is a disease that damages your eyes optic nerve. In this condition, there is a fluid build-up in the front part of your eye.</p>
                    <a href="{{route('glaucoma')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('squint')}}">
                            <img class="lazyload" data-src="img/services/8.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                    <h3><a href="{{route('squint')}}">Squint</a></h3>
                    <p>Squint is a misalignment of the eye where the two eyes are pointed towards different directions. This misalignment may not be constant.
                    </p>
                    <a href="{{route('squint')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-product-box">
                    <div class="product-image">
                        <a href="{{route('oculoplasty-service')}}">
                            <img class="lazyload" data-src="img/services/9.jpg" alt="image">
                        </a>
                    </div>

                    <div class="product-content">
                    <h3><a href="{{route('oculoplasty-service')}}">Oculoplasty</a></h3>
                    <p>A chalazion is a small painless bump on the eyelid. It happens when the eyelids oil glands clog up. It could start as an internal hordeolum (Stye). </p>
                    <a href="{{route('oculoplasty-service')}}" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Area -->














<style>
    .service-link >.lasik-link > .cataract-link > .cornea-link > .petry-link > .kera-link > .coulcer-link > .cotrans-link > .retina-link > .retdeta-link > .reage-link > .rediabet-link > .laser-link > .vgefs-link > .reprmature-link > .repigmentosa-link > .glaucoma-link > .squint-link > .repigmentosa-link > .oculoplasty-link > .chalazion-link > .ptosis-link > a {
        color: #19ce67 !important;
    }
    .service-link > a{
        color: #19ce67 !important;
    }
</style>

@endsection




