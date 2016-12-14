@extends('layouts.admin')

@section('css')
@endsection

@section('content')
<div class="col-md-3">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
        </div>
        <div class="panel-body">
					<figure>
							<img width="100px" class="img-circle center" src="{!! $user->photo ? asset($user->photo->file)  : asset('assets/images/avatar2.png') !!}" alt="img01"/>
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
						@include('admin.partial.formError')
            {!! Form::model($user, ['action' => ['AdminUsersController@update', $user->id], 'method' => 'patch', 'files' => true ]) !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
										{{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
										{{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
										{{ Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
										{{ Form::select('role_id', ['' => 'Select'] + $roles , null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
										{{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
										{{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                <button type="submit" class="btn btn-primary col-sm-6 col-xs-6">Submit</button>
            {!! Form::close() !!}
						{!! Form::open(['action' => ['AdminUsersController@destroy', $user->id ], 'method' => 'Delete' ]) !!}
						<div class="form-group">
							<button type="submit" class="btn btn-danger col-sm-6 col-xs-6">Delete</button>

						</div>
						{!! Form::close() !!}


        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
