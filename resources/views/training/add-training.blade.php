@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}"/>
@endsection
@section('content')
    <div class="page-head">
        <div class="page-title">
            <h1>Blank Page <small>blank page</small></h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">

            <section class="row">
                <div class="col-sm-6">
                    <section class="portlet light">
                        <div class="portlet-title">
                            <section class="caption">
                                <i class="fa fa-plus font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold">Training Form</span>
                            </section>
                        </div>
                        <div class="portlet-body">
                            <form action="{{route('training.store')}}" method="post" role="form" class="form-horizontal">
                                <section class="form-body">
                                    {{csrf_field()}}

                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Title <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title" value="{{old('title')}}" autocomplete="off" autofocus/>
                                            @if ($errors->has('title'))
                                                <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Date <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="date" name="date" value="{{old('date')}}"/>
                                            @if ($errors->has('date'))
                                                <span class="help-block"><strong>{{ $errors->first('date') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('venue') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Venue <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="venue" name="venue" value="{{old('venue')}}"/>
                                            @if ($errors->has('venue'))
                                                <span class="help-block"><strong>{{ $errors->first('venue') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Description <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
                                            @if ($errors->has('date'))
                                                <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button class="btn green" type="submit">Add Training</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </section>
                </div>
            </section>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('input[name="date"]').daterangepicker({
                "autoApply": true,
//                "startDate": "02/20/2018",
//                "endDate": "02/26/2018"
            }, function(start, end, label) {
                console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });

        });
    </script>
@endsection
