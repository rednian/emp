@extends('layouts.master')
@section('style')
    <link href="{{asset('public/plugins/bootstrap-toggle/toggle-button.min.css')}}" rel="stylesheet">
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
                <div class="col-sm-7">
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

                                    <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Position </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text"  name="position" value="{{old('position')}}"/>
                                            @if ($errors->has('position'))
                                                <span class="help-block"><strong>{{ $errors->first('position') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Birthdate </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date"  name="birthdate" value="{{old('birthdate')}}"/>
                                            @if ($errors->has('birthdate'))
                                                <span class="help-block"><strong>{{ $errors->first('birthdate') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Address </label>
                                        <div class="col-sm-9">
                                            <textarea name="address" id="" class="form-control" rows="5">{{old('address')}}</textarea>
                                            @if ($errors->has('address'))
                                                <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-3">Role <span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input id="radio14" name="role" value="user" checked class="md-radiobtn" type="radio">
                                                    <label for="radio14">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        user
                                                    </label>
                                                </div>
                                                <div class="md-radio has-error">
                                                    <input id="radio15" name="role" value="admin" class="md-radiobtn" type="radio">
                                                    <label for="radio15">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>
                                                        admin
                                                    </label>
                                                </div>
                                            </div>
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
@section('script')
    <script src="{{asset('/plugins/bootstrap-toggle/toggle-button.min.js')}}"></script>
@endsection
