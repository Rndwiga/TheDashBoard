@extends('layouts.admin')
@section('otherCSS')
<link href="{{ asset('assets/plugins/datepicker/css/datepicker.css ') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Add User</h1>                            </div>

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
                                    <form action="{{ url('users/createUser') }}" method="post">
                                      {{ csrf_field() }}
                                      <input type="hidden" value="basicInfo" name="section" class="form-control">

                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Name</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="hidden" value="basicInfo" name="section" class="form-control">
                                                    <input type="text" placeholder="Full name" name="name" class="form-control" id="field-1">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Email</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="email" placeholder="email" name="email" class="form-control" id="field-3">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Gender</label>
                                                <span class="desc"></span>
                                                <select class="form-control" name="gender">
                                                    <option value="Female" >Female</option>
                                                    <option value="Male" >Male</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-2">New Password</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="password" name="password" placeholder="password" class="form-control" id="field-2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-2">Confirm New Password</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="password"  placeholder="abcdefgh" name="password_confirmation" class="form-control" id="field-21">
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                                <div class="text-left">
                                                    <input type="submit" class="btn btn-primary" value="Create" />
                                                </div>
                                            </div>
                                    </form>
                                </div>


                            </div>
                        </section>
                      </div>

                </section>
@endsection

@section('otherScripts')
<script src="{{ asset('assets/plugins/datepicker/js/datepicker.js ') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
