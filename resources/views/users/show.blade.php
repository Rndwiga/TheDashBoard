@extends('layouts.app')
@section('otherCSS')
       <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">User Profile</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-pricing.html">Pages</a>
                                    </li>
                                    <li class="active">
                                        <strong>Profile</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="uprofile-image">
                                            <img src="{{ asset('data/profile/user.png ') }}" class="img-responsive">
                                        </div>
                                        <div class="uprofile-name">
                                            <h3>
                                                <a href="{{ action('UserController@show', $user->id) }}">{{ $user->name }}</a>
                                                <!-- Available statuses: online, idle, busy, away and offline -->
                                                <span class="uprofile-status online"></span>
                                            </h3>
                                            <p class="uprofile-title">Web Developer</p>
                                        </div>
                                        <div class="uprofile-info">
                                            <ul class="list-unstyled">
                                                <li><i class='fa fa-envelope-o'></i> {{ $user->email }}</li>
                                                <li><i class='fa fa-home'></i> New York, USA</li>
                                                <li><i class='fa fa-user'></i> 340 Contacts</li>
                                                <li><i class='fa fa-suitcase'></i> Tech Lead, YIAM</li>
                                            </ul>
                                        </div>
                                        <div class="uprofile-buttons">
                                            <a class="btn btn-md btn-primary">Send Message</a>
                                            <a class="btn btn-md btn-primary">Add as Friend</a>
                                            <a href="{{ action('UserController@edit', $user->id) }}" class="btn btn-md btn-primary">Edit Profile</a>
                                        </div>
                                        <div class=" uprofile-social">

                                            <a href="#" class="btn btn-primary btn-md facebook"><i class="fa fa-facebook icon-xs"></i></a>
                                            <a href="#" class="btn btn-primary btn-md twitter"><i class="fa fa-twitter icon-xs"></i></a>
                                            <a href="#" class="btn btn-primary btn-md google-plus"><i class="fa fa-google-plus icon-xs"></i></a>
                                            <a href="#" class="btn btn-primary btn-md dribbble"><i class="fa fa-dribbble icon-xs"></i></a>

                                        </div>

                                    </div>
                                    <div class="col-md-8 col-sm-7 col-xs-12">

                                        <div class="uprofile-content">
                                            <div class="enter_post col-md-12 col-sm-12 col-xs-12">

                                                <div class="form-group">
                                                    <div class="controls">
                                                        <textarea class="form-control autogrow" id="field-7"  placeholder="What's on your mind?"></textarea>
                                                    </div>
                                                </div>
                                                <div class="enter_post_btns col-md-12 col-sm-12 col-xs-12">
                                                    <a href="#" class="btn btn-md pull-right btn-primary">Post</a>
                                                    <a href="#" class="btn btn-md pull-right btn-link"><i class="fa fa-image"></i></a>
                                                    <a href="#" class="btn btn-md pull-right btn-link"><i class="fa fa-map-marker"></i></a>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>






                                            <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
                                                <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <img src="{{ asset('data/profile/avatar-2.png ') }}" class="" alt="">
                                                </div>
                                                <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                    <div class="username">
                                                        <span class="bold">John Smith</span> post in group <span class="bold">work</span>
                                                    </div>
                                                    <div class="info text-muted">
                                                        "Balance" is a concept based on human perception and the complex nature of the human senses of weight and proportion. Humans can evaluate these visual elements in several situations to find a sense of balance.
                                                    </div>
                                                    <div class="info-details">
                                                        <ul class="list-unstyled list-inline">
                                                            <li><a href="#" class="text-muted">15 Minutes ago</a></li>
                                                            <li><a href="#" class="text-muted"><i class="fa fa-comment"></i> 584</a></li>
                                                            <li><a href="#" class="text-orange"><i class="fa fa-heart"></i> 12k</a></li>
                                                            <li><a href="#" class="text-info"><i class="fa fa-reply"></i> Reply</a></li>
                                                            <li><a href="#" class="text-warning"><i class="fa fa-star"></i> Favourite</a></li>
                                                            <li><a href="#" class="text-muted">More</a></li>
                                                        </ul>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="comment">
                                                        <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                            <img data-src-retina="{{ asset('data/profile/avatar-3.png ') }}" data-src="{{ asset('data/profile/avatar-3.png ') }}" src="{{ asset('data/profile/avatar-3.png ') }}" alt="">
                                                        </div>
                                                        <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                            <div class="username">
                                                                <span class="bold">Fin</span>
                                                            </div>
                                                            <div class="info text-muted">
                                                                Perfect info for the project. Great work :)
                                                            </div>
                                                            <div class="info-details">
                                                                <ul class="list-unstyled list-inline">
                                                                    <li><a href="#" class="text-muted">10 Minutes ago</a></li>
                                                                    <li><a href="#" class="text-orange"><i class="fa fa-heart-o"></i> Like</a></li>
                                                                    <li><a href="#" class="text-muted">More</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="comment">
                                                        <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                            <img data-src-retina="{{ asset('data/profile/avatar-4.png ') }}" data-src="{{ asset('data/profile/avatar-4.png ') }}" src="{{ asset('data/profile/avatar-4.png ') }}" alt="">
                                                        </div>
                                                        <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                            <div class="username">
                                                                <span class="bold">Arun</span>
                                                            </div>
                                                            <div class="info text-muted">
                                                                Keep it up. Much appreciated effort.
                                                            </div>
                                                            <div class="info-details">
                                                                <ul class="list-unstyled list-inline">
                                                                    <li><a href="#" class="text-muted">8 Minutes ago</a></li>
                                                                    <li><a href="#" class="text-orange"><i class="fa fa-heart"></i> Liked</a></li>
                                                                    <li><a href="#" class="text-muted">More</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="comment comment-input">

                                                        <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                            <img data-src-retina="{{ asset('data/profile/profile.png ') }}" data-src="{{ asset('data/profile/profile.png ') }}" src="{{ asset('data/profile/profile.png ') }}" alt="">
                                                        </div>
                                                        <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                            <div class="input-group primary  col-md-6">
                                                                <input type="text" class="form-control" placeholder="Post a comment">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-rocket"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section></div>


                </section>
@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
