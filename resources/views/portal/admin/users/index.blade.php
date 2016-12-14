@extends('layouts.admin')

@section('css')
<link href="{{asset('assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
  @include('admin.partial.flash')
<div class="table-responsive">
    <table id="users" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
							<th>Id</th>
							<th>Photo</th>
							<th>User</th>
							<th>Email</th>
							<th>Role</th>
							<th>Status</th>
							<th>Created</th>
							<th>Updated</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
								<th>Created</th>
								<th>Updated</th>
            </tr>
        </tfoot>
        <tbody>
					@if(isset($users))
						@foreach($users as $user)
	            <tr>
	                <td>{{$user->id}}</td>
	                <td><img height="50px" src="{!! !empty($user->photo) ? asset($user->photo->file)  : asset('assets/images/avatar2.png') !!}" alt=""></td>
	                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
	                <td>{{$user->email}}</td>
	                <td>{{$user->role->name}}</td>
	                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
	                <td>{{$user->created_at->diffForHumans()}}</td>
	                <td>{{$user->updated_at->diffForHumans()}}</td>
	            </tr>
						@endforeach
					@endif

        </tbody>
       </table>
</div>
@endsection

@section('script')
<script src="{{asset('assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
      $('#users').DataTable({

      });
  } );
</script>
@endsection
