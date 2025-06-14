@extends('layouts.app')
@section('pageTitle', 'Retinits Pigmentosa  -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Retinits Pigmentosa </h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>Retinits Pigmentosa </li>
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
                    <img src="img/services/retinitis-pigmentosa.jpg" alt="retinitis pigmentosa
                    treatment">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Retinits Pigmentosa </h3>
                    <p>
                        Retinitis pigmentosa (RP) refers to a group of eye diseases that can cause blindness. What they have in common are specific changes in your doctor's retina, which is a bundle of tissue at the back of your eye. When you have RP, photoreceptor cells in your retina stop working properly, and you gradually lose sight.
                    </p>
                    <p>
                        It's a rare condition that is passed down from parent to child. It affects only one in every 4,000 people. Approximately half of all people with Retinitis Pigmentosa have a family member who also has the condition.
                    </p>
                    <div class="skill-desc pigmentosa-li">
                        <h3>Symptoms</h3>
                        <p>
                            Retinitis Pigmentosa signs and symptoms A teen or young adult is most likely to be diagnosed with RP. Vision loss is gradual, and the rate of change in vision varies from person to person. Your Retinitis Pigmentosa genetic makeup determines the speed at which it moves.
                        </p>
                        <ul>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>Early Retinitis symptoms include loss of night vision, making it difficult to drive at night or see in dimly lit rooms.
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="flaticon-check-mark"></i>Later Retinitis symptoms include a loss of side (peripheral) vision, which leads to tunnel vision, similar to looking through a straw.

                                </span>
                            </li>

                        </ul>
                        <p>
                            Sometimes you lose your peripheral vision first. Then reading or doing close work is difficult. Colour vision is also affected by this loss of central vision.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="education-desc why-vission">
                       <h3>Diagnosis</h3>
                    </div>
                    <div class="setlasik-li">
                    <ul class="setlasik-li ">
                        <i class="flaticon-check-mark"></i><li> <h6>Electroretinography -</h6> The electrical response of the light-sensitive cells in your eyes is measured by electroretinography. </li>
                        <i class="flaticon-check-mark"></i><li> <h6>Visual Field testing -</h6> A visual field test assists doctors in detecting certain types of injuries and diseases, such as glaucoma.</li>
                        <i class="flaticon-check-mark"></i><li> <h6> Optical Coherence Tomography -</h6> Optical coherence tomography can be used to diagnose and treat diseases such as diabetic retinopathy and glaucoma.</li>
                    </ul>
                    <div class="education-desc why-vission">
                        <h3>Treatment</h3>
                     </div>
                     <div class="setlasik-li">
                     <ul class="setlasik-li ">
                         <i class="flaticon-check-mark"></i><li><h6>Acetazolamide - </h6> This medication can reduce swelling and improve your vision.</li>
                         <i class="flaticon-check-mark"></i><li><h6>Vitamin A palmitate -</h6> High doses of this compound may slow the progression of retinitis pigmentosa a little each year. Follow your doctor's advice and cooperate closely with them.</li>
                         <i class="flaticon-check-mark"></i><li><h6>Sunglasses -</h6> These reduce your sensitivity to light and protect your eyes from harmful ultraviolet rays, which can hasten vision loss.</li>
                         <i class="flaticon-check-mark"></i><li><h6>Retinal implant -</h6> If you have late-stage RP, you may be a candidate for a retinal implant, which could restore some of your vision.</li>
                     </ul>
                    </div>
                   <p><b class="text-dark">VissionTip :</b> If you have Retinitis Pigmentosa, and plan to have children, you might want to speak with a genetic counselor to learn about your chance of passing this eye condition to your children.</p>
            </div>
        </div>
    </div>
    </div>
    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->




<style>
    .repigmentosa-link > a {
        color: #19ce67 !important;
    }

</style>
@endsection

