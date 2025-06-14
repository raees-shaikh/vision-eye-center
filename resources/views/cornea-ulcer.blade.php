@extends('layouts.app')
@section('pageTitle', 'Ulcer -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Ulcer</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Ulcer</li>
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
                    <img src="img/services/cornea-ulcer.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">

                    <h3>Overview by Vission Eyes - Corneal Ulcer</h3>
                    <p>
                        A corneal ulcer is an open on the surface of your cornea. The most common cause is an injury which leads to an infection. A red, watery, and bloodshot eye, as well as severe eye pain and pus or other eye discharge, are all symptoms. A corneal ulcer can impair vision and cause blindness. It is classified as a medical emergency. If you have symptoms of a corneal ulcer, see your eye doctor right away.
                    </p>

                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Symptoms</h3>
                        <div class="skill-desc ulcerskill-desk">
                            <ul class="">

                                <li><span><i class="flaticon-check-mark"></i>Eye is red, teary, and bloodshot.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>Eye ache and pain (which can be severe).</span></li>
                                <li><span><i class="flaticon-check-mark"></i>Pus or other types of eye discharge</span></li>
                                <li><span><i class="flaticon-check-mark"></i>A sensation that something is in your eye.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>Light causes eye strain.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>Vision is hazy.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>Eyelids that are swollen.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>A spot or area of white or grey on your cornea. (Some ulcers are so small that they cannot be seen).</span></li>
                                <li><span><i class="flaticon-check-mark"></i>A corneal ulcer usually appears in only one eye.</span></li>
                                <li><span><i class="flaticon-check-mark"></i>If not treated in time - it could lead to corneal opacity which could inturn reducce your vision.</span></li>

                            </ul>
                        </div>
                        <h3 class="pt-4">At risk</h3>
                        <p>You are at risk of developing a corneal ulcer if you:</p>


                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Wear contact lenses, especially if you sleep with them on.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>If you have a history of trauma/ something entering your eye</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Have shingles, cold sores, or chicken pox.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>You have dry eyes.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Have eyelids that do not entirely close.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Steroid eye drops should be used.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>You have a corneal injury or burn.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>You have systemic issues like Diabetes.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>I'm diabetic.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Have previously undergone eye surgery</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Other eye diseases exist.</span></li>
                        </ul>



                        <h3 class="pt-4">Causes</h3>

                        <p>The following infections cause the majority of corneal ulcers:</p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Infections caused by bacteria</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Infections caused by viruses such as the herpes simplex virus (which causes cold sores) or the varicella virus (which causes chickenpox and shingles)</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Fungal infections such as Fusarium, Aspergillus, or Candida, are possibly caused by a natural injury such as a branch or twig. These infections are sporadic.</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Acanthamoeba, an amoeba found in fresh water and dirt, causes parasitic infections.</span></li>
                        </ul>

                        <h3 class="pt-4"> Corneal Ulcer Treatment</h3>
                        <p>Ulcer treatment with anti-infective medications or corneal ulcer surgery is performed if medication is not an option.</p>
                        <p>Medication for eye ulcer treatment is chosen based on the source of the infection. The most common corneal ulcer treatments are eye drops containing antibiotics (for bacterial infections), antifungals (for fungal infections), and antivirals (for viral infections). Your eye doctor may recommend oral medication (taken by mouth) or an injection near your eye.</p>
                        <p>To relieve pain, your eye doctor may also prescribe oral medication. Steroid eye drops are occasionally used to treat eye inflammation and swelling. Because steroid drops can aggravate an infection, you should only use them as directed by your doctor. This, as well as all available treatment options, will be discussed with your eye care provider.</p>

                        <p>
                            <b class="text-dark">VissionTip :</b> If you suspect you have a corneal ulcer or other symptoms, you should see your ophthalmologist like <a href="">Vission Eye</a> right away. Corneal ulcers, if left untreated, can permanently damage your vision and even cause blindness.
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
    .coulcer-link > a {
        color: #19ce67 !important;
    }

</style>

@endsection

