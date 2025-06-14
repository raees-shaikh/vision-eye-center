@extends('layouts.app')
@section('pageTitle', 'Femtosecond -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Femto Laser Treatment For Eye</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>FEMTOSECOND LASER CATARACT SURGERY</li>
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
                <div class="doctor-details-image pl-0">
                    <img src="img/services/Lasik.jpg" alt="Lasik Eye Surgery">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h2 class="h2-heading-custom">About CATARACT</h2>
                    <p>
                    Cataracts occur when the lens in your eye takes on a cloudy appearance. At around age 40,
                    the proteins in your eye begin to break down. By age 60, the majority of people experience
                    clouding of the lenses but the symptoms may not be that noticeable at first.  There is no
                    known medication, eye drops, exercise or glasses to cure or prevent cataracts.
                    If cataracts progress to a certain point that they hinder a person’s day to day
                    activities, then an ophthalmologist may perform a femtosecond laser cataract surgery. It
                     is a procedure in which the cloudy lens is taken out and replaced with an artificial
                     intraocular lens. Thanks to the latest technology and femtosecond laser that  cataract
                     surgery is safer and more effective than ever.
                    </p>
                </div>
            </div>
        </div>
        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h2 class="h2-heading-custom">What is FEMTOSECOND LASER?</h2>
                        <p>A femtosecond laser is an infrared laser. It emits bursts of laser energy at a very
                             fast rate and has a pulse duration in the femtosecond range or one quadrillionth
                             of a second. Though it was originally developed for use in <a href="{{url('/lasik-eye-surgery-mumbai')}}"> LASIK eye surgery</a>,
                             these lasers are now widely used in a variety of eye surgeries and are a
                             preferred tool in many surgical eye procedures.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h2 class="h2-heading-custom">Procedure</h2>
                        <p>Femto laser treatment for eye is done by breaking apart the tissue at the molecular
                             level rather than cutting it with a blade. The laser disrupts the stromal tissue
                              through photoionization. The targeted tissue is vaporized which creates a split
                              where a cut would be made.
                        </p>
                        <p>The entire procedure usually takes no more than 30 minutes for each eye. Be sure to
                             bring someone along with you to drive you home after the surgery. The doctor will
                              advise you on follow up and recovery instructions that will aid your recovery.
                        </p>

                      <!--<ul class="cataract-ul-img">
                            <li class="cataract-li-img">
                                <img src="img/services/lasik1.png" alt="Best Lasik Eye Surgery">
                            </li>
                            <li class="cataract-li-img">
                                <img src="img/services/lasik2.png" alt=" Lasik Eye Surgery mumbai">
                            </li>
                            <li class="cataract-li-img">
                                <img src="img/services/lasik3.png" alt="Laser Eye Surgery">
                            </li>
                            <li class="cataract-li-img">
                                <img src="img/services/lasik4.png" alt="Eye Surgery, Operation">
                            </li>
                            <li class="cataract-li-img">
                                <img src="img/services/lasik5.png" alt="Lasik eye surgeries">
                            </li>
                        </ul>-->
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">

                    <div class="education-desc why-vission pt-lg-5">
                       <h2 class="h2-heading-custom">Benefits of FEMTOSECOND LASER</h2>
                       <p>It has been proven in many studies that a femtolaser offers more precise incisions
                            with minimal damage to the surrounding tissue as compared to when the procedure is
                            done with a blade. Studies have also shown that these lasers cause fewer
                            complications and patients heal quicker after surgery.
                        </p>
                        <p>Another benefit of a femto laser treatment for eye is that it offers greater
                             consistency and versatility.  As compared to a Yttrium-Aluminum Garnet(YAG)
                              laser which is another commonly used ophthalmic laser, a femtosecond laser
                              causes 106 times less collateral damage.
                        </p>
                        <p>A femtosecond laser is also commonly used in assisted cataract surgery because of
                             its ability to provide greater precision in astigmatism treatment, and centration
                              of the intraocular lens. It uses less ultrasound energy during the removal of
                               the cataract.
                        </p>
                        <p>As less energy is needed for emulsifying the cataract and cuts are made with
                             precision using a Femto laser, visual recovery is faster than in conventional
                              surgery.


                        </p>
                        <p>All our surgeons are well trained and have extensive experience with the latest
                             techniques for laser cataract surgery. Our clinic offers a relaxed and friendly
                              environment for patients and their families. After the procedure, patients are
                               free to go home and can resume their daily activities.


                        </p>
                        <p>Dr. Himanshu Mehta's expertise in optical surgery is particularly evident in his use of femtosecond laser cataract surgery, a cutting-edge technology that allows for greater precision and quicker healing times for patients. With his wealth of experience and dedication to innovation, it's clear that Dr. Mehta and <a href="{{url('/')}}"> Vission Eyes</a> are committed to providing the best possible care for their patients.

                        </p>
                    </div>


            </div>
        </div>

        <!-- <div class="col-lg-12 col-md-12 pt-3 setpadd-belowpara">
            <div class="setlasik-li ">
                <h2 class="below-para h2-heading-custom">Why Vission Eye Center for Femtosecond Laser?</h2>
                <p class="below-para">Further our consultation process gives you an opportunity to understand Lasik Eye Surgery
                    treatment or procedure, its benefits; it’s suitability for you, risks involved and the cost of laser
                    operation for eyes in Mumbai at our center.</p>
                <p class="below-para"> The pricing of femtosecond laser or Lasik eye surgery cost in Mumbai, at Vission Eye Center is a fair proposition in comparison to various others across the city.</p>

                <p>Lasik Eye Surgery Cost in Mumbai at The Vission Eye Center is a fair one justifying the following:   </p>
                <ul class="setlasik-li ">
                    <i class="flaticon-check-mark"></i><li>The best in class equipment using pioneering German Technology.</li>
                    <i class="flaticon-check-mark"></i><li>Offers superior clinical results with great speed, precision and safety.</li>
                    <i class="flaticon-check-mark"></i><li> Features the best eye tracker to follow involuntary saccadic movements of the eye.</li>
                    <i class="flaticon-check-mark"></i><li> Conforms to International Eye Safety Standards.</li>
                </ul>


             </div>
        </div> -->

    </div>
    </div>
    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h3 class="text-center mb-5 px-2"> Testimonials Our Patient for Femtosecond Laser Cataract Surgery </h3>

            <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/hYnMTBoPYz0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen  ng-show="showvideo"></iframe>
                </div>
              
            </div>
        </div>
    </div>
</section>
<!-- End Doctor Details Area -->


<style>
.cataract-link > a{
    color: #19ce67 !important;
}
   .set-skill {
    margin-top: 6px !important;
}
@media only screen and (max-width: 767px){
    .doctor-details-image {
        padding: 25px !important;
        margin-bottom: 30px;
    }
}

</style>


@endsection



