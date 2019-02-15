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
                        <h2>BOQ Management</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" onclick="openAddBOQModal();">
                            <i class="fas fa-plus"></i> Add BOQ
                        </button>
                    </div>
                </div>

                <!-- BOQ Table -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" id="boq-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th width="10%" id="control-number">Control Number</th>
                                        <th width="60%" id="description">Description</th>
                                        <th width="10%" class="text-center" id="unit">Unit</th>
                                        @if($user_data['user_role'] == 'admin')
                                            <th width="10%" class="text-center" id="actions">Actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($boqs))
                                        @foreach($boqs as $key => $value)
                                            <tr>
                                                <td hidden="">{{ $value['id'] }}</td>
                                                <td>{{ $value['control_number'] }}</td>
                                                <td>{{ $value['description'] }}</td>
                                                <td class="text-center text-uppercase">{{ $value['unit'] }}</td>
                                                @if($user_data['user_role'] == 'admin')
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['control_number'] }}" onclick="openUpdateBOQModal('{{ $value['id'] }}','{{ $value['control_number'] }}');"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['control_number'] }}" onclick="openDeleteBOQModal('{{ $value['id'] }}','{{ $value['control_number'] }}');"><i class="far fa-trash-alt"></i></button>
                                                    </td>
                                                @endif
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

<!-- The Modal -->
<div class="modal" id="add-boq-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add BOQ</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Control Number</label>
                        <input type="number" id="control_number" class="form-control" placeholder="Ex: 11101">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" id="unit" class="form-control text-uppercase" placeholder="Ex: UNIT">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control" id="boq_description" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveNewBOQ();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="clearFields();">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- Update BOQ Modal -->
<div class="modal" id="update-boq-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update BOQ</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Control Number</label>
                        <input type="text" class="form-control" id="control-number" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" class="form-control" id="unit">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Desciption">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateBOQ();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- Delete BOQ Modal -->
<div class="modal" id="delete-boq-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete BOQ</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="boq-id" value="">
                <input type="hidden" id="control-number" value="">
                <h5 class="text-danger">Are you sure you want to delete this BOQ?</h5>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="deleteBOQ();">Delete</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #boq').addClass('active');
    $('.sidebar #boq a').addClass('active');
        
    $(document).ready(function() {
        InitiateBOQTable();
    });

    function InitiateBOQTable()
    {
        $('#boq-table').DataTable({
            "order": []
        });
    }

    function openAddBOQModal()
    {
        $('#add-boq-modal').modal({keyboard:false,backdrop:"static"});
        $('#control_number, #unit, #boq_description').val('');
    }

    function saveNewBOQ()
    {
        $.ajax({
            url: "{{ url('save-new-boq') }}",
            data: {
                "control_number" : $('#control_number').val(),
                "unit" : $('#unit').val(),
                "description" : $('#boq_description').val()
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#boq-table').DataTable().clear();
                $('#boq-table').DataTable().destroy();
                $('#boq-table tbody').empty();
                $.each(response['boq'], function(index, el) {
                    var updateBOQ = "openUpdateBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var deleteBOQ = "openUpdateBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['control_number']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOQ+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOQ+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#boq-table tbody').append(rows);
                });
                InitiateBOQTable();

                $('.alert-success').empty().text('BOQ successfully added!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
            }
            else if(response == 'taken')
            {
                $('.alert-danger').empty().text('That Control Number already exists!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none')
                }, 10000);
            }
            else
            {
                $('.alert-danger').empty().text('Something went wrong. Please try again.').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none')
                }, 10000);  
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function clearFields()
    {
        $('#control_number, #unit, #boq_description').val('');
    }

    function openUpdateBOQModal(id, control_number)
    {
        $('#update-boq-modal').modal({keyboard:false,backdrop:"static"});
        $.ajax({
            url: "{{ url('get-boq-details') }}",
            data: {
                "id" : id,
                "control_number" : control_number
            },
        })
        .done(function(response) {
            $('#update-boq-modal #control-number').val(response['control_number']);
            $('#update-boq-modal #description').val(response['description']);
            $('#update-boq-modal #unit').val(response['unit']);
        })
        .fail(function() {
            console.log("error");
        });
    }

    function updateBOQ()
    {
        var control_number = $('#update-boq-modal #control-number').val();
        var description = $('#update-boq-modal #description').val();
        var unit = $('#update-boq-modal #unit').val();

        $.ajax({
            url: "{{ url('update-boq') }}",
            data: {
                "control_number" : control_number,
                "description" : description,
                "unit" : unit
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#boq-table').DataTable().clear();
                $('#boq-table').DataTable().destroy();
                $('#boq-table tbody').empty();
                $.each(response['boq'], function(index, el) {
                    var updateBOQ = "openUpdateBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var deleteBOQ = "openDeleteBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['control_number']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOQ+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOQ+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#boq-table tbody').append(rows);
                });
                InitiateBOQTable();

                $('.alert-success').empty().text('BOQ successfully updated!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
            }
            else
            {
                $('.alert-danger').empty().text('Something went wrong. Please try again.').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none')
                }, 10000);  
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function openDeleteBOQModal(id, control_number)
    {
        $('#delete-boq-modal').modal({keyboard:false,backdrop:"static"});
        $('#delete-boq-modal #boq-id').val(id);
        $('#delete-boq-modal #control-number').val(control_number);
    }

    function deleteBOQ()
    {
        var id = $('#delete-boq-modal #boq-id').val();
        var control_number = $('#delete-boq-modal #control-number').val();

        $.ajax({
            url: "{{ url('delete-boq') }}",
            data: {
                "id" : id,
                "control_number" : control_number
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#boq-table').DataTable().clear();
                $('#boq-table').DataTable().destroy();
                $('#boq-table tbody').empty();
                $.each(response['boq'], function(index, el) {
                    var updateBOQ = "openUpdateBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var deleteBOQ = "openDeleteBOQModal('"+el['id']+"','"+el['control_number']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['control_number']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOQ+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOQ+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#boq-table tbody').append(rows);
                });
                InitiateBOQTable();

                $('.alert-success').empty().text('BOQ successfully deleted!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
            }
            else
            {
                $('.alert-danger').empty().text('Something went wrong. Please try again.').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none')
                }, 10000);  
            }
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>
@endsection