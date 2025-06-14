@extends('layouts.app')
@section('pageTitle', 'Lasers -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Lasers</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Lasers</li>
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
                    <img src="img/services/lasers.jpg" alt="Lasers Retina surgery ">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Lasers</h3>
                    <p>Lasers are used in a throng of conditions for the retina. Retinal photocoagulation is the mechanism of action for a retinal laser treatment. In this marvel, light energy is converted to heat at the level of the retina, leading to protein denaturation during the retina laser surgery.</p>
                    <h3>Indications</h3>
                    <p>LASIK indicates the correction of low, moderate, and high myopia with and without astigmatism. The specific dioptric limits depend on the particular laser system and the regulatory agency of each country.</p>
                    <div class="skill-desc ulcerskill-desk">
                    <ul class="">
                        <li><span><i class="flaticon-check-mark"></i><b>Proliferative Diabetic Retinopathy:</b> PDR is an advanced stage of diabetic eye disease. It occurs when the retina starts developing new blood vessels within itself. This is also called neovascularization. </span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Diabetic Macular Edema:</b> DME is the accumulation of extra fluid in the extracellular space within the retina in the macular area, generally in the subretinal space, inner nuclear, Henle's fiber layer, and outer plexiform. </span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Vascular Occlusion:</b> A vascular occlusion occurs when blood can no longer pass through a blood vessel.</span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Central Serous Chorioretinopathy:</b> Central serous chorioretinopathy (CSC) is a retina disease characterized by serous detachment of the neurosensory retina secondary to one or more focal lesions of the retinal pigment epithelium (RPE).</span></li>
                        <li><span><i class="flaticon-check-mark"></i><b>Retinal Breaks: </b> detachment is an emergency. Tissue at the rear end or the back of the eye pulls away from a layer of blood vessels that provide necessary nourishment and oxygen. It may happen in the retinal periphery. The retina is sometimes torn away by the vitreous gel because of pulling. </span></li>

                    </ul>
                </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Mechanism of Action</h3>
                        <p>Retinal disease is primarily treated using a retina laser. The light energy is absorbed by particular tissue at the back of the eye and transformed to heat with this laser. The heat causes a tiny area of damage to the retina. As the eye heals from this small area of damage, the scar helps to correct the underlying retinal disease. Retina laser is used to seal retinal tears, close leaking blood vessels, or break down abnormal tissue or blood vessels.</p>
                        <ul class="">
                            <li><span><i class="flaticon-check-mark"></i> Direct action on the vessels </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Closure and reduced leakage</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Scarring + Burns of the layers of the retina</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Reduced oxygen demanded</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Increased oxygenation of the inner retina </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Photocoagulation </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Retinal cell activation </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Cytokine production  </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Reduction of vascular growth factor + Edema </span></li>
                        </ul>
                    </div>
                    <div class="setlasik-li ">
                        <h3 class="pt-4">Types of Lasers</h3>
                        <ul class="setlasik-li ">
                            <i class="flaticon-check-mark"></i><li> <h5> Green (Argon) laser</h5></li>
                            <i class="flaticon-check-mark"></i><li> <h5> Yellow laser:</h5> Sealing the leaky blood vessels </li>
                            <i class="flaticon-check-mark"></i><li> <h5> Photodynamic laser:</h5> Using a drug (Visudyne) + Red laser. This is used to seal abnormal and leaking retinal vessels.</li>
                            <i class="flaticon-check-mark"></i><li> <h5> Yag Laser:</h5>This type of laser is used to create a opening of the membrane that is frequently formed on the implanted intraocular lens. </li>

                        </ul>
                     </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->

<style>
    .laser-link > a {
        color: #19ce67 !important;
    }

</style>


@endsection

