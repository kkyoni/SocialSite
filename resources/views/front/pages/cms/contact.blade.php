@extends('front.layouts.app')
@section('title', 'Conatct Us')
@section('mainContent')
<section id="page-content" class="page-wrapper section">
    <div class="address-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-pin"></i>
                        <h6>Your address goes here.</h6>
                        <h6>Your address goes here.</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-phone"></i>
                        <h6><a href="tel:0123456789">0123456789</a></h6>
                        <h6><a href="tel:0123456789">0123456789</a></h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-address box-shadow">
                        <i class="zmdi zmdi-email"></i>
                        <h6>demo@example.com</h6>
                        <h6>demo@example.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="message-box-section mt--50 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="message-box box-shadow white-bg">
                        <form id="contact-form" action="https://demo.hasthemes.com/subas-preview-v1/subas/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="blog-section-title border-left mb-30">get in touch</h4>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Your name here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Your email here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject here">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Your phone here">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="custom-textarea" name="message" placeholder="Message"></textarea>
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">submit message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection