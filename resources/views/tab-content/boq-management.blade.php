<div class="container-fluid">
    <div class="col-md-12 page-header-container mb-2">
        <div class="col-md-6 p-0">
            <h2>BOQ Management</h2>
        </div>
        <!-- <div class="col-md-6 pt-2 text-right">
            <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal">
                <i class="fas fa-plus"></i> Add Location
            </button>
        </div> -->
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
                                <th width="15%" class="text-center" id="actions">Actions</th>
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
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Update</button>
                                            <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
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

<script type="text/javascript">
    $(document).ready(function() {
        InitiateBOQTable();
    });

    function InitiateBOQTable()
    {
        $('#boq-table').DataTable({
            "order": []
        });
    }
</script>