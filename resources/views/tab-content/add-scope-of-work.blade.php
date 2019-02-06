@extends('layouts.app')

@section('content')

@include('layouts.sidebar')
    
<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active">
            <!-- Add Scope Of Work to Proejct -->
            <div id="add-project-container" class="container-fluid">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Add Scope Of Work</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <a href="{{ url('projects') }}">
                            <button class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold">
                                <i class="fas fa-undo-alt"></i> Back
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mb-3">
                            <!-- Site Name -->
                            <div class="form-group col-md-6">
                                <label>Site Name: </label>
                                <input type="text" class="form-control" name="site_name" id="site-name" placeholder="Example: Unitop General Merchendise" value="{{ $project_details['site_name'] }}" disabled>
                                @if ($errors->has('site_name'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('site_name') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>
                            <!-- Location -->
                            <div class="form-group col-md-2">
                                <label>Location: </label>
                                <select class="custom-select form-control" id="project-location" name="location" disabled>
                                    <option value="{{ $project_details['abbrv'] }}" selected>{{ $project_details['location'] }}</option>
                                </select>
                                @if ($errors->has('location'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('location') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>
                            <!-- Start Date -->
                            <div class="form-group col-md-2">
                                <label>Start Date: </label>
                                <input type="text" class="form-control" value="{{ $project_details['date_start'] }}" disabled>
                                @if ($errors->has('date-start'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('date-start') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>
                            <!-- End Date -->
                            <div class="form-group col-md-2">
                                <label>End Date: </label>
                                <input type="text" class="form-control" value="{{ $project_details['date_end'] }}" disabled>
                                @if ($errors->has('date-end'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('date-end') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- Project Code -->
                            <div class="form-group col-md-4">
                                <label>Project Code: </label>
                                <input class="form-control" name="project_code" id="project-code" value="{{ $project_details['project_code'] }}" disabled>
                                @if ($errors->has('project_code'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('project_code') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>

                            <!-- Work Order -->
                            <div class="form-group col-md-4">
                                <label>Work Order #: </label>
                                <input type="text" class="form-control" name="work_order_number" id="work-order-number" value="{{ $project_details['work_order_number'] }}" disabled>
                                @if ($errors->has('work_order_number'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('work_order_number') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>

                            <!-- Materials Reference Number -->
                            <div class="form-group col-md-4">
                                <label>CCID: </label>
                                <input type="text" class="form-control" name="ccid" id="ccid" value="{{ $project_details['ccid'] }}" disabled>
                                @if ($errors->has('ccid'))
                                    <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('ccid') }} Please dont leave this blank or with just only white spaces.</div>
                                @endif
                            </div>
                        </div>
                        <form action="{{ url('add-scope-of-work-to-project') }}" method="POST">
                            <input type="hidden" name="project_id" value="{{ $project_details['id'] }}">
                            <input type="hidden" name="project_code" value="{{ $project_details['project_code'] }}">
                            @csrf
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
                                            @foreach($boq_details as $key => $value)
                                                <tr id="row-{{ $key }}">
                                                    <td>
                                                        <input type="text" class="form-control" name="row[{{ $key }}][controlnumber]" id="row-ctrl-number-{{ $key }}" value="{{ $value['controlnumber'] }}" readonly>
                                                    </td>
                                                    <td id="row-description-{{ $key }}"></td>
                                                    <td id="row-unit-{{ $key }}" class="text-uppercase text-center"></td>
                                                    <td class="text-center">
                                                        <input type="text" class="form-control text-center allow_decimal" name="row[{{ $key }}][quantity]" id="row-quantity-{{ $key }}" value="{{ $value['quantity'] }}" readonly>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="text" class="form-control text-cente allow_decimalr" name="row[{{ $key }}][price]" id="row-price-{{ $key }}" value="{{ $value['price'] }}" readonly>
                                                    </td>
                                                    <td class="text-center" id="td-row-total-{{ $key }}">{{ number_format($value['total'], 2, '.', '') }}</td>
                                                    <input class="total-price" type="hidden" value="{{ $value['total'] }}" name="row[{{ $key }}][total]" id="row-total-{{ $key }}">
                                                    <td>
                                                        <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" title="Add row" onclick="addRow({{ $key }});"><i class="fas fa-plus"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete row" onclick="deleteRow({{ $key }});" disabled><i class="fas fa-minus"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h5 class="text-right" onclick="showGrandTotal();"><small class="text-right text-danger">Click to show grand total</small><br>Grand Total: <span id="grand-total" style="text-decoration: underline; text-decoration-style: double;"></span></h5>
                                <input type="hidden" id="grand_total_cost" name="grand_total_cost" value="">
                            </div>

                            <div class="row mt-5 mb-3">
                                <div class="form-group col-md-12">
                                    <button id="create-project-add-btn" type="submit" class="btn btn-sm btn-primary float-right" disabled>Submit</button>
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
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #projects').addClass('active');
    $('.sidebar #projects a').addClass('active');

    // Add another BOQ row on Add Project View
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
                                <input type="text" class="form-control" name="row['+ctr+'][controlnumber]" id="row-ctrl-number-'+ctr+'" value="" required onfocus="'+onFocus+'">\
                            </td>\
                            <td id="row-description-'+ctr+'"></td>\
                            <td id="row-unit-'+ctr+'" class="text-uppercase text-center"></td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center allow_decimal" name="row['+ctr+'][quantity]" id="row-quantity-'+ctr+'" value="" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center allow_decimal" name="row['+ctr+'][price]" id="row-price-'+ctr+'" value="" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center" id="td-row-total-'+ctr+'">0</td>\
                            <input type="hidden" class="total-price" value="" name="row['+ctr+'][total]" id="row-total-'+ctr+'">\
                            <td>\
                                <button type="button" class="btn btn-success btn-sm" onclick="'+addRow+'"><i class="fas fa-plus"></i></button>\
                                <button type="button" class="btn btn-danger btn-sm" onclick="'+deleteRow+'"><i class="fas fa-minus"></i></button>\
                            </td>\
                        </tr>';
        row.after(new_row);
    }

    // Delete BOQ row on Add Project View
    function deleteRow(ctr)
    {
        var row = $('#row-'+ctr);
        row.remove();
    }

    // Calculate Total Price
    function calculateTotalPrice(row_id, ctr)
    {
        var qty = parseFloat($.trim($('#'+row_id+' #row-quantity-'+ctr).val()));
        var price = parseFloat($.trim($('#'+row_id+' #row-price-'+ctr).val()));
        var row_total_price = qty * price;

        $('#row-total-'+ctr).val(row_total_price);
        $('#td-row-total-'+ctr).empty().text(row_total_price.toLocaleString());
    }

    // Calculate Grand Total Price
    function showGrandTotal()
    {
        var grand_total = 0;
        $.each($('.total-price'), function(index, el) {
            grand_total += parseFloat(el.value);
        });
        $('#grand-total').empty().text(grand_total.toLocaleString());
        $('#grand_total_cost').val(grand_total);

        $('#create-project-add-btn').removeAttr('disabled');
    }

    // Populate BOQ Table with BOQs
    function showAllBOQ(ctr)
    {
        $('#boq-modal').modal();
        $('#boq-modal #row-number').val(ctr);
        $('#boq-selection').DataTable();
    }

    // Select BOQ to be added to project
    function selectBOQ(boq_control_number) 
    {
        var row_number = $('#boq-modal #row-number').val();
        $.ajax({
            url: "{{ url('get-boq-details') }}",
            data: { "control_number" : boq_control_number},
        })
        .done(function(result) {
            console.log(result)
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

    // Check if object has a value
    function hasValue(obj, key, value) {
        return obj.hasOwnProperty(key) && obj[key] === value;
    }

    $(".allow_decimal").on("input", function(evt) {
       var self = $(this);
       self.val(self.val().replace(/[^0-9\.]/g, ''));
       if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
       {
         evt.preventDefault();
       }
    });
</script>

@endsection