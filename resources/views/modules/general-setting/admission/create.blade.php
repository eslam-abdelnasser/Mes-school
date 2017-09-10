@extends('admin-layout')


@section('title','Create')

@section('css')
    <link href="{{asset('admin-panel/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-panel/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-panel/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-panel/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-panel/assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">تفعيل بدأ الالتحاق</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal"  action="{{route('admission.post')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-body">

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-3 control-label">تفعيل الالتحاق</label>--}}
                                {{--<div class="col-md-9">--}}
                                    {{--<div class="mt-checkbox-list">--}}
                                        {{--<label class="mt-checkbox">--}}
                                            {{--<input type="checkbox" name="status" class="test"> تفعيل الالتحاق--}}
                                            {{--<span></span>--}}
                                        {{--</label>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label class="col-md-3 control-label">تفعيل الالتحاق</label>
                                <div class="col-md-9">
                                    <div class="mt-radio-list " id="element">
                                        <div>
                                            <label class="mt-radio">
                                                <input type="radio" name="status" id="optionsRadios22" value="yes" >نعم
                                                <span></span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="mt-radio">
                                                <input type="radio" name="status" id="optionsRadios23" value="no" checked=""> لا
                                                <span></span>
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>

                                <div class="form-group  date_range_class hidden">
                                    <label class="control-label col-md-3"> التاريخ من</label>
                                    <div class="col-md-4">
                                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                            <input type="text" class="form-control"  id="my-datepicker" name="from">
                                            <span class="input-group-addon"> الى </span>
                                            <input type="text" class="form-control" name="to"> </div>
                                        <!-- /input-group -->
                                        {{--<span class="help-block"> Select date range </span>--}}
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->

        </div>
    </div>


@endsection


@section('js')
    <script src="{{asset('admin-panel/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('admin-panel/assets/pages/scripts/components-bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('admin-panel/assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{asset('custom/custom.js')}}"></script>

@endsection