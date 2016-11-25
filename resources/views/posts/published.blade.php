@extends('layouts.app')
@section('otherCSS')
<link href="{{ asset('assets/plugins/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ asset('assets/plugins/tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Mailbox</h1>                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="mail-inbox.html">Mailbox</a>
                                    </li>
                                    <li class="active">
                                        <strong>Compose</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">

                                    <div class="col-md-3 col-sm-4 col-xs-12">

                                        <ul class="list-unstyled mail_tabs">
                                          @if (Auth::user()->can_post())

                                            <li class="">
                                                <a href="{{ url('Posts/create') }}" class=" btn btn-primary">
                                                    <i class="fa fa-send-o"></i> Published Post <span class="badge badge-orange pull-right">{{isset($posts) ? $posts->count() : ''}}</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-inbox"></i> Create Post <span class="badge badge-primary pull-right">6</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-edit"></i> Drafts <span class="badge badge-orange pull-right">2</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-star-o"></i> Favourite Posts
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}">
                                                    <i class="fa fa-trash-o"></i> Trash
                                                </a>
                                            </li>
                                            @else
                                            <li class="">
                                                <a href="{{ url('Posts/create') }}" class="btn btn-info ">
                                                    <i class="fa fa-star-o"></i> Favourite Posts
                                                </a>
                                            </li>
                                          @endif
                                        </ul>

                                    </div>

                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                        <div class="mail_content">

                                            <div class="row">
                                              <div class="col-md-12 col-sm-12 col-xs-12">

                                                  <!-- ********************************************** -->

                                                  <h3> {{isset($css->published) ? $css->published : ''}}</h3>
                                                  <table id="userPosts" class="display table table-hover table-condensed" cellspacing="0" width="100%">
                                                      <thead>
                                                          <tr>
                                                              <th>Title</th>
                                                              <th>Date Added</th>
                                                              <th>Date Modified </th>
                                                              <th>Action</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                        @if(isset($posts))
                                                          @foreach($posts as $post)
                                                            <tr>
                                                                <td>
                                                                  <a href="{{url("Posts/".$post->slug)}}">{!! str_limit($post->title, $limit = 25, $end = '..') !!}</a>
                                                                </td>
                                                                <td>{{$post->created_at}}</td>
                                                                <td>{{$post->updated_at}}</td>
                                                                <td>
                                                                   <a href="{!! action('PostController@edit', $post->slug) !!}" class="btn btn-primary">Edit</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                          @endif
                                                      </tbody


                                                  </table>
                                                  <!-- ********************************************** -->
                                              </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                      </div>


                </section>
@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
<script src="{{ asset('assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<!--data table-->
<script src="{{ asset('assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
<script type="text/javascript">
$(document).ready(function() {
      $('#userPosts').DataTable({
      });
  } );
</script>
@endsection
