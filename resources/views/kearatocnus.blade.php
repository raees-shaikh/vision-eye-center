@extends('layouts.app')
@section('pageTitle', 'Kearatocnus  -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Kearatocnus </h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>Kearatocnus </li>
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
                    <img src="img/services/Keratoconus.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Kearatocnus </h3>
                    <p>Keratoconus is a bilateral ocular disorder in which the cornea assumes a conical shape due to thinning of the stromal collage tissue.
                    </p>
                    <p>It classically has its onset at puberty and is progreassive until the third or fourth decade of life when the disease usually arrests.</p>

                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Risk Factors</h3>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Eye rubbing </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Family history with a genetic predisposition
                            </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Connective tissue disease</span></li>
                        </ul>

                        <h3 class="pt-4">Symptoms </h3>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Frequent change of spectacle power </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Increased rubbing of eyes
                            </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Vision deterioration that doesn't improve with spectacle</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Distortion of vision with multiple images</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Sensitivity </span></li>

                        </ul>
                        <h3 class="pt-4">Treatment </h3>
                        <p>Treatment for Keratoconus depends on the severity of your condition and how quickly this condition can progress.
                            The two approaches to treating this condition is: <br>
                          a.  Slowing the progression <br>
                          b.  Improving your vision

                        </p>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12">

                    <div class="education-desc why-vission pt-lg-5">
                       <h3>Contacts Lenses </h3>
                       <p>If you use glasses or contact lenses to improve your sight, consider <a href="{{url('/lasik-service')}}"> LASIK vision correction </a>for the benefits.</p>
                    </div>
                    <div class="setlasik-li">
                    <ul class="setlasik-li ">
                        <i class="flaticon-check-mark"></i><li> <h5> Eyeglasses or soft contact lenses: </h5> Glasses or soft contact lenses can correct blurry or distorted vision in early keratoconus. But frequent change of prescription for eyeglasses may be required over a period of time as their cornea remodels. </li>
                        <i class="flaticon-check-mark"></i><li> <h5> Hard contact lenses: </h5> Hard (rigid, gas permeable) lenses are often the next step in treating more advanced Keratoconus.
                            These contact lenses are custom made to fit on your corneas perfectly</li>
                        <i class="flaticon-check-mark"></i><li> <h5> Piigyback lenses: </h5> Incase the rigid lenses are uncomfortable, an option of “piggybacking” a hard contact lens on top of a soft one is recommended. </li>
                        <i class="flaticon-check-mark"></i><li> <h5> Hybrid Lenses: </h5> These lenses have a rigid center with a softer ring around the outside for increased comfort. Those who cant tolerate hard contact lenses my prefer this option. </li>
                        <i class="flaticon-check-mark"></i><li> <h5> Scleral Lenses : </h5> In cases of advanced keratoconus, these lenses are used for irregular corneas. Instead of resting on the cornea, these scleral lenses sit on the white part of the eye (sclera) and vault over the cornea without touching it.</li>
                    </ul>
                    <p>One must have regular checkups from time to time to determine whether the fittings remain satisfactory.
                        An ill fitting lens can damage your cornea.
                    </p>
                    </div>

            </div>
        </div>

        <div class="col-lg-12 col-md-12 pt-3 setpadd-belowpara">
            <div class="setlasik-li ">
                <h3 class="below-para">Corneal collagen cross linking</h3>
                <p class="below-para">In this procedure, the cornea is saturated with riboflavin eye drops and treated with ultraviolet light.
                    This causes cross-linking of the cornea, which stiffens the cornea to prevent further shape changes. Corneal collagen cross-linking may help to reduce the risk of progressive vision loss by stabilizing the cornea early in the disease.
                </p>
                <p class="below-para">Newer advances for crosslinking include customized measurements of your cornea using your topography. We then use the laser to reduce corneal optical irregularities which causes the static and decreased visual function in the keratoconic eye.
                    This target is achieved by incorporating your individual corneal topography map into the laser treatment. By utilizing your custom corneal corneal topography data, the laser reshapes your corneal surface to a more symmetric and rounder shape to improve the corneal optical architecture and visual performance.
                    This is followed by corneal collagen crosslinking to give the necessary strength to the corneal bonds.

                </p>
                <h3>Intacs</h3>
                <p>Acrylic rings are inserted in the corneal stromal to decrease the irregularity of the cornea.
                    This can improve uncorrected vision without contact lenses.</p>
                <p>This can also be followed by corneal collagen crosslinking to give the necessary strength to the corneal bonds. </p>

                <h3>Surgery</h3>
                <p>In case of corneal corneal scarring, extreme thinning of your cornea, poor vision with the strongest prescription lenses or an inability to wear any time of contact lenses. </p>
                <ul class="setlasik-li ">
                    <i class="flaticon-check-mark"></i><li> <h5> Penentrating Keratoplasty:</h5> This means a full-thickness corneal transplant.
                        In this procedure, we remove a full-thickness portion of your central cornea and replace it with donor tissue.</li>
                    <i class="flaticon-check-mark"></i><li> <h5> Deep anterior lamellar keratoplasty (DALK):</h5>
                        This procedure preserves the inside lining of the cornea (endothelium). This helps avoiding the rejection of the critical inside lining of the cornea.</li>

                </ul>
                <p> <b class="text-dark">VissionTip :</b>  Transplant cases are generally very successful, but possible complications include graft rejections. Poor vision, infection and postoperative astigmatism.
                </p>
             </div>
        </div>

    </div>
    </div>
    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->


<style>
    .kera-link > a {
        color: #19ce67 !important;
    }

</style>


@endsection

