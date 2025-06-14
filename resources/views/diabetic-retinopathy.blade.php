@extends('layouts.app')
@section('pageTitle', 'Diabetic Retinopathy -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Diabetic Retinopathy</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Diabetic Retinopathy</li>
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
                    <img src="img/services/diabetic-retinopathy.jpg" alt="Retina Specialist -
                    Diabetic Retinopathy">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Diabetic Retinopathy</h3>
                    <p>Diabetes is a condition that affects your body from head to toe, including your eyes. THe most serious eye complication of diabetes is  diabetic retinopathy, if not treated can lead to poor vision or even blindness.
                        Retinopathy is the medical term for damage to the tiny blood vessels that nourish the retina. These blood vessels are often affected by the high blood sugar levels due to diabetes.
                        Initially most patients with diabetic retinopathy experience mild vision problems, but the condition can worsen and threaten your vision.
                    </p>
                    <p>It starts with nonproliferative diabetic retinopathy in which the blood vessels become larger in some areas.
                        Progresses to proliferative diabetic retinopathy where new blood vessels start to grow in the eye.
                    </p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        {{-- <h3>Treatment</h3> --}}

                        <h4 class="pt-4">Symptoms</h4>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Blurry or double vision </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Dark or blank spots</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Pain or pressure in the eyes</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Trouble seeing from the corner of the eyes </span></li>
                        </ul>

                        <h4 class="pt-4">Risk factors</h4>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Having Type 2 Diabetes</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Poorly controlled blood sugar levels</span></li>
                            <li><span><i class="flaticon-check-mark"></i> High blood pressure </span></li>
                            <li><span><i class="flaticon-check-mark"></i> High blood cholesterol</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Pregnancy </span></li>
                        </ul>
                        <h4 class="pt-4"> Diagnosis</h4>
                        <p>Examination could have the following features:</p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Leaking blood vessels.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Retinal hemorrhage.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Swollen retina.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Fatty deposits in the retina.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Areas of nerve fiber damage (cotton-wool spots).</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Changes in blood vessels.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Microaneurysms.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Formation of new blood vessels (neovascularization).</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Vitreous hemorrhage.</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Scar tissue formation with retinal detachment.</span></li>
                        </ul>
                        <h4 class="pt-4"> Lifestyle Changes</h4>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Controlling your blood sugar</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Getting an annual check up to cehck your vision</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Keeping your blood pressure in control</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Controlling your cholesterol</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Quit smoking</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Controlling the stress</span></li>
                        </ul>


                        <h4 class="pt-4">Treatment</h4>
                        <p>There are multiple treatment modalities dependant on the stage of the retinopathy.</p>
                        <h6 class="set-color pt-2">Photocoagulation</h6>
                        <p>Also known as laser treatment, is performed to stop the leakage of blood and fluid in the retina which slows down the progression</p>


                        <h6 class="set-color pt-3">Panretinal Photocoagulation</h6>
                        <p>For more advanced stages in retinopathy, a form of laser surgery called pan retinal or scatter photocoagulation is performed. In this technique, the entire retina except the macula is scattered with laser burns. This enables abnormal new vessels to shrink and disappear. Chances of vitreous hemorrhage and tractional retinal detachment are reduced.</p>
                        <p>You may notice some loss of peripheral vision afterward. Panretinal photocoagulation is a trade-off.
                            Some of your side vision is sacrificed to save as much of your central vision as possible. You may
                            also notice difficulties with your night vision.
                        </p>

                        <h6 class="set-color pt-3">Vitrectomy</h6>
                        <p> In cases of vitreous hemorrhage that  don't clear up on their own, vitrectomy is suggested. Clearing up of hemorrhage along with the vitreous and replacing it with a balanced salt solution to maintain the shape and pressure of the eye. This procedure also is indicated to remove scar tissue when it begins to pull the retina away, preventing a tractional retinal detachment. </p>

                        <h3 class="below-para pt-3">What is Diabetic Retinopathy?</h3>
                        <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0 pb-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fHb0c0zfHbU" allowfullscreen></iframe>
                              </div>
                        </div>

                        <p> <b class="text-dark">VissionTip :</b>  In case you have a history of diabetes, bi-annual check up with your doctor is a must along with keeping your blood sugar levels in check.
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
    .rediabet-link > a {
       color: #19ce67 !important;
   }

</style>
@endsection

