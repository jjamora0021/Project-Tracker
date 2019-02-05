<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BOMModel;
use App\LogsModel;

use Carbon\Carbon;
use DB;
use Config;
use Session;

class BOMManagementController extends Controller
{
	protected $BOMModel;
    protected $LogsModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->BOMModel = new \App\BOMModel;
        $this->LogsModel = new \App\LogsModel;
    }

    public function index()
    {
    	$user_data = Session::get('user')[0];
    	$boms = $this->BOMModel->getBOMs();
    	return view('tab-content.bom-management', compact('boms','user_data'));
    }

    public function saveBOM(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'material_code' => $request['code'],
            'description' => $request['description'],
            'unit' => $request['unit'],
            'created_at' => $now,
            'updated_at' => $now
        ];

        $result = $this->BOMModel->saveBOM($user_data, $now, $data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'material_code' => $request['code'],
            'result' => 'null'
        ];

        if($result == 'true')
        {
            $response = ['result' => true, 'bom' => $this->BOMModel->getBOMs()];
            $details['result'] = 'success';
            $this->LogsModel->createBOMCreationLog($user_data, $now, $details);
            return response()->json($response);
        }
        elseif($result == 'false')
        {
            $details['result'] = 'failed';
            $this->LogsModel->createBOMCreationLog($user_data, $now, $details);
            return 'false';
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createBOMCreationLog($user_data, $now, $details);
            return 'taken';
        }
    }

    public function getBOMDetails(Request $request)
    {
        $bom_details = $this->BOMModel->getBOMDetails($request['id'], $request['material_code']);
        if(!empty($bom_details))
        {
            return response()->json($bom_details[0]);
        }
        else
        {
            return 'false';
        }
    }

    public function updateBOMDetails(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'material_code' => $request['material_code'],
            'description' => $request['description'],
            'unit' => $request['unit']
        ];

        $result = $this->BOMModel->updateBOMDetails($data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'material_code' => $request['code'],
            'result' => 'null'
        ];

        if($result == true)
        {
            $response = ['result' => true, 'bom' => $this->BOMModel->getBOMs()];
            $details['result'] = 'success';
            $this->LogsModel->createUpdateBOMLog($user_data, $now, $details);
            return response()->json($response);
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createUpdateBOMLog($user_data, $now, $details);
            return 'false';
        }
    }

    public function deleteBOM(Request $request)
    {
        $user_data = Session::get('user')[0];
        $now = Carbon::now();

        $data = [
            'id' => $request['id'],
            'material_code' => $request['material_code'],
        ];

        $result = $this->BOMModel->deleteBOM($data);
        $details = [
            'user' => $user_data['username'],
            'timestamp' => $now,
            'material_code' => $request['code'],
            'result' => 'null'
        ];

        if($result == true)
        {
            $response = ['result' => true, 'bom' => $this->BOMModel->getBOMs()];
            $details['result'] = 'success';
            $this->LogsModel->createDeleteBOMLog($user_data, $now, $details);
            return response()->json($response);
        }
        else
        {
            $details['result'] = 'failed';
            $this->LogsModel->createDeleteBOMLog($user_data, $now, $details);
            return 'false';
        }
    }

}
