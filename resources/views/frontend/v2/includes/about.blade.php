@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{asset('frontend/assets/img/service1.jpg')}})">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">About Us</h1>
                                <p class="heading white">
                                    We are a creative agency
                                </p>
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
                                <h2 class="margin-bottom-null title center grey">Our Mission</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">Tyondo is commited</h3>
                                    <p class="heading center margin-bottom grey">To provide you with best possible online experience.</p>
                                    <p> To provide the ability to integrate functional, clear and creative interfaces with technical and business solutions. Tyondo seeks to strategically help build your brand, improve your globl web presence, streamline your
                                        business processes and develop more meaningful relationships with your customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services -->
                    <div class="row no-margin">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text">
                                    <i class="icon ion-ios-analytics-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading  margin-bottom-extrasmall">Brand Strategy</h6>
                                        <p class="margin-bottom-null">
                                            Tyondo understands your company identy impacts your bottom line. A positive company and product identity enhances your sales and your entire marketing communications plan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-pulse service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading  margin-bottom-extrasmall">Website Design</h6>
                                        <p class="margin-bottom-null">
                                            Our web desing services can help rediscover your business's image in the internet marketplace. The bleding of style and technology we offer in conjuction with our expertise enables your business to succeed on the web.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-cloud-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading grey margin-bottom-extrasmall">Technical Support</h6>
                                        <p class="margin-bottom-null">
                                            Tyondo offers tech support to help you use technology to keep your operatins smoothly. We support WiFi connections, servers and many more devices crucial to your daily business operations. We offer support remotely, via email, online chats or via phone
                                            calls.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-chatboxes-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading  margin-bottom-extrasmall">Digital Strategy</h6>
                                        <p class="margin-bottom-null">
                                            Today's consumer put alot of trust in search engines to find what they need. Google, receives 34,000 searches per second. Those searches involve finding products, reviewing brands, and looking up business locations.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 padding-leftright-null">
                                <div class="text padding-md-bottom-null">
                                    <i class="icon ion-ios-pie-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading grey margin-bottom-extrasmall">App Development</h6>
                                        <p class="margin-bottom-null">
                                            Android, iOS, Smart phones, Tablets. They're everywhere. You need to be there too. We can turn your website into a responsive mobile application. Or, we can take your ideas and turn them into brillian mobile apps.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <div class="text">
                                    <i class="icon ion-ios-cart-outline service material left"></i>
                                    <div class="service-content">
                                        <h6 class="heading  margin-bottom-extrasmall">API Development</h6>
                                        <p class="margin-bottom-null">
                                            Tyondo utilizes web development technologies that are both proven and practicle. With the options available in the market today, we can help you determine what is best for your API needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Services -->
                    <!--  Section with background image and overlay  -->
                    <div class="row margin-leftright-null grey-background">
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url({{asset('frontend/assets/img/news1.jpg')}})">
                            <div class="col-md-12 padding-leftright-null">
                                <div class="text text-center">
                                    <h2 class="margin-bottom-null title center white">Start your project</h2>
                                    <div class="padding-onlytop-md">
                                        <h3 class="white big margin-bottom-small">Lets'  Work together<br>to build your awesome projects</h3>
                                        <p class="heading center margin-bottom white">
                                            Make use of our skills and expertise to promote your business. We actualize your imagination and desires.
                                        </p>
                                        <a href="#" class="btn-alt active shadow small margin-null">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END Section with background image and overlay  -->
                    @if (!Auth::guest())
                    <!-- Section latest News -->
                    <div class="row margin-leftright-null grey-background">
                        <div class="col-md-4 padding-leftright-null">
                            <div class="text">
                                <h2 class="margin-bottom-null title left grey">News</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">Latest Posts. Stay tuned!</h3>
                                    <p class="heading left margin-bottom grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dolorem voluptas quo ipsum obcaecati placeat, architecto, amet voluptatum esse officia, distinctio dignissimos minima dicta. Veniam debitis eum illum
                                        asperiores animi!</p>
                                    <a href="standard-post.html" class="btn-alt active shadow small margin-null">Read all news</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 text" id="news">
                            <div class="col-sm-6 single-news">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news1.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>Meetup In Rome</h3>
                                        <span class="category">Tech</span>
                                        <span class="category">Social</span>
                                        <span class="date">02.11.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="#" class="link"></a>
                                </article>
                            </div>
                            <div class="col-sm-6 single-news">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news2.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>New Member</h3>
                                        <span class="category">Work</span>
                                        <span class="category">Blog</span>
                                        <span class="date">22.06.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="video-post.html" class="link"></a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- END Section latest News -->
                    @endif
                    <!-- Section partners -->
                    <div class="row margin-leftright-null">
                        <div class="dark-background">
                            <div class="col-md-12 clearfix dark-background padding-leftright-null">
                                <div class="partners z-index">
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-1.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-2.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-3.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-4.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-5.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-4 col-md-2 partner">
                                        <img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-6.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section partners -->
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection
