@extends('layouts.app')

@section('content')

@include('layouts.sidebar')
    
<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="alert alert-success text-center font-weight-bold d-none"></div>
        <div class="container text-center" id="alert-container">
             @if(Session::has('danger'))
                <div class="alert alert-danger text-center font-weight-bold">
                    {{ Session::get('danger') }}
                    @php
                    Session::forget('danger');
                    @endphp
                </div>
            @endif
        </div>
        <div class="tab-pane active">
            <!-- Projects Table -->
            <div class="container-fluid" id="project-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Projects</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-success btn-sm float-right ml-2 font-12 font-weight-bold" onclick="toggleContainer('project-container','add-project-container');">
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
                                    <tr class="bg-dark text-white">
                                        <th hidden>ID</th>
                                        <th>Project Code</th>
                                        <th>Site Name</th>
                                        <th>Location</th>
                                        <th class="text-center">CCID</th>
                                        <th class="text-center">Work Order Number</th>
                                        <th class="text-center" style="min-width: 100px;">Start Date</th>
                                        <th class="text-center" style="min-width: 100px;">End Date</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Total Percentage</th>
                                        <th class="text-center" style="min-width: 100px;">Remarks</th>
                                        <th class="text-center" id="actions" style="min-width: 170px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($projects != false)
                                        @foreach($projects as $key => $value)
                                        <?php 
                                            $date_start = Carbon\Carbon::parse($value['date_start']);
                                            $date_end = Carbon\Carbon::parse($value['date_end']);
                                            $days = $date_start->diffInDays($date_end) + 1;
                                        ?>
                                            <tr>
                                                <td hidden="">{{ $value['id'] }}</td>
                                                <td>{{ $value['project_code'] }}</td>
                                                <td>{{ $value['site_name'] }}</td>
                                                <td>{{ $value['location'] }}</td>
                                                <td class="text-center">{{ $value['ccid'] }}</td>
                                                <td class="text-center">{{ $value['work_order_number'] }}</td>
                                                <td id="date_start_{{ $value['project_code'] }}" class="text-center clickable" ondblclick="editDate('Start Date','{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['date_start'] }}','date_start')">{{ $value['date_start'] }}</td>
                                                <td id="date_end_{{ $value['project_code'] }}" class="text-center clickable" ondblclick="editDate('End Date','{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['date_end'] }}','date_end')">{{ $value['date_end'] }}</td>
                                                <?php $total_progress = 0; ?>
                                                @foreach($value['boq_details'] as $idx => $val)
                                                    @if($val['total_progress'] != 0)
                                                        <?php $total_progress += $val['total_progress']; ?>
                                                    @else
                                                        <?php $total_progress = 0 ?>
                                                    @endif
                                                @endforeach
                                                <?php $total_progress = ($total_progress / $value['total_project_qty']) * 100; ?>
                                                
                                                @foreach(Config::get('status') as $key => $stat)
                                                    @if($key == $value['status'])
                                                        <td class="text-center clickable" id="status_{{ $value['project_code'] }}" ondblclick="editStatus('{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['status'] }}','status')">{{ $stat }}</td>
                                                    @endif
                                                @endforeach

                                                <td class="text-center">{{ (int)$total_progress }}%</td>
                                                @if($value['remarks'] == NULL)
                                                    <td class="text-center">No Remarks</td>
                                                @else
                                                    <td class="text-center"><a href="{{ url('project-remarks') }}/{{ $value['id'] }}/{{ $value['project_code'] }}"><button class="btn btn-sm btn-info"><i class="fas fa-comments"></i>  Remarks</button></a></td>
                                                @endif
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['site_name'] }} Progress" onclick="viewDailyProgress('{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['site_name'] }}','{{ $days }}');"><i class="fas fa-edit"></i> Update</button>
                                                    <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['site_name'] }}" onclick="openDeleteProjectModal('{{ $value['id'] }}','{{ $value['project_code'] }}');"><i class="fas fa-trash-alt"></i> Delete</button>
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
                        <a class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold" href="{{ url('projects') }}">
                            <i class="fas fa-undo-alt"></i> Back
                        </a>
                    </div>
                </div>
                
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="col-md-12 alert alert-success text-center font-weight-bold d-none">Progress successfully added!</div>
                        <div class="col-md-12 alert alert-danger text-center font-weight-bold d-none">Something went wrong please try again!</div>

                        <div class="col-md-12 page-header-container mb-2 p-0">
                            <div class="col-md-6 p-0">
                                <h4 class="mb-3"><i class="fas fa-tasks"></i> Daily Progress</h4>
                            </div>
                            <div class="col-md-6 pt-2 text-right pr-0" id="add-scope-of-work-btn-container">
                                <a href="" id="add-scope">
                                    <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold">
                                        <i class="fas fa-plus"></i> Add Scope of Work
                                    </button>
                                </a>
                                <a href="" id="add-remarks">
                                    <button class="btn btn-info btn-sm float-right ml-2 font-12 font-weight-bold" id="remarks-btn">
                                        <i class="fas fa-comments"></i> Remarks
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="ajax-loader">
                            <img src="{{ url('images/Spinner-1.gif') }}" class="img-responsive" />
                        </div>
                        <small><strong>Note: <span class="text-danger">Double click on the space below the day number to input updates. Quantity updates only. If there are remarks, input them on the remarks section.</span></strong></small>
                        <table class="table table-striped table-bordered" id="daily-progress-table" cellspacing="0" width="100%">
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
                                    <select class="custom-select form-control" id="project-location" name="location" required>
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
                                <div class="form-group col-md-3">
                                    <label>Project Code: </label>
                                    <input class="form-control" name="project_code" id="project-code" placeholder="Ex: 00001" required>
                                    @if ($errors->has('project_code'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('project_code') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Work Order -->
                                <div class="form-group col-md-3">
                                    <label>Work Order #: </label>
                                    <input type="text" class="form-control" name="work_order_number" id="work-order-number" placeholder="Ex: 0001" required>
                                    @if ($errors->has('work_order_number'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('work_order_number') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Materials Reference Number -->
                                <div class="form-group col-md-3">
                                    <label>CCID: </label>
                                    <input type="text" class="form-control" name="ccid" id="ccid" placeholder="Ex: 1234567890" required>
                                    @if ($errors->has('ccid'))
                                        <div class="alert alert-danger mt-2 font-weight-bold">{{ $errors->first('ccid') }} Please dont leave this blank or with just only white spaces.</div>
                                    @endif
                                </div>

                                <!-- Project Status -->
                                <div class="form-group col-md-3">
                                    <label>Status: </label>
                                    <select class="custom-select form-control" id="project-status" name="status" required>
                                        <option selected>Select Status</option>
                                        @foreach(Config::get('status') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
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
                                                    <input type="text" class="form-control text-center allow_decimal" name="row[1][quantity]" id="row-quantity-1" value="0" required onkeyup="calculateTotalPrice('row-1',1);">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center allow_decimal" name="row[1][price]" id="row-price-1" value="0" required onkeyup="calculateTotalPrice('row-1',1);">
                                                </td>
                                                <td class="text-center" id="td-row-total-1">0</td>
                                                <input class="total-price" type="hidden" value="0" name="row[1][total]" id="row-total-1">
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" title="Add row" onclick="addRow(1);"><i class="fas fa-plus"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete row" onclick="deleteRow(1);" disabled><i class="fas fa-minus"></i></button>
                                                </td>
                                            </tr>
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

<!-- Add Progress Modal -->
<div class="modal" tabindex="-1" role="dialog" id="add-progress-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="day-number"></h5>
            </div>

            <div class="modal-body">
                <div class="col-md-12" id="add-progress-form-container">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" id="project-id" value="">
                                <input type="hidden" id="project-code" value="">
                                <input type="hidden" id="boq-control-number" value="">
                                <input type="hidden" id="day-num" value="">
                                <input type="number" tabindex="1" id="progress" value="" class="form-control" placeholder="Enter progress">
                            </div>
                            <div class="col-md-6 text-right p-1">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveProgress();">Save</button> 
                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Progress Modal -->
<div class="modal" tabindex="-1" role="dialog" id="update-progress-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="day-number"></h5>
            </div>

            <div class="modal-body">
                <div class="col-md-12" id="update-progress-form-container">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" id="project-id" value="">
                                <input type="hidden" id="project-code" value="">
                                <input type="hidden" id="boq-control-number" value="">
                                <input type="hidden" id="day-num" value="">
                                <div class="form-group col-md-4 p-0">
                                    <label for="usr">Current Progress:</label>
                                    <input type="number" tabindex="1" id="progress" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="3" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right pr-3">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="requestForUpdateProgress();">Update</button> 
                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project Date -->
<div class="modal" tabindex="-1" role="dialog" id="edit-project-date-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-date-header"></h5>
            </div>

            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" id="project-id" value="">
                                <input type="hidden" id="project-code" value="">
                                <input type="hidden" id="db-field" value="">
                                <input type="hidden" id="date-type" value="">
                                <input class="datepicker" data-date-format="mm/dd/yyyy" id="edit-date">
                            </div>
                            <div class="col-md-6 text-right p-1">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateProjectDate();">Update</button> 
                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project Status -->
<div class="modal" tabindex="-1" role="dialog" id="edit-project-status-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-status-header">Edit Project Status</h5>
            </div>

            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" id="project-id" value="">
                                <input type="hidden" id="project-code" value="">
                                <input type="hidden" id="db-field" value="">
                                <div class="form-inline">
                                    <label>Status: </label>
                                    <select class="custom-select form-control" id="project-status" name="status" required>
                                        <option selected>Select Status</option>
                                        @foreach(Config::get('status') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 text-right" style="padding-top: 30px !important;">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="updateProjectStatus();">Update</button> 
                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Project -->
<div class="modal" tabindex="-1" role="dialog" id="delete-project-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-status-header">Delete Project</h5>
            </div>

            <div class="modal-body">
                <input type="hidden" id="project_id">
                <input type="hidden" id="project_code">
                <h5 class="text-danger">Are you sure you want to delete this project?</h5>
            </div>

            <div class="modal-footer text-right">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="deleteProject();">Delete</button> 
                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button> 
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #projects').addClass('active');
    $('.sidebar #projects a').addClass('active');

    $(document).ready(function() {
        InitiateProjectsTable();
        $('#add-progress-modal').on('shown.bs.modal', function () {
            $('#progress').focus();
        })  
    });

    // Initialize Datatable
    function InitiateProjectsTable()
    {
        $('#projects-table').DataTable();
    }

    // Switch container views
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
                                <input type="text" class="form-control" name="row['+ctr+'][controlnumber]" id="row-ctrl-number-'+ctr+'" value="0" required onfocus="'+onFocus+'">\
                            </td>\
                            <td id="row-description-'+ctr+'"></td>\
                            <td id="row-unit-'+ctr+'" class="text-uppercase text-center"></td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center allow_decimal" name="row['+ctr+'][quantity]" id="row-quantity-'+ctr+'" value="0" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center">\
                                <input type="text" class="form-control text-center allow_decimal" name="row['+ctr+'][price]" id="row-price-'+ctr+'" value="0" required onkeyup="'+onBlur+'">\
                            </td>\
                            <td class="text-center" id="td-row-total-'+ctr+'">0</td>\
                            <input type="hidden" class="total-price" value="0" name="row['+ctr+'][total]" id="row-total-'+ctr+'">\
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

    // Show Daily Progress View
    function viewDailyProgress(id, project_code, site_name, day_number)
    {
        $('#project-container').addClass('d-none')
        $('#view-daily-progress-container').removeClass('d-none');
        $('#view-daily-progress-container #site-name').empty().text(site_name);

        $.ajax({
            beforeSend: function(){
                $('.ajax-loader').removeClass('d-none');
                $('.ajax-loader').css("visibility", "visible");
            },
            url: "{{ url('get-all-project-details') }}",
            data: 
            {
                "id" : id,
                "project_code" : project_code
            },
        })
        .done(function(result) {
            $('#view-daily-progress-container #add-scope-of-work-btn-container #add-scope').attr('href',"{{ url('add-scope-of-work') }}/"+id+"/"+project_code);
            $('#view-daily-progress-container #add-scope-of-work-btn-container #add-remarks').attr('href',"{{ url('project-remarks') }}/"+id+"/"+project_code);
            var open_remarks_modal = "openRemarksModal("+id+",'"+project_code+"');"
            $('#view-daily-progress-container #add-scope-of-work-btn-container #remarks-btn').attr('onclick',open_remarks_modal);
            var table = $('#daily-progress-table');
            table.empty();
            var initalTable = '<thead>\
                                <tr class="bg-dark text-white">\
                                    <th>Activity/Scope Of Work</th>\
                                    <th>As Plan BOQ</th>\
                                </tr>\
                                </thead>\
                                <tbody></tbody>';
            table.empty().append(initalTable);
            table.empty().append('<thead>\
                                    <tr class="bg-dark text-white">\
                                        <th>Activity/Scope Of Work</th>\
                                        <th>As Plan BOQ</th>\
                                    </tr>\
                                </thead>\
                                <tbody></tbody>');
            var table_header = $('#daily-progress-table thead tr');
            var table_body = $('#daily-progress-table tbody');
            // add days on header
            for (var i = 1; i < result['number_of_days'] + 1; i++) {
                table_header.append('<th class="text-center">Day '+i+' <br> ('+result['date_range'][i - 1]+')</th>');
            }

            table_header.append('<th class="text-center">Total</th>');
            var total_progress_row = 0;
            $.each(result['boq_details'], function(index, value) {
                var ctr_num = '<h4>'+value['controlnumber']+'</h4>';
                var description = value['boq_description'];
                var as_plan_boq = value['quantity'];
                // create blank TDs
                var blank_tds = [];
                var total_prog = 0;
                for (var i = 1; i < result['number_of_days'] + 2; i++) {
                    var addProgress = "addProgress("+result['id']+",'"+result['project_code']+"','"+value['controlnumber']+"',"+i+");";
                    var updateProgress = "updateProgress("+result['id']+",'"+result['project_code']+"','"+value['controlnumber']+"',"+i+","+value['progress'][i]+");";
                    if(hasValue(value['progress'], i, value['progress'][i]) == true)
                    {
                        blank_tds+='<td ondblclick="'+updateProgress+'" id="td-'+i+'" class="text-center day-progress clickable">'+value['progress'][i]+'</td>';
                    }
                    else
                    {
                        blank_tds+='<td ondblclick="'+addProgress+'" id="td-'+i+'" class="text-center clickable day-progress">0</td>';   
                    }
                }
                table_body.append('<tr id="'+value['controlnumber']+'"><td>'+ctr_num+'<br>'+description+'</td><td class="text-center">'+as_plan_boq+'</td>'+blank_tds+'</tr>');
                
                $('#daily-progress-table tbody tr#'+value['controlnumber']+' td:last-child').removeAttr('ondblclick').removeClass('clickable').empty().text(value['boq_total_progress']);
                // console.log(value);
            });
            table.DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "bFilter": false,
                "scrollX": true,
                "scrollCollapse": true,
                "fixedColumns": {
                    leftColumns: 2,
                    rightColumns: 1
                }
            });
            $('.ajax-loader').css("visibility", "hidden");
            $('.ajax-loader').addClass('d-none');
        })
        .fail(function() {
            console.log("error");
        });
    }

    // Check if object has a value
    function hasValue(obj, key, value) {
        return obj.hasOwnProperty(key) && obj[key] === value;
    }

    // View Projects Main Page
    function viewProjectContainer()
    {
        $('#daily-progress-table').DataTable().destroy();
        $('#daily-progress-table').empty();
        $('#project-container').removeClass('d-none')
        $('#view-daily-progress-container').addClass('d-none');
    }

    // View Add Progress Modal
    function addProgress(project_id, project_code, boq_control_number, day)
    {
        var modal = '#add-progress-modal';
        $(modal).modal({ backdrop: 'static',keyboard: false });
        $(modal+' #day-number').empty().text('Day '+day+' Progress');
        $(modal+' #project-id').val(project_id);
        $(modal+' #project-code').val(project_code);
        $(modal+' #boq-control-number').val(boq_control_number);
        $(modal+' #day-num').val(day);
    }

    function updateProgress(project_id, project_code, boq_control_number, day, current_value)
    {
        var modal = '#update-progress-modal';
        $(modal).modal({ backdrop: 'static',keyboard: false });
        $(modal+' #day-number').empty().text('Update Day '+day+' Progress');
        $(modal+' #project-id').val(project_id);
        $(modal+' #project-code').val(project_code);
        $(modal+' #boq-control-number').val(boq_control_number);
        $(modal+' #day-num').val(day);
        $(modal+' #progress').val(parseInt(current_value));
    }

    // Add Progress to BOQ by day
    function saveProgress()
    {
        var modal = '#add-progress-modal';
        var project_id = $(modal+' #project-id').val();
        var project_code = $(modal+' #project-code').val();
        var boq_control_number = $(modal+' #boq-control-number').val();
        var day_number =  parseInt($(modal+' #day-num').val()); 
        var progress_input =  parseInt($.trim($(modal+' #progress').val()));

        var td_number = day_number + 2;
        $('tr#'+boq_control_number+' td:nth-child('+td_number+')').text(progress_input);
        $(modal+' #progress').val('');

        var total = 0;
        var total_days = $('tr#'+boq_control_number+' td').length - 2;
        
        var progress = [];
        for (var i = 1; i < total_days; i++) {
            progress.push(parseInt($('tr#'+boq_control_number+' #td-'+i+'.day-progress').text()));
            total += parseInt($('tr#'+boq_control_number+' #td-'+i+'.day-progress').text());
        }
        
        $('tr#'+boq_control_number+' td:last-child').text(total);

        // var total_project_progress = 0;
        // $.each($('#daily-progress-table tr td:last-child'), function(index, el) {
        //     total_project_progress += parseInt($(this).text());
        // });

        $.ajax({
            url: 'save-daily-progress',
            data: {
                "project_id" : project_id,
                "project_code" : project_code,
                "boq_control_number" : boq_control_number,
                "day_number" : day_number,
                "progress" : progress,
                "progress_input" : progress_input,
                "total_progress" : total,
                // "total_project_progress" : total_project_progress
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                $('#view-daily-progress-container .alert-success').removeClass('d-none');
                // window.location.replace("{{ url('projects') }}");
                setTimeout(function() {
                    $('.alert').addClass('d-none')
                }, 10000);
            }
            else
            {
                $('#view-daily-progress-container .alert-danger').removeClass('d-none');
                setTimeout(function() {
                    $('.alert').addClass('d-none')
                }, 10000);
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    // Edit Date(s)
    function editDate(date_type, project_id, project_code, current_date_value, db_field)
    {
        var modal_id = '#edit-project-date-modal';
        var currentYear = (new Date()).getFullYear();
        $('#edit-date').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy/mm/dd/',
            updateViewDate: true,
            changeYear: true,
            defaultViewDate: { year: currentYear }
        });
        $(modal_id).modal({ "backdrop":"static","keyboard":false });
        $(modal_id+' #edit-date-header').empty().text('Edit '+ date_type);
        $(modal_id+' #project-id').val(project_id);
        $(modal_id+' #project-code').val(project_code);
        $(modal_id+' #db-field').val(db_field);
        $(modal_id+' #date-type').val(date_type);
        $(modal_id+' #edit-date').val(current_date_value);
    }

    // Edit Status
    function editStatus(project_id, project_code, status, db_field)
    {
        var modal_id = '#edit-project-status-modal';
        $(modal_id).modal({ "backdrop":"static","keyboard":false });
        $(modal_id+' #project-id').val(project_id);
        $(modal_id+' #project-code').val(project_code);
        $(modal_id+' #db-field').val(db_field);
        $(modal_id+' #project-status').val(status);
    }

    function updateProjectStatus()
    {
        var modal_id = '#edit-project-status-modal';
        var project_id = $(modal_id+' #project-id').val();
        var project_code = $(modal_id+' #project-code').val();
        var db_field = $(modal_id+' #db-field').val();
        var status = $(modal_id+' #project-status').val();

        $.ajax({
            url: "{{ url('edit-project-status') }}",
            data: {
                "project_id" : project_id,
                "project_code" : project_code,
                "db_field" : db_field,
                "status" : status
            },
        })
        .done(function(response) {
            if(response['response'] == 'true')
            {
                $('.alert-success').empty().text('Status has been successfully modified!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert').addClass('d-none')
                }, 10000);
                var ondbclick = "editStatus('"+project_id+"','"+project_code+"','"+status+"','"+db_field+"');"
                $('td#status'+'_'+project_code).attr('ondblclick',ondbclick).empty().text(response['status']);
            }
            else
            {
                alert('Something went wrong. Please try again.')
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    // Save updated Project Date(s)
    function updateProjectDate()
    {
        var modal_id = '#edit-project-date-modal';
        var project_id = $(modal_id+' #project-id').val();
        var project_code = $(modal_id+' #project-code').val();
        var db_field = $(modal_id+' #db-field').val();
        var date_value = $(modal_id+' #edit-date').val();
        var date_type = $(modal_id+' #date-type').val();

        $.ajax({
            url: "{{ url('edit-project-date') }}",
            data: {
                "project_id" : project_id,
                "project_code" : project_code,
                "db_field" : db_field,
                "date_value" : date_value
            },
        })
        .done(function(response) {
            if(response != false)
            {
                $('#alert-container .alert-success').empty().text('Date has been successfully modified!');
                setTimeout(function() {
                    $('.alert').addClass('d-none')
                }, 10000);
                var ondbclick = "editDate('"+date_type+"','"+project_id+"','"+project_code+"','"+response+"','"+db_field+"');"
                $('td#'+db_field+'_'+project_code).attr('ondblclick',ondbclick).empty().text(response);
            }
            else
            {
                alert('Something went wrong. Please try again.')
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    // Request to admin for Update of Daily Progress
    function requestForUpdateProgress()
    {
        var modal = '#update-progress-form-container';

        var project_id = $(modal+' #project-id').val();
        var project_code = $(modal+' #project-code').val();
        var boq_control_number = $(modal+' #boq-control-number').val();
        var day_number = $(modal+' #day-num').val();
        var current_progress = parseInt($(modal+' #progress').val());
        var comment = $(modal+ ' #comment').val();

        var total = 0;
        var total_days = $('tr#'+boq_control_number+' td').length - 2;
        
        var progress = [];
        for (var i = 1; i < total_days; i++) {
            if(parseInt($('tr#'+boq_control_number+' #td-'+i+'.day-progress').text()) != 0)
            {
                progress.push(parseInt($('tr#'+boq_control_number+' #td-'+i+'.day-progress').text()));
                total += parseInt($('tr#'+boq_control_number+' #td-'+i+'.day-progress').text());
            }
        }
        
        $.ajax({
            url: "{{ url('request-to-update-progress') }}",
            data: {
                "project_id" : project_id,
                "project_code" : project_code,
                "boq_control_number" : boq_control_number,
                "day_number" : day_number,
                "current_progress" : current_progress,
                "progress" : progress,
                "comment" : comment
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                $('.alert-success').empty().text('Request to update progress successfully submitted for ADMIN approval.').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
            }
            else
            {
                $('.alert-danger').empty().text('Something went wrong. Please try again!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none')
                }, 10000);
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    $(".allow_decimal").on("input", function(evt) {
       var self = $(this);
       self.val(self.val().replace(/[^0-9\.]/g, ''));
       if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
       {
         evt.preventDefault();
       }
     });

    function openDeleteProjectModal(id,project_code)
    {
        $('#delete-project-modal').modal({keyboard:false,backdrop:"static"});
        $('#delete-project-modal #project_id').val(id)
        $('#delete-project-modal #project_code').val(project_code);
    }

    function deleteProject()
    {
        var id = $('#delete-project-modal #project_id').val();
        var project_code = $('#delete-project-modal #project_code').val();

        $.ajax({
            url: "{{ url('delete-project') }}",
            data: {
                "id" : id,
                "project_code" : project_code
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                location.reload();
            }
            else
            {
                alert('Something went wrong. Please Try again.');
            }
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>

@endsection