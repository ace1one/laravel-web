@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Sent
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- page level css -->
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                    data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                            </a>
                        </li>
                        <li class="d-none d-sm-block ">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="#"> Emails</a>
                        </li>
                    </ol>
                    <div class="float-end mt-1">
                        <i class="livicon icon3" data-name="pen" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> Sent
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
{{-- Page content --}}
@section('content')
    <aside class="right-aside">
        <!-- Content Header (Page header) -->
        <div class="container my-3">
            <h2>Sent</h2>
            <!-- Main content -->
            <section class="content px-3">
                <div class="row web-mail">
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="whitebg1">
                            <ul>
                                <li class="compose">
                                    <a href="{{ URL::to('user_emails/compose') }}">
                                        <i class="fa fa-fw fa-envelope"></i>
                                        &nbsp; &nbsp;Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('user_emails/inbox') }}">
                                        <i class="fa fa-inbox" aria-hidden="true"></i>
                                        &nbsp; &nbsp;Inbox
@if ($unread_mails_count > 0)
                                        <span class="badge bg-success float-end mt-1 bg-pill">{{ $unread_mails_count }}</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ URL::to('user_emails/sent') }}">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        &nbsp; &nbsp; Sent
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8">
                        <div class="whitebg1 mail_inbox_all">
                            <table class="table table-striped table-advance table-hover table-responsive" id="inbox-check">
                                <thead>
                                    <tr>
                                        <td colspan="6" class="bg-primary">
                                            <div class="col-md-8">
                                                <h4 class="mb-0">
                                                    <strong class="text-white">Sent</strong>
                                                </h4>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">
                                            <div class="row">
                                                <div class="col-md-9 col-lg-9 col-xs-12">
                                                    <div
                                                        class="btn-group float-start table-bordered paddingrightleft_10 paddingtopbottom_5px">
                                                        <input type="checkbox" id="checkall" class="icheck">
                                                        <a class="dropdown-toggle" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" href="#">
                                                        </a>
                                                        <ul class="dropdown-menu ul" aria-labelledby="dropdownMenuButton" l>
                                                            <!-- dropdown menu links -->
                                                            <li>
                                                                <a href="#" class="all dropdown-item">All</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="mark_as_read dropdown-item">Read</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="mark_as_unread dropdown-item">UnRead</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="mark_as_star dropdown-item">Starred</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="mark_as_unstar dropdown-item">Unstarred</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="btn-group float-start table-bordered refresh_padding paddingrightleft_10 paddingtopbottom_5px margin_left">
                                                        <i class="fa fa-redo" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xs-12">
                                                    <div class="float-end">
                                                        {{ $emails->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="tr_read">
                                    @foreach ($emails as $email)
                                        <tr data-messageid="{{ $email->id }}" class="unread">
                                            <td class="inbox-small-cells width7">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox">
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="read_td"><input type="hidden" value="{{ $email->status }}"
                                                    @if ($email->status == 0) class="read" @else class="unread" @endif>
                                            </td>
                                            <td class="inbox-small-cells width2">
                                                <div class="rating">
                                                    <i class="fa fa-star starred"></i>
                                                </div>
                                            </td>
                                            <td class="view-message width22 d-none d-sm-inline">
                                                <a href="{{ URL::to('user_emails/' . $email->id) }}">
                                                    @if ($email->receiverName->pic)
                                                        <img src="{!! $email->receiverName->pic !!}" alt="img" width="35"
                                                            height="35"
                                                            class="rounded-circle img-responsive img_height float-start" />
                                                    @elseif(Sentinel::getUser()->gender === 'male')
                                                        <img src="{{ asset('images/authors/avatar3.png') }}"
                                                            alt="img" height="35px" width="35px"
                                                            class="rounded-circle img-fluid float-start" />
                                                    @elseif(Sentinel::getUser()->gender === 'female')
                                                        <img src="{{ asset('images/authors/avatar5.png') }}"
                                                            alt="img" height="35px" width="35px"
                                                            class="rounded-circle img-fluid float-start" />
                                                    @else
                                                        <img src="{{ asset('images/authors/no_avatar.jpg') }}"
                                                            alt="img" height="35px" width="35px"
                                                            class="rounded-circle img-fluid float-start" />
                                                    @endif
                                                    {{ $email->receiverName->first_name }}
                                                    {{ $email->receiverName->last_name }}
                                                </a>
                                            </td>
                                            <td class="view-message width40">
                                                <a
                                                    href="{{ URL::to('user_emails/' . $email->id) }}">{{ $email->subject }}</a>
                                            </td>

                                            <td class="view-message text-end width23">
                                                <a
                                                    href="{{ URL::to('user_emails/' . $email->id) }}">{{ $email->created_at->diffForHumans() }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </aside>

    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/mail_box.js') }}"></script>

@stop
