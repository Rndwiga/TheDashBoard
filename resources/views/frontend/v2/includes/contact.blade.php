@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{asset('frontend/assets/img/contact.jpg')}})">
                            <div class="text text-center">
                              @include('frontend.v2.partials.flash')
                                <h1 class="white margin-bottom-small">Contact</h1>
                                <p class="heading white">Get intouch with us.</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
                    <!-- Services -->
                    <div class="row no-margin grey-background">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-location-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading  margin-bottom-extrasmall">Come visit</h6>
                                        <p class="margin-bottom-null">Kahawa Wendani<br> Nairobi, Kenya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-telephone-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading grey margin-bottom-extrasmall">Give us a call</h6>
                                        <p class="margin-bottom-null"><a href="#">+254 72915 7788</a><br><a href="#">+254 712 550 547</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text">
                                    <i class="icon ion-ios-world-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading margin-bottom-extrasmall">Find us online</h6>
                                        <p class="margin-bottom-null"><a href="#">info@tyondo.com</a><br>@tyondoKe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Services -->
                    <div class="row margin-leftright-null">
                        <div class="col-md-6 padding-leftright-null">
                            <div class="text">
                                <h2 class="margin-bottom-null title left">Get in touch</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">Start a project with us</h3>
                                    <p class="heading left margin-bottom">
                                      Do you have questions that need to be answered? Talk to a human.
                                    </p>
                                    <p><span class="contact-info">Address <em>Kahawa Wendani
                                        Nairobi, Kenya</em></span><br><span class="contact-info">Phone <em>+254 72915 7788</em></span><br><span class="contact-info">Email <a href="#"><em>info@tyondo.com</em></a></span></p>
                                    <p><span class="contact-info">Monday to Friday <em>9.00 am to 12.00 pm</em></span><br><span class="contact-info">Saturday from <em>9.00 am to 12.00 pm</em></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-leftright-null">
                            <div class="text padding-md-top-null">
                                <form action="{{ url('ContactUs') }}" method="post" id="contact-form" class="padding-md padding-md-topbottom-null">
                                  {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input class="form-field" name="name" id="name" type="text" placeholder="Name">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-field" name="email" id="mail" type="text" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-field" name="subjectForm" id="subjectForm" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-field" name="messageForm" id="messageForm" rows="6" placeholder="Your Message"></textarea>
                                            <div class="submit-area padding-onlytop-sm">
                                                <input type="submit" id="submit-contact" class="btn-alt active shadow" value="Send Message">
                                                <div id="msg" class="message"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-leftright-null">
                        <!--  Map. Settings in maps.js  -->
                        <div class="col-md-12 padding-leftright-null map">
                            <div id="map"></div>
                        </div>
                        <!--  END Map  -->
                    </div>
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->

@endsection
