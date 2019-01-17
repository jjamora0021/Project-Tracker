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
        <div class="tab-content">
            <div class="container text-center">
                <h1>Logo</h1>
        </div>
    </div>
@endsection
