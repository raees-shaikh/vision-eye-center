@extends('layouts.app')
@section('pageTitle', ' Anti-VGEF’s -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Anti-VGEF's</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Anti-VGEF"s</li>
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
                    <img src="img/services/anti-vgefs.jpg" alt="Anti-VEGF Treatments">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3> Anti-VGEF’s</h3>
                    <p>Anti VEGF treatments can help with a variety of eye conditions, including macular degeneration and retinal issues.</p>
                    <p>VEGF is an angiogenic factor, which means it aids in the formation of new blood vessels. Some VEGF is required for critical bodily functions, but it can also promote abnormal blood vessels and tumour growth.</p>
                    <p>AntiVEGF treatments can aid in the normalisation of a person's VEGF levels.</p>
                    <h3>Indications</h3>
                    <div class="skill-desc ulcerskill-desk">
                    <ul class="">
                        <li><span><i class="flaticon-check-mark"></i><b>Wet age related macular degeneration</b> Wet age-related macular degeneration is the most frequent cause of central visual impairment, and blindness among older people in developed countries is wet age-related macular degeneration. </span></li>

                        <li><span><i class="flaticon-check-mark"></i><b>Swelling of the retina - macular edema</b> Macular edoema is the swelling of a portion of the retina. People with macular edoema may have blurry vision, but treatment can help reduce swelling and prevent vision loss.</span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Diabetic Retinopathy </b> Diabetes causes diabetic retinopathy, which is an eye disorder. Damage to the blood vessels of the light-sensitive tissue in the back of the eye causes it (retina).</span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Retinal Vein occlusion </b>When a vein in the retina becomes blocked, this is referred to as retinal vein occlusion.</span></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Types of Anti-VGEF’s</h3>
                        <ul class="">
                            <li><span><i class="flaticon-check-mark"></i><b>Bevacizumab (Avastin)</b>When a vein in the retina becomes blocked, this is referred to as retinal vein occlusion.</span></li>
                            <li><span><i class="flaticon-check-mark"></i><b>Ranimizumab (Lucentis)</b>Ranimizumab is an anti-angiogenic that has been approved for the treatment of "wet" age-related macular degeneration, diabetic retinopathy, and macular edoema caused by branch retinal vein occlusion or central retinal vein occlusion.</span></li>
                            <li><span><i class="flaticon-check-mark"></i><b>Aflibercept (Eylea)</b>Aflibercept is a treatment for wet macular degeneration and metastatic colorectal cancer.</span></li>
                        </ul>
                    </div>
                    <h3 class="pt-3 below-para">Treatment</h3>
                    <p class="below-para">Anti VEGF medications target and inhibit VEGF molecules. This slows the rate of cellular growth. When used correctly, this can help to restore normal cellular growth.</p>
                    <p class="below-para">The drug is typically administered via injection in a doctor's office for eye health conditions. The number of injections required is determined by your doctor's diagnosis of your condition, and the course of action they believe is best for you. Injections can be given every few weeks or months.</p>
                    <p class="below-para">This treatment course can last for quite some time. It can take months or years for a patient to see the full effect.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->


<style>
    .vgefs-link > a {
        color: #19ce67 !important;
    }

</style>

@endsection

