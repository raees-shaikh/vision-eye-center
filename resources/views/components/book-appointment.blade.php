<div class="contact-form">
    {{-- id="contactForm" --}}

    @if(Str::of(url()->current())->contains('test'))
    <form id="payment" action="/teleconsultation/confirm" method="POST">
        @else
        <form action="/teleconsultation/secure/confirm" method="POST">
            @endif
            @csrf
            <input type="text" name="merchant_id" hidden value="{{ config('app.merchant_key')}}" />
            <input hidden type="text" name="order_id" value="{{uniqid().rand(19,99)}}" />
            @if(Str::of(url()->current())->contains('test'))
            <input hidden type="text" name="amount" value="1.00" />
            @else
            <input hidden type="text" name="amount" value="1000.00" />
            @endif
            <input hidden type="text" name="currency" value="INR">
            <input hidden type="text" name="redirect_url" value="{{config('app.url')}}/teleconsultation/response" />
            <input hidden type="text" name="cancel_url" value="{{ config('app.url')}}/teleconsultation/response" />
            <input hidden type="text" name="language" value="EN" />
            <input type="text" hidden name="customer_identifier" value="" />
            <input type="text" hidden name="integration_type" value="iframe_normal" />
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required
                            data-error="Please enter your name" placeholder="Name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}"
                            required data-error="Please enter your email" placeholder="Your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="billing_address" id="billing_address" class="form-control"
                            value="{{old('billing_address')}}" required data-error="Please enter your name"
                            placeholder="Address">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="billing_city" id="billing_city" class="form-control"
                            value="{{old('billing_city')}}" required data-error="Please enter your name"
                            placeholder="City">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="billing_state" id="billing_state" class="form-control"
                            value="{{old('billing_state')}}" required data-error="Please enter your name"
                            placeholder="State">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="billing_country" id="billing_country" class="form-control"
                            value="{{old('billing_country')}}" required data-error="Please enter your name"
                            placeholder="Country">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="billing_zip" id="billing_zip" class="form-control"
                            value="{{old('billing_zip')}}" required data-error="Please enter your name"
                            placeholder="Pincode">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <select name="service" class="form-control setoption">
                            <option value="" class="set-option-select">Select Your Service</option>
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

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="tel" name="phone" value="{{old('phone')}}" id="phone" required
                            data-error="Please enter your number" class="form-control" placeholder="Mobile" required>
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
