<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DailyProgressModel;
use App\LogsModel;
use App\ProgressRequestsModel;

use Carbon\Carbon;
use DB;
use Session;

class DailyProgressController extends Controller
{
    protected $DailyProgressModel;
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
        $this->DailyProgressModel = new \App\DailyProgressModel;
        $this->LogsModel = new \App\LogsModel;
        $this->ProgressRequestsModel = new \App\ProgressRequestsModel;
    }

    // Get Daily Progress of Project
    public function getDailyProgress(Request $request)
    {
    	$result = $this->DailyProgressModel->getProgressDetails($request['project_id'], $request['project_code'], $request['boq_control_number']);
    	if(!empty($result))
    	{
    		return $result;
    	}
    	else
    	{
    		return false;
    	}
    }

    // Save Daily Progress
    public function saveDailyProgress(Request $request)
    {
        dd($request);
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

    	$progress = [];
    	foreach ($request['progress'] as $key => $value) {
    		$progress[$key + 1] = $value;
    	}
    	$data = [
    		'project_id' => $request['project_id'], 
    		'project_code' => $request['project_code'], 
    		'boq_control_number' => $request['boq_control_number'], 
    		'day_number' => $request['day_number'], 
    		'progress' => json_encode($progress),
    		'total_progress' => (int)$request['total_progress']
    	];
    	
    	$result = $this->DailyProgressModel->saveDailyProgress($data);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'boq_control_number' => $request['boq_control_number'], 
            'day_number' => $request['day_number'], 
            'progress_input' => $request['progress_input'],
            'result' => 'null'
        ];
    	if($result == true)
    	{
            $details['result'] = 'success';
            $this->LogsModel->createDailyProgressLog($user_data, $now, $details, $request['project_code']);
    		return 'true';
    	}
    	else
    	{
            $details['result'] = 'failed';
            $this->LogsModel->createDailyProgressLog($user_data, $now, $details, $request['project_code']);
    		return 'false';
    	}
    }

    // Request To Update Progress
    public function requestToUpdateProgress(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'requestor' => $user_data['username'],
            'project_id' => $request['project_id'],
            'project_code' => $request['project_code'],
            'boq_control_number' => $request['boq_control_number'],
            'day_number' => $request['day_number'],
            'progress_update' => $request['current_progress'],
            'comment' => $request['comment'],
            'status' => 'for approval',
            'created_at' => $now,
            'updated_at' => $now
        ];

        $result = $this->ProgressRequestsModel->requestForUpdate($data);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'project_id' => $request['project_id'],
            'project_code' => $request['project_code'],
            'boq_control_number' => $request['boq_control_number'], 
            'day_number' => $request['day_number'], 
            'progress_update' => $request['current_progress'],
            'progress' => json_encode($request['progress']),
            'comment' => $request['comment'],
            'result' => 'null'
        ];

        if($result == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createRequestUpdateDailyProgressLog($user_data, $now, $details, $request['project_code']);
            return 'true';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createRequestUpdateDailyProgressLog($user_data, $now, $details, $request['project_code']);
            return 'false';
        }
    }

    // Approve Request to Update Progress
    public function approveRequestToUpdateProgress(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();
        
        $total_progress = 0;
        $progress = [];
        foreach (json_decode($request['data']['current_data']['progress']) as $key => $value) {
            if($key == $request['data']['day_number'])
            {
                $progress[$key] = (int)$request['data']['progress_update'];
            }
            else
            {
                $progress[$key] = (int)$value;
            }
            $total_progress += $progress[$key];
        }
        
        $new_data = [
            'progress' => json_encode($progress),
            'total_progress' => $total_progress
        ];
        $approve = $this->DailyProgressModel->updateDailyProgress($request['data'], $new_data);

        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'boq_control_number' => $request['data']['boq_control_number'], 
            'day_number' => $request['data']['day_number'], 
            'progress_input' => $request['data']['progress_update'],
            'result' => 'null'
        ];

        $request_update_data = [
            'requestor' => $request['data']['requestor'],
            'project_id' => $request['data']['project_id'],
            'project_code' => $request['data']['project_code'],
            'boq_control_number' => $request['data']['boq_control_number'],
            'day_number' => $request['data']['day_number'],
            'progress_update' => $request['data']['progress_update'],
            'comment' => 'Approved by ' . $user_data['username'],
            'status' => 'approved',
            'created_at' => $now,
            'updated_at' => $now
        ];

        $this->ProgressRequestsModel->approveRequestForUpdate($request['data']['request_id'],$request_update_data);

        if($approve == true)
        {
            $details['result'] = 'success';
            $this->LogsModel->createApproveDailyProgressUpdateRequestLog($user_data, $now, $details, $request['data']['project_code']);
            return 'true';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createApproveDailyProgressUpdateRequestLog($user_data, $now, $details, $request['project_code']);
            return 'false';
        }
    }
}
