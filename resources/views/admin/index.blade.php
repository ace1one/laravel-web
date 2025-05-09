@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Josh Admin Template
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="{{ asset('vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/only_dashboard.css') }}" />
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}">

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Welcome to Dashboard</h1>
        <ol class="breadcrumb">
            <li class=" breadcrumb-item active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Dashboard
                </a>
            </li>
        </ol>
    </section>
    <section class="content indexpage px-3">
        <div class="row">
            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animate__animated animate__fadeInLeftBig">
                <!-- Trans label pie charts strats here-->
                <div class="lightbluebg bg-primary text-white no-radius">
                    <div class="card-body squarebox square_boxs cardpaddng">
                        <div class="row">
                            <div class="col-12 float-start nopadmar">
                                <div class="row">
                                    <div class="square_box col-6 text-end">
                                        <span>Views Today</span>

                                        <div class="number" id="myTargetElement1"></div>
                                    </div>
                                    <div class="col-6">
                                        <i class="livicon  float-end" data-name="eye-open" data-l="true" data-c="#fff"
                                            data-hc="#fff" data-s="70"></i>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement1.1"></h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement1.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animate__animated animate__fadeInUpBig">
                <!-- Trans label pie charts strats here-->
                <div class="redbg bg-danger text-white no-radius">
                    <div class="card-body squarebox square_boxs cardpaddng">
                        <div class="row">
                            <div class="col-12 float-start nopadmar">
                                <div class="row">
                                    <div class="square_box col-6 float-start">
                                        <span>Today's Sales</span>

                                        <div class="number" id="myTargetElement2"></div>
                                    </div>
                                    <div class="col-6">
                                        <i class="livicon float-end" data-name="piggybank" data-l="true" data-c="#fff"
                                            data-hc="#fff" data-s="70"></i>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement2.1"></h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement2.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 margin_10 animate__animated animate__fadeInDownBig">
                <!-- Trans label pie charts strats here-->
                <div class="goldbg bg-warning text-white no-radius">
                    <div class="card-body squarebox square_boxs cardpaddng">
                        <div class="row">
                            <div class="col-12 float-start nopadmar">
                                <div class="row">
                                    <div class="square_box col-6 float-start">
                                        <span>Subscribers</span>

                                        <div class="number" id="myTargetElement3"></div>
                                    </div>
                                    <div class="col-6">
                                        <i class="livicon float-end" data-name="archive-add" data-l="true" data-c="#fff"
                                            data-hc="#fff" data-s="70"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement3.1"></h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement3.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animate__animated animate__fadeInRightBig">
                <!-- Trans label pie charts strats here-->
                <div class="palebluecolorbg bg-success text-white no-radius">
                    <div class="card-body squarebox square_boxs cardpaddng">
                        <div class="row">
                            <div class="col-12 float-start nopadmar">
                                <div class="row">
                                    <div class="square_box col-6 float-start">
                                        <span>Registered Users</span>

                                        <div class="number" id="myTargetElement4"></div>
                                    </div>
                                    <div class="col-6">
                                        <i class="livicon float-end" data-name="users" data-l="true" data-c="#fff"
                                            data-hc="#fff" data-s="70"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement4.1"></h4>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement4.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-8 col-12 my-3">
                <div class="card card-border">
                    <div class="card-header">
                        <span>
                            <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14"
                                data-hc="#F89A14"></i>
                            Realtime Server Load
                            <small>- Load on the Server</small>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="realtimechart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 col-12 my-3">
                <div class="card blue_gradiant_bg">
                    <div class="card-header">
                        <span class=" card_font">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                                data-hc="white"></i>
                            Server Stats
                            <small>- Monthly Report</small>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar"></div>
                                <h3 class="title">Network</h3>
                            </div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_line"></div>
                                <h3 class="title">Load Rate</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN Percentage monitor -->
                <div class="card green_gradiante_bg">
                    <div class="card-header">
                        <span class=" card_font">
                            <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff"
                                data-hc="white"></i>
                            Result vs Target
                        </span>
                    </div>
                    <div class="card-body nopadmar">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <h4 class="text-dark-emphasis">Sales</h4>
                                <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45"><span
                                        class="percent">45</span>
                                </span>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6 text-center">
                                <h4 class="text-dark-emphasis">Reach</h4>
                                <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                    <span class="percent">25</span>
                                </span>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>

                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- END BEGIN Percentage monitor-->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                <div class="card card-border card-border-rad">
                    <div class="card-header bg-success text-white">

                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                            data-hc="#fff"></i> Calendar

                    </div>
                    <div class="card-body">
                        <div id='external-events'></div>
                        <div id="calendar" class="cal"></div>
                        <div id="fullCalModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="modalTitle" class="modal-title"></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                                aria-hidden="true">×</span> <span
                                                class="visually-hidden">close</span></button>

                                    </div>
                                    <div id="modalBody" class="modal-body">
                                        <i class="mdi-action-alarm-on"></i>&nbsp;&nbsp;Start: <span
                                            id="startTime"></span>&nbsp;&nbsp;-
                                        End: <span id="endTime"></span>
                                        <h4 id="eventInfo"></h4>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-raised btn-danger "
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer pad-5 d-grid">
                            <a href="#" class="btn btn-success createevent_btn clr" data-bs-toggle="modal"
                                data-bs-target="#myModal">Create event
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title me-auto" id="myModalLabel">
                                            <i class="fa fa-plus"></i> Create Event
                                        </h4>
                                        <button type="button" class="btn-close reset" data-bs-dismiss="modal"
                                            aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" id="new-event" class="form-control"
                                                placeholder="Event">
                                            <div class="input-group-btn">
                                                <button type="button" id="color-chooser-btn"
                                                    class="color-chooser btn btn-info dropdown-toggle"
                                                    data-bs-toggle="dropdown">
                                                    Type
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu float-end" id="color-chooser">
                                                    <li>
                                                        <a class="palette-primary" href="#">Primary</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-success" href="#">Success</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-info" href="#">Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-warning" href="#">warning</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-danger" href="#">Danger</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-default" href="#">Default</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success me-auto" id="add-new-event"
                                            data-bs-dismiss="modal">
                                            <i class="fa fa-plus"></i> Add
                                        </button>
                                        <button type="button" class="btn btn-danger justify-content-end reset"
                                            data-bs-dismiss="modal">
                                            Close
                                            <i class="fa fa-times"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">
                                            <i class="fa fa-plus"></i>
                                            Edit Event
                                        </h4>
                                        <button type="button" class="btn-close reset" data-bs-dismiss="modal"
                                            aria-hidden="true"></button>


                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" id="event_title" class="form-control"
                                                placeholder="Event">
                                            <div class="input-group-btn">
                                                <button type="button" id="color-chooser-btn_edit"
                                                    class="color-chooser btn btn-info dropdown-toggle "
                                                    data-bs-toggle="dropdown">
                                                    Type
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu float-end" id="color-chooser">
                                                    <li>
                                                        <a class="palette-primary" href="#">Primary</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-success" href="#">Success</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-info" href="#">Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-warning" href="#">warning</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-danger" href="#">Danger</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-default" href="#">Default</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success me-auto text_save"
                                            data-bs-dismiss="modal">
                                            Update
                                        </button>
                                        <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">
                                            Close
                                            <i class="fa fa-times"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- To do list -->
            <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                <div class="card todolist card-border-rad">
                    <div class="card-header bg-primary text-white ">
                        <span class=" background_color">
                            <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                                data-l="true"></i>
                            Tasks
                        </span>
                    </div>
                    <div class="card-body nopadmar top_height">
                        <div class="card-body">
                            <div class="scroller_height">
                                <div class="row list_of_items">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="add_list adds bg_white">
                            {!! Form::open(['class' => 'form', 'id' => 'main_input_box']) !!}
                            <div class="mb-3">
                                {!! Form::label('task_description', 'Task description: ') !!}
                                {!! Form::text('task_description', null, [
                                    'class' => 'form-control',
                                    'id' => 'task_description',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="mb-3">
                                {!! Form::label('task_deadline', 'Deadline: ') !!}
                                {!! Form::text('task_deadline', null, [
                                    'class' => 'form-control datepicker',
                                    'id' => 'task_deadline',
                                    'data-date-format' => 'YYYY/MM/DD',
                                    'required' => 'required',
                                    'autocomplete' => 'off',
                                ]) !!}
                            </div>
                            <button type="submit" class="btn btn-primary add_button">
                                Add Task
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-12 my-3">
                <div class="card  card-border-rad">
                    <div class="card-header bg-danger text-white">
                        <span>
                            <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white"
                                data-l="true"></i>
                            Quick Mail
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="compose row">
                            <div class="row">
                                <label class="col-sm-2 col-md-3 d-none d-sm-block col-form-label p-0">To:</label>
                                <input type="text" class="form-control col" placeholder="name@email.com "
                                    tabindex="1" />
                            </div>

                            <div class="clear"></div>
                            <div class="row">
                                <label class="col-sm-2 col-md-3 d-none d-sm-block p-0 col-from-label">Subject:</label>
                                <input type="text" class="form-control col" tabindex="1" placeholder="Subject" />
                            </div>

                            <div class="clear"></div>
                            <div class="box-body">
                                <form>
                                    <textarea class="textarea textarea_home form-control" placeholder="Write mail content here"></textarea>
                                </form>
                            </div>
                            <div class="ms-auto my-2">
                                <a href="#" class="btn btn-danger clr">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 my-3">
                <div class="card card-border">

                    <div class="card-header">
                        <h4 class="card-title float-start margin-top-10">
                            <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763"
                                data-hc="#515763"></i>
                            Visitors Map
                        </h4>

                        <div class="btn-group float-end">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="livicon" data-name="settings" data-size="16" data-loop="true"
                                    data-c="#515763" data-hc="#515763"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="card-collapse collapses" href="#">
                                        <i class="fa fa-angle-up"></i>
                                        <span>Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="card-refresh" href="#">
                                        <i class="fa fa-redo"></i>
                                        <span>Refresh</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="card-config" href="#card-config" data-bs-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                        <span>Configurations</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="card-expand" href="#">
                                        <i class="fa fa-expand"></i>
                                        <span>Fullscreen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="card-body nopadmar nopad_lr">
                        <div id="world-map-markers"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('js/pages/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
    <!--for calendar-->
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/fullcalendar/index.global.min.js') }}" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{ asset('vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.umd.js') }}"></script>
    <!--   maps -->
    <script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--  todolist-->
    <script src="{{ asset('js/pages/todolist.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}" type="text/javascript"></script>

@stop
