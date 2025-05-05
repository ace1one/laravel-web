@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    @lang('notice/title.noticeList')
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap5.css') }}" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>@lang('notice/title.noticeList')</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16"
                        data-color="#000"></i>
                    @lang('general.dashboard')
                </a>
            </li>
            <li><a href="#">@lang('notice/title.notice')</a></li>
            <li class="active">@lang('notice/title.noticeList')</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content px-3">
        <div class="row">
            <div class="col-12">
                <div class="card ">
<div class="card-header bg-primary text-white clearfix">
                        <h4 class="card-title float-start"> <i class="livicon" data-name="users" data-size="16"
                                data-loop="true" data-c="#fff" data-hc="white"></i>
                            @lang('notice/title.noticeList')
                        </h4>
                        <div class="float-end">
<a href="{{ URL::to('admin/notice/create') }}" class="btn btn-sm btn-warning text-white"><span
                                    class="fa fa-plus"></span> @lang('button.create')</a>
                        </div>
                    </div>
                    <br />
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr class="filters">
                                        <th>@lang('notice/table.id')</th>
                                        <th>@lang('notice/table.title')</th>
                                        <th>@lang('notice/table.description')</th>
                                        <th>@lang('notice/table.status')</th>
                                        <th>@lang('notice/table.created_at')</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($notices))
                                        @foreach ($notices as $notice)
                                            <tr>
                                                <td>{{ $notice->id }}</td>
                                                <td>{{ $notice->title }}</td>
                                                <td>{{ $notice->description }}</td>
                                                <td>{{ $notice->status }}</td>
                                                <td>{{ $notice->created_at->diffForHumans() }}</td>
                                           
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap5.js') }}"></script>

    <script>
        $(document).ready(function() {
new DataTable('#table');
        });
    </script>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Blog</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this blog? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <script>
        $(function() {
            $('body').on('hidden.bs.modal', '.modal', function() {
                $(this).removeData('bs.modal');
            });
        });
        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this)
            modal.find('.modal-footer a').prop("href", $url_path + "/admin/blog/" + $recipient + "/delete");
        })
    </script>
@stop
