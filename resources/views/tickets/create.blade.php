@extends('layouts.app')
@section('otherCSS')
<link href="{{ asset('assets/plugins/datepicker/css/datepicker.css ') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Open a New Ticket</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="crm-tickets.html">Tickets</a>
                                    </li>
                                    <li class="active">
                                        <strong>Add Ticket</strong>
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
                                    <form action ="{{ url('tickets/storeTicket') }}" method="post">
                                      <input name="_method" type="hidden" value="PUT">
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                                          @include('partials.flash')
                                          {{ csrf_field() }}

                                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                                <label class="form-label" for="field-1">Title</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="text" value="" name="title" class="form-control" id="field-1">
                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                                                <label class="form-label" for="field-5">Ticket Type</label>
                                                <span class="desc"></span>
                                                <select class="form-control" name="category">
                                                    <option></option>
                                                    @if(isset($categories))
                                                        @foreach ($categories as $category)
                                                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    @endif
                                                    <option value="account_issues">Account Issues</option>
                                                    <option>Web Designing</option>
                                                    <option>SEO</option>
                                                    <option>Website Update</option>
                                                    <option>Software Consulting</option>
                                                    <option>Web Hosting</option>
                                                </select>
                                                @if ($errors->has('category'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('category') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                                                <label class="form-label" for="field-5">Ticket Priority</label>
                                                <span class="desc"></span>
                                                <select class="form-control" name="priority">
                                                    <option></option>
                                                    <option value="low">Low</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="high">High</option>
                                                </select>
                                                @if ($errors->has('priority'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('priority') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                                <label class="form-label" for="field-6">Message Description</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <textarea class="form-control autogrow" name="message" cols="5" id="field-6"></textarea>
                                                    @if ($errors->has('message'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('message') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="field-1">Attach File (Optional)</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="file" class="form-control" id="field-5">
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                                                <label class="form-label" for="field-5">Ticket Status</label>
                                                <span class="desc"></span>
                                                <select class="form-control" name="status">
                                                    <option></option>
                                                    <option >Resolved</option>
                                                    <option>Unresolved</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                            <div class="text-left">
                                                <input type="submit" class="btn btn-primary" value="Create" />
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
<script src="{{ asset('assets/plugins/datepicker/js/datepicker.js ') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script>
 <script src="{{ asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
