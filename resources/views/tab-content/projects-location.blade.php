@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="container text-center">
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
            <div class="container-fluid">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>{{ $location }} Projects</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <a href="{{ url('locations') }}">
                            <button class="btn btn-warning btn-sm float-right ml-2 font-12 font-weight-bold">
                                <i class="fas fa-undo"></i> Back
                            </button>
                        </a>
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
                                        <th class="text-center">Start Date</th>
                                        <th class="text-center">End Date</th>
                                        <th class="text-center">Total Percentage</th>
                                        <th class="text-center" id="actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($projects))
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
                                                <td class="text-center">{{ (int)$total_progress }}%</td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['site_name'] }} Progress" onclick="viewDailyProgress('{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['site_name'] }}','{{ $days }}');"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['site_name'] }}" onclick="viewDailyProgress('{{ $value['id'] }}','{{ $value['project_code'] }}','{{ $value['site_name'] }}');"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                    <tbody></tbody>
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

<script type="text/javascript">
    $('.sidebar #projects').addClass('active');
    $('.sidebar #projects a').addClass('active');

    $('.table').DataTable();
</script>

@endsection