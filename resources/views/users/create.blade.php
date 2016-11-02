@extends('layouts.app')
@section('otherCSS')
<link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Edit User</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="crm-users.html">Users</a>
                                    </li>
                                    <li class="active">
                                        <strong>Edit User</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Basic Info</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <form action ="#" method="post">
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Name</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" value="John Doe" class="form-control" id="field-1">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Date of Birth</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text" value="05/02/1985" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Gender</label>
                                                <span class="desc"></span>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option selected='selected'>Male</option>
                                                    <option >Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Profile Image</label>
                                                <span class="desc"></span>
                                                <img class="img-responsive" src="data/crm-users/user-1.jpg" alt="" style="max-width:120px;">
                                                <div class="controls">
                                                    <input type="file" class="form-control" id="field-5">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-6">Brief</label>
                                                <span class="desc">e.g. "Enter any size of text description here"</span>
                                                <div class="controls">
                                                    <textarea class="form-control autogrow" cols="5" id="field-6">Well known for deep knowledge and experience on the subject. His teachings and lectures are attended regularly.</textarea>
                                                </div>
                                            </div>


                                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                                <div class="text-left">
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                    <button type="button" class="btn">Cancel</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>


                            </div>
                        </section></div>


                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">User Account Info</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <form action="#" method="post">
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Email</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" value="email@example.com" class="form-control" id="field-3">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-2">Phone</label>
                                                <span class="desc">e.g. "(534) 253-5353"</span>
                                                <div class="controls">
                                                    <input type="text" value="(123) 456-7878" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-2">Password</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="password" value="abcdefgh" class="form-control" id="field-2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-2">Confirm Password</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="password"  value="abcdefgh" class="form-control" id="field-21">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-2">FAX</label>
                                                <span class="desc">e.g. "(534) 253-5353"</span>
                                                <div class="controls">
                                                    <input type="text" value="(123) 456-7878" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-6">Address</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <textarea class="form-control autogrow" cols="5" id="field-6">A-2 Canon Appt, Near Ring Road, City Streets, NY 12435</textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                            <div class="text-left">
                                                <button type="button" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </section></div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">User Social Media Info</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <form action="#" method="post">
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Facebook URL</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" class="form-control"  value="http://www.facebook.com/userID" id="field-31">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Twitter URL</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" class="form-control"  value="http://www.twitter.com/userID" id="field-41">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Google Plus URL</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" class="form-control"  value="http://www.plus.google.com/userID" id="field-51">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                            <div class="text-left">
                                                <button type="button" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>


                            </div>
                        </section></div>

                </section>
@endsection

@section('otherScripts')
<script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script>
 <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
 <script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
