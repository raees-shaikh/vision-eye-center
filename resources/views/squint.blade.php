@extends('layouts.app')
@section('pageTitle', 'Squint -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Squint</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Squint</li>
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
                    <img src="img/services/squint.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Squint</h3>
                    <p>
                        A squint, also known as strabismus, is a medical condition that occurs when the eyes do not align properly. They are not both focusing their gazes in the same direction. A lack of eye muscle control causes the disorder. Other causes include poor eye muscle balance, faulty nerve signals to the eye muscles, and focusing issues. Because of these complications, eyeballs may converge or diverge, obstructing proper eye function. The disorder can affect people of any age. A child may be born with a squint or develop it shortly after birth. If the child develops the condition after 6-7 weeks, it is necessary to consult a doctor and have them tested.
                    </p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Types</h3>
                        <p>
                            Squinting can be classified into four types based on the direction of the non-forward-looking eye. These are some examples:
                        </p>
                        <ul>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>
                                    <b class="text-dark">Convergent squint (esotropia) -</b> The eye drifts inward while the other eye remains straight.
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>
                                    <b class="text-dark">Divergent squint (exotropia) -</b> The squinting eye moves outward while the other is focused straight ahead.
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>
                                    <b class="text-dark">Vertical squint (hypertropia) -</b> The affected eye moves upward while the other eye remains fixed on the ground.
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>
                                    <b class="text-dark">Vertical squint (hypotropia) -</b> One eye squint while the other focus ahead.
                                </span>
                            </li>
                        </ul>

                        <h3 class="pt-4">Causes</h3>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Heredity </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Weakness of the eye muscles or nerve problems in the eye muscles.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Cataracts, glaucoma, corneal scars, optic nerve disease, refractive errors, eye tumours, retinal disease, and other conditions can seriously impair your vision.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Injuries</span></li>
                        </ul>
                        <h3 class="pt-4">Treatment</h3>
                        <p>
                            Once the cause of the squint is determined, a squint treatment plan can be recommended. Using glasses may be your best option if your field of vision is not significantly reduced or your squint eye condition is very mild. Utilizing an eye patch is one of the alternative methods. Squint eye treatment involves covering the good eye with an eye patch and allowing the other eye to correct itself. Nevertheless, this is a laborious process that can take many years to complete.
                        </p>
                        <p>
                            If the child has a refractive error, assigning a number reduces the deviation of the eyes and automatically corrects the squint. Treating the child with occlusion or patching therapy may be beneficial in cases of amblyopia. Squint eye surgery may be required to correct the deviation if the muscles are weak. Loss of vision in children can be avoided if squint surgery and treatment are provided as soon as possible.
                        </p>
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video squint-video-mob pl-lg-0">
                    <h3 class="pb-2 text-center">What is Squint?</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2GciyeD8khA" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0">
                    <h3 class="pb-2 text-center">Patient Testimonial</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z27CKXkohxc" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<style>
    .squint-link > a {
        color: #19ce67 !important;
    }

</style>
@endsection

