@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="container-fluid">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Logs View</h2>
                    </div>
                </div>

                <!-- BOM Table -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th hidden>ID</th>
                                        <th>Username</th>
                                        <th>User Action</th>
                                        <th>Result</th>
                                        <th>Project Code</th>
                                        <th>User Role</th>
                                        <th class="text-center">Logged At</th>
                                        <!-- <th  width="10%" class="text-center">Details</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($logs))
                                        @foreach($logs as $key => $value)
                                            <tr>
                                                <td hidden="">{{ $value['id'] }}</td>
                                                <td>{{ $value['username'] }}</td>
                                                <td>{{ $value['action'] }}</td>
                                                @if (array_key_exists("result", $value))
                                                    <td class="text-uppercase">{{ $value['result'] }}</td>
                                                @else
                                                    <td></td>
                                                @endif
                                                
                                                <td>{{ $value['project_code'] }}</td>
                                                <td class="text-uppercase">{{ $value['user_role_given'] }}</td>
                                                <td class="text-center">{{ $value['created_at'] }}</td>
                                                {{--
                                                @if($value['action'] == 'Login' || $value['action'] == 'Add Project' || $value['action'] == 'Add Location')
                                                    <td class="text-center"><button class="btn btn-sm btn-info" onclick="viewLogDetails({{ $value['id'] }})" disabled><i class="fas fa-eye"></i> View Details</button></td>
                                                @else
                                                    <td class="text-center"><button class="btn btn-sm btn-info" onclick="viewLogDetails({{ $value['id'] }})"><i class="fas fa-eye"></i> View Details</button></td>
                                                @endif
                                                --}}
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
<div class="modal" id="log-details">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        InitiateLogsTable();
        $('.sidebar #logs').addClass('active');
        $('.sidebar #logs a').addClass('active');
    });

    function InitiateLogsTable()
    {
        $('.table').DataTable({
            "order": []
        });
    }

    function viewLogDetails(id)
    {
        $('#log-details').modal({keyboard:false,backdrop:"static"});
        $.ajax({
            url: "{{ url('get-log-details') }}",
            data: { "id" : id},
        })
        .done(function(response) {
            console.log(response);
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>
@endsection