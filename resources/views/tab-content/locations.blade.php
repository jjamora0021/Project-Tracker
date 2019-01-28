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
            <div class="container-fluid" id="locations-container">
                <div class="col-md-12 page-header-container mb-2">
                    <div class="col-md-6 p-0">
                        <h2>Project Locations</h2>
                    </div>
                    <div class="col-md-6 pt-2 text-right">
                        <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal" background="static" keyboard="false">
                            <i class="fas fa-plus"></i> Add Location
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
                                        <div class="col-md-4">
                                            <a href="#">
                                                <button class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">{{ $loc['location'] }}</button>
                                            </a>
                                        </div>
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
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveLocation();">Save Location</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('.sidebar #locations').addClass('active');
    $('.sidebar #locations a').addClass('active');

    function saveLocation() {
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
            console.log(response)
            if(response == 'true')
            {
                $('.alert-success').empty().text('Location successfully added!');
                $('.alert').fadeOut(10000);
                var locations = '<div class="col-md-4">\
                                    <a href="#">\
                                        <button class="btn btn-xl btn-black col-md-12 mb-3 location-tile text-uppercase">'+location+'</button>\
                                    </a>\
                                </div>';
                $('#locations-buttons-container').append(locations);
            }
            else
            {
                $('.alert-danger').empty().text('Something went wrong. Please try again!');
                $('.alert').fadeOut(10000);
            }
        })
        .fail(function() {
            console.log("error");
        });
    }
</script>

@endsection