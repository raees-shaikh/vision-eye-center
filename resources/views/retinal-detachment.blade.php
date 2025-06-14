@extends('layouts.app')
@section('pageTitle', 'Retinal Detachment  -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Retinal Detachment </h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>Retinal Detachment </li>
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
                    <img src="img/services/detachment.jpg" alt="Retina Specialist - Retinal
                    Detachment">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Retinal Detachment </h3>
                    <p>Retinal detachment is an emergency situation in which a thin layer of tissue at the back of the eye pulls away from its normal position. Retinal detachment separates the retinal cells from the layer of blood vessels that provides oxygen and nourishment. A break may be initially localized but without rapid treatment, the entire retina may detach, leading to vision loss and blindness. </p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Symptoms:</h3>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Starts with flashes and floaters that drift through your field of vision</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Increase or sudden appearance of flashes</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Blurred vision </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Gradually reduced side or peripheral visio </span></li>
                            <li><span><i class="flaticon-check-mark"></i> A curtain like shadow over your visual field - this is considered as an emergency and one should see a doctor immediately.</span></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">

                    <div class="education-desc why-vission pt-lg-5">
                       <h3>Causes </h3>
                       <p>If you use glasses or contact lenses to improve your sight, consider LASIK vision correction for the benefits.</p>
                    </div>
                    <div class="setlasik-li">
                    <ul class="setlasik-li ">
                        <i class="flaticon-check-mark"></i><li> <h5> Rhegmatogenous : </h5>These are the most common. Rhegmatogenous detachments are caused by a hole or a tear in the reina that allows fluid to pass through and collect underneath the retina thus pulling the retina away from the underlying tissues.</li>
                        <i class="flaticon-check-mark"></i><li> <h5> Tractional : </h5>This type of detachment occurs when a scar tissue grows on the reinas surface causing the retina to pull away from the back of the eye. Tractional detachment is typically seen in people who have poorly controlled diabetes.</li>
                        <i class="flaticon-check-mark"></i><li> <h5> Exudative : </h5> In an exudative detachment, fluid accumulates beneath the retina, but there are no holes or tears in the retina. This detachment can be caused by age related macular degeneration, injury to the eye, tumors or some inflammatory disorders.</li>
                    </ul>
                    </div>

                    <h3 class="below-para">Treatment</h3>
                    <p>There are several methods of treating a detached retina:</p>
                    <div class="setlasik-li">
                        <ul class="setlasik-li ">
                            <i class="flaticon-check-mark"></i><li> <h5> Cryotherapy and laser photocoagulation: </h5>Used to create a scar or an adhesion around the retinal hole to prevent fluid from entering the hole and increasing the detachment. </li>
                            <i class="flaticon-check-mark"></i><li> <h5> Pneumatic retinopexy: </h5> Injecting a bubble of air or gas into the center of the eye. This bubble pushes the area of the retina containing the hole or holes against the retina to stop allowing the flow of fluid. </li>
                            <i class="flaticon-check-mark"></i><li> <h5> Scleral buckling: </h5>This procedure involves the surgeon suturing a piece of silicone material to the white scleral part of your eye over the affected area. The buckle generally stays in place permanently securing your retina.</li>
                            <i class="flaticon-check-mark"></i><li> <h5> Vitrectomy: </h5> The surgeon removes the vitreous along with any tissue that is tugging on the retina. The surgeon. An air, gas or silicone oil is then injected into the vitreous space to flatten the retina. This air, gas or liquid will be absorbed and the vitreous space will refill with the body's natural fluid.</li>
                        </ul>

                        <h3 class="below-para">What is Retinal Detachment?</h3>
                        <div class="col-lg-6 col-md-12 col-sm-12 testimonial-video pl-lg-0 pb-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UuIGddNmoJg" allowfullscreen></iframe>
                              </div>
                        </div>
                        <p> <b class="text-dark">Vission Tip:</b>  Incase you have any floaters or flashes, please visit your doctor on a regular basis. 	</p>
                    </div>

            </div>
        </div>
    </div>
    </div>
    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<style>
    .retdeta-link > a {
       color: #19ce67 !important;
   }

</style>

@endsection


