@extends('layouts.app')

@section('content')

@include('layouts.sidebar')
    
<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="alert alert-success text-center font-weight-bold d-none"></div>
        <div class="container text-center" id="alert-container">
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
        <div class="tab-pane active">
            <!-- View/Update Project -->
            <div class="container-fluid" id="view-daily-progress-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2 id="site-name">{{$data['site_name']}}</h2>
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
                                <h4 class="mb-3"><i class="fas fa-tasks"></i> Daily Progress Remarks</h4>
                            </div>
                        </div>
                        <!-- <div class="ajax-loader">
                            <img src="{{ url('images/Spinner-1.gif') }}" class="img-responsive" />
                        </div> -->
                        <small><strong>Note: <span class="text-danger">Double click on the space below the day number to input remarks. Remarks updates only. If there are quantity, input them on the quantity section.</span></strong></small>
                        <table class="table table-striped table-bordered" id="daily-progress-remarks-table" cellspacing="0" width="100%">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th>Activity/Scope Of Work</th>
                                    <th>As Plan BOQ</th>
                                    @foreach($data['date_range'] as $key => $value)
                                        <?php $key = $key + 1; ?>
                                        <th class="text-center">Day {{ $key }} <br> ({{ $value }})</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['boq_details'] as $key => $value)
                                    <tr id="{{$value['controlnumber']}}">
                                        <td><h4>{{$value['controlnumber']}}</h4><br>{{$value['boq_description']}}</td>
                                        <td class="text-center">{{$value['quantity']}}</td>
                                        @for($i = 0; $i < $data['number_of_days']; $i++)
                                            @if(array_key_exists('remarks', $value))
                                                @if($value['remarks'][$i + 1] != '0')
                                                    <td class="has-value text-center" id="day-{{ $i + 1 }}">{{ $value['remarks'][$i + 1] }}</td>
                                                @else
                                                    <td id="day-{{ $i + 1 }}" ondblclick="addRemarks({{ $data['id'] }},'{{ $data['project_code'] }}','{{ $value['controlnumber'] }}',{{ $i + 1 }},'{{$value['boq_description']}}');" class="clickable text-center">0</td>
                                                @endif
                                            @else
                                                @if(!empty($value['progress'][$i + 1]))
                                                    <td class="has-value text-center" id="day-{{ $i + 1 }}">{{ $value['progress'][$i + 1] }}</td>
                                                @else
                                                    <!-- addRemarks(project_id, project_code, boq_controlnumber, day_number) -->
                                                    <td id="day-{{ $i + 1 }}" ondblclick="addRemarks({{ $data['id'] }},'{{ $data['project_code'] }}','{{ $value['controlnumber'] }}',{{ $i + 1 }},'{{$value['boq_description']}}');" class="clickable text-center">0</td>
                                                @endif
                                            @endif
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="add-remarks-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><span class="boq_controlnumber" style="font-size: 30px;"></span>: <span class="boq_description"></span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="boq-controlnumber" value="">
                <input type="hidden" id="boq-description" value="">
                <input type="hidden" id="project-id" value="">
                <input type="hidden" id="project-code" value="">
                <input type="hidden" id="day-number" value="">
                <div class="form-group col-md-12">
                    <label for="comment" id="comment-label"></label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveRemarks();">Save</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #projects').addClass('active');
    $('.sidebar #projects a').addClass('active');

    $(document).ready(function () {
        InitializeTable();
    });

    function InitializeTable() 
    {
        table = $('#daily-progress-remarks-table');
        table.DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false,
            "bFilter": false,
            "scrollX": true,
            "scrollCollapse": true,
            "fixedColumns": {
                leftColumns: 2
            }
        });
    }

    function addRemarks(id, project_code, boq_controlnumber, day_number, boq_description)
    {
        $('#add-remarks-modal .modal-body #comment').focus();
        $('#add-remarks-modal #boq-controlnumber').val(boq_controlnumber);
        $('#add-remarks-modal #boq-description').val(boq_description);
        $('#add-remarks-modal #project-id').val(id);
        $('#add-remarks-modal #project-code').val(project_code);
        $('#add-remarks-modal #day-number').val(day_number);

        $('#add-remarks-modal .boq_controlnumber').empty().text(boq_controlnumber);
        $('#add-remarks-modal .boq_description').empty().text(boq_description);
        $('#comment-label').empty().text('Day ' + day_number + ' Remarks:')
        $('#add-remarks-modal').modal({keyboard:false,backdrop:"static"});
    }

    function saveRemarks()
    {
        var id = $('#add-remarks-modal #project-id').val();
        var project_code = $('#add-remarks-modal #project-code').val();
        var day_number = $('#add-remarks-modal #day-number').val();
        var remark = $('#add-remarks-modal #comment').val();
        var boq_controlnumber = $('#add-remarks-modal #boq-controlnumber').val();

        $('#daily-progress-remarks-table tr#'+boq_controlnumber+' td#day-'+day_number).empty().text(remark).addClass('has-value');

        var remarks = [];
        $('#daily-progress-remarks-table tr#'+boq_controlnumber+' td').not(':first').not(':nth-child(2)').each(function(index, el) {
            remarks.push($(this).text())
        });

        var number_of_days = remarks.length;
        
        $.ajax({
            url: "{{ url('save-daily-progress-remarks') }}",
            data: {
                "project_id" : id,
                "project_code" : project_code,
                "boq_control_number" : boq_controlnumber,
                "day_number" : number_of_days,
                "remarks" : remarks,
                "remark" : remark
            },
        })
        .done(function(response) {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>

@endsection