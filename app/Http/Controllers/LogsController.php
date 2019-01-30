<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\LogsModel;

use Session;

class LogsController extends Controller
{
    protected $LogsModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->LogsModel = new \App\LogsModel;
    }

    // Convert Objects to Array
    public function objectToArray($data)
    {
        if (is_array($data) || is_object($data))
        {
            $result = array();
            foreach ($data as $key => $value)
            {
                $result[$key] = $this->objectToArray($value);
            }
            return $result;
        }
        return $data;
    }

    // Load All Logs
    public function index()
    {
    	$user_data = Session::get('user')[0];
    	$logs = $this->LogsModel->getAllLogs();

    	foreach ($logs as $key => $value) {
    		$logs[$key]['details'] = $this->objectToArray(json_decode($value['details']));
    		if (array_key_exists("result", $logs[$key]['details']))
    		{
    			$logs[$key]['result'] = $logs[$key]['details']['result'];
    		}
    	}
    	return view('tab-content.logs',compact('logs','user_data'));
    }

    // Get Logs Details
    public function getLogDetails(Request $request)
    {
    	$details = $this->LogsModel->getLogDetails($request['id']);
    	$details['details'] = $this->objectToArray(json_decode($details['details']));
    	if (array_key_exists("boq_details",$details['details']))
    	{
    		$details['details']['boq_details'] = $this->objectToArray(json_decode($details['details']['boq_details']));
    	}

    	return response()->json($details['details']);
    }
}
