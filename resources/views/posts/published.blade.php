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
                                    @include('partials.postMenu')

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
                                                                  <a href="{{url('Posts/'.$post->slug)}}">{!! str_limit($post->title, $limit = 25, $end = '..') !!}</a>
                                                                </td>
                                                                <td>{{$post->created_at}}</td>
                                                                <td>{{$post->updated_at}}</td>
                                                                <td>
                                                                  <form action="{{ $post->id }}" method="POST" class="pull-left">
                                                                    {{ csrf_field() }}
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <input type="submit" class="btn btn-danger" value="Delete" />
                                                                  </form>
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
