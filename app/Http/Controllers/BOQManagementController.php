<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BOQModel;
use App\LocationsModel;
use App\LogsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

class BOQManagementController extends Controller
{
    protected $BOQModel;
    protected $LogsModel;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->BOQModel = new \App\BOQModel;
        $this->LogsModel = new \App\LogsModel;
    }

    // Load BOQ Page
    public function index()
    {
        $user_data = Session::get('user')[0];
        $boqs = $this->getBOQs();

        return view('tab-content.boq-management', compact('boqs','user_data'));
    }

    // Fetch all BOQs
    public function getBOQs()
    {
        $boqs = $this->BOQModel->getBOQs();
        return $boqs;
    }

    // Get Details on a specific BOQ
    public function getBoqDetails(Request $request)
    {
        $boq_details = $this->BOQModel->getBoqDetails($request['control_number']);
        if(!empty($boq_details))
        {
            return response()->json($boq_details);    
        }
        else
        {
            return false;
        }
    }

    // Save New BOQ
    public function saveBOQ(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $unit = '';
        if($request['unit'] != '')
        {
            $unit = $request['unit'];
        }

        $data = [
            'control_number' => $request['control_number'],
            'description' => $request['description'],
            'unit' => $unit,
            'created_at' => $now,
            'updated_at' => $now
        ];

        $result = $this->BOQModel->saveBOQ($user_data, $now, $data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'control_number' => $request['control_number'],
            'result' => 'null'
        ];

        if($result == 'true')
        {
            $response = ['result' => true, 'boq' => $this->BOQModel->getBOQs()];
            $details['result'] = 'success';
            $this->LogsModel->createBOQCreationLog($user_data, $now, $details);
            return response()->json($response);
        }
        elseif($result == 'false')
        {
            $details['result'] = 'failed';
            $this->LogsModel->createBOQCreationLog($user_data, $now, $details);
            return 'false';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createBOQCreationLog($user_data, $now, $details);
            return 'taken';
        }
    }

    public function updateBOQDetails(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'control_number' => $request['control_number'],
            'description' => $request['description'],
            'unit' => $request['unit']
        ];

        $result = $this->BOQModel->updateBOQDetails($data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'control_number' => $request['control_number'],
            'result' => 'null'
        ];

        if($result == true)
        {
            $response = ['result' => true, 'boq' => $this->BOQModel->getBOQs()];
            $details['result'] = 'success';
            $this->LogsModel->createUpdateBOQLog($user_data, $now, $details);
            return response()->json($response);
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createUpdateBOQLog($user_data, $now, $details);
            return 'false';
        }
    }

    public function deleteBOQ(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'id' => $request['id'],
            'control_number' => $request['control_number'],
        ];

        $result = $this->BOQModel->deleteBOQ($data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'control_number' => $request['control_number'],
            'result' => 'null'
        ];

        if($result == true)
        {
            $response = ['result' => true, 'boq' => $this->BOQModel->getBOQs()];
            $details['result'] = 'success';
            $this->LogsModel->createDeleteBOQLog($user_data, $now, $details);
            return response()->json($response);
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createDeleteBOQLog($user_data, $now, $details);
            return 'false';
        }
    }
}
