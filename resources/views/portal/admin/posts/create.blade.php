@extends('layouts.admin')

@section('css')
<link href="{{asset('assets/plugins/summernote-master/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div class="col-md-12">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Basic Form</h4>
        </div>
        <div class="panel-body">
            {!! Form::open(['action' => 'AdminPostController@store', 'method' => 'post', 'files' => true ]) !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
										{{ Form::text('title', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    {{ Form::select('category_id', ['' => 'Select Category'] + $categories, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
										{{ Form::file('photo_id', ['class' => 'form-control']) }}
                </div>
								<div class="form-group">
                    <label class="control-label">Body</label>
										{{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'postBody']) }}
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}

						@include('admin.partial.formError')


        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/plugins/summernote-master/summernote.min.js')}}"></script>
<script type="text/javascript">
		$(document).ready(function() {
		    $('#postBody').summernote({
			  height: 350
			});
</script>
@endsection
