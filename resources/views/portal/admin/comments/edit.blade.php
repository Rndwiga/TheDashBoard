@extends('layouts.admin')

@section('css')
<link href="{{asset('assets/plugins/summernote-master/summernote.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div class="col-md-3">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
        </div>
        <div class="panel-body">
					<figure>
							<img width="100px" class="img-square center" src="{!! $post->photo ? asset($post->photo->file)  : asset('assets/images/avatar2.png') !!}" alt="img01"/>
							<br />
					</figure>
        </div>
    </div>
</div>
<div class="col-md-9">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Basic Form</h4>
        </div>
        <div class="panel-body">
            {!! Form::model($post, ['action' => ['AdminPostController@update', $post->id], 'method' => 'PATCH', 'files' => true ]) !!}
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
                <button type="submit" class="btn btn-primary col-sm-6 col-xs-6">Submit</button>
            {!! Form::close() !!}
						{!! Form::open(['action' => ['AdminPostController@destroy', $post->id ], 'method' => 'Delete' ]) !!}
						<div class="form-group">
							<button type="submit" class="btn btn-danger col-sm-6 col-xs-6">Delete</button>
						</div>
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
