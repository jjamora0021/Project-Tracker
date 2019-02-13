<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\WareHouseLocationModel;
use App\LogsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

class WarehouseLocationController extends Controller
{
    protected $WareHouseLocationModel;
    protected $LogsModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->WareHouseLocationModel = new \App\WareHouseLocationModel;
        $this->LogsModel = new \App\LogsModel;
    }

    public function index()
    {
    	$user_data = Session::get('user')[0];
    	$warehouse_locations = $this->WareHouseLocationModel->getAllWarehouseLocation();
    	return view('tab-content.warehouse-locations', compact('user_data','warehouse_locations'));
    }

    public function updateWarehouseLocation(Request $request)
    {
    	$user_data = Session::get('user')[0];
    	$now = Carbon::now();

    	$data = [
    		'id' => $request['id'],
    		'location' => $request['location'],
    		'area_code' => $request['area_code'],
    		'updated_at' => $now
    	];

    	$details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'id' => $request['id'],
            'location' => $request['location'],
            'area_code' => $request['area_code'],
            'result' => 'null'
        ];

    	$update = $this->WareHouseLocationModel->updateWarehouseLocation($data);
    	if($update == true)
    	{
    		$details['result'] = 'success';
            $this->LogsModel->createUpdateWarehouseLocationLog($user_data, $now, $details);
            return 'true';
    	}
    	else
    	{
    		return 'false';
    	}
    }

    public function addWarehouseLocation(Request $request)
	{
		$user_data = Session::get('user')[0];
		$now = Carbon::now();

		$data = [
			'location' => $request['location'],
			'area_code' => $request['area_code'],
			'created_at' => $now,
			'updated_at' => $now
		];

		$details = [
	        'user' => $user_data['username'],
	        'timestamp' => $now,
	        'location' => $request['location'],
	        'area_code' => $request['area_code'],
	        'result' => 'null'
	    ];

		$add = $this->WareHouseLocationModel->addWarehouseLocation($data);
		if($add == true)
		{
			$details['result'] = 'success';
	        $this->LogsModel->createAddWarehouseLocationLog($user_data, $now, $details);
	        return 'true';
		}
		else
		{
			return 'false';
		}
	}

	public function deleteWarehouseLocation(Request $request)
	{
		$user_data = Session::get('user')[0];
		$now = Carbon::now();

		$data = [
			'id' => $request['id'],
			'created_at' => $now,
			'updated_at' => $now
		];

		$details = [
	        'user' => $user_data['username'],
	        'timestamp' => $now,
	        'id' => $request['id'],
	        'result' => 'null'
	    ];

		$add = $this->WareHouseLocationModel->deleteWarehouseLocation($data);
		if($add == true)
		{
			$details['result'] = 'success';
	        $this->LogsModel->createDeleteWarehouseLocationLog($user_data, $now, $details);
	        return 'true';
		}
		else
		{
			return 'false';
		}
	}
}
