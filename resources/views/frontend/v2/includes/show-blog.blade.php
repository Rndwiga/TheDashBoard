@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{asset('frontend/assets/img/post.jpg')}})">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">{{ $post->title }}</h1>
                                <p class="heading white">{!! str_limit(strip_tags($post->body), $limit = 100, $end = '.......') !!}</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row padding-onlytop-md content-post no-margin">
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <h2>{{ $post->title }}</h2>
                            <span class="category">Tech</span>
                            <span class="category">Social</span>
                            <span class="date">{{ $post->created_at->format('M d,Y \a\t h:i a') }}</span>
                            <div class="heading full black left">
                                {!! $post->body !!}
                            </div>
                        </div>
                        @if(!empty($post->featuredImage))
                          <div class="col-md-offset-2 col-md-8 padding-leftright-null">
                              <img class="img-responsive padding-md" src="{{asset($post->featuredImage)}}" alt="">
                          </div>
                        @endif

                    </div>
                    <!--  Post Meta
                    <div class="row no-margin">
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <div id="post-meta">
                                <ul class="tagCloud">
                                    <li class="title">Tags</li>
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                                <span class="author">Written by <em>John Doe</em></span>
                                <span class="info">Pubblished <em>November 2016</em></span>
                            </div>
                        </div>
                    </div>
                      END Post Meta  -->
                      <br />
                    <!--  Share Btn  -->
                    <div id="share">
                        <a class="share-btn">
                            <i class="material-icons">share</i>
                        </a>
                        <div class="share-icons" style="display:none">
                            <a href="#" class="share-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!--  END Share Btn  -->
                    <!--  Comments  -->

                    <!--  END Comments  -->
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection
