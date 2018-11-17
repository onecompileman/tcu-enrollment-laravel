@extends('layouts.main')

@section('content')
<div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title page-title">
                                Dashboard
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="dashboard-item">
                                        <h4>Registration</h4>
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="dashboard-item" href="studentlist.html">
                                        <h4>Students</h4>
                                        <i class="glyphicon glyphicon-user"></i>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="dashboard-item">
                                        <h4>Annual Report</h4>
                                        <i class="glyphicon glyphicon-stats"></i>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="dashboard-item">
                                        <h4>Users</h4>
                                        <i class="glyphicon glyphicon-user"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection