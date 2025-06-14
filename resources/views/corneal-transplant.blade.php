@extends('layouts.app')
@section('pageTitle', 'Corneal Transplant -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Corneal Transplant</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                        <li>Corneal Transplant</li>
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
                    <img src="img/services/corneal-transplant.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Overview by Vission Eyes - Corneal Transplant</h3>
                    <p>
                        A corneal transplant is defined to be a surgical procedure to replace part of your cornea with corneal tissue from the selected donor. This cornea has been donated to the eye bank from a deceased person. Your cornea is said to be your eye's transparent and dome-shaped surface. It is where light starts entering your eye and is a significant part of your eye’s ability to see anything. This surgical procedure can help restore your vision by reducing the pain and improving the appearance of a diseased or damaged cornea.
                    </p>
                    <p>
                        Most corneal transplant is successful, but corneal transplants are said to carry a small risk of certain complications, such as the rejection of the selected donor cornea.
                    </p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3>Why do you need it? </h3>
                        <p>Corneal transplants are done to restore your lost vision for a person who has damaged one’s cornea. The transplant also relieves pain or any other symptoms associated with cornea diseases. Certain conditions are treated with a cornea transplant, which includes: </p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Corneal Opacities </span></li>
                            <li><span><i class="flaticon-check-mark"></i> A hereditary condition- Fuchs' dystrophy </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Tearing or thinning of the cornea   </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Infection or injury influenced cornea scarring </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Corneal ulcers unaffected by the medical treatment  </span></li>
                            <li><span><i class="flaticon-check-mark"></i> Complications created by previous eye surgery  </span></li>


                        </ul>

                        <h3 class="pt-4">What are the symptoms?</h3>

                        <p>Your immune system sometimes mistakenly attacks the donor cornea. This situation is called rejection and might require medical treatment or another corneal transplant. When this happens, you should notice these signs of rejection, such as:</p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i>Losing your vision</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Eye pain</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Red eyes</span></li>
                            <li><span><i class="flaticon-check-mark"></i>Sensitivity towards light</span></li>

                        </ul>


                        <h3 class="pt-4">How can you prepare?</h3>
                        <p>Here are a few procedures that are done before undergoing a cornea transplant:</p>
                        <ul>
                            <li><span><i class="flaticon-check-mark"></i><b>A detailed eye examination</b> – The eye specialist will look for conditions that can cause complications after the surgery.</span></li>
                            <li><span><i class="flaticon-check-mark"></i><b>Eye measurements</b> – Your eye care specialist helps determine what size donor you need.</span></li>
                            <li><span><i class="flaticon-check-mark"></i><b>A thorough review of all the ongoing medications and supplements</b> - You might have to stop taking a few medications or any supplements previous to or after your surgery.</span></li>
                            <li><span><i class="flaticon-check-mark"></i><b>Medications for other eye problems</b> – Any infection or unrelated eye problems can lower your chances of a successful cornea transplant. Your eye care specialist will help treat those problems before the surgical procedure.</span></li>
                        </ul>



                        <h3 class="pt-4">Find the right medical assistance</h3>
                        <p>
                            A cornea transplant is essential for anyone with a damaged cornea. If not
                            appropriately treated, the person can lose their vision which is too risky
                            and impossible to imagine. Thus, it is crucial to find the <a href="{{url('/')}}">best opthalmologist in Mumbai</a>,
                            like Vission Eyes, to treat your eye problems. <a href="{{('/')}}">Vission Eyes</a> is a well-known and
                            proficient eye care clinic that has successfully treated its client’s eye problems
                            with utmost care and determination. We are here to provide you the proper
                            assistance to all your eye-related queries and are always more than happy to give
                            the right feedback after a thorough examination of your eye and will provide you
                            with a detailed bifurcation of procedures as well as the cornea transplant cost.
                            If you or anyone you know is going through any eye-related issues, then help them
                            out by contacting us to put an end to their suffering. We always hope you have a
                            colourful and visionful life! Doing a corneal Transplantation requires a special
                            skill set and is not routinely done by all Ophthalmologists. Your Ophthalmologist
                            should have the proper license and expertise for carrying out the transplantation
                            properly.
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
    .cotrans-link > a {
        color: #19ce67 !important;
    }

</style>

@endsection

