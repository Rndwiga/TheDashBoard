@extends('layouts.admin')
@section('otherCSS')
<link href="{{asset('assets/plugins/datatables/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{asset('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" media="screen"/>
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
          <div class="page-title">

              <div class="pull-left">
                  <h1 class="title">Categories</h1>                            </div>

              <div class="pull-right hidden-xs">
                  <ol class="breadcrumb">
                      <li>
                          <a href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a>
                      </li>
                      <li>
                          <a href="{{route('admin.categories.index')}}">Categories</a>
                      </li>
                      <li class="active">
                          <strong>All Categories</strong>
                      </li>
                  </ol>
              </div>

          </div>
      </div>
      <div class="clearfix"></div>

      <div class="col-lg-12">
          <section class="box ">
              <header class="panel_header">
                  <h2 class="title pull-left">All Categories</h2>
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
                                      <th>ID</th>
                                      <th>Category Name</th>
                                      <th>Description</th>
                                      <th>No. of Blogs</th>
                                      <th>Time Created</th>
                                  </tr>
                              </thead>

                              <tbody>
                                @if(isset($categories))
        													@foreach($categories as $category)
        								            <tr>
        								                <td>{{$category->id}}</td>
        								                <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
        								                <td>{{$category->description}}</td>
        								                <td>{{$category->updated_at->diffForHumans()}}</td>
        								                <td>{{$category->created_at->diffForHumans()}}</td>
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
<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<!-- OTHER SCRIPTS
@endsection
