@extends('layouts.app')
@section('pageTitle', 'Refraction  -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Refraction </h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>

                        <li>Refraction </li>
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
                    <img src="img/services/refraction.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Normal eye</h3>
                    <p>Light rays enter through the cornea where they are refracted and pass through the pupil to finally form a sharp focus or image on the retina. The retina then sends the information to the brain via the optic nerve and the brain then perceives the final image. When the image is exactly formed on the retina and there is no power in the eyes - it is called Emmetropia. </p>
                    <p>Refractive errors are disorders in which the light is not properly refracted to a point focused on the retina and instead a blurred image is preserved.</p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3 class="pt-4">Myopia or nearsightedness</h3>
                        <p>This is a condition in which the near objects are seen clearly but the distant objects are not clear.
                            This occurs due to light rays focus in front of the retina due to either longer eye ball or increased corneal curvature of a steep cornea. As the eye continues to grow during childhood, myopia may increase up to the age of 18-21 after which it stabilizes. </p>
                        <p>A sign of myopia is difficulty in seeing distant objects like the TV screen or when the child may want to copy from the student sitting next to him instead of looking at the blackboard.</p>
                        <p>With a high myopia, there are chances that your retina might get detached which would require surgical treatment.
                            Thus, a regular follow up with a doctor is a must.
                        </p>
                        <p> <b class="text-dark">VissionTip :</b> Do get your eyes checked on a yearly basis to get diagnosed and treated on time. </p>

                        <h3 class="pt-4">Hypermetropia or farsightedness</h3>
                        <p>This is a condition in which the distant objects are seen clearly but the near objects are not clear.
                            This occurs due to the light rays focus behind the retina due to a shorter eyeball  or the cornea is less curved or flat. Many children are born farsighted and outgrow it as the eyeball lengthens with normal development.
                            Patients often sometimes have headaches or eye strain and may squint or feel fatigued when performing work at a near range.
                        </p>
                        <p>People often confuse hyperopia with presbyopia.
                            Presbyopia causes near vision problems among people after the age of 40 years of age.
                        </p>
                        <p> <b class="text-dark">VissionTip :</b>  A comprehensive ophthalmological examination is required in all those patients who have the above symptoms
                        </p>

                        <h3 class="pt-4">Astigmatism or distorted vision</h3>
                        <p>Astigmatism is a condition where your cornea is irregular in shape that is not perfectly round but more oval preventing the light to focus at one point on the retina.This results in a blurry vision at all distances. It could be accompanied by myopia or hyperopia.
                        </p>
                        <p class="text-dark"> <b> VissionTip :</b> Most of the astigmatism can be corrected with glasses or contact lenses. Higher astigmatism can also be corrected by LASIK </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<style>
    .refraction-link > a {
       color: #19ce67 !important;
   }

</style>

@endsection

