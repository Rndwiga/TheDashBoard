<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tyondo Enterprise</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap/bootstrap.min.css')}}">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap/bootstrap-theme.min.css')}}">

        <!-- Custom css -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('frontend/assets/css/ionicons.min.css')}}">

        <!-- Flexslider -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/flexslider.css')}}">

        <!-- Owl -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fullPage.css')}}">
				<link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries {{asset('frontend/')}} -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!--  loader  -->
        <div id="myloader">
            <span class="loader">
                <img src="{{asset('frontend/assets/img/logo.png')}}" class="normal" alt="logo">
                <img src="{{asset('frontend/assets/img/logo%402x.png')}}" class="retina" alt="logo">
            </span>
        </div>

        <!--  Main Wrap  -->
        <div id="main-wrap">
            <!--  Header & Menu  -->
            <header id="header" class="fixed transparent">
                <nav class="navbar navbar-default white">
                    <!--  Header Logo  -->
                    <div id="logo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('frontend/assets/img/logo.png')}}" class="normal" alt="logo">
                            <img src="{{asset('frontend/assets/img/logo%402x.png')}}" class="retina" alt="logo">
                            <img src="{{asset('frontend/assets/img/logo_white.png')}}" class="normal white-logo" alt="logo">
                            <img src="{{asset('frontend/assets/img/logo_white%402x.png')}}" class="retina white-logo" alt="logo">
                        </a>
                    </div>
                    <!--  END Header Logo  -->
                    <!--  Classic menu, responsive menu classic  -->
                    <div id="menu-classic">
                        <div class="menu-holder">
                            <ul>
                                <li class="submenu">
                                    <a href="{{ url('/') }}" class="active-item">Home</a>
                                </li>
                                <li class="submenu">
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
																@if (!Auth::guest())
                                <li class="submenu">
                                    <a href="{{ url('/services') }}">Services</a>
                                </li>

                                <li class="submenu">
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>
                                @endif
																@if (!Auth::guest())
                                <li>
                                    <a href="{{ url('/elements') }}">Elements</a>
                                </li>
																@endif
                                <li class="submenu">
                                    <a href="{{ url('/contact') }}">Contacts</a>
                                </li>
																<!-- Authentication Links -->
																@if (Auth::guest())
																		<li class="submenu"><a href="{{ url('/login') }}">Login</a></li>
																@else
                                  <li class="submenu"><a href="{{ url('/register') }}">Register</a></li>
																		<li class="submenu"><a href="{{ url('/home') }}">Admin</a></li>
																@endif
                                <!-- Search Icon -->
                                <li class="search">
                                    <i class="icon ion-ios-search"></i>
                                </li>
                                <!-- Lang -->
                                <li class="lang">
                                    <span class="current"><a href="#">en</a></span>
                                    <ul>
                                        <li><a href="#">ke</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  END Classic menu, responsive menu classic  -->
                    <!--  Button for Responsive Menu Classic  -->
                    <div id="menu-responsive-classic">
                        <div class="menu-button">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                            <span class="bar bar-3"></span>
                        </div>
                    </div>
                    <!--  END Button for Responsive Menu Classic  -->
										<!--  END Button for Responsive Menu Classic  -->
									<!--  Search Box  -->
									<div id="search-box">
											<form role="search" id="search-form" class="black big">
													<div class="form-input">
															<input class="form-field black big" type="search" placeholder="Search...">
															<span class="form-button big">
																	<button type="button">
																			<i class="icon ion-ios-search"></i>
																	</button>
															</span>
													</div>
											</form>
											<button class="close-search-box">
													<i class="icon ion-ios-close-empty"></i>
											</button>
									</div>
									<!--  END Search Box  -->
                </nav>
            </header>
            <!--  END Header & Menu  -->
						@yield('content')

            <!--  Footer. Class fixed for fixed footer  -->
            <footer class="fixed">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo">
                            <img src="{{asset('frontend/assets/img/logo_white.png')}}" class="normal" alt="logo">
                            <img src="{{asset('frontend/assets/img/logo_white%402x.png')}}" class="retina" alt="logo">
                        </div>
                        <p class="grey-light">
													We're a top rated digital agency focused on creative and result driven solutions. Whether it's to increase profits, provide support, sell products or promote your brand, allow our digital and personalized services bring your company front and center.
													</p>
                    </div>
                    <div class="col-md-2">
                        <h6 class="heading white margin-bottom-extrasmall">Useful Links</h6>
                        <ul class="sitemap">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
														@if (!Auth::guest())
                            <li><a href="{{ url('/services') }}">Services</a></li>
														<li><a href="{{ url('/elements') }}">Elements</a></li>
														@endif
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h6 class="heading white margin-bottom-extrasmall">Social</h6>
                        <ul class="info">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="heading white margin-bottom-extrasmall">Contact Us</h6>
                        <ul class="info">
                            <li>Phone <a href="#">+254 712 550547</a></li>
                            <li>Mail <a href="#">info@tyondo.com</a></li>
                            <li>Monday to Friday <span class="white">9.00 am to 8.00 pm</span><br>Saturday from <span class="white">9.00 am to 12.00 pm</span></li>
                            <li><a href="#">Kahawa Wendani<br>
                                Nairobi, Kenya</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copy col-md-12 padding-leftright-null">
                    &copy; 2016 Tyondo -designed by <a href="#">Tyondo Enterprise</a>
                    <a href="#main-wrap" class="anchor" id="backtotop">Back to top</a>
                </div>
            </footer>
            <!--  END Footer. Class fixed for fixed footer  -->
        </div>
        <!--  Main Wrap  -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
        <!-- All js library -->
        <script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.fullPage.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyD-mgqDttMqcGsyEzvYD8OYAxmNc2wi35o"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.scrollTo.min.js')}}"></script>
        <script type="text/javascript" src="assets/js/smooth.scroll.min.js"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.countTo.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.scrolly.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/plugins-scroll.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/imagesloaded.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/main.js')}}"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-61445301-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>


</html>

</html>
