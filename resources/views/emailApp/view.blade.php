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
																			<div class="mail_content">

																					<div class="row">
																							<div class="col-md-12 col-sm-12 col-xs-12">

																									<h3 class="mail_head">View</h3>
																									<i class='fa fa-refresh icon-primary icon-xs icon-orange mail_head_icon'></i>
																									<i class='fa fa-search icon-primary icon-xs icon-orange mail_head_icon'></i>
																									<i class='fa fa-cog icon-primary icon-xs icon-orange mail_head_icon pull-right'></i>


																							</div>

																							<div class="col-md-12  col-sm-12 col-xs-12 mail_view_title">

																									<div class="pull-left">
																											<h3 class="">{{$email->subject}}.</h3>
																									</div>

																									<div class='pull-right'>
																											<button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Reply" data-placement="top">
																													<i class="fa fa-reply icon-xs"></i>
																											</button>
																											<button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Reply All" data-placement="top">
																													<i class="fa fa-reply-all icon-xs"></i>
																											</button>
																											<button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Forward" data-placement="top">
																													<i class="fa fa-mail-forward icon-xs"></i>
																											</button>
																											<button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Attachments" data-placement="top">
																													<i class="fa fa-paperclip icon-xs"></i>
																											</button>
																											<button class="btn btn-default btn-icon" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Trash" data-placement="top">
																													<i class="fa fa-trash-o icon-xs"></i>
																											</button>
																									</div>

																							</div>

																							<div class="col-md-12  col-sm-12 col-xs-12 mail_view_info">

																									<div class="pull-left">
																											<span class=""> from {{$email->fromName ? '<strong>'. $email->fromName . '</strong> (' . $email->fromAddress . ')'  : $email->fromAddress }} to You </span>
																									</div>

																									<div class='pull-right'>
																											<span class='msg_ts text-muted'>{{$email->date}}</span>
																									</div>

																							</div>



																							<div class="col-md-12  col-sm-12 col-xs-12 mail_view">
																									<?php print_r($email->textHtml) ?>
																							</div>


																							<div class="col-md-12  col-sm-12 col-xs-12 mail_view_attach">
																									<h3>
																											<i class="fa fa-paperclip icon-sm"></i> Attachments
																									</h3><br>

																									<ul class="list-unstyled list-inline">
																											<li>
																													<a href="#" class="file">
																															<img src="data/mail/attach-1.png" class="img-thumbnail">
																													</a>

																													<a href="#" class="title">
																															Project_details.jpg
																															<span>10KB</span>
																													</a>

																													<div class="actions">
																															<a href="#">View</a> -
																															<a href="#">Download</a>
																													</div>
																											</li>

																											<li>
																													<a href="#" class="file">
																															<img src="data/mail/attach-2.png" class="img-thumbnail">
																													</a>

																													<a href="#" class="title">
																															Guidlines.jpg
																															<span>14KB</span>
																													</a>

																													<div class="actions">
																															<a href="#">View</a> -
																															<a href="#">Download</a>
																													</div>
																											</li>

																											<li>
																													<a href="#" class="file">
																															<img src="data/mail/attach-3.png" class="img-thumbnail">
																													</a>

																													<a href="#" class="title">
																															Team_info.jpg
																															<span>12KB</span>
																													</a>

																													<div class="actions">
																															<a href="#">View</a> -
																															<a href="#">Download</a>
																													</div>
																											</li>
																									</ul>
																							</div>


																							<div class="col-md-12  col-sm-12 col-xs-12 mail_view_reply">
																									<div class="form-group">
																											<div class="controls">
																													<textarea class="form-control autogrow" cols="5" id="field-7" placeholder="Reply or Forward this message" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 120px;"></textarea>
																											</div>
																									</div>
																							</div>

																					</div>

																			</div>
                                    </div>
                                </div>
                            </div>
                        </section></div>
                </section>

@endsection
@section('otherScripts')

@endsection
