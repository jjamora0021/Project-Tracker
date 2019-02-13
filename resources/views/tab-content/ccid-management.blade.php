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
            <!-- CCID Table -->
            <div class="container-fluid" id="ccid-table-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>CCID Management</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" onclick="showAddCCID('add-ccid-container','ccid-table-container');">
                            <i class="fas fa-plus"></i> Add CCID
                        </button>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" id="ccid-table" style="width:100%">
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
                                @if(!empty($ccid))
                                    <tbody>
                                        sadas
                                    </tbody>
                                @else
                                    <tbody></tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add CCID -->
            <div class="container-fluid d-none" id="add-ccid-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Add CCID</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold" onclick="showCCIDTable('ccid-table-container','add-ccid-container');">
                            <i class="fas fa-undo-alt"></i> Back
                        </button>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ url('add-ccid') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <!-- Materials Reference Number -->
                                <div class="form-group col-md-3">
                                    <label>CCID: </label>
                                    <input type="text" class="form-control" name="ccid" id="ccid" placeholder="Ex: 1234567890" required>
                                    @if ($errors->has('ccid'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('ccid') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Warehouse Location -->
                                <div class="form-group col-md-2">
                                    <label>Warehouse Location: </label>
                                    <select class="custom-select form-control" id="warehouse-location" name="warehouse_location" required>
                                        <option value="select_status" selected>Select Location</option>
                                        @foreach($warehouselocations as $key => $loc)
                                            <option value="{{ $loc['id'] }}">{{ $loc['location'] }} (<span class="text-uppercase">{{ $loc['area_code'] }}</span>)</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('warehouse_location'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('warehouse_location') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Pick-up Date -->
                                <div class="form-group col-md-2">
                                    <label>Date of Pick-up: </label>
                                    <input class="datepicker" data-date-format="mm/dd/yyyy" name="pickup_date" required id="pickup-date" placeholder="01/01/2019">
                                    @if ($errors->has('pickup_date'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('pickup_date') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- MRF# -->
                                <div class="form-group col-md-3">
                                    <label>MRF #: </label>
                                    <input type="text" class="form-control" name="mrf_number" id="mrf-number" placeholder="Ex: 00001" required>
                                    @if ($errors->has('mrf_number'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('mrf_number') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Status -->
                                <div class="form-group col-md-2">
                                    <label>Status: </label>
                                    <select class="custom-select form-control" id="status" name="status" required>
                                        <option value="select_status" selected>Select Status</option>
                                        <option value="for_pick_up">For Pick-up</option>
                                        <option value="delivered">Delivered</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button id="create-ccid-add-btn" type="submit" class="btn btn-sm btn-primary float-right" disabled>Submit</button>
                                </div>
                            </div>
                        </form>
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

    function showAddCCID(show,hide)
    {
        $('#'+show).removeClass('d-none');
        $('#'+hide).addClass('d-none');
        $("input[type=text], input[type=number], textarea, .datepicker").val("");
        $('#status').val('select_status');
        $('#warehouse-location').val('select_status');
    }

    function showCCIDTable(show,hide)
    {
        $('#'+show).removeClass('d-none');
        $('#'+hide).addClass('d-none');
    }
</script>
@endsection