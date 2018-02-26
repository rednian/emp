@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
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
                <div class="col-sm-10">
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
@endsection
@section('script')
    <script src="{{asset('/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('/js/datatable.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('table#table-employee').DataTable();

        });
    </script>
@endsection


