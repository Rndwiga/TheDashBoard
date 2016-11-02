@extends('layouts.app')
@section('otherCSS')
  <link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Users</h1>                            </div>

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


                            <table id="example" class="display table table-hover table-condensed" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Name</th><th>Email</th><th>Created At</th><th>Updated</th></tr>
                                </thead>

                                <tbody>
                                  @foreach ($users as $user)
                                      <tr>
                                          <td>{{ $user->id }}</td>
                                          <td><a href="{!! action('UserController@show', $user->id) !!}">{{ $user->name }} </a>
                                          </td>
                                          <td>{{ $user->email }}</td>
                                          <td>{{ $user->created_at }}</td>
                                          <td>{{ $user->updated_at }}</td>
                                      </tr>
                                  @endforeach
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
<script src="assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection
