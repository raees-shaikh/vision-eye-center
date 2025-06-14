@extends('layouts.app')
@section('pageTitle', 'About Us -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->



  <!-- Start Doctor Details Area -->
  <section class="doctor-details-area ptb-100 section-padd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="doctor-details-image">
                    <img src="img/doctor.jpg" alt="image">

                    <h3>Dr. Himanshu Mehta</h3>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h2>About Dr. Himanshu Mehta</h2>

                    <p>Our commitment to clinical excellence is lead by our Senior Doctor, Himanshu Mehta, a world-renowned optical surgeon, who has performed over 5,000 refractive treatments. His wealth of experience ensures that The Vission Eye Center stays at the forefront of corrective eye surgery innovation and maintains the highest standards of patient care. The Vission Eye Center closely monitors the results of its specialist medical team.</p>
                    <p>Dr. Himanshu Mehta has been in practice for over twenty years. He has done his undergraduate
                        and postgraduate training in Ophthalmology from one of the most reputed schools of medicine
                        in Asia. Dr. Mehta entered Seth G.S. Medical College and KEM Hospital Mumbai and also received
                        a Masters in Surgery M.S. (Ophthalmology) from Mumbai University. He has done his super specialty
                        training in Ophthalmology from Houston, Texas in the United States. In order to become further
                        qualified, Dr. Mehta engaged in a Fellowship in Vitreo-Retinal surgery with
                        Dr. Charles A. Garcia, Director Retina Services at Memorial Hermann Hospital
                        in Houston, Texas. Dr. Mehta was also involved in some of the early studies
                        in Excimer Laser with Dr. Warren Cross in the United States.</p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="skill-desc">
                        <h3>Professional affiliations of <br> Dr. Himanshu Mehta include:</h3>
                        <p>Dr. Mehta’s area of interest is Cataract and Phaco-Emulsification Surgery and Vitreo-Retinal Surgery. He has to his credit more than 5000 surgeries. He has operated some of the oldest living patients (around the ages of 105) and has successfully restored sight in them. He is skilled to perform the most complicated cases from cataract to LASIK surgery to retinal detachment surgery. He endeavours to reduce blindness due to diabetes and is involved in patient education and treatment for the same</p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> The American Academy of Ophthalmology</span></li>
                            <li><span><i class="flaticon-check-mark"></i> American Society of Cataract and Refractive Surgery</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Vitreo-Retinal Society</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Indian Ophthalmologist Association</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="education-desc">
                        <h3>Consultation</h3>
                        <p>Modern eye lens India offer its users a comprehensive and world-class ease. Modern eye lens provides freedom from the boredom of ancient glasses. We use modern eye lens in India of various colored complexions to change the appearance of your eyes as well as your personality.</p>
                        <p>One of the leading eye surgeons in Mumbai, Dr. Himanshu Mehta has provided hope and clear vision to many of his patients. In Mumbai, he has also proven to be eye surgeon of choice to big names in the industry. If you are looking to correct your vision, Dr. Himanshu Mehta is the eye surgeon you must visit.</p>
                    </div>
                    <div class="education-desc pt-3">
                        <h3>Our History</h3>
                        <p>The first Vission Center was started in 1995 (on the festival of Dassera). It was then upgraded as ‘The Vission Eye Center’ on March 2006. Our purpose is not just for curing blindness but also for better quality of life, regardless of the economy, strata, cast, creed or nationality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->




<style>
    .about-link a {
        color: #19ce67 !important;
    }
</style>

@endsection


