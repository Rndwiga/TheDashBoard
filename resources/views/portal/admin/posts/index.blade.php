@extends('layouts.admin')

@section('css')
<link href="{{asset('assets/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
  @include('admin.partial.flash')
<div class="table-responsive">
    <table id="posts" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
							<th>Id</th>
							<th>Photo</th>
							<th>Title</th>
							<th>Author</th>
							<th>Category Id</th>
							<th>Body</th>
							<th>Created</th>
							<th>Updated</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
							<th>Id</th>
							<th>Photo</th>
							<th>Title</th>
							<th>Author</th>
							<th>Category Id</th>
							<th>Body</th>
							<th>Created</th>
							<th>Updated</th>
            </tr>
        </tfoot>
        <tbody>
					@if(isset($posts))
						@foreach($posts as $post)
	            <tr>
	                <td>{{$post->id}}</td>
	                <td><img height="50px" src="{!! $post->photo ? asset($post->photo->file)  : asset('assets/images/avatar2.png') !!}" alt=""></td>
	                <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
	                <td>{{$post->user->name}}</td>
	                <td>{{ $post->category ? $post->category->name  : 'Uncategorized' }}</td>
	                <td>{{ str_limit($post->body, 40)}}</td>
	                <td>{{$post->created_at->diffForHumans()}}</td>
	                <td>{{$post->updated_at->diffForHumans()}}</td>
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
      $('#posts').DataTable({

      });
  } );
</script>
@endsection
