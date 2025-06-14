@extends('layouts.app')
@section('pageTitle', 'Chalazion -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Chalazion</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li>Chalazion</li>
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
                <img src="img/services/chalazion.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h3>Chalazion</h3>
                    <p>A chalazion is a small, painless lump or swelling on your upper eyelid. This condition, also known as a meibomian cyst, is caused by a blocked meibomian or oil gland.</p>
                    <p>It is possible for a chalazion to develop on the upper or lower eyelid. If not treated, it might go away. "Chalazia" refers to the presence of multiple chalazia.</p>
                    <p>Consult an eye doctor if you suspect you have a chalazion, especially if it is obstructing your vision or you have had chalazia in the past. </p>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <h3 class="pt-4">Chalazion Eye Treatment </h3>
                        <p>Some chalazia can go away without treatment. If your doctor recommends a chalazion treatment, you may be able to choose between home care and medical treatment. </p>
                        <h3 class="pt-4">Home health care  </h3>
                        <p>First and foremost, do not attempt to squeeze the chalazion. It's best if you don't touch it too much. </p>
                        <p>Instead, apply a warm compress to your eyelid for about 10 minutes four times per day. This helps to reduce swelling by softening the oils in the clogged gland. </p>
                        <p>Make sure to wash your hands before touching the area. </p>
                        <p>Your physician might advise you to scrub your eyelids or gently massage the lump repeatedly. They might also recommend eye drops or eyelid creams for effective chalazion treatment.  </p>
                        <h3 class="pt-4">Medical attention </h3>
                        <p>If home treatment does not relieve the chalazion, your doctor may recommend a corticosteroid injection or a chalazion surgery to remove it. Chalazion surgery and injection are both effective treatments. </p>
                        <p>Several factors influence treatment selection, including whether you are at risk of anaesthesia side effects. Your doctor will go over the advantages and disadvantages.</p>
                        <h3 class="pt-4">Recovery </h3>
                        <p>The surgical wound should heal in 7 to 10 days. However, for at least two weeks, you should avoid any activities that could potentially injure your eye.  </p>
                        <p>As you recover, apply moist heat to your eye for 10 minutes at a time, three times a day. Do this for the next five days after surgery. </p>
                        <p>You should also avoid wearing contact lenses and eye makeup for about a week after surgery. </p>
                        <p> <b class="text-dark">VissionTip :</b> If you are getting multiple chalazion and styes, visit your doctor! There could be a possibility that you have a refractive error. </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<style>
    .chalazion-link > a {
       color: #19ce67 !important;
   }

</style>

@endsection

