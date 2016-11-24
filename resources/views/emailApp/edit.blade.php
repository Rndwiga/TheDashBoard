@extends('layouts.app')
@section('otherCSS')
<link href="{{ asset('assets/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ asset('assets/plugins/tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Mailbox</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="mail-inbox.html">Mailbox</a>
                                    </li>
                                    <li class="active">
                                        <strong>Compose</strong>
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

                                        <ul class="list-unstyled mail_tabs">
                                          @if (Auth::user()->can_post())
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}" class="btn btn-primary ">
                                                    <i class="fa fa-inbox"></i> Create Post <span class="badge badge-primary pull-right">6</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-send-o"></i> Published Post <span class="badge badge-purple pull-right">10</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-edit"></i> Drafts <span class="badge badge-orange pull-right">2</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-star-o"></i> Favourite Posts
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-trash-o"></i> Trash
                                                </a>
                                            </li>
                                            @else
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}" class="btn btn-info ">
                                                    <i class="fa fa-star-o"></i> Favourite Posts
                                                </a>
                                            </li>
                                          @endif
                                        </ul>

                                    </div>

                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                        <div class="mail_content">

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <h3 class="mail_head">Compose</h3>
                                                    <i class='fa fa-refresh icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-search icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-cog icon-primary icon-xs icon-orange mail_head_icon pull-right'></i>


                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 mail_view_title">
                                                <!--  <form action="{{ url('Posts') }}" method="post" enctype="multipart/form-data"> -->
                                                  <form action="{{ url('Posts') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class='pull-right'>
                                                        <button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Send" data-placement="top">
                                                            <i class="fa fa-paper-plane-o icon-xs"></i>
                                                        </button>
                                                        <button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Save" data-placement="top">
                                                            <i class="fa fa-floppy-o icon-xs"></i>
                                                        </button>
                                                        <button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Trash" data-placement="top">
                                                            <i class="fa fa-trash-o icon-xs"></i>
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 mail_view_info">

                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1">Title:</label>
                                                        <span class="desc">e.g. "Meeting in 1st week"</span>
                                                        <div class="controls">
                                                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1">Message:</label>
                                                        <textarea name="body" class="mail-compose-editor" placeholder="Enter text ..." style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px;">
                                                            {{ old('body') }}
                                                        </textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <div class='pull-left'>

                                                        <input type="submit" name='publish' class="btn btn-purple" value = "PUBLISH"/>
                                                        <input type="submit" name='save' class="btn btn-primary icon-save" value = "SAVE DRAFT"/>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                      </div>


                </section>
@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
<script src="{{ asset('assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>

@endsection
