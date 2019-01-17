@extends('layouts.app')

@section('content')
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        @if($user_data['user_role'] == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif
       <li class="nav-item active">
            <a class="nav-link active" href="{{ url('locations') }}">
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
                <div class="container-fluid" id="locations-container">
                    <div class="col-md-12 page-header-container mb-2">
                        <div class="col-md-6 p-0">
                            <h2>Project Locations</h2>
                        </div>
                        <div class="col-md-6 pt-2 text-right">
                            <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal">
                                <i class="fas fa-plus"></i> Add Location
                            </button>
                        </div>
                    </div>

                    <!-- Locations Table -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="col-md-12">
                                @if(empty($locations))
                                    <h3 class="text-center">No Projects Available</h3>
                                @else
                                    <div class="row">
                                        @foreach($locations as $key => $loc)
                                            <div class="col-md-4">
                                                <a href="{{ url('location') }}/{{ $loc['abbrv'] }}/{{ $loc['location'] }}">
                                                    <button class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $loc['location'] }}</button>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection