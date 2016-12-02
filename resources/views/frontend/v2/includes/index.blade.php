@extends('frontend.v2.tyondo')
@section('content')
<div id="page-content" class="header-static footer-fixed">
		<!--  Slider  -->
		<div id="flexslider-nav" class="fullpage-wrap small">
				<ul class="slides">
						<li style="background-image:url({{asset('frontend/assets/img/company1.jpg')}})">
								<div class="text">
										<h1 class="white flex-animation">Welcome to <br> Tyondo </h1>
										<h2 class="white flex-animation">WE MAKE YOUR IDEAS COME TO LIFE</h2>
										<a href="{{ url('/')}}" class="shadow btn-alt small activetwo margin-bottom-null flex-animation">More info</a>
								</div>
								<div class="gradient dark"></div>
						</li>
						<li style="background-image:url({{asset('frontend/assets/img/company1b.jpg')}})">
								<div class="text">
										<h1 class="white flex-animation no-opacity">Flexible and<br> very easy to use</h1>
										<h2 class="white flex-animation no-opacity">LAUNCH AND IMPROVE YOUR SERVICE NOW</h2>
										<a href="{{ url('/')}}" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
								</div>
								<div class="gradient dark"></div>
						</li>
				</ul>
				<div class="slider-navigation">
						<a href="#" class="flex-prev"><i class="material-icons"><</i></a>
						<div class="slider-controls-container"></div>
						<a href="#" class="flex-next"><i class="material-icons">></i></a>
				</div>
		</div>
		<!--  END Slider  -->
		<div id="home-wrap" class="content-section fullpage-wrap">
				<!-- Services -->
				<div class="row no-margin">
						<div class="col-md-12 padding-leftright-null">
								<div class="col-md-12 padding-leftright-null">
										<div class="text text-center padding-bottom-null">
												<h2 class="margin-bottom-null title">Our services</h2>
										</div>
								</div>
								<div class="col-md-12 padding-leftright-null text-center">
										<div class="text padding-md-bottom-null">
												<h3 class="grey big margin-bottom-small">Driven by Passion and Experience</h3>
												<p class="heading margin-bottom-null">
														We're a top rated digital agency focused on creative and result driven solutions. Whether it's to increase profits, provide support, sell products or promote your brand, allow our digital and personalized services bring your company front and center.
												</p>
										</div>
								</div>

						</div>
				</div>
				<div class="row no-margin black-background">
						<div class="col-md-12 padding-leftright-null">
							<div class="col-md-4 padding-leftright-null">
									<div class="text padding-md-bottom-null">
											<i class="icon ion-ios-chatboxes-outline service color"></i>
											<h6 class="heading white margin-bottom-extrasmall">Digital Strategy</h6>
											<p class="margin-bottom-null grey-light">
													Today's consumer put alot of trust in search engines to find what they need. Google, receives 34,000 searches per second. Those searches involve finding products, reviewing brands, and looking up business locations.
											</p>
									</div>
							</div>
							<div class="col-md-4 padding-leftright-null">
									<div class="text">
											<i class="icon ion-ios-cart-outline service color"></i>
											<h6 class="heading white margin-bottom-extrasmall">API Development</h6>
											<p class="margin-bottom-null grey-light">
													Tyondo utilizes web development technologies that are both proven and practicle. With the options available in the market today, we can help you determine what is best for your API needs.
											</p>
									</div>
							</div>
								<div class="col-md-4 padding-leftright-null">
										<div class="text padding-md-bottom-null">
												<i class="icon ion-ios-pulse service color"></i>
												<h6 class="heading white margin-bottom-extrasmall">Website Design</h6>
												<p class="margin-bottom-null grey-light">
														Our web desing services can help rediscover your business's image in the internet marketplace. The bleding of style and technology we offer in conjuction with our expertise enables your business to succeed on the web.
												</p>
										</div>
								</div>
								<div class="col-md-4 padding-leftright-null">
										<div class="text padding-md-bottom-null">
												<i class="icon ion-ios-pie-outline service color"></i>
												<h6 class="heading white margin-bottom-extrasmall">App Development</h6>
												<p class="margin-bottom-null grey-light">
														Android, iOS, Smart phones, Tablets. They're everywhere. You need to be there too. We can turn your website into a responsive mobile application. Or, we can take your ideas and turn them into brillian mobile apps.
												</p>
										</div>
								</div>
								<div class="col-md-4 padding-leftright-null">
										<div class="text">
												<i class="icon ion-ios-analytics-outline service color"></i>
												<h6 class="heading white margin-bottom-extrasmall">Brand Strategy</h6>
												<p class="margin-bottom-null grey-light">
														Tyondo understands your company identy impacts your bottom line. A positive company and product identity enhances your sales and your entire marketing communications plan.
												</p>
										</div>
								</div>

								<div class="col-md-4 padding-leftright-null">
										<div class="text padding-md-bottom-null">
												<i class="icon ion-ios-cloud-outline service color"></i>
												<h6 class="heading white margin-bottom-extrasmall">Technical Support</h6>
												<p class="margin-bottom-null grey-light">
														Tyondo offers tech support to help you use technology to keep your operatins smoothly. We support WiFi connections, servers and many more devices crucial to your daily business operations. We offer support remotely, via email, online chats or via phone
														calls.
												</p>
										</div>
								</div>

						</div>
				</div>
				<!-- END Services -->
				<!-- Section same Height. Child get the parent Height. Set the same id -->
				<div class="row margin-leftright-null grey-background">
						<div class="col-md-6 padding-leftright-null">
								<div data-responsive="parent-height" data-responsive-id="mission" class="text">
										<h2 class="margin-bottom-null title left">Our mission</h2>
										<div class="padding-onlytop-md">
												<h3 class="grey big margin-bottom-small">Passionate about our craft.</h3>
												<p class="heading left margin-bottom">We seek to provide you with best possible online experience.</p>
												<p> To provide the ability to integrate functional, clear and creative interfaces with technical and business solutions. Tyondo seeks to strategically help build your brand, improve your globl web presence, streamline your
														business processes and develop more meaningful relationships with your customers.</p>
												<a href="#" class="btn-simple">Read more</a>
										</div>
								</div>
						</div>
						<div class="col-md-6 padding-leftright-null">
								<div data-responsive="child-height" data-responsive-id="mission" class="bg-img" style="background-image: url({{asset('frontend/assets/img/company2.jpg')}})"></div>
						</div>
				</div>
				<!--  Section with background image and overlay  -->
				<div class="row margin-leftright-null">
						<div class="bg-img overlay responsive" style="background-image:url({{asset('frontend/assets/img/service4.jpg')}})">
								<!--  Counters  -->
								<div class="col-md-12 padding-leftright-null">
										<div class="text text-center">
												<div id="counters" class="row">
														<div class="col-sm-4">
																<div class="statistic">
																		<i class="icon ion-ios-color-filter-outline service big white margin-bottom-null"></i>
																		<span class="white" data-from="0" data-to="20">&nbsp;</span>
																		<p class="heading grey-light">Satisfied costomers</p>
																</div>
														</div>
														<div class="col-sm-4">
																<div class="statistic">
																		<i class="icon ion-ios-pie-outline service big white margin-bottom-null"></i>
																		<span class="white" data-from="0" data-to="5">&nbsp;</span>
																		<p class="heading grey-light">Years of Experience</p>
																</div>
														</div>
														<div class="col-sm-4">
																<div class="statistic">
																		<i class="icon ion-ios-bolt-outline service big white margin-bottom-null"></i>
																		<span class="white" data-from="0" data-to="7">&nbsp;</span>
																		<p class="heading grey-light">Open Source Projects</p>
																</div>
														</div>
												</div>
										</div>
								</div>
								<!--  END Counters  -->
						</div>
				</div>

				<!--  END Projects Section  -->

				<!-- Section News -->
				<div class="row margin-leftright-null grey-background">
						<div class="col-md-4 padding-leftright-null">
								<div class="text">
										<h2 class="margin-bottom-null title left grey">News</h2>
										<div class="padding-onlytop-md">
												<h3 class="grey big margin-bottom-small">Latest Posts. Stay tuned!</h3>
												<p class="heading left margin-bottom grey">We share daily the latest technology trends and tutorials on how perfect
												your web development project.</p>
												<a href="{{ url('/blog') }}" class="btn-alt active shadow small margin-null">Read all news</a>
										</div>
								</div>
						</div>
						<div class="col-md-8 text" id="news">
								<!-- Single News -->
								@if(isset($posts))
									@foreach($posts as $post)
											<div class="col-sm-6 single-news">
													<article>
														@if(empty($post->featuredImage))
														<!--	<img src="{{asset('frontend/assets/img/news1.jpg')}}" alt=""> -->
															<br/> <!--remove this after activating the image-->
														@else
														<img src="{{asset($post->featuredImage)}}" alt="">
														@endif
															<div class="content">
																	<span class="read">
																			<i class="material-icons">subject</i>
																	</span>
																	<h3>{{ $post->title }}</h3>
																	<span class="category">Tech</span>
																	<span class="category">Social</span>
																	<span class="date">{{ $post->created_at->format('M d,Y \a\t h:i a') }}</span>
																	<p>
																		{!! str_limit(strip_tags($post->body), $limit = 100, $end = '....... <a href='.url("/blog/".$post->slug).'>Read More</a>') !!}

																	</p>
															</div>
															<a href="{{url('blog/'.$post->slug)}}" class="link"></a>
													</article>
											</div>
										@endforeach
											<!-- END Single News -->
							@endif
						</div>
				</div>
				<!-- END Section News -->

		@if (!Auth::guest())
				<div class="row margin-leftright-null">
						<div class="col-md-12 clearfix color-background padding-leftright-null">
								<div class="partners">
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-1.png')}}" alt="">
										</div>
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-2.png')}}" alt="">
										</div>
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-3.png')}}" alt="">
										</div>
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-4.png')}}" alt="">
										</div>
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-5.png')}}" alt="">
										</div>
										<div class="col-xs-4 col-md-2 partner">
												<img class="img-responsive" src="{{asset('frontend/assets/img/logo-square-6.png')}}" alt="">
										</div>
								</div>
						</div>
				</div>
			@endif
				<div class="row padding-md margin-leftright-null dark-background">
						<div class="col-md-12 text-center">
								<h4 class="big margin-bottom-small white">Get the premium digital services</h4>
								<a href="{{ url('/contact') }}" target="_blank" class="btn-alt small white margin-null active">Get Intouch</a>
						</div>
				</div>
		</div>
</div>
<!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection
