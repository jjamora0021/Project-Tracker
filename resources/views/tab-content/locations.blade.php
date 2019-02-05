@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div id="content-wrapper">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="container text-center">
            <div class="alert alert-success text-center font-weight-bold d-none"></div>
            <div class="alert alert-danger text-center font-weight-bold d-none"></div>
        </div>
        <div class="tab-pane active">
            <div class="container-fluid" id="locations-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Project Locations</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal" background="static" keyboard="false">
                            <i class="fas fa-plus"></i> Add
                        </button>
                        <button class="btn btn-warning btn-sm ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#update-location-modal" background="static" keyboard="false" onclick="loadLocations();">
                            <i class="fas fa-edit"></i> Update
                        </button>
                    </div>
                </div>

                <!-- Locations Table -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            @if(empty($locations))
                                <h3 class="text-center">No Projects Available</h3>
                            @else
                                <div class="row" id="locations-buttons-container">
                                    @foreach($locations as $key => $loc)
                                        @switch($key)
                                            @case('nlz')
                                                <h4 class="text-capitalize mb-4">North Luzon</h4>
                                                <div class="col-md-12">
                                                    <div class="row nlz">
                                                        @foreach($loc as $idx => $val)
                                                            <div class="col-md-4">
                                                                <a href="{{ url('projects') }}/{{ $val['location'] }}">
                                                                    <button id="{{ $val['abbrv'] }}" class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $val['location'] }}</button>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="col-md-12 p-0">
                                                @break
                                            @case('slz')
                                                <h4 class="text-capitalize mb-4">South Luzon</h4>
                                                <div class="col-md-12">
                                                    <div class="row slz">
                                                        @foreach($loc as $idx => $val)
                                                            <div class="col-md-4">
                                                                <a href="{{ url('projects') }}/{{ $val['location'] }}">
                                                                    <button id="{{ $val['abbrv'] }}" class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $val['location'] }}</button>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="col-md-12 p-0">
                                                @break
                                            @case('gmm')
                                               <h4 class="text-capitalize mb-4">Greater Metro Manila</h4>
                                                <div class="col-md-12">
                                                    <div class="row gmm">
                                                        @foreach($loc as $idx => $val)
                                                            <div class="col-md-4">
                                                                <a href="{{ url('projects') }}/{{ $val['location'] }}">
                                                                    <button id="{{ $val['abbrv'] }}" class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $val['location'] }}</button>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="col-md-12 p-0">
                                                @break
                                            @case('vis')
                                                <h4 class="text-capitalize mb-4">Visayas</h4>
                                                <div class="col-md-12">
                                                    <div class="row vis">
                                                        @foreach($loc as $idx => $val)
                                                            <div class="col-md-4">
                                                                <a href="{{ url('projects') }}/{{ $val['location'] }}">
                                                                    <button id="{{ $val['abbrv'] }}" class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $val['location'] }}</button>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="col-md-12 p-0">
                                                @break
                                            @case('min')
                                                <h4 class="text-capitalize mb-4">Mindanao</h4>
                                                <div class="col-md-12">
                                                    <div class="row min">
                                                        @foreach($loc as $idx => $val)
                                                            <div class="col-md-4">
                                                                <a href="{{ url('projects') }}/{{ $val['location'] }}">
                                                                    <button id="{{ $val['abbrv'] }}" class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $val['location'] }}</button>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <hr class="col-md-12 p-0">
                                                @break
                                        @endswitch
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Location Modal -->
<div class="modal" id="add-location-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Location</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Location Code: </label>
                        <input type="text" class="form-control" id="location-code" placeholder="Ex: nlz_bulacan" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label>Location:</label>
                        <input type="text" class="form-control" id="location" placeholder="Ex: Bulacan" value="" required>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="saveLocation();">Save Location</button>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Location Modal -->
<div class="modal" id="update-location-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Location Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-md-12">
                    <table class="table table-striped" id="update-location-modal-table" width="100%">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Prefix/Region</th>
                                <th>Area</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #locations').addClass('active');
    $('.sidebar #locations a').addClass('active');

    function saveLocation() 
    {
        var code = $('#add-location-modal #location-code').val();
        var location = $('#add-location-modal #location').val();

        $.ajax({
            url: "{{ url('save-location') }}",
            data: {
                "code" : code,
                "location" : location
            },
        })
        .done(function(response) {
            $('#add-location-modal #location-code').val('');
            $('#add-location-modal #location').val('');
            if(response == 'true')
            {
                var area = code.split('_')[0];
                $('.alert-success').empty().text('Location successfully added!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
                var locations = '<div class="col-md-4">\
                                    <a href="#">\
                                        <button class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">'+location+'</button>\
                                    </a>\
                                </div>';
                $('#locations-buttons-container .'+area).append(locations);
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

    function loadLocations() 
    {
        $.ajax({
            url: "{{ url('get-all-locations') }}",
        })
        .done(function(response) {
            if(response.length != 0)
            {
                var table = $('#update-location-modal #update-location-modal-table tbody');
                table.empty();
                $.each(response, function(index, value) {
                    var prefix = value['abbrv'].split('_')[0];
                    var update_event = "updateLocation('"+value['abbrv']+"','"+value['location']+"')";
                    var delete_event = "deleteLocation('"+value['abbrv']+"','"+value['location']+"')";
                    var buttons = '<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" onclick="'+update_event+'"><i class="fas fa-save"></i></button>\
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="'+delete_event+'"><i class="fas fa-trash-alt"></i></button>';
                    var rows = '<tr id="'+value['abbrv']+'">\
                                    <td><input type="text" class="form-control location-code" value="'+value['abbrv']+'" /></td>\
                                    <td>'+prefix+'</td>\
                                    <td><input type="text" class="form-control location-name" value="'+value['location']+'" /></td>\
                                    <td>'+buttons+'</td>\
                                </tr>';
                    table.append(rows);
                });
                $('#update-location-modal #update-location-modal-table').DataTable();
            }
        })
        .fail(function() {
            console.log("error");
        });
    }

    function updateLocation(code, location)
    {
        var input_code = $('tr#'+code+' td .location-code').val();
        var input_location = $('tr#'+code+' td .location-name').val();

        $.ajax({
            url: "{{ url('update-location') }}",
            data: {
                "code" : code,
                "location" : location,
                "input_code" : input_code,
                "input_location" : input_location
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                $('.alert-success').empty().text('Location successfully updated!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
                $('#'+code).empty().append(input_location).attr('id',input_code);
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

    function deleteLocation(code, location)
    {
        $.ajax({
            url: "{{ url('delete-location') }}",
            data: {
                "code" : code,
                "location" : location
            },
        })
        .done(function(response) {
            if(response == 'true')
            {
                $('.alert-success').empty().text('Location successfully deleted!').removeClass('d-none');
                setTimeout(function() {
                    $('.alert-success').addClass('d-none')
                }, 10000);
                $('#'+code).parent().parent().remove();
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