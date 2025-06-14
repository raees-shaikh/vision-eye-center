@extends('layouts.app')
@section('pageTitle', 'LenSx Cataract Surgery -')
@section('content')


  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>LenSx Cataract Surgery </h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>

                        <li>LenSx Cataract Surgery</li>
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
                    <h3>LenSx Cataract Surgery</h3>
                    <p>Laser cataract surgery is an advanced type of cataract surgery that uses femtosecond laser
                        technology laser technology to bring a new level of precision and accuracy to specific steps
                        in cataract surgery that was tradionally performed with hand-help surgical tools.
                    </p>
                    <div class="setlasik-li">
                        <h4>The steps include:</h4>
                        <ul class="setlasik-li dry-eye-li">
                            <i class="flaticon-check-mark dry-eye-i"></i><li> The corneal incision </li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> The anterior capsulotomy</li>
                            <i class="flaticon-check-mark dry-eye-i"></i><li> Lens and cataract fragmentation </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc set-skill">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="skill-desc">
                        <p>The added precision, accuracy and reproducibility of each of these steps, when performed
                            with a laser, thus reducing the risks and can improve visual outcomes of cataract surgery.</p>

                        <p>In conventional <a href="{{url('/cataract-surgery-mumbai')}}"> cataract surgery</a>, the surgeon uses a hand-held instrument with a metal or
                            diamond blade to create an incision in the area where the cornea meets the sclera. This
                            incision allows the surgeon to gain access to the interior of the eye to break up and remove
                            the cataract, which is a clouding of the eyes natural lens that is located right behind the pupil.</p>

                        <p>Next, an intraocular lens (IOL) is inserted and implanted, to replace the cloudy natural lens.
                            The corneal incision is made in special way so it will self-seal when surgery is complete,
                            without any need for stitches.</p>
                        <p>In laser cataract surgery, the surgeon creates a precise surgical plan for the corneal incision
                            with a sophisticated 3-D image of the eye called an OCT (optical coherence tomography).
                            The goal is to create an incision with a specific location, depth and length in all planes, and
                            with the OCT image and a <a href="{{url('/cataract-surgery-mumbai/femtosecond-laser')}}"> femtosecond laser,</a> it can be performed exactly without the
                            variable of surgeon experience.</p>
                        <p>This is important not only for accuracy but also for increasing the likelihood that the incision
                            will be self-sealing at the end of the procedure, which reduces the risk of infection.</p>

                        <h3 class="pt-4">The capsulotomy</h3>
                        <p>The eyes natural lens is surrounded by a very thin, clear capsule. In cataract surgery, the
                            front portion of the capsule is removed in a step called an anterior capsulotomy. This enable
                            the surgeon to gain direct access to the cloudy lens.</p>
                        <p>Its very important that the remainder of the lens capsule that remains intact in the eye is not
                            damaged during cataract surgery, because it must hold the artificial lens implant in place for
                            the rest of the patients life.</p>
                        <p>In traditional cataract surgery, the surgeon creates an opening in the capsule with a small
                            needle and then uses that same needle or a forceps to tear the capsule in a circular fashion.</p>
                        <p>In laser cataract surgery, the anterior capsulotomy is performed with a femtosecond laser like
                            the type used in LASIK vision correction surgery. Studies have shown that capsulotomies
                            performed with a laser have greater accuracy and reproducibility.</p>
                        <p>Studies also have shown that laser capsulotomies enable better centering of the intraocular
                            lens, and IOL positioning is a significant factor in determining final visual outcomes.</p>
                        </p>

                        <h3 class="pt-4">Lens and cataract fragmentation</h3>
                        <p>After the capsulotomy, the surgeon now has access to the cataract to remove it. 
                            In traditional cataract surgery, the ultrasonic device that breaks up the cataract is inserted into
                            the incision. During this phacoemulsification procedure, the ultrasound energy can lead to
                            heat buildup in the incision, which sometimes can burn the incision and negatively affect the
                            visual outcome by actually inducing astigmatism.
                            An incision burn also has a higher chance of leaking and sometimes requires multiple sutures
                            to close.</p>
                        <p>The laser, on the other hand, softens the cataract as it breaks it up. By breaking up the
                            cataract into smaller, softer pieces, less energy should be needed to remove the cataract, so
                            there should be less chance of burning and distorting the incision.
                            Laser cataract surgery may also reduce the risk of capsule breakage that can cause vision
                            problems after surgery.</p>
                        <p>The lens capsule is as thin as cellophane wrap and it&#39;s important that the portion that is left
                            inside the eye after cataract surgery is undamaged, so it can hold the IOL in the proper
                            position for clear, undistorted vision.
                            The reduced phacoemulsification energy required in laser cataract surgery may also make the
                            procedure safer to the inner eye, which reduces the chance of certain complications, such as
                            a detached retina.</p>

                        <h3 class="pt-4">Astigmatism correction at the time of cataract surgery</h3>
                        <p>To reduce the need for prescription eyeglasses or reading glasses after cataract surgery, it is
                            important that little or no astigmatism is present after implantation of presbyopia-
                            correcting multifocal IOLs and accommodating IOLs.</p>
                        <p>Astigmatism usually is caused by the cornea being more curved in one meridian than others.</p>
                        <p>To reduce astigmatism, small incisions can be placed in the periphery of the more curved
                            meridian; as the incisions heal, this meridian flattens slightly to give the cornea a rounder,
                            more symmetrical shape.</p>
                        <p>This procedure is called limbal relaxing incisions (LRI) or astigmatic keratotomy (AK).
                            Surgeons can perform LRI or AK manually with a diamond blade, and it is quite effective in
                            reducing astigmatism.</p>
                        <p>During refractive laser-assisted cataract surgery, the OCT image can be used to plan laser
                            LRI or AK incisions in a very precise location, length and depth. This increases the accuracy
                            of the astigmatism-reducing procedure and the probability of good vision without glasses
                            after cataract surgery.</p>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<style>
    .cataract-link > a{
    color: #19ce67 !important;
}
    .Lensxcataract-link > a {
       color: #19ce67 !important;
   }

</style>

@endsection

