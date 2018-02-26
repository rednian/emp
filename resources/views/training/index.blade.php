@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@endsection
@section('content')
    <div class="page-head">
        <div class="page-title">
            <h1>Training <small>Information</small></h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">

            <section class="row">
                <div class="col-sm-7">
                    <section class="portlet light">
                        <div class="portlet-title">
                            <section class="caption">
                                <i class=" font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold">Training List</span>
                            </section>
                        </div>
                        <div class="portlet-body">
                            <table class="table" id="training">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Venue</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach($trainings as $training)

                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{ucwords($training->title)}}</td>
                                        <td>{{date('F d',strtotime($training->start)).' - '.date('d, Y',strtotime($training->end))}}</td>
                                        <td>{{ucwords($training->venue)}}</td>
                                        <td>{{ucwords($training->description)}}</td>
                                        <td>
                                            <a href="#" class="btn btn-link" style="padding-right: 1px"><span class="fa fa-pencil-square-o grey-steel"></span></a>

                                            <form action="{{route('training.destroy',$training)}}" method="post" style="display: inline">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn btn-link" style="padding-left: 1px"><span class="fa fa-trash-o grey-steel"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </section>
                </div>

                <div class="col-sm-5">
                    <section class="portlet light">
                        <div class="portlet-title">
                            <section class="caption">
                                <i class="fa fa-plus font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold">Training Form</span>
                            </section>
                        </div>
                        <div class="portlet-body">

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

            $('table#training').DataTable();

        });
    </script>
@endsection
