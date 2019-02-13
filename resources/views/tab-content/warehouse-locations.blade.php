@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="container text-center">
            <div class="alert alert-success text-center font-weight-bold d-none"></div>
            <div class="alert alert-danger text-center font-weight-bold d-none"></div>
        </div>
        <div class="tab-pane active">
            <div class="container-fluid">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Warehouse Locations</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-warehouse-location-modal" onclick="clearValues();">
                            <i class="fas fa-plus"></i> Add Warehouse Location
                        </button>
                    </div>
                </div>

                <!-- BOM Table -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-bordered" cellspacing="0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th width="50%">Warehouse Location</th>
                                        <th width="40%" class="text-center">Area</th>
                                        <th width="10%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($warehouse_locations))
                                        @foreach($warehouse_locations as $key => $value)
                                            <tr>
                                                <td hidden="">{{ $value['id'] }}</td>
                                                <td>{{ $value['location'] }}</td>
                                                <td class="text-uppercase text-center">{{ $value['area_code'] }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['location'] }} Progress" onclick="openUpdateWarehouseLocationModal('{{ $value['id'] }}','{{ $value['location'] }}','{{ $value['area_code'] }}');"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['location'] }}" onclick="openDeleteWarehouseLocationModal('{{ $value['id'] }}');"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div class="modal" id="add-warehouse-location-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Warehouse Location</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Location</label>
                        <input type="text" class="form-control" id="location" placeholder="AAI Bicol">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Area</label>
                        <input type="text" class="form-control text-uppercase" id="area-code" placeholder="Ex: SLZ">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveWarehouseLocation();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- Update Modal -->
<div class="modal" id="update-warehouse-modal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Update Warehouse Location Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <input type="hidden" id="warehouse-location-id">
            <div class="row">
                <div class="form-group col-md-8">
                    <label>Location</label>
                    <input class="form-control" type="text" id="warehouse-location" value="">
                </div>
                <div class="form-group col-md-4">
                    <label>Area</label>
                    <input class="form-control text-uppercase" type="text" id="warehouse-location-areacode" value="">
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateWarehouseLocation();">Update</button>
            <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal" id="delete-warehouse-location-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Warehouse Location</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="location-id">
                <div class="text-danger">Are you sure you want to delete this record?</div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="deleteWarehouseLocation();">Delete</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        InitiateTable();
        $('.sidebar #warehouse-location').addClass('active');
        $('.sidebar #warehouse-location a').addClass('active');
    });

    function InitiateTable()
    {
        $('.table').DataTable();
    }

    function openUpdateWarehouseLocationModal(id, location, area_code)
    {
        $('#update-warehouse-modal').modal({keyboard:false,backdrop:"static"});
        $('#update-warehouse-modal #warehouse-location-id').val(id)
        $('#update-warehouse-modal #warehouse-location').val(location);
        $('#update-warehouse-modal #warehouse-location-areacode').val(area_code);
    }

    function updateWarehouseLocation()
    {
        var id = $('#update-warehouse-modal #warehouse-location-id').val();
        var warehouselocation = $('#update-warehouse-modal #warehouse-location').val();
        var area_code = $('#update-warehouse-modal #warehouse-location-areacode').val();

        $.ajax({
            url: "{{ url('update-warehouse-location') }}",
            data: {
                "id" : id,
                "location" : warehouselocation,
                "area_code" : area_code
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                location.reload();
            }
            else
            {
                alert('Something went wrong. Please try again')
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function clearValues()
    {
        $('#add-warehouse-location-modal #location').val('');
        $('#add-warehouse-location-modal #area-code').val('');
    }

    function saveWarehouseLocation()
    {
        var warehouseLocation = $('#add-warehouse-location-modal #location').val();
        var area_code = $('#add-warehouse-location-modal #area-code').val();

        $.ajax({
            url: "{{ url('add-warehouse-location') }}",
            data: {
                "location" : warehouseLocation,
                "area_code" : area_code
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                location.reload();
            }
            else
            {
                alert('Something went wrong. Please try again')
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function openDeleteWarehouseLocationModal(id)
    {
        $('#delete-warehouse-location-modal').modal({keyboard:false,backdrop:"static"});
        $('#delete-warehouse-location-modal #location-id').val(id);
    }

    function deleteWarehouseLocation()
    {
        var id = $('#delete-warehouse-location-modal #location-id').val();

        $.ajax({
            url: "{{ url('delete-warehouse-location') }}",
            data: {
                "id" : id
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                location.reload();
            }
            else
            {
                alert('Something went wrong. Please try again.');
            }
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>
@endsection