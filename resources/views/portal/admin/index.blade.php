@extends('layouts.admin')
@section('otherCSS')
<link href="{{asset('assets/plugins/morris-chart/css/morris.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/graph.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/detail.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/legend.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/extensions.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/rickshaw.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/rickshaw-chart/css/lines.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/icheck/skins/minimal/white.css')}}" rel="stylesheet" type="text/css" media="screen"/>
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title"> Tyondo Blog</h1>
              </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box nobox">
            <div class="content-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                            <div class="stats">
                                <h4><strong>450K</strong></h4>
                                <span>Blog Page Views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class='pull-left fa fa-user icon-md icon-rounded icon-orange'></i>
                            <div class="stats">
                                <h4><strong>6243</strong></h4>
                                <span>New Visitors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class='pull-left fa fa-database icon-md icon-rounded icon-purple'></i>
                            <div class="stats">
                                <h4><strong>99.9%</strong></h4>
                                <span>Server Up</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class='pull-left fa fa-users icon-md icon-rounded icon-warning'></i>
                            <div class="stats">
                                <h4><strong>1433</strong></h4>
                                <span>New Users</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- End .row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="r1_maingraph db_box">
                            <span class='pull-left'>
                                <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                            </span>
                            <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
                        </div>
                    </div>
                </div> <!-- End .row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wid-vectormap">
                            <h4>Visitor's Statistics</h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <figure>
                                        <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>
                                    </figure>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 map_progress">
                                    <h4>Unique Visitors</h4>
                                    <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>
                                    <br>
                                    <h4>Registrations</h4>
                                    <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>
                                    <br>
                                    <h4>Direct Sales</h4>
                                    <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End .row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">

                        <div class="r1_graph1 db_box db_box_large">
                            <span class='bold'>98.95%</span>
                            <span class='pull-right'><small>SERVER UP</small></span>
                            <div class="clearfix"></div>
                            <span class="db_dynamicbar">Loading...</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="r1_graph2 db_box db_box_large">
                            <span class='bold'>2332</span>
                            <span class='pull-right'><small>USERS ONLINE</small></span>
                            <div class="clearfix"></div>
                            <span class="db_linesparkline">Loading...</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>
      </div>
</section>
@endsection

@section('otherScripts')
 <script src="{{asset('assets/plugins/rickshaw-chart/vendor/d3.v3.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/rickshaw-chart/js/Rickshaw.All.js')}}"></script>
 <script src="{{asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/morris-chart/js/raphael-min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/morris-chart/js/morris.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/gauge/gauge.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/plugins/icheck/icheck.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/js/blo-dashboard.js')}}" type="text/javascript"></script>
<!-- OTHER SCRIPTS-->
@endsection
