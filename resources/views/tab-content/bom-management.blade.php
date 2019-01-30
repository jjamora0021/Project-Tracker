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
                        <h2>BOM Management</h2>
                    </div>
                    <!-- <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal">
                            <i class="fas fa-plus"></i> Add Location
                        </button>
                    </div> -->
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
                                                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" title="Update {{ $value['material_code'] }}"><i class="fas fa-edit"></i></button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ $value['material_code'] }}"><i class="far fa-trash-alt"></i></button>
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

<script type="text/javascript">
    $(document).ready(function() {
        InitiateBOMTable();
        $('.sidebar #bom').addClass('active');
        $('.sidebar #bom a').addClass('active');
    });

    function InitiateBOMTable ()
    {
        $('#bom-table').DataTable({
            "order": []
        });
    }
</script>
@endsection