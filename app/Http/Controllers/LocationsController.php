<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LocationsModel;
use App\Logs;

use Session;

use Carbon\Carbon;
use DB;
use Config;

class LocationsController extends Controller
{
    protected $LocationsModel;
	protected $LogsModel;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->LocationsModel = new \App\LocationsModel;
    }

    // Load Locations Page
    public function index()
    {
        $user_data = Session::get('user')[0];
        $locations = $this->getAllLocations();
        return view('tab-content.locations', compact('locations','user_data'));
    }

    // Get All Locations
    public function getAllLocations()
    {
        $locations = $this->LocationsModel->getAllLocations();
        return $locations;
    }

    // Save New Location
    public function saveLocation(Request $request)
    {
        $code = $request['code'];
        $location = $request['location'];

        $add = $this->LocationsModel->saveLocation($code, $location);
        if($add == true)
        {
            return 'true';
        }
        else
        {
            return 'false';
        }
    }
}
