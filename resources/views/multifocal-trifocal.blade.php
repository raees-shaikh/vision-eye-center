@extends('layouts.app')
@section('pageTitle', 'multifocal-trifocal -')
@section('content')



  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Multifocal And Trifocal Lens Cataract Surgery</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>MULTIFOCAL AND TRIFOCAL CATARACT SURGERY</li>
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
                    <h2 class="h2-heading-custom">MULTIFOCAL LENS CATARACT SURGERY</h2>
                    <p>

                    Multifocal lens cataract surgery are designed to allow for distance, intermediate as well as near
                    focussing. They have some form of concentric rings attached to the retina surface. That is why it takes a
                    little more time for users to get used to it. The focussing power of this lens is different from the focus
                    that people are used to during their younger years. Sometime after the age of 40, you will begin to notice
                    the initial symptoms of presbyopia i.e the feeling that your arms are not long enough to hold a
                    newspaper or magazine in a position that allows you to read comfortably.
                    </p>

                   <p> If you are already wearing prescription glasses, then it means that you will have to
                        wear lenses to see clearly at all distances. You can either go for a multifocal lens
                         for a trifocal lens.
                    </p>
                </div>
            </div>
        </div>
        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h2 class="h2-heading-custom">What is MULTIFOCAL  LENS?</h2>
                        <p>Multifocal lenses are prosthetic lenses that are used to replace natural lenses in
                             intraocular surgeries to remove cataracts. During the multifocal lens cataract surgery, the natural lens is taken out and a clear lens is inserted in place of it.  Traditionally, cataract patients were offered a monofocal implantable
                              lens which was designed to improve either distance or near vision.
                            </p>
                            <p>Reading glasses or bifocals were then needed for intermediate and near
                                focusing. Today, multifocal intraocular lenses are being preferred over
                                 monocular lenses because they allow correction at all distances and make
                                  vision as natural as possible. These lenses are also known as
                                  presbyopia-correcting IOLs.
                            </p>
                            <p>Adapt to this new way of focusing. Besides that they work quite well. Examples
                                 of multifocal lens are Tecnis Multifocal, ReESTOR, Panoptix and Tecnis
                                  Symfony.
                            </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h2 class="h2-heading-custom">What is TRIFOCAL LENS?</h2>
                        <p> Trifocal lenses for cataract surgery correct three types of vision problems
                            - i.e. close-up, intermediate and distance. You may have heard of corrections for
                             far away and near vision problems but you most likely use your intermediate
                              vision more often.  When you are looking at an object that is a few feet away
                               from you, say for example a computer screen, you are making use of your
                                intermediate vision.


                        </p>
                        <p>Correcting all three kinds of vision problems is important as you start aging. This is where
                             trifocal glasses and lenses come in. The most basic type of trifocal lens has two lines on the lens
                              that separates it into three parts. The top part corrects
                             faraway vision, the middle part corrects intermediate vision and the lower part corrects close up vision.
                        </p>
                        <p>Trifocal lenses for cataract surgery are usually made of a synthetic material
                            like silicone or plastic and have different zones to correct various types of
                            vision problems.  In addition, they also protect your eyes against damage from
                            ultraviolet rays.
                        </p>
                        <p>The benefit of using a trifocal lens is that it helps you see clearly nearby,
                             intermediate as well as far away objects. You can complete different tasks
                              without having to switch between different pairs of glasses or contacts with
                              single correction or bifocal lenses.
                        </p>
                        <p>If you're seeking a more advanced and convenient cataract surgery option, our multifocal lens cataract surgery may be the perfect solution for you. Our surgeons are highly trained and have many years of experience using the latest techniques for  <a href="{{url('/cataract-surgery-mumbai')}}"> cataract surgery in Mumbai.</a> We offer a very relaxed and friendly setting for patients and their families. After the cataract procedure is done, the patients can return home and continue their daily activities.
                        </p>
                    </div>
                </div>

        </div>

    </div>
    </div>
    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>


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



