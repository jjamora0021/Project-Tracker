<!-- Projects Table -->
<div class="container-fluid" id="project-container">
    <div class="col-md-12 page-header-container mb-2">
        <div class="col-md-6 p-0">
            <h2>Projects</h2>
        </div>
        <div class="col-md-6 pt-2 text-right">
            <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" onclick="toggleContainer('project-container','add-project-container');">
                <i class="fas fa-plus"></i> Add Project
            </button>
        </div>
    </div>
    <!-- Projects Table -->
    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" id="projects-table" style="width:100%">
                    <thead>
                        <tr>
                            <th hidden>ID</th>
                            <th>Project Code</th>
                            <th>Site Name</th>
                            <th>Location</th>
                            <th class="text-center">CCID</th>
                            <th class="text-center">Work Order Number</th>
                            <th class="text-center">Start Date</th>
                            <th class="text-center">End Date</th>
                            <th class="text-center">Total Cost</th>
                            <th class="text-center" id="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($projects))
                            @foreach($projects as $key => $value)
                                <tr>
                                    <td hidden="">{{ $value['id'] }}</td>
                                    <td>{{ $value['project_code'] }}</td>
                                    <td>{{ $value['site_name'] }}</td>
                                    <td>{{ $value['location'] }}</td>
                                    <td class="text-center">{{ $value['ccid'] }}</td>
                                    <td class="text-center">{{ $value['work_order_number'] }}</td>
                                    <td class="text-center">{{ $value['date_start'] }}</td>
                                    <td class="text-center">{{ $value['date_end'] }}</td>
                                    <td class="text-center">P{{ number_format($value['total_project_cost']) }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info" onclick="viewDailyProgress('{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['site_name'] }}');"><i class="fas fa-edit"></i></button>
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

<!-- View/Update Project -->
<div class="container-fluid d-none" id="view-daily-progress-container">
    <div class="col-md-12 page-header-container mb-2">
        <div class="col-md-6 p-0">
            <h2 id="site-name"></h2>
        </div>
        <div class="col-md-6 pt-2 text-right">
            <button class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold" onclick="viewProjectContainer('view-daily-progress-container');">
                <i class="fas fa-undo-alt"></i> Back
            </button>
        </div>
    </div>
    
    <div class="card mb-3">
        <div class="card-body">
            <table class="table table-striped table-bordered" id="daily-progress-table" style="width:100%">
                <!-- Days -->
                <thead>
                    <tr>
                        <th>Activity/Scope Of Work</th>
                    </tr>
                </thead>
                <!-- Scope Of Work -->
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>


<!-- Add Proejct -->
<div id="add-project-container" class="container-fluid d-none">
    <div class="col-md-12 page-header-container mb-2">
        <div class="col-md-6 p-0">
            <h2>Add Project</h2>
        </div>
        <div class="col-md-6 pt-2 text-right">
            <button class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold" onclick="toggleContainer('project-container','add-project-container');">
                <i class="fas fa-undo-alt"></i> Back
            </button>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ url('add-project') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <!-- Site Name -->
                    <div class="form-group col-md-6">
                        <label>Site Name: </label>
                        <input type="text" class="form-control" name="site_name" id="site-name" placeholder="Example: Unitop General Merchendise" required>
                        @if ($errors->has('site_name'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('site_name') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>
                    <!-- Location -->
                    <div class="form-group col-md-2">
                        <label>Location: </label>
                        <select class="custom-select" id="project-location" name="location" required>
                            <option selected>Select Location</option>
                            @foreach($locations as $key => $loc)
                                <option value="{{ $loc['abbrv'] }}">{{ $loc['location'] }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('location'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('location') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>
                    <!-- Start Date -->
                    <div class="form-group col-md-2">
                        <label>Start Date: </label>
                        <input class="datepicker" data-date-format="mm/dd/yyyy" name="date_start" required id="startDate" placeholder="01/01/2019">
                        @if ($errors->has('date-start'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('date-start') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>
                    <!-- End Date -->
                    <div class="form-group col-md-2">
                        <label>End Date: </label>
                        <input class="datepicker" data-date-format="mm/dd/yyyy" name="date_end" required id="endDate" placeholder="01/01/2019">
                        @if ($errors->has('date-end'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('date-end') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Project Code -->
                    <div class="form-group col-md-4">
                        <label>Project Code: </label>
                        <input class="form-control" name="project_code" id="project-code" placeholder="Ex: 00001" required>
                        @if ($errors->has('project_code'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('project_code') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>

                    <!-- Work Order -->
                    <div class="form-group col-md-4">
                        <label>Work Order #: </label>
                        <input type="text" class="form-control" name="work_order_number" id="work-order-number" placeholder="Ex: 0001" required>
                        @if ($errors->has('work_order_number'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('work_order_number') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>

                    <!-- Materials Reference Number -->
                    <div class="form-group col-md-4">
                        <label>CCID: </label>
                        <input type="text" class="form-control" name="ccid" id="ccid" placeholder="Ex: 1234567890" required>
                        @if ($errors->has('ccid'))
                            <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('ccid') }} Please dont leave this blank or with just only white spaces.</div>
                        @endif
                    </div>
                </div>

                <!-- Scope Of Work/Activity -->
                <div class="form-group col-md-12 mt-3 p-0" id="scope-of-work-section">
                    <label>Scope Of Work</label>
                    <!-- Materials Reference Number -->
                    <div class="form-group">
                        <table class="table" width="100%" style="border: solid 1px">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="10%">Control Number</th>
                                    <th width="55%">Description</th>
                                    <th width="5%" class="text-center">Unit</th>
                                    <th width="7%" class="text-center">Quantity</th>
                                    <th width="7%" class="text-center">Price</th>
                                    <th width="10%" class="text-center">Total (Peso)</th>
                                    <th width="6%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="row-1">
                                    <td>
                                        <input type="text" class="form-control" name="row[1][controlnumber]" id="row-ctrl-number-1" value="0" required onfocus="showAllBOQ(1);">
                                    </td>
                                    <td id="row-description-1"></td>
                                    <td id="row-unit-1" class="text-uppercase text-center"></td>
                                    <td class="text-center">
                                        <input type="text" class="form-control text-center" name="row[1][quantity]" id="row-quantity-1" value="0" required onkeyup="calculateTotalPrice('row-1',1);">
                                    </td>
                                    <td class="text-center">
                                        <input type="text" class="form-control text-center" name="row[1][price]" id="row-price-1" value="0" required onkeyup="calculateTotalPrice('row-1',1);">
                                    </td>
                                    <td class="text-center" id="td-row-total-1">0</td>
                                    <input type="hidden" value="0" name="row[1][total]" id="row-total-1">
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" onclick="addRow(1);"><i class="fas fa-plus"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"  onclick="deleteRow(1);" disabled><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                                <tr hidden>
                                    <td colspan="6">
                                        <button type="button" class="btn btn-info btn-sm float-right" onclick="calculateGrandTotal();"><i class="fas fa-calculator"></i>Calculate</button>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="text-right">Grand Total: <span id="grand-total"></span></h5>
                    <input type="hidden" id="grand_total_cost" name="grand_total_cost" value="">
                </div>

                <div class="row mt-5 mb-3">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- BOQ Modal -->
<div class="modal" tabindex="-1" role="dialog" id="boq-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">BOQ Selection</h5>
            </div>

            <div class="modal-body">
                <input type="hidden" id="row-number" value="">
                <table class="table table-bordered" cellspacing="0" id="boq-selection" style="width:100%">
                    <thead>
                        <tr>
                            <th hidden>ID</th>
                            <th width="10%" id="control-number">Control Number</th>
                            <th width="60%" id="description">Description</th>
                            <th width="10%" class="text-center" id="unit">Unit</th>
                            <th></th>
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
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="selectBOQ(<?php echo $value['control_number']; ?>);" data-dismiss="modal">Select</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        InitiateProjectsTable();
    });

    function InitiateProjectsTable()
    {
        $('#projects-table').DataTable();
    }

    function toggleContainer(hide_container, show_container)
    {
        if($('#'+hide_container).hasClass('d-none'))
        {
            $('#'+hide_container).removeClass('d-none');
            $('#'+show_container).addClass('d-none');
        }
        else
        {
            $('#'+hide_container).addClass('d-none');
            $('#'+show_container).removeClass('d-none');
        }
        
    }

    function addRow(ctr)
    {
        var row = $('#row-'+ctr);

        ctr++;
        var onBlur = "calculateTotalPrice('row-"+ctr+"',"+ctr+")";
        var onFocus = "showAllBOQ("+ctr+");";
        var addRow = 'addRow('+ctr+');';
        var deleteRow = 'deleteRow('+ctr+');';
        var new_row = '<tr id="row-'+ctr+'">\
                            <td>\
                                <input type="text" class="form-control" name="row['+ctr+'][controlnumber]" id="row-ctrl-number-'+ctr+'" value="0" required onfocus="'+onFocus+'">\
                            </td>\
                            <td id="row-description-'+ctr+'"></td>\
                            <td id="row-unit-'+ctr+'" class="text-uppercase text-center"></td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center" name="row['+ctr+'][quantity]" id="row-quantity-'+ctr+'" value="0" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center" name="row['+ctr+'][price]" id="row-price-'+ctr+'" value="0" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center" id="td-row-total-'+ctr+'">0</td>\
                            <input type="hidden" value="0" name="row['+ctr+'][total]" id="row-total-'+ctr+'">\
                            <td>\
                                <button type="button" class="btn btn-success btn-sm" onclick="'+addRow+'"><i class="fas fa-plus"></i></button>\
                                <button type="button" class="btn btn-danger btn-sm"  onclick="'+deleteRow+'"><i class="fas fa-minus"></i></button>\
                            </td>\
                        </tr>';
        row.after(new_row);
    }

    function deleteRow(ctr)
    {
        var row = $('#row-'+ctr);
        row.remove();
    }

    function calculateTotalPrice(row_id, ctr)
    {
        var qty = parseInt($.trim($('#'+row_id+' #row-quantity-'+ctr).val()));
        var price = parseInt($.trim($('#'+row_id+' #row-price-'+ctr).val()));
        var row_total_price = qty * price;

        $('#row-total-'+ctr).val(row_total_price);
        $('#td-row-total-'+ctr).empty().text(row_total_price.toLocaleString());

        var tr_count = $('#scope-of-work-section table tbody tr:last').index();
        var grand_total = 0;
        for (var i = 1; i <= tr_count; i++) {
            grand_total += parseInt($.trim($('#row-total-'+i).val())) || 0;
        }

        $('#grand-total').empty().text(grand_total.toLocaleString());
        $('#grand_total_cost').val(grand_total);
    }

    function showAllBOQ(ctr)
    {
        $('#boq-modal').modal();
        $('#boq-modal #row-number').val(ctr);
        $('#boq-selection').DataTable();
    }

    function selectBOQ(boq_control_number) 
    {
        var row_number = $('#boq-modal #row-number').val();
        $.ajax({
            url: "{{ url('get-boq-details') }}",
            data: { "control_number" : boq_control_number},
        })
        .done(function(result) {
            if(result != false)
            {
                $('#row-ctrl-number-'+row_number).val(result['control_number']);
                $('#row-description-'+row_number).empty().text(result['description']);
                $('#row-unit-'+row_number).empty().text(result['unit']);
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function viewDailyProgress(id, project_code, site_name)
    {
        $('#project-container').addClass('d-none')
        $('#view-daily-progress-container').removeClass('d-none');

        $('#view-daily-progress-container #site-name').empty().text(site_name);

        $.ajax({
            url: "{{ url('get-all-project-details') }}",
            data: 
            {
                "id" : id,
                "project_code" : project_code
            },
        })
        .done(function(result) {
            console.log(result);
            var table_header = $('#daily-progress-table thead tr');
            var table_body = $('#daily-progress-table tbody');
            for (var i = 1; i < result['number_of_days']; i++) {
                table_header.append('<th width="5%">Day '+i+'</th>');
            }
            $.each(result['boq_details'], function(index, value) {
                console.log(value)
            });
            $('#daily-progress-table').DataTable({
                fixedColumns: {
                    leftColumns: 2
                },
                scrollX:        true,
                fixedColumns:   true,
                paging: false,
            });
        })
        .fail(function() {
            console.log("error");
        });
    }

    function viewProjectContainer()
    {
        $('#project-container').removeClass('d-none')
        $('#view-daily-progress-container').addClass('d-none');
    }
</script>