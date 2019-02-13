<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    @if($user_data['user_role'] == 'admin')
        <li class="nav-item" id="dashboard">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item" id="logs" style="border-bottom: solid 1px #fff">
            <a class="nav-link" href="{{ url('logs') }}">
                <i class="fas fa-history"></i>
                <span>Logs</span>
            </a>
        </li>
    @endif
   <li class="nav-item" id="locations">
        <a class="nav-link" href="{{ url('locations') }}">
            <i class="fas fa-globe-asia"></i>
            <span>Project Locations</span>
        </a>
    </li>
    <li class="nav-item" id="warehouse-locations" style="border-bottom: solid 1px #fff">
        <a class="nav-link" href="{{ url('warehouse-locations') }}">
            <i class="fas fa-globe-asia"></i>
            <span>Warehouse Locations</span>
        </a>
    </li>
    <li class="nav-item" id="projects" style="border-bottom: solid 1px #fff">
        <a class="nav-link" href="{{ url('projects') }}">
            <i class="fas fa-project-diagram"></i>
            <span>Projects</span>
        </a>
    </li>
    <li class="nav-item" id="boq">
        <a class="nav-link" href="{{ url('boq-management') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>BOQ Management</span>
        </a>
    </li>
    <li class="nav-item" id="bom" style="border-bottom: solid 1px #fff">
        <a class="nav-link" href="{{ url('bom-management') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>BOM Management</span>
        </a>
    </li>
    <!-- <li class="nav-item" id="ccid-management">
        <a class="nav-link" href="{{ url('ccid-management') }}">
            <i class="fas fa-file-signature"></i>
            <span>CCID Management</span>
        </a>
    </li> -->
</ul>