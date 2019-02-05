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
                        <h2>BOM Management</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-bom-modal" onclick="clearValues();">
                            <i class="fas fa-plus"></i> Add BOM
                        </button>
                    </div>
                </div>

                <!-- BOM Table -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" id="bom-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th width="10%" id="control-number">Material Code</th>
                                        <th width="60%" id="description">Description</th>
                                        <th width="10%" class="text-center" id="unit">Unit</th>
                                        @if($user_data['user_role'] == 'admin')
                                            <th width="5%" class="text-center" id="actions">Actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($boms))
                                        @foreach($boms as $key => $value)
                                            <tr>
                                                <td hidden="">{{ $value['id'] }}</td>
                                                <td>{{ $value['material_code'] }}</td>
                                                <td>{{ $value['description'] }}</td>
                                                <td class="text-center text-uppercase">{{ $value['unit'] }}</td>
                                                @if($user_data['user_role'] == 'admin')
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['material_code'] }}" onclick="openUpdateBOMModal('{{ $value['id'] }}','{{ $value['material_code'] }}');"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['material_code'] }}" onclick="openDeleteBOMModal('{{ $value['id'] }}','{{ $value['material_code'] }}');"><i class="far fa-trash-alt"></i></button>
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

<!-- Add BOM Modal -->
<div class="modal" id="add-bom-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add BOM</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Material Code</label>
                        <input type="text" class="form-control" id="material-code" placeholder="Ex: PE00001">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" class="form-control" id="material-unit" placeholder="Ex: PC/S">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <input type="text" class="form-control" id="material-description" placeholder="Desciption">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveBOM();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- Update BOM Modal -->
<div class="modal" id="update-bom-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update BOM</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Material Code</label>
                        <input type="text" class="form-control" id="material-code" placeholder="Ex: PE00001" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Unit</label>
                        <input type="text" class="form-control" id="material-unit" placeholder="Ex: PC/S">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <input type="text" class="form-control" id="material-description" placeholder="Desciption">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateBOM();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!-- Delete BOM Modal -->
<div class="modal" id="delete-bom-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete BOM</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="bom-id" value="">
                <input type="hidden" id="material-code" value="">
                <h5 class="text-danger">Are you sure you want to delete this BOM?</h5>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="deleteBOM();">Delete</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        InitiateBOMTable();
        $('.sidebar #bom').addClass('active');
        $('.sidebar #bom a').addClass('active');
    });

    function InitiateBOMTable()
    {
        $('#bom-table').DataTable({
            "order": []
        });
    }

    function clearValues() 
    {
        $('#add-bom-modal #material-code').val('');
        $('#add-bom-modal #material-description').val('');
        $('#add-bom-modal #material-unit').val('');
    }

    function saveBOM()
    {
        var code = $('#add-bom-modal #material-code').val();
        var description = $('#add-bom-modal #material-description').val();
        var unit = $('#add-bom-modal #material-unit').val();

        $.ajax({
            url: "{{ url('save-bom') }}",
            data: {
                "code" : code,
                "description" : description,
                "unit" : unit
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#bom-table').DataTable().clear();
                $('#bom-table').DataTable().destroy();
                $('#bom-table tbody').empty();
                $.each(response['bom'], function(index, el) {
                    var updateBOM = "openUpdateBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var deleteBOM = "openDeleteBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['material_code']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOM+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOM+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#bom-table tbody').append(rows);
                });
                InitiateBOMTable();

                $('.alert-success').empty().text('BOM successfully added!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
            }
            else if(response == 'taken')
            {
                $('.alert-danger').empty().text('That material code already exists!').removeClass('d-none');
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

    function openUpdateBOMModal(id, material_code)
    {
        $('#update-bom-modal').modal({keyboard:false,backdrop:"static"});
        $.ajax({
            url: "{{ url('get-bom-details') }}",
            data: {
                "id" : id,
                "material_code" : material_code
            },
        })
        .done(function(response) {
            $('#update-bom-modal #material-code').val(response['material_code']);
            $('#update-bom-modal #material-description').val(response['description']);
            $('#update-bom-modal #material-unit').val(response['unit']);
        })
        .fail(function() {
            console.log("error");
        });
    }

    function updateBOM()
    {
        var material_code = $('#update-bom-modal #material-code').val();
        var description = $('#update-bom-modal #material-description').val();
        var unit = $('#update-bom-modal #material-unit').val();

        $.ajax({
            url: "{{ url('update-bom') }}",
            data: {
                "material_code" : material_code,
                "description" : description,
                "unit" : unit
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#bom-table').DataTable().clear();
                $('#bom-table').DataTable().destroy();
                $('#bom-table tbody').empty();
                $.each(response['bom'], function(index, el) {
                    var updateBOM = "openUpdateBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var deleteBOM = "openDeleteBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['material_code']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOM+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOM+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#bom-table tbody').append(rows);
                });
                InitiateBOMTable();

                $('.alert-success').empty().text('BOM successfully updated!').removeClass('d-none');
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

    function openDeleteBOMModal(id, material_code)
    {
        $('#delete-bom-modal').modal({keyboard:false,backdrop:"static"});
        $('#delete-bom-modal #bom-id').val(id);
        $('#delete-bom-modal #material-code').val(material_code);
    }

    function deleteBOM()
    {
        var id = $('#delete-bom-modal #bom-id').val();
        var material_code = $('#delete-bom-modal #material-code').val();

        $.ajax({
            url: "{{ url('delete-bom') }}",
            data: {
                "id" : id,
                "material_code" : material_code
            },
        })
        .done(function(response) {
            if(response['result'] == true)
            {
                $('#bom-table').DataTable().clear();
                $('#bom-table').DataTable().destroy();
                $('#bom-table tbody').empty();
                $.each(response['bom'], function(index, el) {
                    var updateBOM = "openUpdateBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var deleteBOM = "openDeleteBOMModal('"+el['id']+"','"+el['material_code']+"')";
                    var rows = '<tr>\
                                    <td hidden>'+el['id']+'</td>\
                                    <td>'+el['material_code']+'</td>\
                                    <td>'+el['description']+'</td>\
                                    <td class="text-center text-uppercase">'+el['unit']+'</td>\
                                    <td class="text-center">\
                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="" data-original-title="Update '+el['id']+'" onclick="'+updateBOM+'"><i class="fas fa-edit"></i></button>\
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="" data-original-title="Delete '+el['id']+'" onclick="'+deleteBOM+'"><i class="far fa-trash-alt"></i></button>\
                                    </td>\
                                </tr>';
                    $('#bom-table tbody').append(rows);
                });
                InitiateBOMTable();

                $('.alert-success').empty().text('BOM successfully deleted!').removeClass('d-none');
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