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

        $this->LogsModel = new \App\LogsModel;
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
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $code = $request['code'];
        $location = $request['location'];

        $add = $this->LocationsModel->saveLocation($code, $location);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'location_code' => $code,
            'result' => 'null'
        ];

        if($add == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createLocationLog($user_data, $now, $details);
            return 'true';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createLocationLog($user_data, $now, $details);
            return 'false';
        }
    }

    // Update Location
    public function updateLocation(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $code = $request['code'];
        $location = $request['location'];

        $data = [
            'abbrv' => $request['input_code'],
            'location' => $request['input_location'],
            'updated_at' => $now
        ];

        $update = $this->LocationsModel->updateLocation($code, $data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'orginial_location_code' => $code,
            'orginial_location' => $location,
            'current_location_code' => $request['input_code'],
            'current_location' => $request['input_location'],
            'result' => 'null'
        ];

        if($update == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createUpdateLocationLog($user_data, $now, $details);
            return 'true';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createUpdateLocationLog($user_data, $now, $details);
            return 'false';
        }
    }

    //Delete Location
    public function deleteLocation(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $code = $request['code'];
        $location = $request['location'];

        $delete = $this->LocationsModel->deleteLocation($code, $location);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'location_code' => $code,
            'location' => $location,
            'result' => 'null'
        ];

        if($delete == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createDeleteLocationLog($user_data, $now, $details);
            return 'true';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createDeleteLocationLog($user_data, $now, $details);
            return 'false';
        }
    }
}
