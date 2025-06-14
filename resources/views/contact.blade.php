@extends('layouts.app')
@section('pageTitle', 'Teleconsultation -')
@section('content')
<script>
    window.onload = function() {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
</script>



<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Teleconsultation</h2>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Teleconsultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100 section-padd">
    <div class="container">
        <div class="section-title">
            <h2>Schedule your appointment now!</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    {{-- id="contactForm" --}}
                    <form action="/teleconsultation/payment" method="POST">
                        @csrf
                        <input type="text" value="{{time()}}" name="tid" hidden id="tid" readonly />
                        <input type="text" name="merchant_id" hidden value="{{ config('app.merchant_key')}}" />
                        <input hidden type="text" name="order_id" value="{{Str::uuid()}}" />
                        <input hidden type="text" name="amount" value="1.00" />
                        <input hidden type="text" name="currency" value="INR" />
                        <input hidden type="text" name="redirect_url"
                            value="{{config('app.url')}}/teleconsultation/response" />
                        <input hidden type="text" name="cancel_url"
                            value="{{ config('app.url')}}/teleconsultation/response" />
                        <input hidden type="text" name="language" value="EN" />
                        <input type="text" name="billing_name" value="Charli" />
                        <input type="text" hidden name="billing_address"
                            value="Room no 1101, near Railway station Ambad" />
                        <input type="text" name="billing_city" value="Indore" />
                        <input type="text" name="billing_state" value="MP" />
                        <input type="text" name="billing_zip" value="425001" />
                        <input type="text" name="billing_country" value="India" />
                        <input type="text" name="billing_tel" value="9876543210" />
                        <input type="text" name="billing_email" value="test@test.com" />
                        <input type="text" hidden name="customer_identifier" value="" />
                        <input type="text" hidden name="integration_type" value="iframe_normal" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{old('name')}}" required data-error="Please enter your name"
                                        placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{old('email')}}" required data-error="Please enter your email"
                                        placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select name="service" class="form-control setoption" required>
                                        <option class="set-option-select">Select Your Service</option>
                                        <option>Cataract </option>
                                        <option>LASIK</option>
                                        <option>Cornea </option>
                                        <option>Dry Eye Suit </option>
                                        <option>Retina</option>
                                        <option>Glaucoma</option>
                                        <option>Squint </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" value="{{old('phone')}}" id="phone" required
                                        data-error="Please enter your number" class="form-control"
                                        placeholder="Your Phone" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Book Appointment <i
                                        class="flaticon-right-chevron"></i></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{--   <div class="col-lg-12 col-md-12">
                                <a href="{{ route('payment-page') }}" class="btn btn-primary">Checkout <i
                class="flaticon-right-chevron"></i></a>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>
        --}}
        <div class="col-lg-5 col-md-12">
            <div class="contact-info contact-info-icon">
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span>Address</span>
                        The Vission Eye Centre 101, Hiralaya Building, N S Road No. 10, Near Laxmikant Chowk, Juhu
                        Scheme, Juhu, Mumbai-400049.
                    </li>

                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <span>Email</span>
                        <a href="mailto:info@vissioneyes.com" target="_blank">info@vissioneyes.com</a>
                    </li>

                    {{-- <li>
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <span>Phone</span>
                        <a href="tel: +91-22-26186060">+91-2226186060</a>
                        <a href="tel: +91-22-26186161">+91-2226186161</a>
                        <a href="tel: +91-22-26186262">+91-2226186262</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="row">
        <div class="container">
        <div class="col-1g-12 pt-4">
            <iframe class="setmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.023027721227!2d72.82752791452475!3d19.106645687070316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c04c23fb23%3A0x1894debbd7d44acf!2sThe%20Vission%20Eye%20Center!5e0!3m2!1sen!2sin!4v1597905823206!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        </div>

    </div> --}}

    <div class="bg-map"><img src="{{asset('img/bg-map.png')}}" alt="image"></div>
</section>





<style>
    .contact-link a {
        color: #19ce67 !important;
    }
</style>
<!-- End Contact Area -->
@endsection
