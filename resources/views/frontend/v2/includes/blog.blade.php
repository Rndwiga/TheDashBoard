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
                                <p class="heading white">
                                  We share daily the latest technology trends and tutorials on how perfect
          												your web development project.
                                </p>
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

                          @if(isset($posts))
                            @foreach($posts as $post)
                                <div class="single-news one-item">
                                    <article>
          														<img src="{{asset($post->photo->file)}}" alt="">

                                        <div class="content">
                                            <span class="read">
                                                <i class="material-icons">subject</i>
                                            </span>
                                            <h3>{{ $post->title }}</h3>
                                            <span class="category">Tech</span>
                                            <span class="category">Social</span>
                                            <span class="date">{{ $post->created_at->format('M d,Y \a\t h:i a') }}</span>
                                            <p>
                                              {!! str_limit(strip_tags($post->body), $limit = 110, $end = '....... <a href='.route("blog.post.show", $post->slug).'>Read More</a>') !!}
                                            </p>
                                        </div>
                                        <a href="{{route('blog.post.show', $post->slug)}}" class="link"></a>
                                    </article>
                                </div>
                              @endforeach
                            @endif
                        </div>
                    </section>
                    <!--  END News Section  -->
                </div>
              @if(isset($posts))
                <!-- Navigation -->
                  {{ $posts->links() }}
                <!-- END Navigation -->
              @endif
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->

@endsection
