@extends('layouts.app')
@section('otherCSS')

@endsection

@section('content')

              <section class="wrapper main-wrapper" style=''>

                  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                      <div class="page-title">

                          <div class="pull-left">
                              <h1 class="title">Blog Posts</h1>                            </div>

                          <div class="pull-right hidden-xs">
                              <ol class="breadcrumb">
                                  <li>
                                      <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                  </li>
                                  <li>
                                      <a href="ui-pricing.html">Pages</a>
                                  </li>
                                  <li class="active">
                                      <strong>Blogs</strong>
                                  </li>
                              </ol>
                          </div>

                      </div>
                  </div>
                  <div class="clearfix"></div>


                  <div class="col-lg-12">
                      <section class="box ">
                          <header class="panel_header">
                              <h2 class="title pull-left">Blog Posts</h2>
                              <div class="actions panel_actions pull-right">
                                  <i class="box_toggle fa fa-chevron-down"></i>
                                  <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                  <i class="box_close fa fa-times"></i>
                              </div>
                          </header>
                          <div class="content-body">
                            <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      <!-- start -->
                                      @if(!$posts->count() )
                                        There is no post till now. Login and write a new post now!!!
                                      @else
                                      @foreach( $posts as $post )
                                        <div class="blog_post">
                                            <h3><a href="{{ url('Posts/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                            <h5>Written by <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a> on {{ $post->created_at->format('M d,Y \a\t h:i a') }}.</h5>
                                            <p class="blog_info">
                                                <i class="fa fa-comment"></i> <a href="#comments">3 comments</a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-tags"></i> <a href="#">responsive</a> <a href="#">web</a> <a href="#">mobile</a>
                                            </p>
                                          <!--  <img class="media-object" src="{{ asset('data/blog.png') }}" alt=""> -->
                                            <img class="media-object" src="{{isset($post->featuredImage) ? asset($post->featuredImage) : asset('data/blog.png')  }}" alt="">
                                            <p class="blog-content">
                                              {!! str_limit(strip_tags($post->body), $limit = 400, $end = '....... <a href='.url("Posts/".$post->slug).'>Read More</a>') !!}

                                        </div>
                                        @endforeach
                                        {!! $posts->render() !!}
                                      @endif
                                      <!-- end -->
                                </div>
                            </div>
                          </div>
                      </section>
          </div>


              </section>

@endsection
@section('otherScripts')



@endsection
