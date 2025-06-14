<!-- Start Footer Area -->
<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="{{route('index')}}"><img class="lazyload" data-src="{{asset('img/whitelogo.svg')}}" width="240"
                                alt="Vissioneyes"></a>
                        <p>Our Commitment to clinical excellence is lead by our senior doctor, Dr.
                            Himanshu Mehta, a world renowned ophthalmic surgeon, who has performed
                            over 25000 refractive surgeries</p>
                    </div>

                    <ul class="social">
                        <li><a href="https://www.facebook.com/thevissioneyecenter/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCgTyzIQmv-OIdweOH-U3_Mg" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        <li><a href="https://twitter.com/vissioneyes" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/vissioneye/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            {{-- <li><a href="https://www.linkedin.com/company/vission-eye-center/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> --}}
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Useful Links</h3>

                    <ul class="departments-list">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('blog.index')}}">Blog</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('medical-tourism')}}">Medical Tourism</a></li>
                    <li><a href="{{route('photos')}}">Gallery </a></li>
                    <li><a href="{{route('testimonial')}}">Vission Wall</a></li>
                    <li><a href="{{route('contact')}}">Teleconsultation</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget setfooter-widget pl-5">
                    <h3>Contact</h3>

                    <ul class="links-list contact-list-mob">
                        <img class="lazyload" data-src="{{asset('img/location.svg')}}" width="40" alt="image">
                        <li class="footer-addres">
                            <a target="_blank" href="https://g.page/thevissioneyecenter?share">The Vission Eye Centre
                                101, Hiralaya Building, N S Road No. 10, Near Laxmikant Chowk,
                                Juhu Scheme, Juhu, Mumbai-400049.</a>
                        </li>
                        {{-- <li><img class="lazyload" data-src="{{asset('img/phone.svg')}}" width="40" alt="image"><a class="footer-icon"
                                href="tel: +91-22-26186060">+91-2226186060</a> / <a href="tel: +91-22-26186161">
                                26186161 </a> / <a href="tel: +91-22-26186262"> 26186262</a></li> --}}
                        <li class="mobile-lipadd"><img class="lazyload mobile-ml" data-src="{{asset('img/mobile.png')}}" width="22" alt="image"><a class="footer-icon mob-a-pl"
                                href="tel: +91-9167055551">+91-9167055551</a></li>

                        <li><img class="lazyload" data-src="{{asset('img/whatsapp.svg')}}" width="40" alt="image"><a
                                href="https://api.whatsapp.com/send?phone=919867656060&text=Hi"
                                target="_blank">+91-9867656060 </a></li>
                        <li><img class="lazyload" data-src="{{asset('img/email.svg')}}" width="40" alt="image"><a class="footer-icon"
                                href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a></li>

                    </ul>
                    <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0232895528648!2d72.829669!3d19.106634199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c04c23fb23%3A0x1894debbd7d44acf!2sThe%20Vission%20Eye%20Center%20-%20Dr.%20Himanshu%20Mehta!5e0!3m2!1sen!2sin!4v1671601199283!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="copyright-area copyright-pb">
            <p><i class="far fa-copyright"></i> <?php echo date("Y");?> All Rights Reserved Vission Eye Center | Design
                & Developed By <a href="https://www.acetrot.com/" target="_blank">Acetrot</a></p>
        </div>
    </div>
    <div class="fix-footer-btm footer-btm-dislay footer-boder-btm">
        <ul class="contact-ul-btm">
            <li class="set-col-4 br-right pt-li-wa"><a target="_blank" href="https://api.whatsapp.com/send?phone=919867656060&text=Hi"><img src="{{asset('img/wa-foo.png')}}" width="27px" alt="Whatsapp Icon"> </a> <p class="whatsp-btm text-white">WhatsApp</p></li>
            {{-- <span class="br-right-foo"></span> --}}
            <li class="set-col-4 br-right"><a target="_blank" href="tel: +91-9167055551"><img class="mobile-btm" src="{{asset('img/mob-foo.png')}}" alt="Phone Icon"></a><p class="call-btm text-white">Call</p></li>
            {{-- <span class="br-left-foo"></span> --}}
            <li class="set-col-4"><a href="{{route('contact')}}"><img class="form-btm" src="{{asset('img/form-foo.png')}}"alt="Form Icon"></a><p class="call-btm text-white">Consult</p></li>
        </ul>
     </div>
</section>
<!-- End Footer Area -->

<div class="go-top top-ico"><i class="fas fa-chevron-up setup-icon"></i></div>

<!-- jQuery Min JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper Min JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Slick Min JS -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- Mean Menu JS -->
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('js/odometer.min.js')}}"></script>
<!-- Parallax Min JS -->
<script src="{{asset('js/parallax.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- WOW Min JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- AjaxChimp Min JS -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('js/form-validator.min.js')}}"></script>
<!-- Contact Form Min JS -->
<script src="{{asset('js/contact-form-script.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/lazysizes.min.js')}}"></script>



<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js')}}"></script>
<script src="{{asset('https://f.vimeocdn.com/js/froogaloop2.min.js')}}"></script>


