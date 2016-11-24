@extends('layouts.app')
@section('otherCSS')
       <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection

@section('content')
<section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Asset Register</h1>
                            </div>
                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-pricing.html">Pages</a>
                                    </li>
                                    <li class="active">
                                        <strong> Add Inventory</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

        </section>
        <div class="col-lg-12">
                                <section class="box ">
                                    <header class="panel_header">
                                        <h2 class="title pull-left">Inventory Item</h2>
                                        <div class="actions panel_actions pull-right">
                                            <i class="box_toggle fa fa-chevron-down"></i>
                                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                            <i class="box_close fa fa-times"></i>
                                        </div>
                                    </header>
                                    <div class="content-body">    <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                  <form action="{{ url('inventory/update') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Field</th>
                                                                <th>Data</th>
                                                                <th>Field</th>
                                                                <th>Data</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Type</th>
                                                                <td><input type="text" placeholder="Asset Type" name="asset_type" class="form-control" id="field-1" autofocus=""></td>
                                                                <td scope="row">Model</td>
                                                                <td><input type="text" placeholder="Asset Model" name="asset_model" class="form-control" id="field-1"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Serial</th>
                                                                <td><input type="text" placeholder="Asset serial" name="asset_serial" class="form-control" id="field-1"></td>
                                                                <td scope="row">Tag</td>
                                                                <td><input type="text" placeholder="Company Tag" name="asset_tag" class="form-control" id="field-1"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Location</th>
                                                                <td><input type="text" placeholder="Asset Location" name="asset_location" class="form-control" id="field-1"></td>
                                                                <td scope="row">Status</td>
                                                                <td><input type="text" placeholder="Asset Status" name="asset_status" class="form-control" id="field-1"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">User</th>
                                                                <td><input type="text" placeholder="Asset User" name="asset_user" class="form-control" id="field-1"></td>
                                                                <td scope="row">Contact Number</td>
                                                                <td><input type="text" placeholder="Mobile Number" name="contact_number" class="form-control" id="field-1"></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">Notes</th>
                                                                <td colspan= "3"><textarea class="form-control autogrow" name="asset_notes" cols="5" id="field-6"></textarea></td>

                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                    <div class="text-left">
                                        <input type="submit" class="btn btn-primary pull-left" value="Save" />
                                        <a href="{!! action('InventoryController@index') !!}" class="btn btn-success pull-left">Back</a>
                                    </div>
                                </div>
                        </form>


@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
