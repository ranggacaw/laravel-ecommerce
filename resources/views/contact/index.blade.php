@extends('layouts.app')

@section('content')
<!-- Contact Form & Map Overlay Section
============================================= -->
<section id="map-overlay">
    <div class="container">
        <div class="row">
            <!-- Contact Form Overlay
            ============================================= -->
            <div class="contact-form-overlay col-md-6 offset-md-6 col-lg-4 offset-lg-8 p-5">

                <div class="fancy-title title-border">
                    <h3>What's Your Thought</h3>
                </div>

                <div class="form-widget">

                    <div class="form-result"></div>

                    @if (!Auth::guest())
                        <!-- Contact Form
                        ============================================= -->
                        <form class="row mb-0" name="template-contactform" action="{{ url('complaint-store') }}" method="post">
                            @csrf
                            <div class="col-12 form-group">
                                <label for="name">Name <small>*</small></label>
                                <input type="text" name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col-12 form-group">
                                <label for="email">Email <small>*</small></label>
                                <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" value="" class="sm-form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <label for="subject">Subject <small>*</small></label>
                                <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <label for="message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                            </div>


                            <div class="col-12 form-group">
                                <button class="button button-3d m-0" type="submit" value="submit">Send Message</button>
                            </div>

                        </form>
                    @else
                        <div class="page-menu-title" style="color: #555555;">Please, <span>login</span> first.</div>
                    @endif
                </div>

            </div><!-- Contact Form Overlay End -->
        </div>
    </div>

    <!-- Google Map
    ============================================= -->
    <section class="gmap" data-address="Bekasi, Indonesia" data-scrollwheel="false" data-markers=''>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1337133460756!2d107.03911767508164!3d-6.246104361159982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ef7546ea3c5%3A0x54027998c067d07c!2sPerumahan%20Graha%20Taman%20Kebayoran%20Bekasi!5e0!3m2!1sen!2sid!4v1697602771434!5m2!1sen!2sid" width="100%" height="100%" style="border:0; filter: invert(90%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</section><!-- Contact Form & Map Overlay Section End -->
@endsection