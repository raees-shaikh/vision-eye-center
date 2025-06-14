@extends('layouts.app')
@section('pageTitle', 'Home Test -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Home Test</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                        <li>Home Test</li>
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
                    <img src="img/home-test.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Home Test</h3>
                    <p>Simple free tests to do at home!</p>
                    <p>Do these simple tests with your glasses or contact lens, if you have any!</p>
                    <h4>Colour Vision</h4>
                    <p>Check photo in the folder.</p>
                    <p>Easiest way to check your colour vision at home.</p>
                    <p>If you can read the number properly, there is nothing to worry about.</p>
                    <p>Incase you cannot make out the number, please contact your Ophthalmologist.</p>
                    <p>Classical inheritance pattern is from his grandfather to the grandson through the mother.
                        Most of the people with colour blind lead a normal life, except those who want to go into the
                        Aviation, Merchant Navy.</p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc setretinopathy">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h4>Amsler Grid</h4>
                       <p>Simple looking chart to check your central vision.</p>
                       <p>Close your right eye with your right hand. See the small dot in the center of the grid.
                        Now close your left eye with your left hand. See the small dot in the center of the grid.</p>
                        <p>Can you see straight lines around the small centre dot?
                            Do the lines appear wavy?
                            Can you see all the lines? Or are some lines missing?</p>
                        <p>You can remember how these lines look for your baseline evaluation.</p>
                        <p>If there is an increase or change in what you saw at your first evaluation, do visit your
                            Ophthalmologist as soon as possible.</p>


                        <h4 class="pt-4">The Vission Test</h4>
                       <p>Wear your glasses</p>
                       <p>Sit in front of the Television Screen</p>
                       <p>Sit at a distance of approximately 4 -5 meters.</p>
                       <p>Close your right eye with your right hand with the hollow of your palm. Do not press your
                        eye. Look at the TV screen
                        Do the same with your left eye.</p>
                        <p>If there is any discrepancy of vision.
                            If you cannot see clearly with either of the eyes, contact your Ophthalmoogist.</p>

                        <p>Once in a month specially if you are a:</p>
                          <ul>
                              <li><span><i class="flaticon-check-mark"></i> Diabetic</span></li>
                              <li><span><i class="flaticon-check-mark"></i> Hypertensive</span></li>
                              <li><span><i class="flaticon-check-mark"></i> Glaucoma</span></li>
                              <li><span><i class="flaticon-check-mark"></i> Family history of glaucoma</span></li>
                              <li><span><i class="flaticon-check-mark"></i> Macular degeneration</span></li>
                              <li><span><i class="flaticon-check-mark"></i> Family history of macular degeneration</span></li>
                          </ul>
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
    .hometest-link > a {
        color: #19ce67 !important;
    }
</style>

@endsection

