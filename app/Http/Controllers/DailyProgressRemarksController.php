<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DailyProgressRemarksModel;
use App\LogsModel;
use App\ProgressRequestsModel;

use Carbon\Carbon;
use DB;
use Session;

class DailyProgressRemarksController extends Controller
{
    protected $DailyProgressRemarksModel;
    protected $LogsModel;

    protected $ProgressRequestsController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->DailyProgressRemarksModel = new \App\DailyProgressRemarksModel;
        $this->LogsModel = new \App\LogsModel;
        $this->ProgressRequestsModel = new \App\ProgressRequestsModel;
    }

    function saveDailyProgressRemarks(Request $request)
    {
    	$user_data = Session::get('user')[0];
        $now = Carbon::now();

    	$project_id = $request['project_id'];
    	$project_code = $request['project_code'];
    	$boq_control_number = $request['boq_control_number'];
    	$day_number = $request['day_number'];
    	$remark = $request['remark'];
    	
    	$remarks = [];
    	foreach ($request['remarks'] as $key => $value) {
    		$remarks[$key + 1] = $value;
    	}

    	$data = [
    		'project_id' => $project_id, 
    		'project_code' => $project_code, 
    		'boq_control_number' => $boq_control_number, 
    		'day_number' => $day_number, 
    		'remarks' => json_encode($remarks),
    		'created_at' => $now,
    		'updated_at' => $now
    	];
    	
    	$result = $this->DailyProgressRemarksModel->saveDailyProgressRemarks($data);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'boq_control_number' => $boq_control_number, 
            'day_number' => $day_number, 
            'remark' => $remark,
            'result' => 'null'
        ];
    	if($result == true)
    	{
            $details['result'] = 'success';
            $this->LogsModel->createDailyProgressRemarksLog($user_data, $now, $details, $request['project_code']);
    		return 'true';
    	}
    	else
    	{
            $details['result'] = 'failed';
            $this->LogsModel->createDailyProgressRemarksLog($user_data, $now, $details, $request['project_code']);
    		return 'false';
    	}
    }

}
