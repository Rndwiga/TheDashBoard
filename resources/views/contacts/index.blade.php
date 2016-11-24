@extends('layouts.app')
@section('otherCSS')
  <link href="{{ asset('assets/plugins/datatables/css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css') }}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title">Contacts</h1>                            </div>

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
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <section class="box ">
              <header class="panel_header badge-success">
                  <h2 class="title pull-left">New Contact</h2>
                  <div class="actions panel_actions pull-right">
                      <i class="box_toggle fa fa-chevron-down"></i>
                      <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                      <i class="box_close fa fa-times"></i>
                  </div>
              </header>
              <div class="content-body">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                          <form action="{{ url('ContactDetails') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <!--    <input name="_method" type="hidden" value="POST"> -->
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-3"><label class="form-label" for="field-1">Contact Image</label></div>
                                    <div class="col-lg-9"><input type="file" value="data/profile/user.png" name="contact_picture" class="form-control" id="field-5"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-4"><label class="form-label" for="field-3">Name</label></div>
                                    <div class="col-lg-8"><input type="text" name="name" class="form-control" id="field-5"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-4"><label class="form-label" for="field-2">Phone</label></div>
                                    <div class="col-lg-8"><input type="text" name="mobile" class="form-control" id="field-5"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-4"><label class="form-label" for="field-3">Address</label></div>
                                    <div class="col-lg-8"><input type="text" name="address" class="form-control" id="field-5"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-4"><label class="form-label" for="field-3">Profession</label></div>
                                    <div class="col-lg-8"><input type="text" name="profession" class="form-control" id="field-5"></div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 padding-bottom-30">
                            <img class="img-responsive" src="{{ asset($user->userProfile->profile_picture)}}" alt="" style="max-width:120px;">
                            <br />
                              <div class="btn-group btn-group-justified">
                                  <input type="submit" class="btn btn-block btn-primary" value="Save" />
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </section>
        </div>
@if(!empty($contacts))
  @foreach($contacts as $contact)
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <section class="box nobox">
                <div class="content-body">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="wid-uprofile bg-info">

                                <div class="uprofile-image">
                                    <img src="{{ asset($contact->contact_picture)}}" class="img-responsive">
                                </div>
                                <div class="uprofile-name">
                                    <h3>
                                        <a href="#">{{ $contact->name}}</a>
                                        <!-- Available statuses: online, idle, busy, away and offline -->
                                        <span class="uprofile-status idle"></span>
                                    </h3>
                                    <p class="uprofile-title">{{ $contact->profession}}</p>
                                </div>
                                <div class="uprofile-info">
                                    <ul class="list-unstyled">
                                        <li><i class='fa fa-home'></i>{{ $contact->address}}</li>
                                        <li><i class='fa fa-phone-square'></i> {{ $contact->mobile}}</li>
                                        <li><i class='fa fa-suitcase'></i> Tech Lead, YIAM</li>
                                    </ul>
                                </div>

                                <div class=" uprofile-social">
                                    <div>
                                      <a href="#" class="btn btn-primary btn-sm facebook"><i class="fa fa-facebook icon-xs"></i></a>
                                      <a href="#" class="btn btn-primary btn-sm twitter"><i class="fa fa-twitter icon-xs"></i></a>
                                      <a href="#" class="btn btn-primary btn-sm google-plus"><i class="fa fa-google-plus icon-xs"></i></a>
                                      <a href="#" class="btn btn-primary btn-sm dribbble"><i class="fa fa-dribbble icon-xs"></i></a>
                                    </div>
                                    <div class="btn-group btn-group-justified">
                                        <div class="">
                                          <div class="pull-left">
                                             <a href="{{ action('ContactDetailsController@edit', $contact->id) }}" class="btn btn-md btn-primary">Update</a>
                                           </div>
                                          <form action="/ContactDetails/{{ $contact->id }}" method="POST" class="pull-right">
                                            {{ csrf_field() }}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="submit" class="btn  btn-danger" value="Delete" />
                                          </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>
      @endforeach
    @endif
</section>
@endsection
@section('otherScripts')



<script src="{{ asset('assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
<script type="text/javascript">
$(document).ready(function() {
      $('#inventoryTable').DataTable({

        "sDom": "<'row'<'col-md-6'l T><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
        "oTableTools": {
            "aButtons": [{
                "sExtends": "collection",
                "sButtonText": "<i class='fa fa-cloud-download'></i>",
                "aButtons": ["csv", "xls", "pdf", "copy"]
            }]
        },
      });
  } );
</script>

@endsection
