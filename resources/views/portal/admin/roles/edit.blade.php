@extends('layouts.admin')
@section('otherCSS')
<link href="{{asset('assets/plugins/datepicker/css/datepicker.css')}}" rel="stylesheet" type="text/css" media="screen"/>
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <h1 class="title">Add User Role</h1>
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="blo-categories.html">Roles</a>
                    </li>
                    <li class="active">
                        <strong>Add Role</strong>
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
                  {!! Form::model($role, ['action' => ['Admin\AdminUserRolesController@update', $role->id], 'method' => 'PATCH', 'files' => true ]) !!}
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">

                            <div class="form-group">
                                <label class="form-label" for="field-1">Category Name</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Category']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="field-1">Category Slug</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder'=> 'Slug']) }}
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="field-6">Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                  {{ Form::textarea('description', null, ['class' => 'form-control autogrow', 'cols' => '2']) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary col-sm-4 col-sm-4">Save</button>
                                <button type="submit" class="btn btn-default col-sm-4 col-sm-4">Cancel</button>
                            </div>

                    {!! Form::close() !!}
                    {!! Form::open(['action' => ['Admin\AdminUserRolesController@destroy', $role->id ], 'method' => 'Delete' ]) !!}
        							<button type="submit" class="btn btn-danger col-sm-4 col-sm-4">Delete</button>
                    </div>
        						{!! Form::close() !!}
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
<!-- OTHER SCRIPTS
@endsection
