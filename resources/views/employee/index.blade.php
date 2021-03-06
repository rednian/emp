@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}"/>
    <link rel="stylesheet" href="{{asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/plugins/select2/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('/plugins/select2/select2-bootstrap.css')}}"/>
@endsection
@section('content')
    <div class="page-head">
        <div class="page-title">
            <h1>Employee <small>Information</small></h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">

            <section class="row">
                <div class="col-sm-12">
                    <section class="portlet light">
                        <div class="portlet-title">
                            <section class="caption">
                                <i class="fa fa-user font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold">Employee List</span>
                            </section>
                        </div>
                        <div class="portlet-body">
                            <table class="table" id="table-employee">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach($employees as $employee)
                                        @if($employee->role != 'admin')
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{ucwords($employee->firstname).' '.ucwords($employee->middlename).' '.ucwords($employee->lastname)}}</td>
                                            <td>{{strtolower($employee->username)}}</td>
                                            <td>
                                                <a href="{{$employee->emp_id}}" data-toggle="modal" id="btn-training" data-target="#modal-employee-training" class="btn btn-link">training</a>
                                                <a href="{{$employee->emp_id}}" data-toggle="modal" id="btn-log" data-target="#modal-employee-log" class="btn btn-link">logs</a>
                                                <a href="{{route('employee.show',$employee)}}" class="btn btn-link"><span class="icon-folder-open"></span></a>

                                                <form action="{{route('employee.destroy',$employee)}}" method="post" style="display: inline;">
                                                    {{method_field('DELETE')}}
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-link"><span class="icon-remove"></span></button>
                                                </form>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
    {{--Logs Modal--}}
    <div class="modal fade" id="modal-employee-log">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Employee Logs</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('employee.upload')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input name="emp_id" id="log-emp-id" type="hidden"/>
                            <label for="" class="control-label col-sm-4">Log Date <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-sm-4">Logs <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="log">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn green">Upload Logs</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{--Training modal--}}
    <div class="modal fade" id="modal-employee-training" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <section class="row">
                    <div class="col-xs-10 colx-xs-offet-1">
                    <form action="{{route('employee.training')}}" class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label">Training <span class="required">*</span></label>
                            <input name="emp_id" id="frm-emp-id" type="hidden"/>
                            <div class="col-sm-9">
                                <select class="form-control select2" id="training" name="t_id[]" multiple="multiple">
                                    @foreach($trainings as $training)
                                        <option value="{{$training->t_id}}">{{ucwords($training->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn green">Save Trainings</button>
                </form>
             </div>
    </div>
  </div>
</div>

@endsection
@section('script')
    <script src="{{asset('/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/plugins/select2/select2.js')}}"></script>
    <script src="{{asset('/plugins/select2/select2.min.js')}}"></script>

    <script src="{{asset('/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('/js/datatable.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('table#table-employee').DataTable();

            training();
            logs();

            $('input[name="date"]').daterangepicker({
                "autoApply": true,
//                "startDate": "02/20/2018",
//                "endDate": "02/26/2018"
            }, function(start, end, label) {
                // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });

        });
        
        function logs() {
            $('#modal-employee-log').on('show.bs.modal', function () {
                var emp_id = $('a#btn-log').attr('href');
                $('input[type="hidden"]#log-emp-id').val(emp_id);
            });

            $("#modal-employee-log").on('hide.bs.modal', function () {
                $('input[type="hidden"]#frm-emp-id').val('');
            });
        }
        
        function training() {

            $('select#training').select2({allowClear: true});

            $('#modal-employee-training').on('show.bs.modal', function () {
                var emp_id = $('a#btn-training').attr('href');
                $('input[type="hidden"]#frm-emp-id').val(emp_id);
            });

            $("#modal-employee-training").on('hide.bs.modal', function () {
                $('input[type="hidden"]#frm-emp-id').val('');
            });

        }
    </script>
@endsection


