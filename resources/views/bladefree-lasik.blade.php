@extends('layouts.app')
@section('pageTitle', 'bladefree -')
@section('content')


    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h1>Blade Free Lasik Eye Surgery in Mumbai</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>BLADEFREE LASIK</li>
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
                        <h2 class="h2-heading-custom">What is LASIK?</h2>
                        <p>
                            Many people who struggle with refractive issues like astigmatism, nearsightedness and
                            farsightedness need to wear glasses or contact lenses. LASIK is a procedure that was developed
                            to treat these conditions and it has become so popular that people inquire with their
                            opthalmologist about the procedure irrespective of whether they actually need vision correction.
                        </p>
                        <p>
                            Advances in technology have led to new devices being added to the procedure and one that is
                            gaining significant attention is bladeless LASIK. Instead of using a blade to make incisions in
                            the cornea, this type of procedure uses lasers for all aspects of the procedure.
                        </p>

                    </div>
                </div>
            </div>

            <div class="skill-education-desc set-skill">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="skill-desc">
                            <h2 class="h2-heading-custom">HOW IS BLADE-FREE LASIK DONE?</h2>
                            <p>Traditionally LASIK was performed using a blade but nowadays the bladeless option is gaining
                                popularity. The only difference between both procedures is the way the flap is created. </p>
                            <p>How blade free LASIK procedure works is that the patient is first put into position.
                                The surgeon then administers anaesthetic eye drops so that he/she is comfortable
                                during the procedure. Later, a flap is created in the cornea using a femtosecond laser
                                or microkeratome.</p>
                            <p>The hinged flap is moved back so that the cornea can be accessed. With the help of
                                an excimer laser, some of the corneal tissue is taken out. An exclaimer laser is highly
                                specialized and can remove tissue in microscopic amounts. This enables the surgeon
                                to reshape the cornea with precision.</p>

                            <p>When the <strong> blade free LASIK</strong> procedure is done for nearsightedness, the surgeon
                                flattens the cornea. On the other hand, for farsightedness, the cornea is made
                                steeper. For astigmatism, the surgeon works to create a more normal shape for the
                                cornea by smoothening the abnormal shape.</p>
                            <p>Topography guided LASIK is another type of bladeless LASIK surgery. In this
                                technique, the user is equipped with mapping technology which creates a digital map
                                of the surface of your eye. The information gathered is then used to rectify any
                                imperfections on the surface of your eye. Thereby your vision is improved more than
                                standard LASIK.</p>
                            <p>Sometimes, blade free LASIK might also include wavefront-guided surgery which is a
                                technique similar to topography-guided LASIK. The only difference is that the imaging
                                laser maps your whole eye instead of just its surface. It is considered the best LASIK
                                treatment available but not many surgeons use it. You cannot drive after this surgery
                                so you should bring someone along with you.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 pt-3 setpadd-belowpara">
                    <div class="setlasik-li ">
                        <h2 class="below-para h2-heading-custom">Why Vission Eye Center for Lasik surgery?</h2>
                        <p class="below-para">Through our consultation process, you will learn about  <a href="{{ url('lasik-eye-surgery-mumbai') }}"> LASIK eye surgery</a>
                            treatment,
                            its benefits, suitability, risks and cost.</p>
                        <p class="below-para">We offer superior clinical results with speed precision and safety using
                            best in class
                            equipment with pioneering German technology. By using the best eye tracker in the
                            market, we follow involuntary saccadic movements of the eye. All the LASIK
                            procedures we provide confirm international eye safety standards.</p>

                        <p>Our team is led by Senior Doctor Himanshu Mehta who is a world-renowned optical
                            surgeon. He has more than 20 years of experience in Ophthalmology and has
                            performed over 5,000 refractive treatments. It is his wealth of experience that has
                            enabled us to maintain the highest standards of patient care.</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
    </section>
    <!-- End Doctor Details Area -->
    <style>
        .lasik-link>a {
            color: #19ce67 !important;
        }

        .set-skill {
            margin-top: 6px !important;
        }

        @media only screen and (max-width: 767px) {
            .doctor-details-image {
                padding: 25px !important;
                margin-bottom: 30px;
            }
        }

    </style>


@endsection
