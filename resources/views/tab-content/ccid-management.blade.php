@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="container text-center">
            <div class="alert alert-success text-center font-weight-bold d-none"></div>
            <div class="alert alert-danger text-center font-weight-bold  d-none"></div>
        </div>
        <div class="tab-pane active">
            <div class="container-fluid">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>CCID Management</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-ccid-management-modal" onclick="clearValues();">
                            <i class="fas fa-plus"></i> Add CCID
                        </button>
                    </div>
                </div>

                <!-- CCID Table -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" id="bom-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th>Material Code</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                        <th>Quantity Released</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                        @if($user_data['user_role'] == 'admin')
                                            <th width="5%" class="text-center" id="actions">Actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    
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
    $(document).ready(function() {
        InitiateCCIDTable();
        $('.sidebar #ccid-management').addClass('active');
        $('.sidebar #ccid-management a').addClass('active');
    });

    function InitiateCCIDTable()
    {
        $('#ccid-table').DataTable({
            "order": []
        });
    }

    function clearValues()
    {

    }
</script>
@endsection