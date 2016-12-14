@extends('layouts.admin')
@section('otherCSS')
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
                        <a href="blo-users.html">Users</a>
                    </li>
                    <li class="active">
                        <strong>User Profile</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>


    <div class="col-lg-12">
        <section class="box nobox">
            <div class="content-body">    <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="uprofile-image">
                            <img src="{{asset($user->photo->file)}}" class="img-responsive">
                        </div>
                        <div class="uprofile-name">
                            <h3>
                                <a href="#">{{$user->name}}</a>
                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="uprofile-status online"></span>
                            </h3>
                            <p class="uprofile-title">{{$user->role->name}}</p>
                        </div>
                        <p class='text-center'>Runs a full time dedicated blog on web design and related technology</p>
                        <div class="uprofile-info">
                            <ul class="list-unstyled">
                                <li><i class='fa fa-home'></i> New York, USA</li>
                                <li><i class='fa fa-user'></i> 340 Contacts</li>
                            </ul>
                        </div>
                        <div class="uprofile-buttons">
                            <a class="btn btn-md btn-primary">Send Message</a>
                            <a class="btn btn-md btn-primary">Add as Friend</a>
                            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-md btn-success">Update Profile</a>
                        </div>

                        <div class=" uprofile-social">
                            <a href="#" class="btn btn-primary btn-md facebook"><i class="fa fa-facebook icon-xs"></i></a>
                            <a href="#" class="btn btn-primary btn-md twitter"><i class="fa fa-twitter icon-xs"></i></a>
                            <a href="#" class="btn btn-primary btn-md google-plus"><i class="fa fa-google-plus icon-xs"></i></a>
                            <a href="#" class="btn btn-primary btn-md dribbble"><i class="fa fa-dribbble icon-xs"></i></a>
                        </div>

                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">

                        <div class="uprofile-content">

                            <div class="">

                                <h4>Biography:</h4>
                                <p>
                                    The emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users. (Previously, a knowledge of such technologies as HTML and FTP had been required to publish content on the Web.)
                                </p>
                                <p>A majority are interactive, allowing visitors to leave comments and even message each other via GUI widgets on the blogs, and it is this interactivity that distinguishes them from other static websites.[2] In that sense, blogging can be seen as a form of social networking service. Indeed, bloggers do not only produce content to post on their blogs, but also build social relations with their readers and other bloggers.[3] However, there are high-readership blogs which do not allow comments, such as Daring Fireball.</p>
                                <br>
                                <h4>Profile Activity:</h4>
                            </div>

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
                        </div>
                    </div>
                </div>
            </div>
        </section></div>


</section>
@endsection

@section('otherScripts')
<script src="{{asset('assets/plugins/autosize/autosize.min.js')}}" type="text/javascript"></script>
@endsection
