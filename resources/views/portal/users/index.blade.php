@extends('layouts.admin')
@section('otherCSS')
  <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Users</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="crm-users.html">Users</a>
                        </li>
                        <li class="active">
                            <strong>All Users</strong>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">All Users</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <!-- ********************************************** -->


                            <table id="users" class="display table table-hover table-condensed" cellspacing="0" width="100%">
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
                      						@foreach($users as $person)
                      	            <tr>
                      	                <td>{{$person->id}}</td>
                      	                <td><img height="50px" src="{!! !empty($person->photo) ? asset($person->photo->file)  : asset('assets/images/avatar2.png') !!}" alt=""></td>
                      	                <td><a href="{{route('admin.users.edit', $person->id)}}">{{$person->name}}</a></td>
                      	                <td>{{$person->email}}</td>
                      	                <td>{{$person->role->name}}</td>
                      	                <td>{{$person->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                      	                <td>{{$person->created_at->diffForHumans()}}</td>
                      	                <td>{{$person->updated_at->diffForHumans()}}</td>
                      	            </tr>
                      						@endforeach
                      					@endif

                              </tbody>
                            </table>
                            <!-- ********************************************** -->
                        </div>
                    </div>
                </div>
            </section></div>
</section>
@endsection
@section('otherScripts')
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
      $('#users').DataTable({

      });
  } );
</script>
@endsection
