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
                        <h2>Admin Dashboard</h2>
                    </div>
                </div>

                <!-- Dashboard Table -->
                <div class="card mb-2">
                    <div class="card-header">
                        <h5><i class="fas fa-tasks"></i> Requests for Daily Progress Update</h5>
                        <!-- Dashboard Table -->
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#for-approval" style="color: #007bff !important; font-weight: 700">For Approval</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#approved" style="color: #28a745 !important; font-weight: 700">Approved</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#denied" style="color: #c82333 !important; font-weight: 700">Denied</a>
                            </li> -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-4">
                            <!-- For Approval -->
                            <div class="tab-pane active" id="for-approval">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Requestor</th>
                                                <th>Project Code</th>
                                                <th>BOQ Control Number</th>
                                                <th>Day Number</th>
                                                <th>BOQ Progress Request</th>
                                                <th>Comment</th>
                                                <th>Submitted At</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        @if(!empty($requests))
                                            <tbody>
                                                @foreach($requests['for_approval'] as $key => $value)
                                                    <tr>
                                                        <td>{{ $value['requestor'] }}</td>
                                                        <td>{{ $value['project_code'] }}</td>
                                                        <td>{{ $value['boq_control_number'] }}</td>
                                                        <td>{{ $value['day_number'] }}</td>
                                                        <td>{{ $value['progress_update'] }}</td>
                                                        <td>{{ $value['comment'] }}</td>
                                                        <td>{{ $value['created_at'] }}</td>
                                                        <td class="text-center text-capitalize">{{ $value['status'] }}</td>
                                                        <td class="text-center">
                                                            <button class="btn btn-sm btn-success" data-toggle="tooltip" title="Approve Request" onclick="approveUpdateRequest({{ $value['request_id'] }}, {{ json_encode($value) }});"><i class="fas fa-check"></i></button>
                                                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Deny Request" onclick="denyUpdateRequest({{ $value['request_id'] }});"><i class="fas fa-times"></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <tbody></tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- Approved -->
                            <div class="tab-pane fade" id="approved">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Requestor</th>
                                                <th>Project Code</th>
                                                <th>BOQ Control Number</th>
                                                <th>Day Number</th>
                                                <th>BOQ Progress Request</th>
                                                <th>Comment</th>
                                                <th>Submitted At</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        @if(!empty($requests))
                                            <tbody>
                                                @foreach($requests['approved'] as $key => $value)
                                                    <tr>
                                                        <td>{{ $value['requestor'] }}</td>
                                                        <td>{{ $value['project_code'] }}</td>
                                                        <td>{{ $value['boq_control_number'] }}</td>
                                                        <td>{{ $value['day_number'] }}</td>
                                                        <td>{{ $value['progress_update'] }}</td>
                                                        <td>{{ $value['comment'] }}</td>
                                                        <td>{{ $value['created_at'] }}</td>
                                                        <td class="text-center text-capitalize">{{ $value['status'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <tbody></tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- Denied -->
                            <div class="tab-pane fade" id="denied">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Requestor</th>
                                                <th>Project Code</th>
                                                <th>BOQ Control Number</th>
                                                <th>Day Number</th>
                                                <th>BOQ Progress Request</th>
                                                <th>Comment</th>
                                                <th>Submitted At</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        @if(!empty($requests))
                                            <tbody>
                                                @foreach($requests['denied'] as $key => $value)
                                                    <tr>
                                                        <td>{{ $value['requestor'] }}</td>
                                                        <td>{{ $value['project_code'] }}</td>
                                                        <td>{{ $value['boq_control_number'] }}</td>
                                                        <td>{{ $value['day_number'] }}</td>
                                                        <td>{{ $value['progress_update'] }}</td>
                                                        <td>{{ $value['comment'] }}</td>
                                                        <td>{{ $value['created_at'] }}</td>
                                                        <td class="text-center text-capitalize">{{ $value['status'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        @else
                                            <tbody></tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #dashboard').addClass('active');
    $('.sidebar #dashboard a').addClass('active');

    $('.table').DataTable();

    function approveUpdateRequest(request_id, data)
    {
        $.ajax({
            url: "{{ url('approve-to-update-progress') }}",
            data: {
                "request_id": request_id,
                "data" : data
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                $('.alert-success').empty().text('Request for Daily Progress Update Approved!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
                location.reload();
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
</script>

@endsection