@extends('layouts.master')
@section('content')
    <div class="page-head">
        <div class="page-title">
            <h1>Blank Page <small>blank page</small></h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="row profile">
                <div class="col-md-12">
                    <!--BEGIN TABS-->
                    <div class="tabbable tabbable-custom tabbable-noborder">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">
                                    Overview </a>
                            </li>
                            <li>
                                <a href="#tab_1_3" data-toggle="tab">
                                    Account </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">
                                    <div class="col-md-3">

                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="{{ asset('/storage/'.$image = empty($employee->image) ? 'default/user.png' : $employee->image)}}" class="img-responsive img-thumbnail" alt="">
                                                <a href="javascript:;" class="profile-edit">
                                                    edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Projects </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Messages <span>
												3 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Friends </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8 profile-info">
                                                <h1>{{ucwords($employee->firstname).' '.ucwords($employee->middlename).' '.ucwords($employee->lastname)}}</h1>
                                                {{--<p>--}}
                                                    {{--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.--}}
                                                {{--</p>--}}
                                                {{--<p>--}}
                                                    {{--<a href="javascript:;">--}}
                                                        {{--www.mywebsite.com </a>--}}
                                                {{--</p>--}}
                                                <ul class="list-inline">
                                                    <li>
                                                        <i class="fa fa-map-marker"></i>
                                                        {{ucwords($employee->address)}}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        {{$date = empty($employee->birthdate) ? '': date('d M, Y',strtotime($employee->birthdate))}}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-briefcase"></i>
                                                        {{ucwords($employee->position)}}
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4">
                                                <div class="portlet sale-summary">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            Sales Summary
                                                        </div>
                                                        <div class="tools">
                                                            <a class="reload" href="javascript:;" data-original-title="" title="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <ul class="list-unstyled">
                                                            <li>
																<span class="sale-info">
																TODAY SOLD <i class="fa fa-img-up"></i>
																</span>
																<span class="sale-num">
																23 </span>
                                                            </li>
                                                            <li>
																<span class="sale-info">
																WEEKLY SALES <i class="fa fa-img-down"></i>
																</span>
																<span class="sale-num">
																87 </span>
                                                            </li>
                                                            <li>
																<span class="sale-info">
																TOTAL SOLD </span>
																<span class="sale-num">
																2377 </span>
                                                            </li>
                                                            <li>
																<span class="sale-info">
																EARNS </span>
																<span class="sale-num">
																$37.990 </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="tabbable tabbable-custom tabbable-custom-profile">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_11" data-toggle="tab" aria-expanded="true">
                                                        Latest Customers </a>
                                                </li>
                                                <li class="">
                                                    <a href="#tab_1_22" data-toggle="tab" aria-expanded="false">
                                                        Feeds </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_11">
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-briefcase"></i> Company
                                                                </th>
                                                                <th class="hidden-xs">
                                                                    <i class="fa fa-question"></i> Descrition
                                                                </th>
                                                                <th>
                                                                    <i class="fa fa-bookmark"></i> Amount
                                                                </th>
                                                                <th>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        Pixel Ltd </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Server hardware purchase
                                                                </td>
                                                                <td>
                                                                    52560.10$ <span class="label label-success label-sm">
																Paid </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs green-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        Smart House </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Office furniture purchase
                                                                </td>
                                                                <td>
                                                                    5760.00$ <span class="label label-warning label-sm">
																Pending </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs blue-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        FoodMaster Ltd </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Company Anual Dinner Catering
                                                                </td>
                                                                <td>
                                                                    12400.00$ <span class="label label-success label-sm">
																Paid </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs blue-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        WaterPure Ltd </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Payment for Jan 2013
                                                                </td>
                                                                <td>
                                                                    610.50$ <span class="label label-danger label-sm">
																Overdue </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs red-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        Pixel Ltd </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Server hardware purchase
                                                                </td>
                                                                <td>
                                                                    52560.10$ <span class="label label-success label-sm">
																Paid </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs green-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        Smart House </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Office furniture purchase
                                                                </td>
                                                                <td>
                                                                    5760.00$ <span class="label label-warning label-sm">
																Pending </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs blue-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:;">
                                                                        FoodMaster Ltd </a>
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    Company Anual Dinner Catering
                                                                </td>
                                                                <td>
                                                                    12400.00$ <span class="label label-success label-sm">
																Paid </span>
                                                                </td>
                                                                <td>
                                                                    <a class="btn default btn-xs blue-stripe" href="javascript:;">
                                                                        View </a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--tab-pane-->
                                                <div class="tab-pane" id="tab_1_22">
                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;"><div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1" style="overflow: hidden; width: auto; height: 290px;" data-initialized="1">
                                                                <ul class="feeds">
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        You have 4 pending tasks. <span class="label label-danger label-sm">
																					Take action <i class="fa fa-share"></i>
																					</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                Just now
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc">
                                                                                            New version v1.4 just lunched!
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date">
                                                                                    20 mins
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-danger">
                                                                                        <i class="fa fa-bolt"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        Database server #12 overloaded. Please fix the issue.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                24 mins
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                30 mins
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                40 mins
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-warning">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New user registered.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                1.5 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        Web server hardware needs to be upgraded. <span class="label label-inverse label-sm">
																					Overdue </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                2 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                3 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-warning">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                5 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                18 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                21 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                22 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                21 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                22 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                21 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                22 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                21 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">
                                                                                        New order received. Please take care of it.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date">
                                                                                22 hours
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><div class="slimScrollBar" style="background: rgb(187, 187, 187) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                                    </div>
                                                </div>
                                                <!--tab-pane-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab_1_2-->
                            <div class="tab-pane" id="tab_1_3">
                                <div class="row profile-account">
                                    <div class="col-md-3">
                                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab_1-1">
                                                    <i class="fa fa-cog"></i> Personal info </a>
												<span class="after">
												</span>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_2-2">
                                                    <i class="fa fa-picture-o"></i> Change Avatar </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_3-3">
                                                    <i class="fa fa-lock"></i> Change Password </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_4-4">
                                                    <i class="fa fa-eye"></i> Privacity Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content">
                                            <div id="tab_1-1" class="tab-pane active">
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input placeholder="John" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input placeholder="Doe" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile Number</label>
                                                        <input placeholder="+1 646 580 DEMO (6284)" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Interests</label>
                                                        <input placeholder="Design, Web etc." class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Occupation</label>
                                                        <input placeholder="Web Developer" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">About</label>
                                                        <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Website Url</label>
                                                        <input placeholder="http://www.mywebsite.com" class="form-control" type="text">
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <a href="javascript:;" class="btn green">
                                                            Save Changes </a>
                                                        <a href="javascript:;" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_2-2" class="tab-pane">
                                                <p>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </p>
                                                <form action="#" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                            </div>
                                                            <div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input name="..." type="file">
																</span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                                    Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
															<span class="label label-danger">
															NOTE! </span>
															<span>
															Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green">
                                                            Submit </a>
                                                        <a href="javascript:;" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_3-3" class="tab-pane">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green">
                                                            Change Password </a>
                                                        <a href="javascript:;" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_4-4" class="tab-pane">
                                                <form action="#">
                                                    <table class="table table-bordered table-striped">
                                                        <tbody><tr>
                                                            <td>
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <div class="radio"><span><input name="optionsRadios1" value="option1" type="radio"></span></div>
                                                                    Yes </label>
                                                                <label class="uniform-inline">
                                                                    <div class="radio"><span class="checked"><input name="optionsRadios1" value="option2" checked="" type="radio"></span></div>
                                                                    No </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <div class="checker"><span><input value="" type="checkbox"></span></div> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <div class="checker"><span><input value="" type="checkbox"></span></div> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <div class="checker"><span><input value="" type="checkbox"></span></div> Yes </label>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--end profile-settings-->
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green">
                                                            Save Changes </a>
                                                        <a href="javascript:;" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection





