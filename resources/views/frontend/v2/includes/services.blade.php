@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{asset('frontend/assets/img/service7.jpg')}})">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">Our Services &amp; Pricing</h1>
                                <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
                    <div class="row margin-leftright-null text-center">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="text">
                                <h2 class="margin-bottom-null title center grey">Our services</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">All for your business</h3>
                                    <p class="heading center margin-bottom grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, magni!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services -->
                    <div class="row no-margin">
                        <div class="col-md-12 services-box">
                            <div class="col-md-4">
                                <div class="alt-services text-center">
                                    <i class="icon ion-ios-pulse service big color"></i>
                                    <div class="service">
                                        <h6 class="heading margin-bottom-extrasmall">Website Design</h6>
                                        <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alt-services text-center">
                                    <i class="icon ion-ios-cloud-outline service big color"></i>
                                    <div class="service">
                                        <h6 class="heading grey margin-bottom-extrasmall">Content Development</h6>
                                        <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alt-services text-center">
                                    <i class="icon ion-ios-analytics-outline service big color"></i>
                                    <div class="service">
                                        <h6 class="heading margin-bottom-extrasmall">Brand Strategy</h6>
                                        <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Services -->
                    <!-- Pricing -->
                    <div class="row margin-leftright-null text-center grey-background">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="text">
                                <h2 class="margin-bottom-null title center grey">Our pricing</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">Pricing plan for everyone</h3>
                                    <p class="heading center margin-bottom grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, magni!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin grey-background">
                        <section id="pricing">
                            <div class="col-sm-4 price padding-leftright-null">
                                <div class="price-title">Basic</div>
                                <div class="price-number"><sup>$</sup>30</div>
                                <ul class="style">
                                    <li>Fully responsive</li>
                                    <li>Easy to use</li>
                                    <li>Flexible and clean</li>
                                    <li>5 Star Support</li>
                                </ul>
                                <a href="#" class="btn-alt small active">Buy Now</a>
                            </div>
                            <div class="col-sm-4 price active padding-leftright-null">
                                <div class="price-title">Advanced</div>
                                <div class="price-number"><sup>$</sup>90</div>
                                <ul class="style">
                                    <li>Fully responsive</li>
                                    <li>Easy to use</li>
                                    <li>Flexible and clean</li>
                                    <li>5 Star Support</li>
                                </ul>
                                <a href="#" class="btn-alt small active shadow">Buy Now</a>
                            </div>
                            <div class="col-sm-4 price padding-leftright-null">
                                <div class="price-title">Premium</div>
                                <div class="price-number"><sup>$</sup>150</div>
                                <ul class="style">
                                    <li>Fully responsive</li>
                                    <li>Easy to use</li>
                                    <li>Flexible and clean</li>
                                    <li>5 Star Support</li>
                                </ul>
                                <a href="#" class="btn-alt small active shadow">Buy Now</a>
                            </div>
                        </section>
                    </div>
                    <!-- END Pricing -->
                    <!-- Section Image background with overlay -->
                    <div class="row margin-leftright-null grey-background">
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url({{asset('frontend/assets/img/service8.jpg')}})">
                            <!-- Testimonials -->
                            <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
                                <div class="item padding-leftright-null">
                                    <div class="text padding-top-null padding-bottom-null">
                                        <blockquote class="margin-bottom-small white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum fugiat molestias, veritatis perspiciatis laborum modi beatae placeat explicabo at laudantium aliquam, nam vero ut!</blockquote>
                                        <em class="small grey-light">AC Company</em><span class="margin-null white"> John Doe</span>
                                    </div>
                                </div>
                                <div class="item padding-leftright-null">
                                    <div class="text padding-top-null padding-bottom-null">
                                        <blockquote class="margin-bottom-small white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum fugiat molestias, veritatis perspiciatis laborum modi beatae placeat explicabo at laudantium aliquam, nam vero ut!</blockquote>
                                        <em class="small grey-light">Artic Monkey</em><span class="margin-null white"> Alex Poe</span>
                                    </div>
                                </div>
                            </section>
                            <!-- END Testimonials -->
                        </div>
                    </div>
                    <!-- END Section Image background with overlay -->
                    <!-- Section latest News -->
                    <div class="row margin-leftright-null">
                        <div class="row margin-leftright-null">
                            <div class="col-md-4 padding-leftright-null padding-onlytop-md">
                                <div class="text text-right text-md-left padding-md-topbottom-null">
                                    <i class="icon ion-ios-browsers-outline service color"></i>
                                    <h6 class="heading black margin-bottom-extrasmall">20+ Components</h6>
                                    <p class="margin-md-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                                <div class="text text-right text-md-left">
                                    <i class="icon ion-ios-settings service color"></i>
                                    <h6 class="heading black margin-bottom-extrasmall">Flexible &amp; Retina Ready</h6>
                                    <p class="margin-md-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null padding-md">
                                <img class="center img-responsive" src="{{asset('frontend/assets/img/service6.png')}}" alt="">
                            </div>
                            <div class="col-md-4 padding-leftright-null padding-onlytop-md">
                                <div class="text padding-md-topbottom-null">
                                    <i class="icon ion-ios-chatboxes-outline service color"></i>
                                    <h6 class="heading black margin-bottom-extrasmall">Great Support</h6>
                                    <p class="margin-md-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                                <div class="text">
                                    <i class="icon ion-ios-lightbulb-outline service color"></i>
                                    <h6 class="heading black margin-bottom-extrasmall">Easy to use</h6>
                                    <p class="margin-md-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section latest News -->
                    <!-- Section partners -->
                    <div class="row padding-md margin-leftright-null color-background">
                        <div class="col-md-12 text-center">
                            <h4 class="big margin-bottom-small white">Buy the best soft material corporate template</h4>
                            <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Buy Now</a>
                        </div>
                    </div>
                    <!-- END Section partners -->
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection
