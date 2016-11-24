@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/service1.jpg)">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">Elements</h1>
                                <p class="heading white">All elements that you can combine for create your perfect websites</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row fullpage-wrap">
                        <!--  Grid Images with Lightbox  -->
                        <div class="project-images grid">
                            <div class="col-xs-6 col-sm-3 padding-leftright-null">
                                <a href="assets/img/work1.html" class="lightbox">
                                    <div class="image" style="background-image:url(assets/img/item1.jpg)"></div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 padding-leftright-null">
                                <a href="assets/img/work2.html" class="lightbox">
                                    <div class="image" style="background-image:url(assets/img/item2.jpg)"></div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 padding-leftright-null">
                                <a href="assets/img/work3.html" class="lightbox">
                                    <div class="image" style="background-image:url(assets/img/item3.jpg)"></div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3 padding-leftright-null">
                                <a href="assets/img/work4.html" class="lightbox">
                                    <div class="image" style="background-image:url(assets/img/item4.jpg)"></div>
                                </a>
                            </div>
                        </div>
                        <!--  END Grid Images with Lightbox  -->
                    </div>
                    <div class="row padding-md">
                        <div class="col-md-offset-3 col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquid scire se gaudeant? <b>Immo alio genere;</b> <i>Quod vestri non item.</i> Duo Reges: constructio interrete. Est enim effectrix multarum et magnarum voluptatum.
                                Sed quanta sit alias, nunc tantum possitne esse tanta. <i>Sint ista Graecorum;</i> Consequens enim est et post oritur, ut dixi. </p>
                            <blockquote class="heading post">
                                Quod idem cum vestri faciant, non satis magnam tribuunt inventoribus gratiam.
                            </blockquote>
                            <h1>Heading 1</h1>
                            <h2>Heading 2</h2>
                            <h3>Heading 3</h3>
                            <h4>Heading 4</h4>
                            <h5>Heading 5</h5>
                            <h6>Heading 5</h6>
                            <h2 class="small">Heading 2 small</h2>
                            <h2 class="small"><a href="#">Heading 2 small link</a></h2>
                            <h2 class="small"><a href="#"><i class="margin-null">Heading 2 small link</i></a></h2>
                            <h4 class="small">Heading 3 small</h4>
                            <div class="padding-sm">
                                <span class="black">black</span> <span class="color">color</span> <span class="grey">grey</span> <span class="grey-light">light-grey</span>
                            </div>
                            <!--  Set data-color for colro palette  -->
                            <div class="mycolors">
                                <span class="mycolor" data-color="#2644BC"></span>
                                <span class="mycolor" data-color="#E8EAF6"></span>
                                <span class="mycolor" data-color="#c2c3c4"></span>
                                <span class="mycolor" data-color="#A0A2A4"></span>
                                <span class="mycolor" data-color="#222"></span>
                            </div>
                            <div class="row padding-onlytop-md margin-leftright-null">
                                <div class="col-xs-6 col-sm-3 padding-sm">
                                    <a href="#" class="btn margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 padding-sm">
                                    <a href="#" class="btn-alt margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 padding-sm">
                                    <a href="#" class="btn-alt medium margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 padding-sm">
                                    <a href="#" class="btn-alt medium active margin-null">Button</a>
                                </div>

                            </div>
                            <div class="row padding-sm margin-leftright-null">
                                <div class="col-xs-6 col-sm-3  padding-sm">
                                    <a href="#" class="btn-alt small margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3  padding-sm">
                                    <a href="#" class="btn-alt small active margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3  padding-sm">
                                    <a href="#" class="btn-pro margin-null">Button</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 padding-sm">
                                    <a href="#" class="btn-simple active margin-null">Button</a>
                                </div>
                            </div>
                            <!--  Services with Icon -->
                            <div class="service-responsive-bottom padding-md">
                                <ul class="services">
                                    <li>
                                        <div class="col-xs-2 padding-leftright-null">
                                            <div class="icon">
                                                <i class="icon ion-ios-pulse"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 padding-leftright-null">
                                            <div class="icon-text">
                                                <h6 class="small">Website Design</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, fugiat amet provident incidunt aspernatur minima maiores deleniti totam! Qui iste reiciendis quis molestiae consequatur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-xs-2 padding-leftright-null">
                                            <div class="icon">
                                                <i class="icon ion-ios-analytics-outline"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 padding-leftright-null">
                                            <div class="icon-text">
                                                <h6 class="small">Brand Strategy</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, fugiat amet provident incidunt aspernatur minima maiores deleniti totam! Qui iste reiciendis quis molestiae consequatur!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-xs-2 padding-leftright-null">
                                            <div class="icon">
                                                <i class="icon ion-ios-pie-outline"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 padding-leftright-null">
                                            <div class="icon-text">
                                                <h6 class="small">Product Design</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, fugiat amet provident incidunt aspernatur minima maiores deleniti totam! Qui iste reiciendis quis molestiae consequatur!</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--  END Services with Icon -->
                            <!--  Simple Services -->
                            <div class="row padding-sm">
                                <div class="col-md-6">
                                    <h6 class="small dark">Web design</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="small dark">Marketing</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                </div>
                            </div>
                            <!--  Material Services -->
                            <div class="row padding-sm">
                                <div class="col-md-12 padding-leftright-null">
                                    <div class="col-md-6">
                                        <div class="margin-md-bottom">
                                            <i class="icon ion-ios-analytics-outline service material left"></i>
                                            <div class="service-content">
                                                <h6 class="heading  margin-bottom-extrasmall">Business Goals</h6>
                                                <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse eveniet dicta minus quaerat dolorem illum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="margin-md-bottom">
                                            <i class="icon ion-ios-color-filter-outline service material left"></i>
                                            <div class="service-content">
                                                <h6 class="heading grey margin-bottom-extrasmall">Professional Team</h6>
                                                <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maiores ut, assumenda consectetur sequi sapiente!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  END Material Services -->
                            <!-- Standard Services -->
                            <div class="row padding-onlybottom-md">
                                <div class="col-md-12 padding-leftright-null">
                                    <div class="col-md-4">
                                        <div class="margin-md-bottom">
                                            <i class="icon ion-ios-analytics-outline service"></i>
                                            <h6 class="heading  margin-bottom-extrasmall">Business Goals</h6>
                                            <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="margin-md-bottom">
                                            <i class="icon ion-ios-color-filter-outline service"></i>
                                            <h6 class="heading grey margin-bottom-extrasmall">Professional Team</h6>
                                            <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <i class="icon ion-ios-lightbulb-outline service"></i>
                                            <h6 class="heading  margin-bottom-extrasmall">Vision</h6>
                                            <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Standard Services -->
                            <!--  Accordion and Tabs  -->
                            <div class="row padding-sm">
                                <div class="col-md-6">
                                    <!--  Tab  -->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab">Tab One</a></li>
                                        <li role="presentation"><a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab">Tab Two</a></li>
                                    </ul>
                                    <!--  Nav Tabs  -->
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab-one">Content one. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem sequi qui odit accusantium tempore debitis, est mollitia dolores voluptatum eos ea fugit quis rerum expedita non beatae nostrum.
                                            Eos.
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab-two">Content two. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo animi ipsa architecto corrupti, atque commodi. Incidunt, accusamus. Nesciunt, quam, cumque? Vero id consequatur, aperiam ad quasi!
                                            Iure enim nesciunt hic!</div>
                                    </div>
                                    <!-- Tab panes -->
                                    <!--  Tab  -->
                                </div>
                                <!-- Accordion -->
                                <div class="col-md-6">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Accordion Item One
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo officia voluptates hic obcaecati voluptatum omnis, nihil nam numquam nisi esse praesentium iure consectetur dolorum porro a sequi veniam eligendi similique! Ab atque aliquam error eius natus
                                                    repellendus voluptatibus dolore blanditiis.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item Two
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea reprehenderit atque labore, eos ad dolorem officia ut ex vero, totam assumenda, sapiente enim. Iusto, aliquid recusandae maiores enim deleniti fuga obcaecati placeat iste, libero, aut quos,
                                                    officiis laborum nesciunt similique!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item Three
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur facere omnis tempore, atque, dolorum aperiam eligendi dignissimos quis? Alias itaque soluta dolorem dignissimos velit sint, dolores delectus, voluptatem animi molestiae atque voluptates,
                                                    ab eius unde, voluptate totam? Illo, quasi, facilis.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion -->
                            </div>
                            <!--  END Accordion and Tabs  -->
                            <!--  Table  -->
                            <div class="row padding-sm">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title 1</th>
                                                    <th>Title 2</th>
                                                    <th>Title 3</th>
                                                    <th>Title 4</th>
                                                </tr>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Lorem ipsum dolor.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Lorem ipsum dolor.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Lorem ipsum dolor.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                    <td>Lorem ipsum.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--  END Table  -->
                            <!--  Alerts  -->
                            <div class="row padding-sm">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                    </div>
                                </div>
                            </div>
                            <!--  END Alerts  -->
                            <div class="row content-post">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ol>
                                </div>
                            </div>
                            <!--  Pricing  -->
                            <div class="row">
                                <section id="pricing">
                                    <div class="col-sm-6 price padding-leftright-null">
                                        <div class="price-title">Basic</div>
                                        <div class="price-number"><sup>$</sup>30</div>
                                        <ul>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                        </ul>
                                        <a href="#" class="btn-alt small">Buy Now</a>
                                    </div>
                                    <div class="col-sm-6 price active standard padding-leftright-null">
                                        <div class="price-title">Advanced</div>
                                        <div class="price-number"><sup>$</sup>90</div>
                                        <ul>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit.</li>
                                        </ul>
                                        <a href="#" class="btn-alt small">Buy Now</a>
                                    </div>
                                </section>
                            </div>
                            <!--  Pricing  -->
                            <!--  Skills  -->
                            <div class="row">
                                <section id="skills">
                                    <div class="col-md-6">
                                        <ul class="skill-list">
                                            <em class="black">Development</em>
                                            <li>
                                                <span class="border-color" data-percent="25%"></span>
                                                <span class="label color-background"><span class="count" data-to="25"></span>%</span>
                                            </li>
                                            <em class="black">Branding</em>
                                            <li class="margin-null">
                                                <span class="border-color" data-percent="75%"></span>
                                                <span class="label color-background"><span class="count" data-to="75"></span>%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="skill-list">
                                            <em class="black">User interface</em>
                                            <li>
                                                <span class="border-color" data-percent="45%"></span>
                                                <span class="label color-background"><span class="count" data-to="45"></span>%</span>
                                            </li>
                                            <em class="black">Marketing</em>
                                            <li class="margin-null">
                                                <span class="border-color" data-percent="85%"></span>
                                                <span class="label color-background"><span class="count" data-to="85"></span>%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <!--  END Skills  -->
                            <!--  Simple Slider  -->
                            <div class="row padding-onlytop-md">
                                <div class="col-md-12">
                                    <div class="image-carousel dots-inside">
                                        <div class="item">
                                            <img src="assets/img/item6.jpg" alt="image 1">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/item8.jpg" alt="image 2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  END Simple Slider  -->
                        </div>
                    </div>
                    <!-- Section same Height. Child get the parent Height. Set the same id -->
                    <div class="row fullpage-wrap">
                        <!-- Video -->
                        <div class="col-md-6 padding-leftright-null">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=4PFBxfITU_Q">
                                <div data-responsive="child-height" data-responsive-id="story" class="bg-img" style="height: 511px; background-image: url(_assets/img/service1.html);"></div>
                            </a>
                        </div>
                        <!-- END Video -->
                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="parent-height" data-responsive-id="story" class="text grey-background">
                                <h2 class="margin-bottom-null title left grey">About Us</h2>
                                <div class="padding-onlytop-md">
                                    <h3 class="grey big margin-bottom-small">Passionate about perfection</h3>
                                    <p class="heading left margin-bottom grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dolorem voluptas quo ipsum obcaecati placeat, architecto, amet voluptatum esse officia, distinctio dignissimos minima dicta. Veniam debitis eum illum
                                        asperiores animi!</p>
                                    <a href="#" class="btn-alt active shadow small margin-null">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section same Height. Child get the parent Height. Set the same id -->
                    <div class="row margin-null fullpage-md-wrap">
                        <!-- Section with background image with overlay -->
                        <div class="col-md-12 padding-leftright-null bg-img responsive overlay" style="background-image:url(assets/img/service2.jpg)">
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text">
                                    <h2 class="margin-bottom-null title left white">Our numbers</h2>
                                    <div class="padding-onlytop-md">
                                        <h3 class="white big margin-bottom-small">We are a great creative agency</h3>
                                        <p class="heading left margin-bottom white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        <a href="#" class="btn-alt active shadow small margin-null">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Counters -->
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text">
                                    <div id="counters" class="row padding-md-leftright-null padding-md">
                                        <div class="col-sm-4 padding-md-leftright-null">
                                            <div class="statistic">
                                                <i class="icon ion-ios-color-filter-outline service big white margin-bottom-null"></i>
                                                <span class="white" data-from="0" data-to="1200">&nbsp;</span>
                                                <p class="heading grey-light">Sodisfied costumers</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 padding-md-leftright-null">
                                            <div class="statistic">
                                                <i class="icon ion-ios-pie-outline service big white margin-bottom-null"></i>
                                                <span class="white" data-from="0" data-to="1200">&nbsp;</span>
                                                <p class="heading grey-light">Sodisfied costumers</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 padding-md-leftright-null">
                                            <div class="statistic">
                                                <i class="icon ion-ios-bolt-outline service big white margin-bottom-null"></i>
                                                <span class="white" data-from="0" data-to="1200">&nbsp;</span>
                                                <p class="heading grey-light">Sodisfied costumers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Counters -->
                        </div>
                        <!-- END Section with background image with overlay -->
                    </div>
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->

@endsection
