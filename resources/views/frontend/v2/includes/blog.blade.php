@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{asset('frontend/assets/img/blog.jpg')}})">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">Journal</h1>
                                <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap grey-background">
                    <!--  News Section  -->
                    <section id="news" class="page">
                        <div class="news-items equal three-columns">
                            <div class="single-news one-item">
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
                                    <a href="standard-post.html" class="link"></a>
                                </article>
                            </div>
                            <div class="single-news one-item">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news4.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>Ego Project</h3>
                                        <span class="category">News</span>
                                        <span class="category">Business</span>
                                        <span class="date">05.08.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="gallery-post.html" class="link"></a>
                                </article>
                            </div>
                            <div class="single-news one-item">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news3.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>New Member</h3>
                                        <span class="category">Work</span>
                                        <span class="category">Blog</span>
                                        <span class="date">20.03.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="video-post.html" class="link"></a>
                                </article>
                            </div>
                            <div class="single-news one-item">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news2.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>Web History</h3>
                                        <span class="category">News</span>
                                        <span class="category">Web</span>
                                        <span class="date">13.03.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="audio-post.html" class="link"></a>
                                </article>
                            </div>
                            <div class="single-news one-item">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news5.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>Brand Power</h3>
                                        <span class="category">People</span>
                                        <span class="category">Topic</span>
                                        <span class="date">12.02.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="standard-post.html" class="link"></a>
                                </article>
                            </div>
                            <div class="single-news one-item">
                                <article>
                                    <img src="{{asset('frontend/assets/img/news6.jpg')}}" alt="">
                                    <div class="content">
                                        <span class="read">
                                            <i class="material-icons">subject</i>
                                        </span>
                                        <h3>Icepack Identity</h3>
                                        <span class="category">Visual</span>
                                        <span class="category">Company</span>
                                        <span class="date">04.02.2016</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptas corporis. Maxime sapiente, adipisci laborum.</p>
                                    </div>
                                    <a href="video-post.html" class="link"></a>
                                </article>
                            </div>
                        </div>
                    </section>
                    <!--  END News Section  -->
                </div>
                <!-- Navigation -->
                <section id="nav" class="fullpage-wrap padding-top-null grey-background">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="nav-left">
                                <a href="single-blog-style-2.html" class="btn-alt small active shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Older posts</span></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nav-right">
                                <a href="#" class="btn-alt small active shadow margin-null"><span>Newer posts</span><i class="icon ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END Navigation -->
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->

@endsection
