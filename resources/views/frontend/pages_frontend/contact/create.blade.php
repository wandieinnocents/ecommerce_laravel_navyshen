@extends('frontend.layouts_frontend.master')

@section('title')
Contact - La Cuisine De Sarah
@endsection

@section('content')
<!-- content  -->


<!-- Contact Page Title -->
<section class="contact-page-title"
    style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/17.jpg') }})">
    <div class="auto-container">
        <h1>Hello, Leave us a Messasge!</h1>
    </div>
</section>
<!-- End Contact Page Title -->
<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="title-box">
                        <h3>We Love To Hear From You</h3>
                        <div class="text">We have a quick response team to get back to you.</div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf()
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="name" value="" placeholder="Full Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="description" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-five"><span
                                            class="txt">Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Our Office Address</h3>
                    <ul>
                        <li><strong>Main Restaurant:</strong>
                            Kampala, Uganda</li>
                        <li><strong>Branch:</strong>Kireka, Kamuli</li>
                        <li><strong>Have any querry:</strong>Call us on : +974 33271165</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Faq Section-->

<!-- Map Section -->
<section class="map-section">
    <!-- Map Boxed -->
    <div class="map-boxed">
        <!--Map Outer-->
        <div class="map-outer">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
                allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- End Map Section -->


@endsection