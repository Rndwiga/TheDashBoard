@extends('layouts.app')
@section('otherCSS')
<style type="text/css">
/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}

.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
	top: 3px;
	left: 3.5px;
	content: '\e013';
	color: #fff;
	font-size: 11px;
	font-family: 'Glyphicons Halflings';
	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}

.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.pagado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
</style>
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
                                        <strong>Inbox</strong>
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


                                        <a class="btn btn-primary btn-block" href='mail-compose.html'>Compose</a>

                                        <ul class="list-unstyled mail_tabs">
                                            <li class="active">
                                                <a href="{{ url('Emails') }}">
                                                    <i class="fa fa-inbox"></i> Inbox <span class="badge badge-primary pull-right">6</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-sent.html">
                                                    <i class="fa fa-send-o"></i> Sent
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-drafts.html">
                                                    <i class="fa fa-edit"></i> Drafts <span class="badge badge-orange pull-right">2</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-important.html">
                                                    <i class="fa fa-star-o"></i> Important
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-trash.html">
                                                    <i class="fa fa-trash-o"></i> Trash
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                      <div class="row">

                                				<div class="panel panel-default">
                                					<div class="panel-body">
                                						<div class="pull-right">
                                							<div class="btn-group">
                                								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                                								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                                								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                                								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                                							</div>
                                						</div>
                                						<div class="table-container">
                                							<table class="table table-filter">
                                								<tbody>
                                                  @if(is_object($emails))
                                                      @foreach($emails as $email)
                                      									<tr data-status="pagado" class="unread">
                                        										<td>
                                        											<div class="ckbox"><input type="checkbox" id="checkbox1">
                                        												<label for="checkbox1"></label>
                                        											</div>
                                        										</td>
                                        										<td>
                                        											<a href="javascript:;" class="star"><i class="glyphicon glyphicon-star"></i>
                                        											</a>
                                        										</td>
                                        										<td>
                                        											<div class="media">
                                        												<a href="/Emails/{{$email['isUID']}}" class="pull-left">
                                        													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                        												</a>
                                        												<div class="media-body">
                                        													<span class="media-meta pull-right">{{$email['sentOn']}}</span>
                                        													<h4 class="title">{{$email['from']}}
                                        														<span class="pull-right pagado">({{$email['emailStatus']}})</span>
                                        													</h4>
                                        													<p class="summary">{{$email['subject']}}</p>
                                        												</div>
                                        											</div>
                                        										</td>
                                      									</tr>
                                                      @endforeach
                                                  @endif
                                								</tbody>
                                							</table>
                                						</div>
                                					</div>
                                				</div>
                                				<div class="content-footer">
                                					<p>
                                						Page © - 2016 <br>
                                						Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
                                					</p>
                                				</div>

                                      </div>
                                    </div>
                                </div>
                            </div>
                        </section></div>
                </section>

@endsection
@section('otherScripts')

<script type="application/javascript">
/*
$(document).ready(function() {
      function fetchEmail(emailId) {
        alert(emailId);
        }
    });
    */
</script>
@endsection
