@extends('layouts.app')

@section('content')
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        @if($user_data['user_role'] == 'admin')
            <li class="nav-item active">
                <a class="nav-link active" href="{{ url('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif
       <li class="nav-item">
            <a class="nav-link" href="{{ url('locations') }}">
                <i class="fas fa-globe-asia"></i>
                <span>Locations</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('projects') }}">
                <i class="fas fa-project-diagram"></i>
                <span>Projects</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('boq-management') }}">
                <i class="fas fa-clipboard-list"></i>
                <span>BOQ Management</span>
            </a>
        </li>
    </ul>

    <div id="content-wrapper">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="container text-center">
                @if(Session::has('success'))
                    <div class="alert alert-success text-center font-weight-bold">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                    </div>
                @endif
                 @if(Session::has('danger'))
                    <div class="alert alert-danger text-center font-weight-bold">
                        {{ Session::get('danger') }}
                        @php
                        Session::forget('danger');
                        @endphp
                    </div>
                @endif
            </div>
            <div class="tab-pane active">
                <div class="container-fluid">
                    <div class="col-md-12 page-header-container mb-2">
                        <div class="col-md-6 p-0">
                            <h2>Dashboard</h2>
                        </div>
                        <!-- <div class="col-md-6 pt-2 text-right">
                            <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal">
                                <i class="fas fa-plus"></i> Add Location
                            </button>
                        </div> -->
                    </div>

                    <!-- Dashboard Table -->
                    <div class="card mb-2">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            <!-- Dashboard Table -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection