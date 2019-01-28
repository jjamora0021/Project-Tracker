@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

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

<script type="text/javascript">
    $('.sidebar #dashboard').addClass('active');
    $('.sidebar #dashboard a').addClass('active');
</script>

@endsection