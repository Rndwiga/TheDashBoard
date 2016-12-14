@extends('layouts.admin')
@section('otherCSS')
<link href="{{ asset('assets/plugins/tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
<link href="{{ asset('assets/plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

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

                              @include('portal.partials.postMenu')

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
                                                  <form action="{{ url('Posts') }}" method="post" enctype="multipart/form-data">
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
                                                        <div class="controls">
                                                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required=""/>
                                                        </div>
                                                        <label class="form-label" for="field-1">Feature Image:</label>
                                                        <span class="desc">e.g. "Meeting in 1st week"</span>
                                                        <div class="controls">
                                                            <input type="file" name="featuredImage" class="form-control" value="{{ old('featuredImage') }}" required=""/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1">Message:</label>
                                                        <textarea name="body" class="summernote" placeholder="Enter text ..." style="width: 100%; height: 250px; font-size: 14px; line-height: 23px;padding:15px;">

                                                        </textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <div class='pull-left'>

                                                        <input type="submit" name='publish' class="btn btn-purple" value = "PUBLISH"/>
                                                        <input type="submit" name='save' class="btn btn-primary icon-save" value = "SAVE DRAFT"/>
                                                    </div>

                                                </div>
                                            </form>
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
<script src="{{ asset('assets/plugins/summernote-master/summernote.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/compose.js') }}" type="text/javascript"></script>

@endsection
