<div class="container-fluid" id="locations-container">
    <div class="col-md-12 page-header-container mb-2">
        <div class="col-md-6 p-0">
            <h2>Project Locations</h2>
        </div>
        <div class="col-md-6 pt-2 text-right">
            <button class="btn btn-primary btn-sm float-right ml-2 font-12 font-weight-bold" data-toggle="modal" data-target="#add-location-modal">
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
                    <div class="row">
                        @foreach($locations as $key => $loc)
                            <div class="col-md-4">
                                <a href="{{ url('location') }}/{{ $loc['abbrv'] }}/{{ $loc['location'] }}">
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