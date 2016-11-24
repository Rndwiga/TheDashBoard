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
                                        <strong>show</strong>
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
                                                                <td>{{ $item->asset_type }}</td>
                                                                <td scope="row">Model</td>
                                                                <td>{{ $item->asset_model }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Serial</th>
                                                                <td>{{ $item->asset_serial }}</td>
                                                                <td scope="row">Tag</td>
                                                                <td>{{ $item->asset_tag }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Location</th>
                                                                <td>{{ $item->asset_location }}</td>
                                                                <td scope="row">Status</td>
                                                                <td>{{ $item->asset_status }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">User</th>
                                                                <td>{{ $item->asset_user }}</td>
                                                                <td scope="row">Contact Number</td>
                                                                <td>{{ $item->contact_number }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Date Created</th>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td scope="row">Date Modified</td>
                                                                <td>{{ $item->updated_at }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Notes</th>
                                                                <td colspan= "3">{{ $item->asset_notes }}</td>

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
                <a href="{!! action('InventoryController@edit', $item->id) !!}" class="btn btn-primary pull-left">Update</a>
                <a href="{!! action('InventoryController@index') !!}" class="btn btn-success pull-left">Back</a>
                <form action="/inventory/{{ $item->id }}" method="POST" class="pull-left">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="submit" class="btn btn-danger" value="Delete" />
                </form>
            </div>
        </div>


@endsection

@section('otherScripts')
 <script src="{{ asset('assets/plugins/autosize/autosize.min.js ') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
