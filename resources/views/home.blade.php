@extends('layouts.app')

@section('content')
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    @if($user_data['user_role'] == 'admin')
        <li class="nav-item active">
            <a class="nav-link active" data-toggle="tab" href="#dashboard" onclick="activateTab('nav-tab-container');">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    @endif
   <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#locations" onclick="activateTab('nav-tab-container');">
            <i class="fas fa-globe-asia"></i>
            <span>Locations</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#projects" onclick="activateTab('nav-tab-container');">
            <i class="fas fa-project-diagram"></i>
            <span>Projects</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#boq-management" onclick="activateTab('nav-tab-container');">
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
        <div class="tab-pane active" id="dashboard">
            @include('tab-content.dashboard')
        </div>
        <div class="tab-pane fade" id="locations">
            @include('tab-content.locations')
        </div>
        <div class="tab-pane fade" id="projects">
            @include('tab-content.projects')
        </div>
        <div class="tab-pane fade" id="boq-management">
            @include('tab-content.boq-management')
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.alert').fadeOut(10000);
    function activateTab(id) {
        $('.sidebar').each(function(index, el) {
            $('.nav-item').removeClass('active');
            $('.nav-item').removeClass('show');
            $('.nav-item a').removeClass('active');
            $('.nav-item a').removeClass('show');
        });
        $(this).addClass('active show');
    }
</script>
@endsection
