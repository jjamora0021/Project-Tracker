<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DailyProgressModel;

use Carbon\Carbon;
use DB;

class DailyProgressController extends Controller
{
    protected $DailyProgressModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->DailyProgressModel = new \App\DailyProgressModel;
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

    	if($result == true)
    	{
    		return 'true';
    	}
    	else
    	{
    		return 'false';
    	}
    }
}
