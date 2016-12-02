@extends('frontend.v2.tyondo')
@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/post.jpg)">
                            <div class="text text-center">
                                <h1 class="white margin-bottom-small">Standard Post</h1>
                                <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row padding-onlytop-md content-post no-margin">
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <h2>Meetup in Rome</h2>
                            <span class="category">Tech</span>
                            <span class="category">Social</span>
                            <span class="date">02.11.2016</span>
                            <p class="heading full black left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita distinctio sed harum ea, tenetur ratione ab quod quaerat voluptatem nam fugiat perferendis, unde, autem deleniti.</p>
                        </div> 
                        <div class="col-md-offset-2 col-md-8 padding-leftright-null">
                            <img class="img-responsive padding-md" src="assets/img/news2.jpg" alt="">
                        </div>
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquid scire se gaudeant? <b>Immo alio genere;</b> <i>Quod vestri non item.</i> Duo Reges: constructio interrete. Est enim effectrix multarum et magnarum voluptatum.
                                Sed quanta sit alias, nunc tantum possitne esse tanta. <i>Sint ista Graecorum;</i> Consequens enim est et post oritur, ut dixi. </p>
                            <blockquote class="heading post">
                                Quod idem cum vestri faciant, non satis magnam tribuunt inventoribus gratiam.
                            </blockquote>
                            <p><b>Quid ait Aristoteles reliquique Platonis alumni?</b> <a href='#' target='_blank'>Praeteritis, inquit, gaudeo.</a> Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum. Hoc enim constituto in
                                philosophia constituta sunt omnia. Et non ex maxima parte de tota iudicabis? Tum ille timide vel potius verecunde: Facio, inquit. </p>
                            <ul class="post">
                                <li>Hoc loco discipulos quaerere videtur, ut, qui asoti esse velint, philosophi ante fiant.</li>
                                <li>Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur?</li>
                                <li>Et quidem Arcesilas tuus, etsi fuit in disserendo pertinacior, tamen noster fuit;</li>
                                <li>Quam ob rem tandem, inquit, non satisfacit?</li>
                                <li>Ergo ita: non posse honeste vivi, nisi honeste vivatur?</li>
                                <li>Videsne igitur Zenonem tuum cum Aristone verbis concinere, re dissidere, cum Aristotele et illis re consentire, verbis discrepare?</li>
                                <li>Dat enim intervalla et relaxat.</li>
                            </ul>
                            <p>Summus dolor plures dies manere non potest? <b>Cur deinde Metrodori liberos commendas?</b> Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus; Iam doloris medicamenta illa Epicurea tamquam de
                                narthecio proment: Si gravis, brevis; Sed haec quidem liberius ab eo dicuntur et saepius. <a href='#' target='_blank'>Tubulo putas dicere?</a> Maximas vero virtutes iacere omnis necesse est voluptate dominante. <mark>Primum quid tu dicis breve?</mark>                                Ita fit cum gravior, tum etiam splendidior oratio. Quod autem satis est, eo quicquid accessit, nimium est; </p>
                            <p>Non laboro, inquit, de nomine. Ut optime, secundum naturam affectum esse possit. Sed ille, ut dixi, vitiose. Dicimus aliquem hilare vivere; <a href='#' target='_blank'>Ratio enim nostra consentit, pugnat oratio.</a> <a href='http://loripsum.net/'
                                    target='_blank'>Quonam, inquit, modo?</a> Eorum enim est haec querela, qui sibi cari sunt seseque diligunt. </p>
                            <p><i>Summae mihi videtur inscitiae.</i> <i>Eademne, quae restincta siti?</i> <i>Hoc est non dividere, sed frangere.</i> <i>Sed fortuna fortis;</i> <a href='http://loripsum.net/' target='_blank'>Confecta res esset.</a> Neque solum
                                ea communia, verum etiam paria esse dixerunt. Ad corpus diceres pertinere-, sed ea, quae dixi, ad corpusne refers? Nunc haec primum fortasse audientis servire debemus. Sed vos squalidius, illorum vides quam niteat oratio.
                                Sed ad bona praeterita redeamus. </p>
                        </div>
                    </div>
                    <!--  Post Meta  -->
                    <div class="row no-margin">
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <div id="post-meta">
                                <ul class="tagCloud">
                                    <li class="title">Tags</li>
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                                <span class="author">Written by <em>John Doe</em></span>
                                <span class="info">Pubblished <em>November 2016</em></span>
                            </div>
                        </div>
                    </div>
                    <!--  END Post Meta  -->
                    <!--  Share Btn  -->
                    <div id="share">
                        <a class="share-btn">
                            <i class="material-icons">share</i>
                        </a>
                        <div class="share-icons" style="display:none">
                            <a href="#" class="share-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="share-mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!--  END Share Btn  -->
                    <!--  Comments  -->
                    <div class="row no-margin">
                        <div class="col-md-offset-3 col-md-6 padding-leftright-null">
                            <div id="comments">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab" aria-expanded="true">All comments</a></li>
                                    <li role="presentation" class=""><a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab" aria-expanded="false">Leave a comment</a></li>
                                </ul>
                                <!--  Nav Tabs  -->
                                <!-- Tab panes -->
                                <div class="tab-content no-margin-bottom">
                                    <div role="tabpanel" class="tab-pane padding-md active" id="tab-one">
                                        <div class="comment">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-2">
                                                    <img src="assets/img/comment1.jpg" alt="">
                                                </div>
                                                <div class="col-xs-9 col-sm-10">
                                                    <h3>
                                                        <span class="comment-author">
                                                            Joe Doe
                                                        </span>
                                                        <span class="comment-date">
                                                            12 Febbraio, 2016
                                                        </span>
                                                        <span class="comment-btn">
                                                            <a href="#">&nbsp;</a>
                                                        </span>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga
                                                        nam.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment reply">
                                            <div class="row">
                                                <div class="col-xs-3 col-xs-offset-1 col-sm-2 col-sm-offset-2">
                                                    <img src="assets/img/comment2.jpg" alt="">
                                                </div>
                                                <div class="col-xs-8 col-sm-8">
                                                    <h3>
                                                        <span class="comment-author">
                                                            Alessia Simpson
                                                        </span>
                                                        <span class="comment-date">
                                                            12 Febbraio, 2016
                                                        </span>
                                                        <span class="comment-btn">
                                                            <a href="#">&nbsp;</a>
                                                        </span>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga
                                                        nam.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-2">
                                                    <img src="assets/img/comment3.jpg" alt="">
                                                </div>
                                                <div class="col-xs-9 col-sm-10">
                                                    <h3>
                                                        <span class="comment-author">
                                                            Asia Rossi
                                                        </span>
                                                        <span class="comment-date">
                                                            12 Febbraio, 2016
                                                        </span>
                                                        <span class="comment-btn">
                                                            <a href="#">&nbsp;</a>
                                                        </span>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga
                                                        nam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane padding-md" id="tab-two">
                                        <section class="comment-form">
                                            <form id="contact-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input class="form-field" name="name" id="name" type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-field" name="mail" id="mail" type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="form-field" name="messageForm" id="messageForm" rows="6" placeholder="Your Message"></textarea>
                                                        <div class="submit-area">
                                                            <input type="submit" id="submit-contact" class="btn-alt" value="Submit">
                                                            <div id="msg" class="message"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END Comments  -->
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection
