@extends('layouts.app')
@section('pageTitle', 'Medical Tourism -')
@section('content')

 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Medical Tourism</h1>
                    <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                        <li>Medical Tourism</li>
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

            <div class="col-lg-12 col-md-12">
                <div class="doctor-details-desc">
                    <h2>Got an eye problem? Want to be treated in India? No worries, get in touch with us NOW!</h3>
                    <p>Thousands of individuals travel abroad each year especially to India for medical care. It is known world over that India not only offers the best expertise but also affordable healthcare. The Vission Eye Center is one of the most popular eye clinics in Mumbai. Led by Dr Himanshu Mehta who has over 25 years of experience, The Vission Eye Center has catered to more than 56 countries. His wealth of experience ensures that The Vission Eye Center stays at the forefront of corrective eye surgery innovation and maintains the highest standards of patient care.</h2>
                    <p>Our team of specialist eye surgeons and ophthalmic doctors are qualified medical practitioners who have specialized in Ophthalmology, with many continuing to work in other fields of eye surgery. The requirement of every patient differs one from the other and The Vission Eye Center offers a flexible and customized approach to each patient as they need. We understand patients travel from far and wide in hope of getting treated through safe and secured procedures. The cost of treatments in India is 1/10 of the US and ¼ of the UK in addition to transparent methods of functioning. With India earning recognition as one of the top spots for medical tourism, our techniques, resources and methods have only advanced to grant our patients a worry-free experience. Location wise, our state-of-the-art eye center is within close proximity to the J.W. Marriott, the International Airport and the famous Juhu beach at an accessible distance.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="img/shape/3.png" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->



<section class="section-padd pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">State-of-the-art Infrastructure</h3>
                <div class="" id="lightgallery">
                    <a class="setgalleryimg" href="img/medical-tourism/01.jpg" alt="Medical Tourism - Inner Clinic View">
                        <img width="270" height="290" class="imggallery" alt="Medical Tourism - Inner Clinic View" src="img/medical-tourism/01.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/02.jpg" alt="Medical Tourism - Infrastructure">
                        <img width="270" height="290" class="imggallery" alt="Medical Tourism - Infrastructure" src="img/medical-tourism/02.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/03.jpg" alt="Eye test Machine">
                        <img width="270" height="290" class="imggallery" alt="Eye test Machine" src="img/medical-tourism/03.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/04.jpg" alt="Eye test Machine equipment">
                        <img width="270" height="290" class="imggallery" alt="Eye test Machine equipment" src="img/medical-tourism/04.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/05.jpg" alt="Medical-tourism – eye checkup">
                        <img width="270" height="290" class="imggallery" alt="Medical-tourism – eye checkup" src="img/medical-tourism/05.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/06.jpg" alt="Medical tourism - Eye Clinic">
                        <img width="270" height="290" class="imggallery" alt="Medical tourism - Eye Clinic" src="img/medical-tourism/06.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/07.jpg" alt="Medical tourism - Eye Surgery Clinic">
                        <img width="270" height="290" class="imggallery" alt="Medical tourism - Eye Surgery Clinic" src="img/medical-tourism/07.jpg" />
                    </a>
                    <a class="setgalleryimg" href="img/medical-tourism/08.jpg" alt="Medical-tourism – eye Surgery">
                        <img width="270" height="290" class="imggallery" alt="Medical-tourism – eye Surgery" src="img/medical-tourism/08.jpg" />
                    </a>
                </div>

            </div>
        </div>

    </div>


</section>


    <style>
        .medical-link a {
            color: #19ce67 !important;
        }
        .form-dis-li{
            display: none !important;
        }
    </style>

@endsection



@section('js')

<script>

$(document).ready(function() {
        $("#lightgallery").lightGallery({

            download : false,
            escKey:true,
            fullScreen : true
        });
    });


    // video overlayer: start

$(".js-overlay-start").unbind("click").bind("click", function(e) {
	e.preventDefault();
	var src = $(this).attr("data-url");
	$(".overlay-video").show();
	setTimeout(function() {
		$(".overlay-video").addClass("o1");
		$("#player").attr("src", src);
	}, 100);
});

// video overlayer: close it if you click outside of the modal

$(".overlay-video").click(function(event) {
	if (!$(event.target).closest(".videoWrapperExt").length) {
		var PlayingVideoSrc = $("#player").attr("src").replace("&autoplay=1", "");
		$("#player").attr("src", PlayingVideoSrc);
		$(".overlay-video").removeClass("o1");
		setTimeout(function() {
			$(".overlay-video").hide();
		}, 600);
	}
});

// video overlayer: close it via the X icon

$(".close").click(function(event) {
		var PlayingVideoSrc = $("#player").attr("src").replace("&autoplay=1", "");
		$("#player").attr("src", PlayingVideoSrc);
		$(".overlay-video").removeClass("o1");
		setTimeout(function() {
			$(".overlay-video").hide();
		}, 600);

});

</script>

@endsection
