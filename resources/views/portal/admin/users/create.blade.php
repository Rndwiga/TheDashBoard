@extends('layouts.admin')

@section('css')
@endsection

@section('content')
<div class="col-md-12">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Basic Form</h4>
        </div>
        <div class="panel-body">
            {!! Form::open(['action' => 'AdminUsersController@store', 'method' => 'post', 'files' => true ]) !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
										{{ Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) }}
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
                <button type="submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}

						@include('admin.partial.formError')


        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
