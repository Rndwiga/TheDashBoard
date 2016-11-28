<!DOCTYPE html>
<html class=" ">
    <head>
        <!--
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 4.1
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
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
      <!--  <div class='page-topbar {{ isset($pageData->css2) ? $pageData->css2 : '' }}'> -->
        <div class='page-topbar'>

            <div>
                    <a href="{{ url('/') }}">
                        <span class='logo-area'></span>
                    </a>
            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="message-toggle-wrapper">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-primary">7</span>
                            </a>
                            <ul class="dropdown-menu messages animated fadeIn">

                                <li class="list">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-1.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clarine Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-2.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-3.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-4.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-5.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-1.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-2.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{{ asset('data/profile/avatar-3.png ') }}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Messages</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="notify-toggle-wrapper">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-orange">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                                <li class="total">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                    </span>
                                </li>
                                <li class="list">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-sm hidden-xs searchform">
                            <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                                <form action="search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li>
                      @else
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                              @if(!empty($user))
                                <img src="{{ asset($user->userProfile->profile_picture)}}" alt="user-image" class="img-circle img-inline">
                              @endif
                                <span>{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ action('UserController@show', Auth::user()->id) }}">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                         <i class="fa fa-lock"></i>
                                         Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="chat-toggle-wrapper">
                            <a href="#" data-toggle="chatbar" class="toggle_chat">
                                <i class="fa fa-comments"></i>
                                <span class="badge badge-warning">9</span>
                                <i class="fa fa-times"></i>
                            </a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>

        </div>
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

                            <p class="profile-title">{{ ucfirst(Auth::user()->role) }}</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->
                    <ul class='wraplist'>


                        <li class="{{ isset($css->dashboard) ? $css->openDropdown : '' }}">
                            <a href="{{ url('/home') }}">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ isset($css->contacts) ? $css->openDropdown : '' }}">
                            <a href="{{ url('phonebook') }}">
                                <i class="fa fa-phone "></i>
                                <span class="title">Contacts</span>
                            </a>
                        </li>

                        <li class="{{ isset($css->posts) ? $css->openDropdown : '' }}">
                            <a href="javascript:;">
                                <i class="fa fa-archive"></i>
                                <span class="title">Blog Posts</span>
                                <span class="arrow "></span><span class="label label-orange">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{ url('Posts') }}" >View Posts</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('Posts/userPosts') }}" >Manage Posts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Comment out below
                        <li class="{{ isset($css->posts) ? $css->openDropdown : '' }}">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Emails</span>
                                <span class="arrow "></span><span class="label label-purple">10</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{ url('Emails') }}" >View Emails</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('Emails/create') }}" >New Email</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Customers</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-customers.html" >All Customers</a>
                                </li>
                                <li>
                                    <a class="" href="crm-customer-add.html" >Add Customer</a>
                                </li>
                                <li>
                                    <a class="" href="crm-customer-edit.html" >Edit Customer</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Leads</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-leads.html" >All Leads</a>
                                </li>
                                <li>
                                    <a class="" href="crm-lead-add.html" >Add Lead</a>
                                </li>
                                <li>
                                    <a class="" href="crm-lead-edit.html" >Edit Lead</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Vendors</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-vendors.html" >All Vendors</a>
                                </li>
                                <li>
                                    <a class="" href="crm-vendor-add.html" >Add Vendor</a>
                                </li>
                                <li>
                                    <a class="" href="crm-vendor-edit.html" >Edit Vendor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">Quotes</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-quotes.html" >All Quotes</a>
                                </li>
                                <li>
                                    <a class="" href="crm-quote-add.html" >Add Quote</a>
                                </li>
                                <li>
                                    <a class="" href="crm-quote-edit.html" >Edit Quote</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-dollar "></i>
                                <span class="title">Invoices</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-invoices.html" >All Invoices</a>
                                </li>
                                <li>
                                    <a class="" href="crm-invoice-add.html" >Add Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="crm-invoice-edit.html" >Edit Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="crm-invoice-view.html" >View Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-phone"></i>
                                <span class="title">Contacts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-contacts.html" >All Contacts</a>
                                </li>
                                <li>
                                    <a class="" href="crm-contact-add.html" >Add Contact</a>
                                </li>
                                <li>
                                    <a class="" href="crm-contact-edit.html" >Edit Contact</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="crm-calendar.html">
                                <i class="fa fa-calendar"></i>
                                <span class="title">Calendar</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="crm-map.html">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Map</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="crm-report-sales.html" >Sales</a>
                                </li>
                                <li>
                                    <a class="" href="crm-report-customers.html" >Customers</a>
                                </li>
                                <li>
                                    <a class="" href="crm-report-targets.html" >Targets</a>
                                </li>
                            </ul>
                        </li>
                      -->
                        <li class="{{ isset($css->inventory) ? $css->openDropdown : '' }}">
                            <a href="javascript:;">
                                <i class="fa fa-calendar"></i>
                                <span class="title">Inventory</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{ url('inventory') }}" >All Items</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('inventory/create') }}" >Add Item</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ isset($css->tickets) ? $css->openDropdown : '' }}">
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span class="title">Tickets</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{ url('tickets/userTickets') }}" >All Tickets</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('tickets/create') }}" >Add Ticket</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ isset($css->users) ? $css->openDropdown : '' }}">
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="{{ url('users') }}" >All Users</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('users/create') }}" >Add User</a>
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
