@extends('layouts.admin')
@section('otherCSS')
       <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')

                <section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Post</h1>                            </div>

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
                                <h2 class="title pull-left">{{ $post->title }}</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <!-- start -->
                                        <div class="blog_post full_blog_post">
                                            <h3><a href="ui-blog-item.html">{{ $post->title }}</a></h3>
                                            <h5>Written by <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a> on {{ $post->created_at->format('M d,Y \a\t h:i a') }} .</h5>
                                            <p class="blog_info">
                                                <i class="fa fa-comment"></i> <a href="#comments">3 comments</a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-tags"></i> <a href="#">responsive</a> <a href="#">web</a> <a href="#">mobile</a>
                                            </p>

                                            <div class="blog-content">
                                              @if($post)
                                                  <div>
                                                    <img class="media-object" src="{{isset($post->featuredImage) ? asset($post->featuredImage) : asset('data/blog.png')  }}" alt="">
                                                    {!! $post->body !!}
                                                  </div>
                                                  <form action="{{ $post->id }}" method="POST" class="pull-left">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <input type="submit" class="btn btn-danger" value="Delete" />
                                                  </form>
                                              @endif
                                              @if(Auth::guest())
                                                <p>Login to Comment</p>
                                              @else
                                                <div class="panel-body">
                                                  <div class="clearfix"></div><br>
                                                  <h3>Leave a Comment</h3>

                                                  <form method="post" action="/comment/add">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="on_post" value="{{ $post->id }}">
                                                    <input type="hidden" name="slug" value="{{ $post->slug }}">
                                                    <div class="form-group">
                                                      <textarea required="required" placeholder="My thoughts...." name = "body" class="form-control"></textarea>
                                                    </div>
                                                    <input type="submit" name='post_comment' class="btn btn-purple" value = "Post Comment"/>
                                                  </form>
                                                </div>
                                              @endif
                                              <div>
                                                @if($comments)
                                                <ul style="list-style: none; padding: 0">
                                                  @foreach($comments as $comment)
                                                    <li class="panel-body">
                                                      <div class="list-group">
                                                        <div class="list-group-item">
                                                          <h3>{{ $comment->author->name }}</h3>
                                                          <p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
                                                        </div>
                                                        <div class="list-group-item">
                                                          <p>{{ $comment->body }}</p>
                                                        </div>
                                                      </div>
                                                    </li>
                                                  @endforeach
                                                </ul>
                                                @endif
                                              </div>
                                            </div>

                                            <div id="comments">


                                                @if($comments)
                                                <h3>Comments</h3>
                                                  @foreach($comments as $comment)
                                                    <div class="well comment-block level-1" style="display:inline-block;">
                                                        <div class="col-md-1 col-sm-2 col-xs-3 img-area">
                                                            <img src="{{ asset('data/profile/avatar-1.png') }}">
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-xs-9">
                                                            <h5><i class="icon-user"></i>&nbsp;By <a href="#">{{ $comment->author->name }} Jason</a> on {{ $comment->created_at->format('M d,Y \a\t h:i a') }} May 12, 2013.</h5>
                                                            <div>
                                                              {{ $comment->body }}
                                                                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong in labore pig pork biltong.</p>
                                                            </div>
                                                            <a href="#" class="pull-left">Reply &nbsp;<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>

                                        <!-- end -->


                                    </div>
                                </div>
                            </div>
                        </section></div>


                </section>
@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
