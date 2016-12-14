@extends('layouts.admin')
@section('otherCSS')
<link href="{{asset('assets/plugins/datepicker/css/datepicker.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<!---->
<link href="{{asset('assets/plugins/summernote-master/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Add a User</h1>
             </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.index')}}">Users</a>
                    </li>
                    <li class="active">
                        <strong>Add User</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
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
                    {!! Form::model($user, ['action' => ['Admin\AdminUsersController@update', $user->id], 'method' => 'patch', 'files' => true ]) !!}
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                          <div class="form-group">
                              <label class="form-label" for="field-1">Name</label>
                              <span class="desc"></span>
                              <div class="controls">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="form-label" for="field-1">Username</label>
                              <span class="desc"></span>
                              <div class="controls">
                                {{ Form::text('username', null, ['class' => 'form-control']) }}
                              </div>
                          </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Email</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Status</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Role</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::select('role_id', ['' => 'Select'] + $roles , null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Profile Image</label>
                                <span class="desc"></span>
                                <img class="img-responsive" src="{!! $user->photo ? asset($user->photo->file)  : asset('assets/images/avatar2.png') !!}" alt="" style="max-width:120px;">
                                <div class="controls">
                                  {{ Form::file('photo_id', null, ['class' => 'form-control', 'id'=>'field-5']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-2">Password</label>
                                <span class="desc"></span>
                                <div class="controls">
                                  {{ Form::password('password', ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-2">Confirm Password</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::text('password_confirmation', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary col-sm-4">Save</button>
                                <button type="button" class="btn col-sm-4 col-xs-4">Cancel</button>
                            </div>
                        {!! Form::close() !!}
            						{!! Form::open(['action' => ['Admin\AdminUsersController@destroy', $user->id ], 'method' => 'Delete' ]) !!}
            							<button type="submit" class="btn btn-danger col-sm-4 col-xs-4">Delete</button>
            						</div>
            						{!! Form::close() !!}
                </div>
            </div>
        </section>
      </div>
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
                              <label class="form-label" for="field-2">Phone</label>
                              <span class="desc">e.g. "(534) 253-5353"</span>
                              <div class="controls">
                                  <input type="text" value="" class="form-control" id="field-2" data-mask="phone"  placeholder="(999) 999-9999">
                              </div>
                          </div>


                            <div class="form-group">
                                <label class="form-label" for="field-5">Date of Birth</label>
                                <span class="desc">e.g. "04/03/2015"</span>
                                <div class="controls">
                                    <input type="text" value="" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-5">Gender</label>
                                <span class="desc"></span>
                                <select class="form-control">
                                    <option></option>
                                    <option >Male</option>
                                    <option >Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-6">Brief</label>
                                <span class="desc">e.g. "Enter any size of text description here"</span>
                                <div class="controls">
                                    <textarea class="form-control autogrow" cols="5" id="field-6"></textarea>
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
        </section>
    </div>


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
                                    <input type="text" class="form-control"  value="" id="field-31">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Twitter URL</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" class="form-control"  value="" id="field-41">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Google Plus URL</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" class="form-control"  value="" id="field-51">
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
<script src="{{asset('assets/plugins/datepicker/js/datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/autosize/autosize.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<!-- OTHER SCRIPTS-->
<script src="{{asset('assets/plugins/summernote-master/summernote.min.js')}}"></script>
<script type="text/javascript">
		$(document).ready(function() {
		    $('#postBody').summernote({
			  height: 350
			});
</script>
@endsection
