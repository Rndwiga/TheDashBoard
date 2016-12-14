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
                <h1 class="title">Add a Blog</h1>                            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="blo-blogs.html">Blogs</a>
                    </li>
                    <li class="active">
                        <strong>Add Blog</strong>
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
                  {!! Form::model($post, ['action' => ['Admin\AdminPostController@update', $post->id], 'method' => 'PATCH', 'files' => true ]) !!}
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">

                            <div class="form-group">
                                <label class="form-label" for="field-1">Blog Title</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{ Form::text('title', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label class="form-label" for="field-5">Blog Content</label>
                                <span class="desc"></span>
                                {{ Form::textarea('body', null, ['class' => 'ckeditor form-control', 'id' => 'postBody']) }}
                                <br>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                              <div class="form-group">
                                  <label class="form-label" for="field-6">Blog Excerpt</label>
                                  <span class="desc"></span>
                                  <div class="controls">
                                    {{ Form::textarea('summary', null, ['class' => 'autogrow form-control']) }}
                                  </div>
                              </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Created On</label>
                                    <span class="desc">e.g. "04/03/2015"</span>
                                    <div class="controls">
                                      {{ Form::text('created_at', null, ['class' => 'form-control datepicker','data-format'=>'mm/dd/yyyy','disabled'=>'']) }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="field-5">Last Edited</label>
                                    <span class="desc">e.g. "04/03/2015"</span>
                                    <div class="controls">
                                      {{ Form::text('updated_at', null, ['class' => 'form-control datepicker','data-format'=>'mm/dd/yyyy','disabled'=>'']) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="field-1">Featured Image</label>
                                    <span class="desc"></span>
                                    <img class="img-responsive" src="{!! $post->photo ? asset($post->photo->file)  : asset('assets/images/avatar2.png') !!}" alt="" style="max-width:120px;">
                                    <div class="controls">
                                        {{ Form::file('photo_id', ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Blog Tags</label>
                                    <span class="desc"></span>
                                    <select multiple class="form-control">
                                        <option >Graphic</option>
                                        <option >Web Design</option>
                                        <option >Branding</option>
                                        <option>Web</option>
                                        <option>SEO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Blog Categories</label>
                                    <span class="desc"></span>
                                    {{ Form::select('category_id', ['' => 'Select Category'] + $categories, null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Blog Status</label>
                                    <span class="desc"></span>
                                    <select class="form-control">
                                        <option></option>
                                        <option >New</option>
                                        <option>Draft</option>
                                        <option>Published</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary col-sm-4 col-xs-4">Save</button>
                                    <button type="button" class="btn col-sm-4 col-xs-4">Cancel</button>
                                </div>
                    {!! Form::close() !!}
                    {!! Form::open(['action' => ['Admin\AdminPostController@destroy', $post->id ], 'method' => 'Delete' ]) !!}
        							<button type="submit" class="btn btn-danger col-sm-4 col-xs-4">Delete</button>
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
<!-- OTHER SCRIPTS-->
<script src="{{asset('assets/plugins/summernote-master/summernote.min.js')}}"></script>
<script type="text/javascript">
		$(document).ready(function() {
		    $('#postBody').summernote({
			  height: 350
			});
</script>
@endsection
