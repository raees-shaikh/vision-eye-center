@extends('layouts.app')
@section('pageTitle', 'Teleconsultation -')
@section('content')

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h1>Teleconsultation</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
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
                {{-- <span>Send Message</span> --}}
                <h2>Schedule your appointment now!</h2>
                {{-- <p>If you have an idea, we would love to hear about it.</p> --}}
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- <x-book-appointment></x-book-appointment> --}}
                    <div class="contact-form">
                        {{-- id="contactForm" --}}
                        <form id="payment" action="{{ route('book.teleAppointment.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ old('name') }}" required data-error="Please enter your name"
                                            placeholder="Name*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="tel" name="phone" value="{{ old('phone') }}" id="phone" required
                                            data-error="Please enter your number" class="form-control" placeholder="Mobile*"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ old('email') }}" required data-error="Please enter your email"
                                            placeholder="Email*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="billing_address" id="billing_address" class="form-control"
                                            value="{{ old('billing_address') }}" data-error="Please enter your name"
                                            placeholder="Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> --}}


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select name="service" class="form-control setoption">
                                            <option value="" class="set-option-select">Select Your Service*</option>
                                            <option value="Cataract">Cataract </option>
                                            <option value="LASIK">LASIK</option>
                                            <option value="Cornea">Cornea </option>
                                            <option value="Dry Eye Suit">Dry Eye Suit </option>
                                            <option value="Retina">Retina</option>
                                            <option value="Glaucoma">Glaucoma</option>
                                            <option value="Squint">Squint </option>
                                        </select>
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

                <div class="col-lg-5 col-md-12">
                    <div class="contact-info contact-info-icon">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <span>Address</span>
                                <a target="_blank" href="https://g.page/thevissioneyecenter?share"> The Vission Eye Centre 101, Hiralaya Building, N S Road No. 10, Near Laxmikant Chowk, Juhu
                                    Scheme, Juhu, Mumbai-400049.</a>
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
        <div class="col-lg-12 pt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.023289847569!2d72.8274803147302!3d19.106634187070323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c04c23fb23%3A0x1894debbd7d44acf!2sDr.%20Himanshu%20Mehta!5e0!3m2!1sen!2sin!4v1629895238528!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="bg-map"><img src="{{ asset('img/bg-map.png') }}" alt="image"></div>
    </section>





    <style>
        .contact-link a {
            color: #19ce67 !important;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#payment").submit(function () {
                $('button[type="submit"]').attr("disabled", true);
                return true;
            });
        });
    </script>
    <!-- End Contact Area -->
@endsection
