@extends('layouts.app')
@section('otherCSS')

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
                                                <a href="mail-inbox.html">
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

                                                    <h3 class="mail_head">Inbox <sup>(5)</sup></h3>
                                                    <i class='fa fa-refresh icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-search icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-cog icon-primary icon-xs icon-orange mail_head_icon pull-right'></i>


                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <div class="pull-left">
                                                        <div class="btn-group mail_more_btn">
                                                            <button type="button" class="btn btn-default"><input type='checkbox' class="iCheck"> All</button>
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">All</a></li>
                                                                <li><a href="#">Read</a></li>
                                                                <li><a href="#">Unread</a></li>
                                                                <li><a href="#">Starred</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <nav class='pull-right'>
                                                        <ul class="pager mail_nav">
                                                            <li><a href="#"><i class='fa fa-arrow-left icon-xs icon-orange icon-secondary'></i></a></li>
                                                            <li><a href="#"><i class='fa fa-arrow-right icon-xs icon-orange icon-secondary'></i></a></li>
                                                        </ul>
                                                    </nav>
                                                    <span class='pull-right mail_count_nav text-muted'><strong>1</strong> to <strong>20</strong> of 3247</span>

                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 mail_list">
                                                    <table class="table table-striped table-hover">

                                                        @if(is_object($emails))
                                                            @foreach($emails as $email)
                                                                <tr class="{{$email['emailStatus']}}" >
                                                                    <td class=""><input class="iCheck" type="checkbox"></td>
                                                                    <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                                    <td class="open-view"><input name="_method" type="hidden" value="{{$email['isUID']}}" id="{{$email['isUID']}}">{{str_limit($email['from'], $limit = 15, $end = '..')}}</td>
                                                                    <td class="open-view"><span class="label label-primary">Family</span>&nbsp;<span class="msgtext">{{$email['subject']}}</span></td>
                                                                    <td class="open-view"><span class="msg_time">{{$email['sentOn']}}</span></td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </table>
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
