@extends('layouts.app')
@section('pageTitle', 'Dry Eye Suite -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Dry Eyes Treatment</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Dry Eye Suite</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Doctor Details Area -->
<section class="doctor-details-area ptb-100 pb-2 section-padd">
    <div class="container">
        <div class="row ">
            <div class="col-lg-5 col-md-12">
                <div class="doctor-details-image p-2">
                    <img src="img/services/dry-eye-suit.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h2 class="h2-heading-custom"> Dry Eye Suite</h2>
                    <p>Dry eye is a common condition in which the eyes do not produce enough tears. In such
                        condition, one should consult an <a href="{{url('/')}}"> eyes specialist in Mumbai</a> for best  dry eyes treatment.
                    </p>
                    <h2 class="h2-heading-custom">Causes of Dry Eyes</h2>
                    <p>Dry eyes are caused by a lack of adequate tears. Tears are a mixture of water, lipids and mucous. This mixture helps the surface of your eyes smooth and clear to protect your eyes from infection.
                        <br> <b class="text-dark">Decreased tear production can happen because of:</b>
                    </p>
                    <div class="setlasik-li">
                        <ul class="setlasik-li dry-eye-li">
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Aging </li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Some medical conditions like Thyroid, Hypertension, Diabetes Mellitus, PCOD, etc</li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Vitamin D deficiency </li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Post eye surgery like Lasik and Cataract</li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Tear gland damage</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <b class="text-dark">Decreased tear production can happen because of:</b>
                        <ul class="">
                            <li><span><i class="flaticon-check-mark"></i>Increased screen time from Smartphones, Computers, Television screens etc</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Blinking less often when you are concentrating </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Various eyelid problems like Ectropion or Entropion </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Increased time in an air conditioned room </span></li>
                        </ul>

                        <h2 class="pt-4 h2-heading-custom"> Symptoms of Dry Eyes </h2>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Stinging or burning or scratchy sensation </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Stringy mucus in your eyes</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Sensitivity to light</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Redness </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Foreign body sensation </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Difficulty wearing contact lenses</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Difficulty with night driving</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Blurred vision or eye fatigue  </span></li>
                        </ul>
                        <h2 class="pt-4 h2-heading-custom">Lifestyle Changes</h2>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Follow the 20-20-20 rule:
                                Take a break every 20 minutes to stare at a distant object 20 feet away for 20 seconds </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Avoid blowing air directly into your eyes </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Consider wearing protective eyewear</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Stop smoking and avoid smoke </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Using artificial tears on a regular basis for treating dry eyes </span></li>
                        </ul>
                        <h2 class="pt-4 h2-heading-custom">What are dry eyes?</h2>
                        <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7qKK7WD20Gs" allowfullscreen></iframe>
                              </div>
                        </div>

                        <p><b class="text-dark">VissionTip :</b> Incase you still feel the gritty sensation in your eyes, don't delay in booking an appointment with your doctor as soon as possible.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->

<!-- Start FAQ Area -->
<section class="faq-area ptb-100 faq-pb pt-2 pb-3">
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-10 col-md-12 p-0">
                <div class="faq-accordion faq-w pl-0">
                    <h2>Frequently Asked Questions</h2>
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How to get rid of dry eyes completely?
                            </a>

                            <p class="accordion-content show">Dry eye disease is a widespread condition where the eyes lose moisture quickly, which causes discomfort and vision problems. Though we do not have a permanent treatment solution for dry eyes, you can manage them in several ways. This happens when the eye’s tear film does not work correctly, protecting and lubricating the eye’s surfaces and promoting healthy vision.  <br>
                                The eye’s tear film has three layers; the outer layer – reduces tear evaporation and spreads the tear film across the eye surface due to the oily layer. The watery middle layer washes away foreign objects such as dust and dirt, while the sticky inner layer coats the cornea and sticks the tear film to the eye surface. Therefore, dry eye treatment can help minimize the disease by removing environmental triggers by maintaining an efficient tear film on the eye’s surface.  </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What happens if the problem of dry eyes is not treated?
                            </a>

                            <p class="accordion-content">If your dry eyes are left untreated, your eyes will not be able to produce sufficient tears and cause itchiness and irritation. The absence of an effective tear film causes scratches on the eye cornea and surface, protecting your eyes from germs, gunk and dust causing eye infections. In addition, it results in permanent scarring and vision, which can be overcomed by surgery in dry eyes treatment. </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Which daily habits can worsen the problem of dry eye?
                            </a>

                            <p class="accordion-content">Daily eye habits worsen the dry eyes problems such as excessive screen time and infrequent blinking that causes aggravated and dry eyes, medications (anti-anxiety medicine, decongestants, anti-depressants, antihistamines, blood pressure medications, hormone therapy medication and birth condition), sleeping when wearing contact lenses causes eye dryness, as the plastic film prevents the nutrients and oxygens from reaching the corneal tissue. Not wearing sunglasses on a windy day when performing outdoor cyclists, smoking and using eye drops to counter red eyes decreases the body’s nutrient production for efficient tears. </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What are the major symptoms of dry eyes?
                            </a>

                            <p class="accordion-content">The primary symptoms of dry eye syndrome include burning, scratching and stinging in the eyes. Apart from that, you should visit your eye doctor if you notice mucous around or in your eyes, eye redness,
                                light sensitivity, difficulty with contact lenses and nighttime driving, eye fatigue, blurred vision and watery eyes. </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

<style>
    .dryeye-link > a {
        color: #19ce67 !important;
    }

</style>

@endsection

