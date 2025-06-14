@extends('layouts.app')
@section('pageTitle', 'Glaucoma -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Glaucoma Surgery</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>Glaucoma</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->



  <!-- Start Doctor Details Area -->
  <section class="doctor-details-area ptb-100 pb-0 section-padd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="doctor-details-image">
                    <img src="img/services/glaucoma.jpg" alt="image">

                    {{-- <h3>Dr. Himanshu Mehta</h3> --}}
                    {{-- <span>Cardiologists</span> --}}

                    {{-- <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul> --}}
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h2 class="h2-heading-custom">What is Glaucoma ? </h2>
                    <p>Glaucoma or kaach-bindu is a disease that damages your eyes optic nerve. In this condition, there is a fluid build-up in the front part of your eye. This excess fluid - increases the pressure in your eye, thus damaging your optic nerve over a period of time.
                    </p>
                    <p>Glaucoma is a leading cause of blindness for people over the age of 6o years of age. But this type
                        of blindness can be prevented with early diagnosis and treatment or glaucoma surgery. </p>
                    <p>The normal eye pressure is 12-20mm of Hg. Anything above that is considered as high pressure.</p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        {{-- <span class="sub-title">My Skills</span> --}}
                        <h2 class="h2-heading-custom">The triad of Glaucoma</h2>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Raised Eye pressure </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Optic Nerve Damage</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Tunnel Vision</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">

                    <div class="education-desc why-vission pt-lg-5">
                        <h2 class="h2-heading-custom">Types of Glaucoma</h2>
                    </div>
                    <div class="setlasik-li">
                    <ul class="setlasik-li ">
                        <i class="flaticon-check-mark"></i><li>  <h3> Primary Open Angle: </h3>  Most common type of glaucoma. Gradual phenomenon, where the eye does not drain fluid as well as it should. This increases the pressure over the eyeball - damaging the optic nerve in the process.</li>
                        <i class="flaticon-check-mark"></i><li> <h3> Angle closure Glaucoma: </h3>- In this type, the patients iris is very close to the drainage angle in their eye. This way the iris can end by blocking the drainage angle.</li>
                        <i class="flaticon-check-mark"></i><li> <h3> Acute Attack:  </h3> When the drainage gets completely blocked, the eye pressure rises very quickly. This in an Ophthalmic Emergency. You should consult your ophthalmologist at the earliest, or there are chances that you might go blind.</li>
                    </ul>
                    </div>
                    <div class="skill-desc">
                        <h2 class="below-para h2-heading-custom">Signs of an Acute Attack</h2>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Sudden blurriness of your vision </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Severe eye pain</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Severe headache </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Nausea </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Vomiting  </span></li>
                            <li><span><i class="flaticon-check-mark"></i>Rainbow-coloured rings or halos are seen around lights.</span></li>
                        </ul>
                    </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 pt-3 setpadd-belowpara">
            <div class="setlasik-li ">
                <h2 class="below-para pt-3 h2-heading-custom">Glaucoma Diagnosis </h2>
                <p class="below-para">If there is a family history of glaucoma, one must always have their eyes and their pressure checked regularly.
                </p>
                <p class="below-para">Early diagnosis is the key that helps prevent the patient from going blind.
                </p>
                <p>However there are multiple diagnostic tests that can help diagnose and treatment:</p>
                <ul class="setlasik-li ">
                    <i class="flaticon-check-mark"></i><li> <h5>Periodic Applanation Tonometry:</h5> This measures the eye pressure. Normal eye pressure: 12-20mm of Hg.</li>
                    <i class="flaticon-check-mark"></i><li> <h5> Perimetry:</h5>This tests help to test your peripheral vision signals and detect any blind spots if any. </li>
                    <i class="flaticon-check-mark"></i><li> <h5> Optical Coherence Tomography:</h5> This specialized test visualizes the structure of your optic nerve. Any damage or change from the baseline measurements can be detected and recorded.</li>
                    <i class="flaticon-check-mark"></i><li> <h5> Ganglion Cell complex:</h5> The damage to these cells is the most crucial that leads to optic nerve damage.</li>

                </ul>
             </div>

             <h2 class="below-para h2-heading-custom"> Types of Treatment for Glaucoma</h2>
             <p class="below-para">If diagnosed at an early stage of the disease, medical treatment can be helpful. If the pressure
                is not controlled by Medical therapy, your eye doctor might suggest glaucoma surgery in
                Mumbai.
            </p>

            <h3 class="below-para pt-2">Medical treatment</h3>
            <p class="below-para">There are multiple classes of drops that help reduce the eye pressure.</p>
            <div class="skill-desc">
                <ul>
                    <li><span><i class="flaticon-check-mark"></i>Prostaglandin Analogs </span></li>
                    <li><span><i class="flaticon-check-mark"></i>Beta Blockers</span></li>
                    <li><span><i class="flaticon-check-mark"></i>Alpha Agnosists</span></li>
                    <li><span><i class="flaticon-check-mark"></i>Carbonic Anhydrase Inhibitors </span></li>
                </ul>
            </div>

            <h3 class="pt-4 below-para">Surgical treatment</h3>
            <p>There are a number of reasons why medical therapy might not work like patient compliance.
                But at our centers in Mumbai there are  glaucoma surgical treatments to lower the intraocular pressure like:
            </p>
            <div class="skill-desc">
                <ul>
                    <li><span><i class="flaticon-check-mark"></i>Trabeculectomy </span></li>
                    <li><span><i class="flaticon-check-mark"></i>Selective laser Trabeculoplasty</span></li>
                    <li><span><i class="flaticon-check-mark"></i>Argon laser Trabeculoplasty</span></li>
                    <li><span><i class="flaticon-check-mark"></i>Device insertion </span></li>
                </ul>
            </div>
            <h2 class="below-para pt-4 h2-heading-custom">What is Glaucoma?</h2>

                <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nDZ000mDaL0" allowfullscreen></iframe>
                    </div>
                </div>
            <p class="pt-4"> <b class="text-dark">VissionTip :</b> Get yourself tested regularly and have your eye pressure checked every time you visit an Ophthalmologist. </p>
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
                                What should I avoid after glaucoma surgery?
                            </a>

                            <p class="accordion-content show">After the glaucoma surgery, you have to deal with low eye pressure after the first couple of weeks. Avoid
                                straining, lifting and bending along with exercise. Do not run, lift more than ten pounds and wear eye
                                makeup and face cream. Avoid swimming, hot tubs and wearing reusable contact lenses. People resume
                                daily activities like watching television, using phones and computers and reading. Use eye protection,
                                bathing and showering to prevent rubbing or bumping the eye.  </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What are the different types of glaucoma?
                            </a>

                            <p class="accordion-content">The different types of glaucoma, such as open-angle (primary) glaucoma, are the standard form of
                                glaucoma. It develops slowly, the open and wide-angle between the cornea and iris, increase eye
                                pressure and is a lifelong condition. On the other hand, angle-closure (narrow-angle and acute)
                                glaucoma occurs due to blocked drainage canals (increase in intraocular pressure), develops quickly, has
                                a narrow and closed-angle between the cornea and iris causes noticeable damage. <br>
                                Congenital glaucoma occurs in newborn babies when the eye drainage canal’s during the prenatal period
                                is are. In normal-pressure or low-tension glaucoma, one experiences damaged optic nerves even in the
                                case of low eye pressure levels. Though it could be inherited in some cases, microsurgery corrects
                                structural defects along with medication.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What is the recovery period post glaucoma surgery?
                            </a>

                            <p class="accordion-content">Patients must expect a recovery period after glaucoma surgery, which is why precautions should be
                                made. You recover from the surgery in the first days following surgery, but they recover completely
                                within a month. However, glaucoma surgery does not cure glaucoma or reverse vision loss, protect
                                vision, and prevent worsening.  </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What are the significant indicators of glaucoma?
                            </a>

                            <p class="accordion-content">You must consult additional eye pain, eye redness, swelling, eye discharge or pus and decreasing vision.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

<style>
    .glaucoma-link > a {
        color: #19ce67 !important;
    }

</style>


@endsection

