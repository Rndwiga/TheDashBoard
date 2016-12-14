<!DOCTYPE html>
<html class=" ">
    <head>

        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="description" name="Laravel 5.3 admin interface" />
        <meta content="author" name="Raphael Ndwiga" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap-theme.min.css ') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css ') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/animate.min.css ') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css ') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
          @yield('otherCSS')
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ asset('assets/css/style.css ') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/responsive.css ') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
  <!--  <body class="{{ isset($pageData->css) ? $pageData->css : '' }} "> -->
    <body class=" ">
        <!-- START TOPBAR -->
             @include('layouts.includes.Topbar')
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR  START -->
          <!--  <div class="page-sidebar {{ isset($pageData->css3) ? $pageData->css3 : '' }}"> -->
            <div class="page-sidebar">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                          @if(!empty($user))
                            <a href="{{ action('UserController@show', Auth::user()->id) }}">
                                <img src="{{ asset($user->userProfile->profile_picture)}}" class="img-responsive img-circle">
                            </a>
                          @endif
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="{{ action('UserController@show', Auth::user()->id) }}">{{ Auth::user()->name }}</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">{{ ucfirst(Auth::user()->role->name) }}</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->
                    <ul class='wraplist'>
                        <li class="open">
                            <a href="{{ url('/home') }}">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">Blogs</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{route('admin.posts.index')}}" >All Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('admin.posts.manage')}}" >Manage Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('Posts/userPosts') }}" >My Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('admin.posts.create')}}" >Add Blog</a>
                                </li>
                                <li>
                                    <a class="" href="blo-blog-edit.html" >Edit Blog</a>
                                </li>
                                <li>
                                    <a class="" href="blo-blog-view.html" >View Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="blo-search.html">
                                <i class="fa fa-search"></i>
                                <span class="title">Search</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-upload"></i>
                                <span class="title">Media</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{route('admin.media.index')}}" >All Media</a>
                                </li>
                                <li>
                                    <a class="" href="blo-upload.html" >Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-sitemap"></i>
                                <span class="title">Categories</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{route('admin.categories.index')}}" >All Categories</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('admin.categories.create')}}" >Add Category</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-sitemap"></i>
                                <span class="title">User Roles</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{route('admin.roles.index')}}" >All Roles</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('admin.roles.create')}}" >Add Roles</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-files-o"></i>
                                <span class="title">Pages</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-pages.html" >All Pages</a>
                                </li>
                                <li>
                                    <a class="" href="blo-page-add.html" >Add Page</a>
                                </li>
                                <li>
                                    <a class="" href="blo-page-edit.html" >Edit Page</a>
                                </li>
                                <li>
                                    <a class="" href="blo-page-view.html" >View Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{route('admin.users.index')}}" >All Users</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('admin.users.create')}}" >Add User</a>
                                </li>
                                <li>
                                    <a class="" href="blo-user-edit.html" >Edit User</a>
                                </li>
                                <li>
                                    <a class="" href="{{ action('UserController@show', Auth::user()->id) }}" >User Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Mailbox</span>
                                <span class="arrow "></span><span class="label label-orange">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-mail-inbox.html" >Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="blo-mail-compose.html" >Compose</a>
                                </li>
                                <li>
                                    <a class="" href="blo-mail-view.html" >View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-report-site.html" >Site</a>
                                </li>
                                <li>
                                    <a class="" href="blo-report-visitors.html" >Visitors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-tags"></i>
                                <span class="title">Tags</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="blo-tags.html" >All Tags</a>
                                </li>
                                <li>
                                    <a class="" href="blo-tag-add.html" >Add Tag</a>
                                </li>
                                <li>
                                    <a class="" href="blo-tag-edit.html" >Edit Tag</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">Multi Purpose</span>
                                <span class="arrow "></span><span class="label label-orange">NEW</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="general.html"  target = '_blank' >General Admin</a>
                                </li>
                                <li>
                                    <a class="" href="hospital.html"  target = '_blank' >Hospital Admin</a>
                                </li>
                                <li>
                                    <a class="" href="music.html"  target = '_blank' >Music Admin</a>
                                </li>
                                <li>
                                    <a class="" href="crm.html"  target = '_blank' >CRM Admin</a>
                                </li>
                                <li>
                                    <a class="" href="socialmedia.html"  target = '_blank' >Social Media Admin</a>
                                </li>
                                <li>
                                    <a class="" href="freelancing.html"  target = '_blank' >Freelancing Admin</a>
                                </li>
                                <li>
                                    <a class="" href="university.html"  target = '_blank' >University Admin</a>
                                </li>
                                <li>
                                    <a class="" href="ecommerce.html"  target = '_blank' >Ecommerce Admin</a>
                                </li>
                                <li>
                                    <a class="" href="blog.html"  target = '_blank' >Blog Admin</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>Target</span>
                            <span class='total'>80%</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Customers</span>
                            <span class='total'>3146</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <!-- session messages-->
                @if (Session::has('message'))
                      <div class="flash alert-info">
                        <p class="panel-body">
                          {{ Session::get('message') }}
                        </p>
                      </div>
                @endif
                @if ($errors->any())
                    <div class='flash alert-danger'>
                      <ul class="panel-body">
                        @foreach( $errors->all() as $error )
                            <li>
                              {{ $error }}
                            </li>
                        @endforeach
                @endif
                <!-- session messages-->
                    @yield('content')
             </div>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-1.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-2.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-3.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-4.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-5.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-1.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-2.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-3.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-4.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-5.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-1.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="{{ asset('data/profile/avatar-2.png ') }}" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START -->
        <script src="{{ asset('assets/js/jquery-1.11.2.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/pace/pace.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/viewport/viewportchecker.js ') }}" type="text/javascript"></script>
        <!-- CORE JS FRAMEWORK - END -->


        <!-- CORE TEMPLATE JS - START -->
        <script src="{{ asset('assets/js/scripts.js ') }}" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS - END -->

        <!-- Sidebar Graph - START -->
        <script src="{{ asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js ') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/chart-sparkline.js ') }}" type="text/javascript"></script>
        <!-- Sidebar Graph - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        @yield('otherScripts')
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>
