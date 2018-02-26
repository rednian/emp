@extends('layouts.master')
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
                                <span class="caption-subject font-green-sharp bold">Employee Form</span>
                            </section>
                        </div>
                        <div class="portlet-body">
                            <form action="{{route('employee.store')}}" method="post" role="form" class="form-horizontal">
                                <section class="form-body">
                                    {{csrf_field()}}
                                    <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Firstname <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="firstname" value="{{old('firstname')}}" autocomplete="off" autofocus/>
                                            @if ($errors->has('firstname'))
                                                <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('middlename') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Middle name </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="middlename" name="middlename" value="{{old('middlename')}}"/>
                                            @if ($errors->has('middlename'))
                                                <span class="help-block"><strong>{{ $errors->first('middlename') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Lastname <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="venue" name="lastname" value="{{old('lastname')}}"/>
                                            @if ($errors->has('lastname'))
                                                <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button class="btn green" type="submit">Add Employee</button>
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
