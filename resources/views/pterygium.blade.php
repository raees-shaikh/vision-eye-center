@extends('layouts.app')
@section('pageTitle', 'Pterygium -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Pterygium</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Pterygium</li>
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
                    <img src="img/services/pterygium.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Vission Eyes</h3>

                    <p>Vission eyes are committed to clinical excellence and offer cutting-edge treatment for all sorts of corneal disorders. Led by the world-renowned optical surgeon, the <a href="">Vission Eye Centre</a> functions with cutting-edge technology and innovative prospects. Our specialist's medical team closely monitors the results before coming up with a treatment plan for our patients. Our objective is to offer the highest standard of patient care and treat corneal disorders in an efficient manner with utmost care.</p>

                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Overview by Vission Eyes - Pterygium </h3>
                        <p>Pterygium is a conjunctive or mucous membrane development containing blood vessels covering the eye's white area above the cornea. This growth is frequently wedge-shaped. It might remain smaller or expand to cover a portion of the cornea. If Pterygium causes problems or interferes with your vision, it is advisable to get it treated. A triangular or wedge-shaped growth starts on the eye's conjunctiva and spreads onto the cornea. The thin, transparent membrane that covers the eye's white is called the conjunctiva. The cornea is the front of the eye's transparent covering. Although Pterygium is not hazardous, it can cause irritation to the eyes and vision.</p>
                        <p>At Vission Eye centre, we offer pterygium treatment along with world-class optician consultation. Our professionals will check and suggest the most uncomplicated treatment procedure convenient to the patient.</p>
                        <h3 class="pt-4">Causes</h3>
                        <p>
                            The exact cause of Pterygium is unknown. According to research, excessive UV radiation exposure might result in these growths. It is said to be more common among persons who live in warm regions and spend a lot of time outside in bright or windy conditions. At Vission Eye Centre, we rectify and recognize all things that could have caused Pterygium. We offer <b>pterygium eye treatment</b> and suggest effective measures for the same so that you can have clear vision.
                        </p>

                        <h3 class="pt-4">Symptoms</h3>
                        <p>
                            In most cases, a pterygium does not produce symptoms. However, when it does, the symptoms are modest, such as;
                        </p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Redness</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Vision impairment</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Eye discomfort may result due to the presence of a foreign item in your eye. </span></li>
                        </ul>
                        <h3 class="pt-4">Treatment</h3>
                        <p>
                            Unless it is obstructing your eyesight or causing considerable discomfort, a pterygium normally does not require treatment. If you suffer symptoms, your doctor can prescribe anti-inflammatory eye drops or ointments.
                        </p>
                        <p>
                            When a pterygium causes a lot of vision loss or a condition called astigmatism produces fuzzy vision, pterygium surgery is recommended. With highly qualified surgeons on board, Vission Eye Centre aids patients in pterygium eye surgery in the most effective way to drive away the inconvenience.
                        </p>
                        <p>
                            If your symptoms are minor, therapy is generally not necessary. Your doctor will prescribe the following medications if the problem results in brief redness or irritation:
                        </p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Wetting drops or over-the-counter eye ointments</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Eye drops that reduce inflammation and redness</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Prescription steroid eye drops to reduce discomfort, edema, itching, and redness.</span></li>
                        </ul>

                        <p>
                            <b class="text-dark">VissionTip :</b> Your eye doctor may want to check your eyes regularly to see whether the growth is worsening or creating vision issues. It is imperative that you get regular consultations as suggested by your doctor.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->


<style>
    .petry-link > a {
        color: #19ce67 !important;
    }

</style>

@endsection

